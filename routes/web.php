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
Route::resource('/article','ArticleController');



//markup-test
Route::get('docs/{file?}',function ($file=null){
    $text = (new App\Documentation)->get($file);
    return app(Parsedown::class)->text($text);
});
