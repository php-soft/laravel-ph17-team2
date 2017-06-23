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
Route::get('/home/san-pham/{shopProductId}', 'ProductController@productDetail');
route::get('/home/mua-hang/{id}/', 'ProductController@muaHang');
route::get('gio-hang', 'ProductController@gioHang');
route::get('xoa-san-pham/{id}', 'ProductController@xoaGioHang');
Route::get('gio-hang/{id}/{qty}', 'ProductController@editGioHang')->name('shoppingEditQty');
Route::get('dat-hang', 'ProductController@datHang')->name('userDatHang');
Route::post('xu-ly-dat-hang', 'ProductController@xuLyDatHang')->name('userXuLyDatHang');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/orders', 'OrdersController@index')->name('ordersAdmin');
    Route::get('/orders/{id}', 'OrdersController@show')->name('adminOrders');
    Route::put('/orders/{id}/{status}', 'OrdersController@edit')->name('adminOrderEditStatus');

    Route::get('/user', 'UserController@index')->name('managerUser');
    Route::get('/user/{user}/delete', 'UserController@destroy');
    Route::get('/user/{user}/edit', 'UserController@edit');
    Route::get('/user/{user}', 'UserController@update');
});
