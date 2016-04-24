@extends('blog._layout')





@section('content')
    <div class="container">
        <h1><span class="glyphicon glyphicon-search" aria-hidden="true"></span>{{ $baseData['varH1'] }}</h1>
        <hr>
        <h2>新增部落格</h2>
        {!! Form::open(['url' => 'blog']) !!}
            @include('blog._form', ['submitText' => 'Add blog'])
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
