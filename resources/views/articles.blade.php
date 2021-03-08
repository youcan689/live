@extends('layouts.layout')

@section('content')
    <h1>文章列表</h1>
    {{-- <a href="{{ route('emptyArticle') }}">新增文章</a> --}}
    <table class="table border border-black">
        <td class="border border-black">標題</td>
        <td class="border border-black">內容</td>
        <td class="border border-black">動作</td>
        @foreach($articles as $article)
        <tr class="border border-black">
            <td class="border border-black">{{ $article->title }}</td>
            <td class="border border-black">{{ $article->content }}</td>
            <td class="border border-black">
                {{-- 下方先暫時註解避免錯 --}}
                {{-- <a href="{{ route('artile.show',$article->id ) }}">查看</a> --}}
                 {{-- <a href="{{ route('article.edit',$article->id ) }}">編輯</a>
                 <a href="{{ route('article.destroy',$article->id ) }}">刪除</a> --}}
            </td>
        </tr>
        @endforeach
    </table>
@endsection
