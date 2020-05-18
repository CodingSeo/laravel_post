<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticalController extends Controller
{
    //
    public function index(){
        return view('article.index');
    }
    public function create(){
        return view('article.create');
    }
    public function store(){

    }
    public function show(){
        return view('article.show');
    }
    public function edit(){
    	return view('article.edit');
    }
    public function update(){
    	
    }
    public function destory(){
    	
    }
}
