<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| 😩 🔥🔥 🔥
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', 'ProductController@homepage')->name('homepage');

Route::get('/cart', 'ProductController@cart')->name('cart_page');

Route::get('/category/{identify}', 'ProductController@category');

Route::get('/checkout', 'ProductController@checkout');

Route::get('/{product_id}', 'ProductController@review');

Route::post('/add-cart', 'ProductController@addCart');

Route::post('/clear-cart', 'ProductController@destroy');

Route::get('/account/signup', 'AccountController@signup');

Route::post('/account/authorized', 'AccountController@authorized');

Route::get('/account/home', 'AccountController@home')->middleware('authorization');

Route::get('/account/generate', 'AccountController@generateNumber');

Route::get('/account/about', 'AccountController@about');

Route::get('/account/signout', 'AccountController@logout');
/**
 *
 * Admin Dashboard Routes
 */

Route::group(['prefix' => 'dashboard/account'], function () {

    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::get('/products', 'ProductController@index')->name('products');

    Route::get('/product-details', 'ProductController@details')->name('product_details');

    Route::get('/product', 'ProductController@productEdit')->name('product');

    Route::get('/sales', 'PaymentHistoryController@index')->name('sales');

    Route::get('/customers', 'CustomerController@index')->name('customer_info');

    Route::get('/orders', 'CustomerController@order')->name('order_info');

    Route::post('/category', 'CategoryController@store')->name('create_category');

    Route::post('/ajax-product', 'ProductController@photo')->name('ajax_photo');

    Route::post('/addproduct', 'ProductController@store')->name('add_product');
});
