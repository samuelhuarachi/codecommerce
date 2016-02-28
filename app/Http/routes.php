<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {

	/* CATEGORIAS ROUTES */
	Route::get('categories/{category}', ['as' => 'categories', 
		'uses' => 'AdminCategoriesController@index'] )->where('category', '[0-9]+');

	Route::post('categories', ['as' => 'categories', 
		'uses' => 'AdminCategoriesController@index'] );
	Route::put('categories', ['as' => 'categories', 
		'uses' => 'AdminCategoriesController@index'] );
	Route::delete('categories', ['as' => 'categories', 
		'uses' => 'AdminCategoriesController@index'] );

	/* PRODUCTS ROUTES */
	Route::get('products/{product}', ['as' => 'products', 
		'uses' => 'AdminProductsController@index'] )->where('product', '[0-9]+');

	Route::post('products', ['as' => 'products', 
		'uses' => 'AdminProductsController@index'] );
	Route::put('products', ['as' => 'products', 
		'uses' => 'AdminProductsController@index'] );
	Route::delete('products', ['as' => 'products', 
		'uses' => 'AdminProductsController@index'] );

});




