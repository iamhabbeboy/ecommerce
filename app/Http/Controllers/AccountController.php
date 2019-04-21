<?php

namespace App\Http\Controllers;

use Session;
use Ramsey\Uuid\Uuid;
use App\Models\Account;
use App\Models\Product;
use App\Models\Category;
use App\Mail\RegisteredUser;
use Illuminate\Http\Request;
use App\Models\AccountManager;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\PaymentHistory;
use App\Mail\UserOrder;

class AccountController extends Controller
{
    /**
     * @var mixed
     */
    protected $categories;
    /**
     * @var mixed
     */
    protected $account;
    protected $products;
    /**
     * @param Category $categories
     */
    public function __construct(Category $categories, Account $account, Product $product)
    {
        $this->categories = $categories;
        $this->products = $product;
        $this->account = $account;
    }

    public function signup()
    {
        if (session::has('userinfo')) {
            return redirect('/account/home');
        }
        $categories = $this->categories->all();
        return view('signup', compact('categories'));
    }

    /**
     * @param Request $request
     */
    public function authorized(Request $request)
    {
        if (array_get($_GET, 'rel') == 'signup') {
            $data = $request->all();
            $data['password'] = Hash::make($request->password);
            // Mail::to($request->email)->send(new RegisteredUser());
            $response = $this->account->firstOrCreate(['email' => $request->email], $data);
            session(['userinfo' => $response]);
            return redirect('/account/home');
        } else {
            $email = $request->email;
            $pwd = $request->password;
            $query = $this->account->where('email', $email)->get();
            if ($query->count() < 1) {
                session::flash('error', 'User info not exist');
                return redirect('/account/signup');
            }
            $hashedValue = $query->first()->password;
            $pass = Hash::check($pwd, $hashedValue);
            if ($query->count() < 1 && $pass === false) {
                session::flash('error', 'User info not exist');
                return redirect('/account/signup');
            }
            session(['userinfo' => $query->first()]);
            return redirect('/account/home');
        }
    }

    public function getCartInfo($id)
    {
        return $this->products->productById($id)->toArray();
    }
    

    public function home(AccountManager $accountManager)
    {
        if (session('userinfo')) {
            $userInfo = session('userinfo');
            $userID = $userInfo->id;
            $userFind = $accountManager->where('customer_id', $userID)
                ->get();
        }
        $categories = $this->categories->all();
        $cartProductMerged = [];
        $quantityStorage = [];

        if (session::has('cart')) {
            foreach (session('cart') as $key => $value) {
                $_id = array_get($value, 'id');
                $cartProductMerged[] = $this->getCartInfo($_id);
                $quantityStorage[] = array_get($value, 'qty');
            }
        }
        $status = 2;
        $fund = count($userFind) > 0 ? $userFind->first(): 0;
        if (array_get($_GET, 'stat') == 'pay') {
            $total = array_get($_GET, 'total');
            if ($fund->amount > $total) {
                // dd($fund);
                foreach(session('cart') as $cart) {
                    $price =  $total / array_get($cart, 'qty');
                    $payment = new PaymentHistory;
                    $payment->create([
                        'product_id' => array_get($cart, 'id'),
                        'product_price' => $price,
                        'customer_id' => $fund->customer_id, 
                        'total_amount' => $total,
                    ]);
                }
                $acct = $accountManager->where('customer_id', $fund->customer_id);
                $acct->update(['amount' => ($fund->amount - $total)]);

                // Mail::to($userInfo->email)->send(new UserOrder());

                $status = 1;
                session::forget('cart');

            } else {
                $status = 0;
            }
        }

        $list_history = [];
        if ($fund) {
            $payment = new PaymentHistory;
            $history = $payment::where('customer_id', $fund->customer_id)->orderBy('id', 'desc')->get();
            if (count($history) > 0) {
                foreach($history as $key => $val) {
                    // dd($val->product_id);
                    
                    array_push($list_history, [
                        'title' => $this->getProductDetails($val->product_id)->title,
                        'product_price' => $val->product_price,
                        'qty' => ($val->total_amount / $val->product_price),
                        'created_at' => $val->created_at
                    ]);
                }
            }
       }
        return view('account', compact('categories', 'userFind', 'cartProductMerged', 'quantityStorage', 'status', 'list_history'));
    }

    public function getProductDetails($id)
    {
        return $this->products->where('id', $id)->first();
    }

    public function generateNumber(Request $request, AccountManager $accountManager)
    {
        if (session('userinfo')) {
            $userInfo = session('userinfo');
            $userID = $userInfo->id;
            $rows = $accountManager->where('customer_id', $userID);
            if ($rows->count() > 0) {
                $find = $rows->first();
                $total_amount = (int)$request->amount + (int)$find->amount;
                $accountManager->where('customer_id', $userID)->update([
                    'amount' => $total_amount
                ]);     
                return $accountManager;
            } else {

                $randomize = Uuid::uuid1()->toString();
                $data_submission = $request->all();
                $data_submission['customer_id'] = $userID;
                $data_submission['digital_number'] = substr($randomize, 0, 50);
                return $accountManager->create($data_submission);
            }
        } else {
            return [];
        }
    }

    public function logout()
    {
        if (session('userinfo')) {
            session::forget('userinfo');
            return redirect('/account/signup');
        }
        return redirect('/account/signup');
    }

    public function about()
    {
        $categories = $this->categories->all();
        return view('about', compact('categories'));
    }
}
