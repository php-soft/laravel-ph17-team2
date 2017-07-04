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
Route::get('/home/san-pham/{shopProductId}', 'ProductController@productDetail')->name('adminProductDetail');
route::get('/home/mua-hang/{id}/', 'CartController@store');
route::get('/home/mua-hang/{id}/{qty}', 'CartController@storeQty');
route::get('/cart/show', 'CartController@show')->name('cart');
route::get('/cart/{rowId}/delete', 'CartController@delete')->name('cartDelete');
Route::put('/cart/{id}/{qty}', 'CartController@update')->name('shoppingEditQty');
Route::get('order/activation/{id}', 'OrderController@activateOrder')->name('activateOrder');
Route::get('order', 'OrderController@show')->name('orderShow');
Route::post('order', 'OrderController@store')->name('orderStore');
Route::get('news');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/orders', 'OrdersController@index')->name('ordersAdmin');
    Route::get('/orders/withtrashed', 'OrdersController@withtrashed')->name('adminOrderWithtrashed');
    Route::get('/orders/{id}/withtrashed', 'OrdersController@showWithtrashed')->name('adminOrdershowWithtrashed');
    Route::get('/orders/{id}', 'OrdersController@show')->name('adminOrders');
    Route::put('/orders/{id}/{status}', 'OrdersController@edit')->name('adminOrderEditStatus');
    Route::get('/orders/{id}/delete', 'OrdersController@destroy')->name('adminOrderDelete');


    Route::get('/user', 'UserController@index')->name('managerUser');
    Route::get('/user/{user}/delete', 'UserController@destroy');
    Route::get('/user/{user}/edit', 'UserController@edit');
    Route::get('/user/{user}', 'UserController@update');
    
    Route::get('/products', 'ProductController@index')->name('adminProduct');
    Route::get('/products/create', 'ProductController@create')->name('adminProductCreate');
    Route::post('/products', 'ProductController@store')->name('adminProductStore');
    Route::get('/products/{id}/edit', 'ProductController@edit')->name('adminProductEdit');
    Route::put('/products/{id}', 'ProductController@update')->name('adminProductUpdate');
    Route::get('/products/{id}/delete', 'ProductController@destroy')->name('adminProductDetele');
    Route::get('/products/{id}', 'ProductController@show')->name('adminProductShow');

    Route::get('/categories', 'CategoriesController@index')->name('adminCategories');
    // Route::get('/categories/parentCategory', 'CategoriesController@indexParentCategories')->name('adminCategoriesParent');
    Route::get('/categories/createSubCategory', 'CategoriesController@createSubCategory')->name('adminCategoriesCreateSubCategory');
    Route::post('/categories', 'CategoriesController@storeSubCategory')->name('adminCategoriesStoreSubCategory');
    Route::get('/categories/mainCategories/createCategory', 'CategoriesController@createCategory')->name('adminCategoriesCreateCategory');
    Route::post('/categories/mainCategories', 'CategoriesController@storeCategory')->name('adminCategoriesStoreCategory');
    Route::get('/categories/{id}/edit', 'CategoriesController@edit')->name('adminCategoriesEdit');
    Route::put('/categories/{id}', 'CategoriesController@update')->name('adminCategoriesUpdate');
    Route::get('/categories/{id}/delete', 'CategoriesController@destroy')->name('adminCategoriesDetele');
    Route::get('/categories/{id}', 'CategoriesController@show')->name('adminCategoriesShow');

    Route::get('/attributes', 'AttributeController@index')->name('adminAttribute');
    Route::get('/attributes/create', 'AttributeController@create')->name('adminAttributeCreate');
    Route::post('/attributes', 'AttributeController@store')->name('adminAttributeStore');
    Route::get('/attributes/{attributeId}/edit', 'AttributeController@edit')->name('adminAttributeEdit');
    Route::put('/attributes/{attributeId}', 'AttributeController@update')->name('adminAttributeUpdate');
    Route::get('/attributes/{attributeId}/delete', 'AttributeController@destroy')->name('adminAttributeDetele');
    Route::get('/attributes/{attributeId}', 'AttributeController@show')->name('adminAttributeShow');
 
    Route::get('/newscategory', 'NewsCategoryController@index')->name('newscategory');
    Route::get('/newscategory/create', 'NewsCategoryController@create')->name('newscategory.create');
    Route::post('/newscategory', 'NewsCategoryController@post')->name('newscategory.post');
    Route::get('/newscategory/edit/{id}', 'NewsCategoryController@edit')->name('newscategory.edit');
    Route::patch('/newscategory/edit/{id}', 'NewsCategoryController@update')->name('newscategory.update');
    Route::get('/newscategory/delete/{id}', 'NewsCategoryController@delete')->name('newscategory.delete');
   
    Route::get('/news', 'NewsController@index')->name('news');
    Route::get('/news/create', 'NewsController@create')->name('news.create');
    Route::post('/news', 'NewsController@post')->name('news.post');
    Route::get('/news/edit/{id}', 'NewsController@edit')->name('news.edit');
    Route::patch('/news/edit/{id}', 'NewsController@update')->name('news.update');
    Route::get('/news/delete/{id}', 'NewsController@delete')->name('news.delete');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('user/profile/{id}/index', 'UserController@index');
    Route::get('user/profile/{id}/edit', 'UserController@edit');
    Route::put('user/profile/{id}/index', 'UserController@update');

    Route::get('user/shop/{id}/index', 'ShopController@index');

    Route::get('user/shop/{id}/create', 'ShopController@create');
    Route::put('user/shop/{id}/index', 'ShopController@update');

    Route::get('user/shop/{id}/show', 'ShopController@show');

    Route::get('user/shop/{id}/edit', 'ShopController@edit');
    Route::put('user/shop/{id}/edit', 'ShopController@editUpdate');

    Route::get('user/shop/{id}/delete', 'ShopController@destroy');
});
