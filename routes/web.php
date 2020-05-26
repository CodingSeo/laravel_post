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
//auth

/* 사용자 등록 */
Route::get('auth/register', [
    'as' => 'users.create',
    'uses' => 'UsersController@create',
]);
Route::post('auth/register', [
    'as' => 'users.store',
    'uses' => 'UsersController@store',
]);
Route::get('auth/confirm/{code}', [
    'as' => 'users.confirm',
    'uses' => 'UsersController@confirm',
]);

/* 사용자 인증 */
Route::get('auth/login', [
    'as' => 'sessions.create',
    'uses' => 'SessionsController@create',
]);
Route::post('auth/login', [
    'as' => 'sessions.store',
    'uses' => 'SessionsController@store',
]);
Route::get('auth/logout', [
    'as' => 'sessions.destroy',
    'uses' => 'SessionsController@destroy',
]);

/* 비밀번호 초기화 */
Route::get('auth/remind', [
    'as' => 'remind.create',
    'uses' => 'PasswordsController@getRemind',
]);
Route::post('auth/remind', [
    'as' => 'remind.store',
    'uses' => 'PasswordsController@postRemind',
]);
Route::get('auth/reset/{token}', [
    'as' => 'reset.create',
    'uses' => 'PasswordsController@getReset',
]);
Route::post('auth/reset', [
    'as' => 'reset.store',
    'uses' => 'PasswordsController@postReset',
]);

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
