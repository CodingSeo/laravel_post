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

/* 사용자 등록 */

//문서
// Route::resource('/article','ArticleController');

Route::get('/article/index',[
    'as' =>'article.index',
    'uses'=>'ArticleController@index'
]);

Route::get('/article/create',[
    'as'=>'aricle.create',
    'uses'=>'ArticleController@create'
]);

Route::post('/article',[
    'as'=>'article.store',
    'uses'=>'ArticleController@store'
]);

Route::get('/article/{id}',[
    'as'=> 'article.show',
    'uses'=>'ArticleController@show'
]);

route::get('article/{id}/edit',[
    'as'=>'article.edit',
    'uses'=>'ArticleController@edit'
]);

route::put('/article/{id}',[
    'as'=>'article.update',
    'uses'=>'ArticleController@update'
]);

route::delete('/article/{id}',[
    'as'=>'article.destroy',
    'uses'=>'ArticleController@destroy'
]);




//markup-test
Route::get('docs/{file?}',function ($file=null){
    $text = (new App\Documentation)->get($file);
    return app(Parsedown::class)->text($text);
});
