<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>新增</title>
</head>

<body>
    <form action="store" method="POST">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <span>title</span>
            <input name="title" value="{{ old('title') }}">
        </div>
        <div>
            <span>content</span>
            <textarea name="content" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="新增">
        @csrf
    </form>
</body>

</html>
