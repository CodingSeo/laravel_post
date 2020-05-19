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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/article/index','ArticleController@index')
->name('article.index');

Route::get('/article/create','ArticleController@create')
->name('article.create');

Route::post('/article','ArticleController@store')
->name('article.store');

route::get('/article/{id}', 'ArticleController@show')
->name('article.show');

Route::get('/article/{id}/edit','ArticleController@edit')
->name('article.edit');

Route::put('/article/{id}','ArticleController@update')
->name('article.update');

Route::delete('/article/{id}','ArticleController@destory')
->name('article.destroy');
