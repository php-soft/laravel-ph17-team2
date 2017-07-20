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
Route::get('/home/san-pham/{shopProductId}', 'ProductController@productDetail')->name('adminProductDetail');
Route::get('/categories/{id}', 'CategoryController@show');
route::get('/home/mua-hang/{id}/', 'CartController@store');
route::get('/home/mua-hang/{id}/{qty}', 'CartController@storeQty');
route::get('/cart/show', 'CartController@show')->name('cart');
route::put('/cart/{rowId}/delete', 'CartController@delete')->name('cartDelete');
Route::put('/cart/{id}/{qty}/{rowId}', 'CartController@update')->name('shoppingEditQty');
Route::get('order/activation/{id}', 'OrderController@activateOrder')->name('activateOrder');
Route::get('order', 'OrderController@show')->name('orderShow');
Route::post('order', 'OrderController@store')->name('orderStore');
Route::get('/news', 'NewsController@index')->name('news.index');
Route::get('/news/category/{alias}', 'NewsController@showCategory')->name('news.showCategory');
Route::get('/news/{alias}', 'NewsController@show')->name('news.show');
Route::post('commentpost/{id}', 'CommentPostController@update');
Route::get('/search', 'AutoCompleteController@index');
Route::get('/searchdata', array('as'=>'searchdata','uses'=>'AutoCompleteController@autoComplete'));

Route::get('admin/login', 'Admin\AdminController@getLogin');//dang edit
Route::post('admin/login', 'Admin\AdminController@postLogin');//dang edit


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['admin']], function () {
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
    Route::get('/categories/createSubCategory', 'CategoriesController@createSubCategory')
        ->name('adminCategoriesCreateSubCategory');
    Route::post('/categories', 'CategoriesController@storeSubCategory')
        ->name('adminCategoriesStoreSubCategory');
    Route::get('/categories/mainCategories/createCategory', 'CategoriesController@createCategory')
        ->name('adminCategoriesCreateCategory');
    Route::post('/categories/mainCategories', 'CategoriesController@storeCategory')
        ->name('adminCategoriesStoreCategory');
    Route::get('/categories/{id}/edit', 'CategoriesController@edit')->name('adminCategoriesEdit');
    Route::put('/categories/{id}', 'CategoriesController@update')->name('adminCategoriesUpdate');
    Route::delete('/categories/{id}/delete', 'CategoriesController@destroy')->name('adminCategoriesDetele');
    Route::get('/categories/{id}', 'CategoriesController@show')->name('adminCategoriesShow');

    Route::get('/attributes', 'AttributeController@index')->name('adminAttribute');
    Route::get('/attributes/create', 'AttributeController@create')->name('adminAttributeCreate');
    Route::post('/attributes', 'AttributeController@store')->name('adminAttributeStore');
    Route::get('/attributes/{attributeId}/edit', 'AttributeController@edit')->name('adminAttributeEdit');
    Route::put('/attributes/{attributeId}', 'AttributeController@update')->name('adminAttributeUpdate');
    Route::delete('/attributes/{attributeId}/delete', 'AttributeController@destroy')->name('adminAttributeDetele');
    Route::get('/attributes/{attributeId}', 'AttributeController@show')->name('adminAttributeShow');

    Route::get('/productAttributes', 'ProductAttributeController@index')->name('adminProductAttribute');
    Route::get('/productAttributes/{id}', 'ProductAttributeController@show')
        ->name('adminProductAttributeShow');
    Route::post('/productAttributes', 'ProductAttributeController@store')->name('adminProductAttributeStore');
    Route::get('/productAttributes/{id}/delete', 'ProductAttributeController@destroy')
        ->name('adminProductAttributeDetele');
 
    Route::get('/newscategory', 'NewsCategoryController@index')->name('newscategory');
    Route::get('/newscategory/create', 'NewsCategoryController@create')->name('newscategory.create');
    Route::post('/newscategory', 'NewsCategoryController@post')->name('newscategory.post');
    Route::get('/newscategory/edit/{id}', 'NewsCategoryController@edit')->name('newscategory.edit');
    Route::post('/newscategory/edit/{id}', 'NewsCategoryController@update')->name('newscategory.update');
    Route::get('/newscategory/delete/{id}', 'NewsCategoryController@delete')->name('newscategory.delete');
   
    Route::get('/news', 'NewsController@index')->name('news');
    Route::get('/news/create', 'NewsController@create')->name('news.create');
    Route::post('/news', 'NewsController@post')->name('news.post');
    Route::get('/news/edit/{id}', 'NewsController@edit')->name('news.edit');
    Route::post('/news/edit/{id}', 'NewsController@update')->name('news.update');
    Route::get('/news/delete/{id}', 'NewsController@delete')->name('news.delete');

    Route::get('/commentspost', 'CommentsPostController@index')->name('commentspost');
    Route::get('/commentspost/delete/{id}', 'CommentsPostController@delete')->name('commentspost.delete');
    Route::post('/commentspost/update/{id}', 'CommentsPostController@update')->name('commentspost.update');

    Route::get('/shop/index', 'ShopController@index')->name('managerShop');
    Route::get('/shop/{id}/delete', 'ShopController@destroy');
    Route::get('/shop/{id}/show', 'ShopController@show');
    Route::get('/shop/user', 'ShopController@user');
    Route::get('/shop/user/{id}/show', 'ShopController@showShopUser');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('user/profile/{id}/index', 'UserController@index');
    Route::post('user/profile/{id}/index', 'UserController@upload');
    
    Route::get('user/profile/{id}/edit', 'UserController@edit');
    Route::put('user/profile/{id}/index', 'UserController@update');

    Route::get('user/shop/{id}/index', 'ShopController@index');

    Route::get('user/shop/{id}/create', 'ShopController@create');
    Route::put('user/shop/{id}/index', 'ShopController@update');

    Route::get('shop/{id}/show', 'ShopProductController@show');
    Route::get('shop/{id}/create', 'ShopProductController@create');
    Route::get('shop/post/{id_shop}/{id_product}/create', 'ShopProductController@post');
    Route::put('shop/{id}/show', 'ShopProductController@postProduct');

    Route::get('shop/{id}/edit', 'ShopProductController@edit');
    Route::put('shop/{id}/edit', 'ShopProductController@postEdit');

    Route::get('user/shop/{id}/edit', 'ShopController@edit');
    Route::put('user/shop/{id}/edit', 'ShopController@editUpdate');

    Route::get('user/shop/{id}/delete', 'ShopController@destroy');

    Route::get('shop/{id}/Voucher', 'ShopProductController@showVoucher');
    Route::get('shop/{id}/Voucher/create', 'ShopProductController@createVoucher')->name('createVoucher');
    Route::post('shop/{id}/Voucher/create', 'ShopProductController@storeVoucher')->name('StoreVoucher');
});
