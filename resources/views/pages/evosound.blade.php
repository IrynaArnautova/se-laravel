@extends('layout')

@section('head')
    <title>Evosound</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <link rel="preload" href="{{ mix('css/evosound.min.css') }}" as="style">
    <link href="{{ mix('css/evosound.min.css') }}" rel="stylesheet">
@stop

@section('content')
    <main class="evosound ta-c js_parent-tab">
        <h1 class="evosound_title">
            Купить аудиосистемы<br>
            от <a href="">Studio Evolution</a>
        </h1>
        <a href="/evosound-bar/" class="evosound_images">
            <img src="/images/evosound/bar-black.jpg" class="evosound_img js_tab-content active" id="barBlack" alt="evosound bar черный">
            <img src="/images/evosound/bar-white.jpg" class="evosound_img js_tab-content" id="bardWhite" alt="evosound bar белый">
        </a>
        <h2 class="evosound_name">EvoSound Bar</h2>
        <p class="evosound_subtitle">Первый караоке-саундбар</p>
        <div class="flex_ai-c_jc-c">
            <a href="javascript:;" class="evosound_btn evosound_btn-black js_show-tab" data-tab="barBlack">Черный</a>
            <a href="javascript:;" class="evosound_btn evosound_btn-white js_show-tab" data-tab="bardWhite">Жемчужный</a>
        </div>
        <div class="base_price-old">111</div>
        <div class="base_price-current">222</div>
        <div class="base_double flex_jc-c ta-c">
            <a href="javascript:;" class="base_double-btn base_double-dark">Купить</a>
            <a href="javascript:;" class="base_double-btn base_double-light">Рассрочка 0%</a>
        </div>
        <a href="/evosound-bar/" class="evosound_link">Узнать больше</a>
    </main>

    <hr class="evosound_separator">

    <section class="evosound ta-c js_parent-tab">
        <a href="" class="evosound_images">
            <img src="/images/evosound/sphere-black.jpg" class="evosound_img js_tab-content active" id="sphereBlack" alt="evosound sphere черный">
            <img src="/images/evosound/sphere-white.jpg" class="evosound_img js_tab-content" id="sphereWhite" alt="evosound sphere черный">
        </a>
        <h2 class="evosound_name">EvoSound Sphere 2.1</h2>
        <p class="evosound_subtitle">True Stereo аудиосистема для караоке</p>
        <div class=flex_ai-c_jc-c">
            <a href="javascript:;" class="evosound_btn evosound_btn-black js_show-tab active" data-tab="sphereBlack">Черный</a>
            <a href="javascript:;" class="evosound_btn evosound_btn-white js_show-tab" data-tab="sphereWhite">Жемчужный</a>
        </div>
        <div class="base_price-old">111</div>
        <div class="base_price-current">222</div>
        <div class="base_double flex_jc-c ta-c">
            <a href="javascript:;" class="base_double-btn base_double-dark">Купить</a>
            <a href="javascript:;" class="base_double-btn base_double-light">Рассрочка 0%</a>
        </div>
        <a href="/evosound-sphere/" class="evosound_link">Узнать больше</a>
    </section>

    <section class="evosound-old">
        <div class="evosound-old_img">
            <img src="/images/evosound/old.jpg" alt="evosound old">
        </div>
        <div class="ta-c">
            <p class="evosound-old_label">Cнят с производства</p>
            <h2 class="evosound-old_title">EvoSound</h2>
            <a href="/evosound-old/" class="evosound_link">Узнать больше</a>
        </div>
    </section>

    @include('widgets.terms')

    @include('widgets.dealers')

@stop

@section('scripts')
    <link rel="preload" href="{{ mix('js/evosound.min.js') }}" as="script">
    <script src="{{ mix('js/evosound.min.js') }}"></script>
@stop
