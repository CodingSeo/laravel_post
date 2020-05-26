<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['domain'=>config('project.api_domain'),'namespace'=>'Api','as'=>'api.'],
    function(){
        Route::get('/',[
            'as'=>'index',
            'uses'=>'WelcomeController@index',
        ]);
        Route::resource('articles', 'ArticlesController');
        Route::resource('comments','CommentsController',[
            'only'=>['show','update','destroy']
        ]);
        Route::resource('articles.comments','CommentsController',[
            'only'=>['index','store']
        ]);
});

// Route::get('/',[
//     'as'=>'index',
// ]);


