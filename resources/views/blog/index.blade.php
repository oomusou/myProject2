@extends('blog._layout')





@section('content')
    <div class="container">
        <h1><span class="glyphicon glyphicon-search" aria-hidden="true"></span>{{ $baseData['varH1'] }}</h1>
        <hr>
        <a href="{{ url('blog/create') }}" class="btn btn-primary "><i class="fa fa-plus"></i> Add</a>

        @foreach($blogs as $blog)
            <h2>抬頭：<a href="{{ url('blog', $blog->id) }}">{{ $blog->title }}</a></h2>
            <p>內容：{{ $blog->body }}</p>
            <p>文章更新時間：{{ $blog -> published_at }}</p>
            <p>文章創建時間：{{ $blog -> created_at }}</p>
            {{--<p>創建人員：{{ $article -> user_id }}</p>--}}
            <a href="{{ url('blog',[ $blog ->id ,'edit' ]) }}" class="btn btn-primary ">修改</a>
            <hr>
        @endforeach
    </div>

@endsection
