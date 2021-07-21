@extends('layout')

@section('head')
    <title>Главная</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <link rel="preload" href="{{ mix('css/home.min.css') }}" as="style">
    <link href="{{ mix('css/home.min.css') }}" rel="stylesheet">
@stop

@section('content')
    @include('widgets.terms')
@stop

@section('scripts')
{{--    <link rel="preload" href="{{ mix('js/home.min.js') }}" as="script">--}}
{{--    <script src="{{ mix('js/home.min.js') }}"></script>--}}
@stop
