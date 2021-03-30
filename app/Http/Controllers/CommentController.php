<?php

namespace App\Http\Controllers;

use App\Article;

class CommentController extends Controller
{
    public function store()
    {
        $user = auth()->user();
        $article = Article::find(request()->input('article_id'));
        $comment = $user->comments()->make(['nickname' => request()->input('nickname'), 'content' => request()->input('content')]);
        $comment->article()->associate($article);
        $comment->save();
        return redirect('read/' . request()->input('article_id'));
    }
}
