<?php

Route::get('/', 'Store\HomeController@index')->name('store.home');
Route::get('/product/{id}', 'Store\ProductController@detail')->name('store.detail_product');
Route::get('/category/{id}', 'Store\CategoryController@index')->name('store.category');


Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\HomeController@index')->name('admin');
    Route::get('/post', 'Admin\ProductController@index')->name('admin.list_product');
    Route::get('/product/add', 'Admin\ProductController@add')->name('admin.add_product');
    Route::post('/product/add', 'Admin\ProductController@add')->name('admin.add_product_post');
    Route::get('/product/update/{id}', 'Admin\ProductController@update')->name('admin.update_product_get');
    Route::post('/product/update', 'Admin\ProductController@update')->name('admin.update_product_post');
    Route::get('/product/delete/{id}', 'Admin\ProductController@delete')->name('admin.delete_product');
    Route::get('/category', 'Admin\CategoryController@index')->name('admin.list_category');
    Route::post('/category/add', 'Admin\CategoryController@add')->name('admin.add_category');
    Route::post('/category/update', 'Admin\CategoryController@update')->name('admin.update_category_post');
    Route::get('/category/update/{id}', 'Admin\CategoryController@update')->name('admin.update_category_get');
    Route::get('/category/delete/{id}', 'Admin\CategoryController@delete')->name('admin.delete_category');

});

Route::post('upload', 'FileController@upload')->name('file.upload');

Auth::routes();

Route::get('/logout',function(){
   Auth::logout();
   return redirect()->route('admin');
});

Route::get('/home', 'HomeController@index')->name('home');
