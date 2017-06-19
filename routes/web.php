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

Route::get('manager-user','UserController@index');
Route::get('manager-user/{user}/delete','UserController@destroy');
Route::get('manager-user/{user}/edit','UserController@edit');
Route::get('manager-user/{user}','UserController@update');
