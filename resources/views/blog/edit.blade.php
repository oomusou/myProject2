@extends('blog._layout')





@section('content')
    <div class="container">
        <h1><span class="glyphicon glyphicon-search" aria-hidden="true"></span>{{ $baseData['varH1'] }}</h1>
        <hr>
        <h2>修改: {{ $blog -> title }}</h2>
        {!! Form::model($blog, ['method' => 'PATCH', 'action' => ['BlogController@update', $blog->id] ]) !!}
            @include('blog._form', ['submitText' => 'Update'])
        {!! Form::close() !!}
        @if ($errors->any())
            <div class='alert alert-danger'>
                @foreach ( $errors->all() as $error )
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>

@endsection
