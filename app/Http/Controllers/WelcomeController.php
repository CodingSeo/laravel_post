<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index(){
        return response()->json([
            'name'=>config('app.name').' API',
            'massage'=>'This is a base endpoint of v1 API.',
            'links' =>[
                [
                    'rel' =>'self',
                    'href'=> route(\Route::currentRouteAction())
                ],
                [
                    'rel'=>'api.articles',
                    'href'=>route('api.articles.index')
                ]
            ]
        ],200, [], JSON_PRETTY_PRINT);
    }
}
