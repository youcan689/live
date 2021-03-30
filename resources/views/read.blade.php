@extends('layouts.layout')
@section('content')
    @if (isset($article))
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->content }}</p>
    @endif
    <form action="{{ route('index') }}">
        <input type="submit" value="回到文章列表">
    </form>
    <h1>請在下方留言</h1>
    <form action="/comment" method="post">
        @csrf
        <textarea name="nickname" id="" cols="30" rows="10" placeholder="你的暱稱..."></textarea>
        <br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="來留個言吧..."></textarea>
        <input name="user_id" type="hidden" value="{{ Auth::user()->id }}">
        <input name="article_id" type="hidden" value="{{ $article->id }}">
        <input type="submit" value="送出">
    </form>
    @forelse($comments as $comment)
        <div class="comment col-sm-12">
            <div class="name">標題:{{ $comment->nickname }}</div>
            <div class="c_content">
                內容:{{ $comment->content }}
            </div>
            <div class="time">{{ $comment->created_at }}</div>
            <hr>
        </div>
    @empty
        <p>來當第一個留言的吧！</p>
    @endforelse
@endsection
