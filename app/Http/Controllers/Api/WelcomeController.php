<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index(){
        return response()->json([
            'name'=>config('app.name').' API',
            'massage'=>'This is a base endpoint of v1 API.',
            'links' =>[
                [
                    'rel' =>'self',
                    'href'=> route('api.index'),
                ],
                [
                    'rel'=>'api.articles',
                    'href'=>route('api.articles.index'),
                ]
            ]
        ],200, [], JSON_PRETTY_PRINT);
    }
}
