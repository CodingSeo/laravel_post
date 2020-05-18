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
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        //make this as Eloquent ORM
        $article = new Article();
        $article->title = request('title');
        $article->content= request('content');
        $article->save();
        return redirect()->route('article.index');
    }
    public function show(){
        $article = Article::find($id);
        return view('article.show', compact('article'));
    }
    public function edit(){
    	return view('article.edit');
    }
    public function update(){
        $article = Article::find($id);
        return view('article.show', compact('article'));
    }
    public function destory(){
    	
    }
}
