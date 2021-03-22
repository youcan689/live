<?php
namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = request()->has('myArticle') ? auth()->user()->articles : Article::all();
        return view('articles', ['articles' => $articles]);
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
