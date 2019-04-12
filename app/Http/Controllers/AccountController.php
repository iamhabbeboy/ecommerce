<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\AccountManager;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;
use Session;

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
    /**
     * @param Category $categories
     */
    public function __construct(Category $categories, Account $account)
    {
        $this->categories = $categories;
        $this->account = $account;
    }

    public function signup()
    {
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
            $response = $this->account->create($data);
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

    public function home(AccountManager $accountManager)
    {
        if (session('userinfo')) {
            $userInfo = session('userinfo');
            $userID = $userInfo->id;
            $userFind = $accountManager->where('customer_id', $userID)
                ->get();
        }
        $categories = $this->categories->all();
        return view('account', compact('categories', 'userFind'));
    }

    public function generateNumber(Request $request, AccountManager $accountManager)
    {
        if (session('userinfo')) {
            $userInfo = session('userinfo');
            $userID = $userInfo->id;
            $randomize = Uuid::uuid1()->toString();
            $data_submission = $request->all();
            $data_submission['customer_id'] = $userID;
            $data_submission['digital_number'] = substr($randomize, 0, 50);
            return $accountManager->create($data_submission);
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
