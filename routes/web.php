<?php

use App\Http\Controllers\CategoryController;
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

//admin
Route::get('/admin/index','AdminController@index')->name('index');

//Content
Route::get('/admin/content','ContentController@index');
Route::post('/admin/content/create','ContentController@create')->name('create');
Route::get('/admin/content/Edit/{id}','ContentController@edit');
Route::post('/admin/content/Update/{id}','ContentController@update');
Route::get('/admin/content/Delete/{id}','ContentController@delete');

//Service
Route::get('/admin/service','ServiceController@index');
Route::post('/admin/service/create','ServiceController@create')->name('create');

//Category
Route::get('/admin/category','CategoryController@index');
Route::post('/admin/category/create','CategoryController@create')->name('create');
Route::get('/admin/category/Edit/{id}','CategoryController@edit');
Route::post('/admin/category/Update/{id}','CategoryController@update');
Route::get('/admin/category/Delete/{id}','CategoryController@delete');

Auth::routes();
Route::get('/about','HomeController@about');
Route::get('/home', 'HomeController@index')->name('home');
