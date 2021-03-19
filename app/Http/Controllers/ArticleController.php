<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles')->withArticles(Article::all());
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user = auth()->user();
        $article = $user->articles()->create($request->only(['title', 'content']));
        return redirect('article');
    }

}
