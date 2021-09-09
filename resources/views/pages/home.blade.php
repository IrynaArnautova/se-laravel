@extends('layout')

@section('head')
    <title>Studio Evolution | @lang('home.title')</title>
    <meta name="description" content="@lang('home.description')">
    <meta name="keywords" content="@lang('home.keywords')">
    <meta property="og:title" content="@lang('home.og_title')" />
    <meta property="og:description" content="@lang('home.description')" />
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
