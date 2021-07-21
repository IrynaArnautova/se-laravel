<!DOCTYPE html>
<html lang="@php echo Config::get('app.locale'); @endphp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="Studio Evolution" />
    <meta property="og:title" content="Studio Evolution" />
     <meta property="og:image" content="" />
     <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- Подключение favicon  --}}
    @include('parts.favicons')

    {{-- Переменные для использования в скриптах и капчe --}}
    @include('parts.scripts_var')

    {{--<link rel="preload" href="/../fonts/Montserrat/Montserrat-Regular.woff2" as="font" crossorigin>--}}
    <link rel="preload" href="{{ mix('css/styles.min.css') }}" as="style">
    <link href="{{ mix('css/styles.min.css') }}" rel="stylesheet">
    {{--Резерв места под подгрузку мета-тегов и стилей уникальных для каждой страницы--}}
    @section('head')
    @show
</head>

<body id="pageTop">
    <header>
        @include('parts.header')
    </header>
    @section('content')
    @show
    <footer>
        @include('parts.footer')
    </footer>
        @include('parts.modal')
{{--    @include('cookieConsent::index')--}}
{{-- Резерв места под подгрузку скриптов уникальных для каждой страницы--}}
    @yield('scripts')

    <link rel="preload" href="{{ mix('js/scripts.min.js') }}" as="script">
    <script src="{{ mix('js/scripts.min.js') }}"></script>
</body>

</html>
