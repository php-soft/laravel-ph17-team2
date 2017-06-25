<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/san-pham', 'ProductController@index')->name('adminProduct');
Route::get('/home/san-pham/create', 'ProductController@create')->name('adminProductCreate');
Route::post('/home/san-pham', 'ProductController@store')->name('adminProductStore');
Route::get('/home/san-pham/{shopProductId}', 'ProductController@productDetail')->name('adminProductDetail');
route::get('/home/mua-hang/{id}/', 'CartController@store');
route::get('/cart/show', 'CartController@show')->name('cart');
route::get('/cart/{rowId}/delete', 'CartController@delete')->name('cartDelete');
Route::put('/cart/{id}/{qty}', 'CartController@update')->name('shoppingEditQty');
Route::get('order', 'OrderController@show')->name('orderShow');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/orders', 'OrdersController@index')->name('ordersAdmin');
    Route::get('/orders/{id}', 'OrdersController@show')->name('adminOrders');
    Route::put('/orders/{id}/{status}', 'OrdersController@edit')->name('adminOrderEditStatus');

    Route::get('/user', 'UserController@index')->name('managerUser');
    Route::get('/user/{user}/delete', 'UserController@destroy');
    Route::get('/user/{user}/edit', 'UserController@edit');
    Route::get('/user/{user}', 'UserController@update');
});
