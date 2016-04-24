@extends('blog._layout')





@section('content')
    <div class="container">
        <h1><span class="glyphicon glyphicon-search" aria-hidden="true"></span>{{ $baseData['varH1'] }}</h1>
        <hr>

        <h2>{{ $blog->title }}</h2>
        <p>{{ $blog->body }}</p>

    </div>

@endsection
