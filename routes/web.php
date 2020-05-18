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

Route::get('/article/','ArticalController@index')
->name('article.index');
Route::get('/article/create','ArticalController@create')
->name('article.create');
Route::get('/article','ArticalController@store')
->name('article.store');
Route::get('/article','ArticalController@show')
->name('article.show');
Route::get('/article/{id}','ArticalController@edit')
->name('article.edit');
Route::get('/article/{id}/edit','ArticalController@update')
->name('article.update');
Route::get('/article/{id}','ArticalController@destory')
->name('article.destroy');
