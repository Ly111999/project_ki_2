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

// CLIENT