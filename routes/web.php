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

Route::get('/admin/master', 'ProductController@homeAdmin');

Route::resource('admin/product', 'ProductController');

Route::resource('admin/category', 'CategoryController');

Route::get('/admin/product/{id}','ProductController@destroy');
// CLIENT

Route::get('/home', 'ClientController@home');
Route::get('/contact', 'ClientController@contact');

