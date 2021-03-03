@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    {{--  上面說過這裡會添加一個按鈕  --}}  <a href="{{ route('blog.index') }}" class="btn btn-lg btn-block btn-primary">點擊這裡查看我的部落格</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
