@extends('layouts.pages')

{{-- title 抬頭區 --}}
@section('title')
    <title> 產品介紹 </title>
@endsection

{{-- content 內容區 --}}
@section('content')
    @include('pages._navbar')
    <div class="container">
        <h1><span class="glyphicon glyphicon-search" aria-hidden="true"></span>這是產品介紹</h1>
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