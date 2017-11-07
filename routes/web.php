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

Route::get('image', 'ImageController@index');

Route::group([
  'prefix' => config('backpack.base.route_prefix', 'admin'),
  'middleware' => ['admin'],
  'namespace' => 'Admin'
], function() {
  // your CRUD resources and other admin routes here
  CRUD::resource('car', 'CarCrudController');
});

Route::get('/', function () {
    return view('tikras');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@show');