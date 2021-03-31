<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;

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

    public function remove($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('read/' . request()->input('article_id'));
    }
}
