@extends('layouts.dashboard')

{{-- title 抬頭區 --}}
@section('title')
    <title> 這是dashboard </title>
@endsection

{{-- content 內容區 --}}
@section('content')
    @include('dashboard._navbar')
    <div class="container">
        <h1><span class="glyphicon glyphicon-search" aria-hidden="true"></span>這是dashboard</h1>
    </div>

@endsection

{{-- 自訂 css--}}
@section('custom_css')
    <style>

    </style>

@endsection
{{-- 自訂 js--}}
@section('custom_js')

@endsection