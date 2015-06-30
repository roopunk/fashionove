<?php


//Route::get('admin/',['middleware' => 'auth','middleware'=>'admin', 'uses' => 'AdminDashboardController@index']);
Route::get('/',function(){
   return view('welcome');
});
Route::get('admin/','AdminDashboardController@index');
Route::resource('admin/cities','CitiesController');
Route::resource('admin/brands','BrandsController');
Route::resource('admin/stores','StoresController');
Route::resource('admin/products','ProductsController');
Route::resource('admin/categories','CategoriesController');

Route::post('admin/products/{products}/get_stores','ProductsController@get_stores');
Route::post('admin/products/{products}/update_store_id','ProductsController@update_store_id');
Route::post('admin/products/{products}/delete_store_id','ProductsController@delete_store_id');
Route::post('admin/products/upload','ProductsController@upload');

Route::controllers([
        'auth' => 'auth\AuthController',
    'password' => 'auth\PasswordController',
]);