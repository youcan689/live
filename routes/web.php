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

use App\Http\Controllers\BlogController;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('blog', 'BlogController');
Route::get('index', 'BlogController@showForm');
Route::post('store', 'BlogController@store');


//Route::get('index2', 'BlogControllerPractice@showForm');

//route::get('test', 'BlogControllerPractice@index');

Route::get('post/create', 'HomeController@create');
//itRoute::resource('article', 'ArticleController');

//在創立控制器時候有錯先註解route::get('artile.show', 'ArticleController@show');

//建立空白ROUTE     routeAND CONTROLLER
//route::get('article', 'ArticleController@show');


Route::resource('emptyArticle', 'ArticleController');
