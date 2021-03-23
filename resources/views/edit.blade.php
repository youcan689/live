<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>編輯</title>
</head>

<body>
    <form action="{{ route('editArticle', ['id' => $article->id]) }}" method="POST">
        @method('PUT')
        <div>
            <span>title</span>
            <input name="title" value="{{ $article->title }}">
        </div>
        <div>
            <span>content</span>
            <div>
                <input name="content" type="text" value="{{ $article->content }}">
            </div>
            <input type="submit" value="修改">
            @csrf
    </form>
</body>

</html>
