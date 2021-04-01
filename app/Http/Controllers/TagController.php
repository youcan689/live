<?php

namespace App\Http\Controllers;

use App\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tag_id = request()->route('id');
        $articles = Tag::findOrFail($tag_id)->articles;
        $tags = Tag::all();
        return view('articles', ['articles' => $articles, 'tags' => $tags]);
    }
}
