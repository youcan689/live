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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('article', 'ArticleController@index')->name('index');
    Route::get('create', 'ArticleController@create')->name('creatArticle');
    Route::post('store', 'ArticleController@store');
    Route::get('article/edit/{id}', 'ArticleController@edit')->name('editArticle');
    Route::put('article/edit/{id}', 'ArticleController@update');
    Route::delete('article/delete/{id}', 'ArticleController@remove');
    Route::get('read/{id}', 'ArticleController@read')->name('showArticle');
    Route::post('comment', 'CommentController@store');
});
