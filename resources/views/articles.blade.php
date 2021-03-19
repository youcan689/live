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
    <table class="table border border-black">
        <thead>
            <th class="border border-black">標題</th>
            <th class="border border-black">內容</th>
            <th class="border border-black">動作</th>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr class="border border-black">
                    <td class="border border-black">{{ $article->title }}</td>
                    <td class="border border-black">{{ $article->content }}</td>
                    <td class="border border-black">
                        <a href="">查看</a>
                        <a href="">編輯</a>
                        <a href="">刪除</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
