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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/orders', 'OrdersController@index')->name('ordersAdmin');
    Route::get('/orders/{id}', 'OrdersController@show')->name('adminOrders');
    Route::put('/orders/{id}/edit', 'OrdersController@edit')->name('adminOrderEdit');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('user', 'UserController@index')->name('managerUser');
    Route::get('user/{user}/delete', 'UserController@destroy');
    Route::get('user/{user}/edit', 'UserController@edit');
    Route::get('user/{user}', 'UserController@update');
});
