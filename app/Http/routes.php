<?php



Route::get('admin/',['middleware' => 'auth','middleware'=>'admin','uses'=>'AdminDashboardController@index']);
Route::resource('admin/cities','CitiesController');
Route::resource('admin/brands','BrandsController');
Route::resource('admin/stores','StoresController');
Route::resource('admin/products','ProductsController');
Route::resource('admin/categories','CategoriesController');

Route::post('admin/products/{products}/get_stores','ProductsController@get_stores');

Route::controllers([
    'auth' => 'auth\AuthController',
    'password' => 'auth\PasswordController',
]);

Route::get('/', ['middleware' => 'auth', function() {
    // Only authenticated users may enter...
    return view('welcome');
}]);
Route::get('foo',['middleware'=>'auth:admin',function(){
    return 'It\'s Ok';
}]);

