<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    /**
     * @var mixed
     * 🔥😩
     */
    protected $file;

    /**
     * @var mixed
     */
    protected $products;

    /**
     * @var mixed
     */
    protected $image;

    /**
     * @var mixed
     */
    protected $category;
    /**
     * @param Product $products
     */
    public function __construct(Product $products, Image $image, Category $category)
    {
        $this->products = $products;
        $this->image = $image;
        $this->category = $category;
    }

    public function homepage()
    {
        $products = $this->products->productInfo()->get()->toArray();
        $categories = $this->category->all();
        return view('home', compact('products', 'categories'));
    }

    /**
     * @param $identify
     */
    public function category($identify)
    {
        $products = $this->products->productInfo($identify)->get()->toArray();
        $categories = $this->category->all();
        return view('category', compact('products', 'categories', 'identify'));
    }
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->products->productInfo()->get()->toArray();
        return view('dashboard.product', compact('category', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        return view('dashboard.product-details');
    }

    public function cart()
    {
        // session()->pull('cart');
        $categories = $this->category->all();
        $cartProductMerged = [];
        $quantityStorage = [];

        if (session::has('cart')) {
            foreach (session('cart') as $key => $value) {
                $_id = array_get($value, 'id');
                $cartProductMerged[] = $this->getCartInfo($_id);
                $quantityStorage[] = array_get($value, 'qty');
            }
        }
        return view('cart', compact('categories', 'cartProductMerged', 'quantityStorage'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getCartInfo($id)
    {
        return $this->products->productById($id)->toArray();
    }

    /**
     * @param Request $request
     */
    public function addCart(Request $request)
    {
        $cart = [
            'id' => $request->id,
            'qty' => $request->qty,
        ];
        session::push('cart', $cart);
        return 'added';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'category' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);

        if (session('img_id')) {
            $id = session('img_id');
            $request_merge = $request->all();
            $request_merge['color'] = 'null';
            $request_merge['stock'] = '1';
            $request_merge['image_id'] = $id;
            $response = $this->products->create($request_merge);
        }
        Session::flash('message', 'Sucessfully Added');
        return redirect(route('product'));
    }

    /**
     * @param $id
     * @param $path
     */
    private function productImage($path)
    {
        $model = $this->image->create([
            'image' => $path,
        ]);
        return $model->id;
    }

    /**
     * @param Category $categories
     */
    public function productEdit(Category $categories)
    {
        $categories = $categories->all();
        return view('dashboard.product-edit', compact('categories'));
    }

    public function checkout(Category $categories)
    {
        $categories = $categories->all();
        return view('checkout', compact('categories'));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function photo(Request $request)
    {
        if (!$request->file('upload')->isValid()) {
            return response()->json(['message' => 'Error occured']);
        }

        $path = $request->upload->path();
        $extension = $request->upload->extension();
        $filename = time() . '.' . $extension;
        $request->upload->move(public_path('products'), $filename);
        $output = '/products/' . $filename;
        $last_id = $this->productImage($output);
        session(['img_id' => $last_id]);
        return $output;
    }

    /**
     * @param $product_id
     */
    public function review($product_id)
    {
        if (preg_match('/^[a-zA-Z]+$/', $product_id)) {
            return redirect('/');
        }

        $categories = $this->category->all();
        $product = $this->products->productById($product_id)->first()->toArray();
        return view('review', compact('categories', 'product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (session('cart')) {
            session::forget('cart');
            return 'success';
        }
    }
}
