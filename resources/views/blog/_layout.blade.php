<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="no-js ie ie6" dir="ltr" lang="zh-TW"> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie ie7" dir="ltr" lang="zh-TW"> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie ie8" dir="ltr" lang="zh-TW"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie ie8" dir="ltr" lang="zh-TW"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" dir="ltr" lang="zh-TW">
<head>
    {{-- meta --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="INDEX,NOFOLLOW"/>
    <meta name="googlebot" content="INDEX,NOFOLLOW"/>

    {{-- title --}}
    <title> {{ $baseData['varTitle'] }} </title>
    {{--
        blog.css
        include:
            bootstrap.scss
            style.sass : 專用於blog
    --}}
    {!! Html::style('css/blog.css')!!}

    {{-- 設計各類共用類別 --}}
    {!! Html::style('css/basic.css') !!}

    {{-- 小圖示 --}}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}

    {{-- Cutom Css--}}
    @yield('custom_css')


</head>
<body class="{{ $baseData['varBodyClass'] }}">
    @include('blog._navbar')
    @yield ('content')

<di
</div>

{{-- IE JS --}}
{{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
<!--[if lt IE 9]>
<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

{{-- jquery & bootstrap--}}
{!! Html::script('js/basic.js') !!}


{{-- jQuery UI --}}
{!! Html::script('js/plugins/jquery-ui/jquery-ui.min.js') !!}

{{-- Custom Call function--}}
@yield ('custom_function')

{{-- Custom Javascript--}}
@yield ('custom_js')


</body>

</html>
