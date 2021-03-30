@extends('layouts.layout')
@section('content')
    <form action="create">
        <input type="submit" value="新增文章" />
    </form>
    @if (request()->has('myArticle'))
        <a href="{{ route('index') }}">文章列表</a>
    @else
        <a href="{{ route('index') }}?myArticle=true">我的所有文章</a>
    @endif
    @foreach ($articles as $article)
        <h1>
            <a class="text-9xl" href="read/{{ $article->id }}">{{ $article->title }}</a>
        </h1>
        <p>
            {{ mb_strlen(strip_tags($article->content)) > 50 ? substr(strip_tags($article->content), 0, 45) . '...' : $article->content }}
        </p>
        @if (Auth::user()->id == $article->user_id)
            <a href="{{ route('editArticle', $article->id) }}">編輯</a>
        @else
            <span style="color:gray">編輯</span>
        @endif
        <form action="{{ route('deleteArticle', $article->id) }}" method="POST">
            @if (Auth::user()->id == $article->user_id)
                @csrf
                @method('delete')
                <input type="submit" value="刪除">
            @else
                <span style="color:gray">刪除</span>
            @endif
        </form>
        <hr>
        <br>
    @endforeach
@endsection
