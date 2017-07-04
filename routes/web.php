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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show')->name('productsDetail');
Route::get('/categories/{id}', 'CategoryController@show')->name('categoryProduct');

Route::get('/home/san-pham/{shopProductId}', 'ProductController@productDetail');
Route::get('/home/mua-hang/{id}/', 'CartController@store');
Route::get('/cart/show', 'CartController@show')->name('cart');
route::get('/cart/{rowId}/delete', 'CartController@delete')->name('cartDelete');
Route::put('/cart/{id}/{qty}', 'CartController@update')->name('shoppingEditQty');
Route::get('/order', 'OrderController@show')->name('orderShow');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/orders', 'OrdersController@index')->name('ordersAdmin');
    Route::get('/orders/{id}', 'OrdersController@show')->name('adminOrders');
    Route::put('/orders/{id}/{status}', 'OrdersController@edit')->name('adminOrderEditStatus');

    Route::get('/user', 'UserController@index')->name('managerUser');
    Route::get('/user/{user}/delete', 'UserController@destroy');
    Route::get('/user/{user}/edit', 'UserController@edit');
    Route::get('/user/{user}', 'UserController@update');
});
