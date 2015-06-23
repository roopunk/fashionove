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

Route::get('admin/','AdminDashboardController@index');
Route::resource('admin/cities','CitiesController');
Route::resource('admin/brands','BrandsController');
Route::resource('admin/stores','StoresController');
Route::resource('admin/products','ProductsController');
Route::resource('admin/categories','CategoriesController');
