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

Route::get('/', 'Store\HomeController@index');

Route::prefix('admin')->group(function () {
	Route::get('/', 'Admin\HomeController@index');
	Route::get('/product', 'Admin\ProductController@index')->name('admin.list_product');
	Route::get('/product/add', 'Admin\ProductController@add')->name('admin.add_product');
	Route::get('/category', 'Admin\CategoryController@index')->name('admin.list_category');
	Route::post('/category/add', 'Admin\CategoryController@add')->name('admin.add_category');
	Route::post('/category/update', 'Admin\CategoryController@update')->name('admin.update_category_post');
	Route::get('/category/update/{id}', 'Admin\CategoryController@update')->name('admin.update_category_get');
	Route::get('/category/delete/{id}', 'Admin\CategoryController@delete')->name('admin.delete_category');
});