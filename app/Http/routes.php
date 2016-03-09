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


Route::group(['prefix' => 'maes', 'middleware' => 'auth'], function() {
	Route::put('{id}/update', ['as' => 'maes.update', 'uses' => 'MaesController@update']);
	Route::get('{id}/edit', ['as' => 'maes.edit', 'uses' => 'MaesController@edit']);
	Route::get('{id}/destroy', ['as' => 'maes.destroy', 'uses' => 'MaesController@destroy']);
	Route::get('create', ['as' => 'maes.create', 'uses' => 'MaesController@create']);
	Route::get('',['as' => 'maes', 'uses' => 'MaesController@index'] );
	Route::post('', ['as' => 'maes.store', 'uses' => 'MaesController@store']);
});


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	/* CATEGORIAS ROUTES */
	Route::group(['prefix' => 'categories'], function() {
		Route::get('', ['as' => 'categories', 'uses' => 'CategoriesController@index'] );
		Route::post('', ['as' => 'categories', 'uses' => 'CategoriesController@store'] );
		Route::get('edit/{id}', ['as' => 'categories.edit', 'uses' => 'CategoriesController@edit'] )->where('id', '[0-9]+');
		Route::get('create', ['as' => 'categories.create', 'uses' => 'CategoriesController@create'] );
		Route::put('{id}/update', ['as' => 'categories.update', 'uses' => 'CategoriesController@update'] )->where('id', '[0-9]+');
		Route::get('{id}/destroy', ['as' => 'categories.destroy', 'uses' => 'CategoriesController@destroy'] )->where('id', '[0-9]+');
	});
	
	/* PRODUCTS ROUTES */
	Route::group(['prefix' => 'products'], function() {
		Route::get('', ['as' => 'products', 'uses' => 'ProductsController@index'] );
		Route::post('', ['as' => 'products', 'uses' => 'ProductsController@store'] );
		Route::get('create', ['as' => 'products.create', 'uses' => 'ProductsController@create'] );
		Route::get('{id}/edit', ['as' => 'products.edit', 'uses' => 'ProductsController@edit'] )->where('id', '[0-9]+');
		Route::put('{id}/update', ['as' => 'products.update', 'uses' => 'ProductsController@update'] )->where('id', '[0-9]+');
		Route::get('{id}/destroy', ['as' => 'products.destroy', 'uses' => 'ProductsController@destroy'] )->where('id', '[0-9]+');
	});
});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');