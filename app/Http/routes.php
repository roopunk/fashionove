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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('admin/','AdminDashboardController@index');
Route::resource('admin/cities','CitiesController');
Route::resource('admin/brands','BrandsController');
Route::resource('admin/stores','StoresController');
Route::resource('admin/products','ProductsController');
Route::resource('admin/categories','CategoriesController');

Route::controllers([
    'auth' => 'auth\AuthController',
    'password' => 'auth\PasswordController',
]);


Route::get('/', ['middleware' => 'auth', function() {
    // Only authenticated users may enter...
    return view('welcome');
}]);
/*
Route::get('admin/index',function(){
    return view('admin.home');
});
*/

//Route::get('admin/index', ['middleware' => 'auth:true', function () {
  //  return view('admin.home');
//}]);
Route::get('foo',['middleware'=>'admin',function(){
   // return \Illuminate\Support\Facades\Auth::user()->is_admin;
    return 'It\'s Ok';
}]);