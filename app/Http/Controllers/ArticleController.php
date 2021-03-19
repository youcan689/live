<?php

namespace App\Http\Controllers;

use App\Article;

class ArticleController extends Controller
{
    public function index()
    {

        return view('articles')->withArticles(Article::all());
    }
}
