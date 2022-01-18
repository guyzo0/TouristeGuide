<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/login', 'Admin\AdminLoginController@showLoginForm')->name('admin.login');
Route::get('admin/home', 'AdminController@index')->name('admin.home');
Route::post('admin/login', 'Admin\AdminLoginController@login');
Route::post('admin/logout', 'Admin\AdminLoginController@logout')->name('admin.logout');

Auth::routes();

Route::get('admin/category/category', 'CategoriesController@index')->name('category');
Route::get('admin/category/category/add', 'CategoriesController@add')->name('category.add');
Route::post('admin/category/category/store', 'CategoriesController@store')->name('category.store');
Route::get('admin/category/category/delete{id}', 'CategoriesController@destroy')->name('category.delete');
Route::get('admin/category/category/edit{id}', 'CategoriesController@edit')->name('category.edit');
Route::get('admin/category/category/show{id}', 'CategoriesController@show')->name('category.show');
Route::post('admin/category/category/update/{id}', 'CategoriesController@update')->name('category.update');

Route::get('admin/type/type', 'TypesController@index')->name('type');
Route::get('admin/type/type/add', 'TypesController@add')->name('type.add');
Route::post('admin/type/type/store', 'TypesController@store')->name('type.store');
Route::get('admin/type/type/delete{id}', 'TypesController@destroy')->name('type.delete');
Route::get('admin/type/type/edit{id}', 'TypesController@edit')->name('type.edit');
Route::get('admin/type/type/show{id}', 'TypesController@show')->name('type.show');
Route::post('admin/type/type/update/{id}', 'TypesController@update')->name('type.update');

Route::get('admin/region/region', 'RegionsController@index')->name('region');
Route::get('admin/region/region/add', 'RegionsController@add')->name('region.add');
Route::post('admin/region/region/store', 'RegionsController@store')->name('region.store');
Route::get('admin/region/region/delete{id}', 'RegionsController@destroy')->name('region.delete');
Route::get('admin/region/region/edit{id}', 'RegionsController@edit')->name('region.edit');
Route::get('admin/region/region/show{id}', 'RegionsController@show')->name('region.show');
Route::post('admin/region/region/update/{id}', 'RegionsController@update')->name('region.update');

Route::get('admin/site/site', 'SitesController@index')->name('site');
Route::get('admin/site/site/add', 'SitesController@add')->name('site.add');
Route::post('admin/site/site/store', 'SitesController@store')->name('site.store');
Route::get('admin/site/site/delete{id}', 'SitesController@destroy')->name('site.delete');
Route::get('admin/site/site/edit{id}', 'SitesController@edit')->name('site.edit');
Route::get('admin/site/site/show{id}', 'SitesController@show')->name('site.show');
Route::post('admin/site/site/update/{id}', 'SitesController@update')->name('site.update');

Route::get('admin/user/user', 'UsersController@index')->name('user');
Route::get('admin/user/user/add', 'UsersController@add')->name('user.add');
Route::post('admin/user/user/store', 'UsersController@store')->name('user.store');
Route::get('admin/user/user/delete{id}', 'UsersController@destroy')->name('user.delete');
Route::get('admin/user/user/edit{id}', 'UsersController@edit')->name('user.edit');
Route::get('admin/user/user/show{id}', 'UsersController@show')->name('user.show');
Route::post('admin/user/user/update/{id}', 'UsersController@update')->name('user.update');


Route::get('tourist/category/category', 'Tourist\CategoriesController@index')->name('tcategory');
Route::get('tourist/type/type{id}', 'Tourist\CategoriesController@types')->name('ttype');
Route::get('tourist/region/region{id}', 'Tourist\CategoriesController@regions')->name('tregion');
Route::get('tourist/site/site{id}', 'Tourist\CategoriesController@sites')->name('tsite');
Route::get('tourist/site/site/show{id}', 'Tourist\CategoriesController@show')->name('tsite.show');