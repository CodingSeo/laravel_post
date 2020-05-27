<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::orderBy('created_at', 'desc')->paginate(3);
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate - checking input function
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        //save file
        if($request->hasFile('file')){
            $files = $request->file('files');
            foreach($files as $file){
                $filename = str_random().filter_var($file->getClientOriginalName(),
                FILTER_SANITIZE_URL);
                $file->move(attachments_path(),$filename);
            }
        }
        //make this as Eloquent ORM
        $article = new Article();
        $article->title = request('title');
        $article->content= request('content');
        $article->save();
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update',$article);
        $article = Article::find($id);
        return view('article.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $article = Article::find($id);
        $article -> title = request('title');
        $article -> content = request('content');
        $article ->save();
        return redirect()->route('article.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect()->route('article.index');
    }
}
