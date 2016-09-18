<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=>'category'], function() {
		Route::get('list','CategoryController@getList')->name('listcategories');
		Route::get('add','CategoryController@getAdd')->name('addcategories');
		Route::post('add','CategoryController@postAdd')->name('postaddcategories');
		Route::get('edit/{id}','CategoryController@getEdit')->name('editcategories');
		Route::post('edit/{id}','CategoryController@postEdit')->name('posteditcategories');
		Route::get('{slug}_{id}.html','CategoryController@getDetail')->name('detailcategory');
		Route::get('delete','CategoryController@getDelete')->name('deletecategory');
	});
	Route::group(['prefix'=>'product'], function() {
		Route::get('list','ProductController@getList')->name('listproducts');
		Route::get('add','ProductController@getAdd')->name('addproduct');
		Route::post('add','ProductController@postAdd')->name('postaddproduct');
	});
});