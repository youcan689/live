@extends('layouts.layout')
@section('content')
    @if (isset($article))
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->content }}</p>
    @endif
    <form action="{{ route('index') }}">
        <input type="submit" value="回到文章列表">
    </form>
@endsection
