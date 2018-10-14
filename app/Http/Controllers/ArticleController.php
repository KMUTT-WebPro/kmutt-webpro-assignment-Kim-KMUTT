<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Article;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article = Article::find($id);
        if(empty($article))
            abort(404);
        return view('articles.show', compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(ArticleRequest $request){
        Article::create($request->all());
        return redirect('articles');
    }


    public function edit($id){ $article = Article::find($id);
        if(empty($article))
            abort(404);
        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request){
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }

    public function destroy($id){
        $article = Article::findOrFail($id); $article->delete();
        return redirect('articles');
    }
}
