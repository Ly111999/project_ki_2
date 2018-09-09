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


// ADMIN



Route::middleware('admin')->group(function () {

    Route::get('/admin/master', 'ProductController@homeAdmin');

    Route::resource('admin/category', 'CategoryController');

    Route::get('admin/order', 'OrderController@index');
    Route::get('admin/order/change-status', 'OrderController@changeStatus');

    Route::get('admin/user', 'UserController@index');
    Route::get('admin/user/change-status', 'UserController@changeStatus');

    Route::resource('admin/product', 'ProductController');

    Route::get('/admin/product/{id}', 'ProductController@destroy');

    Route::delete('/admin/product/destroy-many', 'ProductController@destroyMany');

    Route::get('/api-get-chart-data', 'OrderController@getChartDataApi');

    Route::resource('admin/category', 'CategoryController');
    Route::resource('admin/user', 'UserController');

});


// CLIENT
Auth::routes();

Route::get('/home', 'ClientController@home');
Route::get('/', 'ClientController@home')->name('home');

Route::get('/contact', 'ClientController@contact');

Route::get('/product', 'ClientController@listProduct');
Route::get('/product/{id}', 'ClientController@showProductDetail');

Route::get('/them-gio-hang', 'ShoppingCartController@addToCart');
Route::post('/api-them-gio-hang', 'ShoppingCartController@addToCartApi');
Route::get('/xem-gio-hang', 'ShoppingCartController@showCart');
Route::get('/xoa-gio-hang', 'ShoppingCartController@destroyCart');
Route::put('/sua-gio-hang', 'ShoppingCartController@updateCart');
Route::post('/gui-don-hang', 'ShoppingCartController@checkoutCart');


