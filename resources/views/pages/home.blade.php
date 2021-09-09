@extends('layout')

@section('head')
    <title>Studio Evolution | Главная</title>
    <meta name="description" content="Описание">
    <meta name="keywords" content="Ключевые слова">
    <meta property="og:title" content="Титул" />
    <meta property="og:description" content="Описание" />
    <meta property="og:type" content="webpage" />
    <meta property="og:image" content="" />
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
