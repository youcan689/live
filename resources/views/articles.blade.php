@extends('layouts.layout')
@section('content')
    <h1>文章列表</h1>
    <a href="{{route('creatArticle')}}">新增文章</a>
    <table class="table border border-black">
        <th class="border border-black">標題</th>
        <th class="border border-black">內容</th>
        <th class="border border-black">動作</th>
        @foreach($articles as $article)
        <tr class="border border-black">
            <td class="border border-black">{{ $article->title }}</td>
            <td class="border border-black">{{ $article->content }}</td>
            <td class="border border-black">
                <a href="">查看</a>
                @if (Auth::user()->id == $article->user_id)
                <a href="{{route('editArticle',$article->id)}}">編輯</a>
                @else
                <span style="color:gray">編輯</span>
                @endif
                <a href="">刪除</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
