@extends('layout')

@section('head')
    <title>Studio Evolution | Evosound</title>
    <meta name="description" content="@lang('evosound.description')">
    <meta name="keywords" content="@lang('evosound.keywords')">
    <meta property="og:title" content="@lang('evosound.og_title')"/>
    <meta property="og:description" content="@lang('evosound.description')"/>
    <link rel="preload" href="{{ mix('css/evosound.min.css') }}" as="style">
    <link href="{{ mix('css/evosound.min.css') }}" rel="stylesheet">
@stop

@section('content')
    <main class="evosound ta-c js_parent-tab">
        <h1 class="sets_title">
            @lang('evosound.main_title')
            <a href="">Studio Evolution</a>
        </h1>
        <a href="/evosound-bar/" class="sets_images">
            <img src="/images/evosound/bar-black.jpg" class="sets_img js_tab-content active" id="barBlack" alt="evosound bar @lang('lang.general.black')">
            <img src="/images/evosound/bar-white.jpg" class="sets_img js_tab-content" id="bardWhite" alt="evosound bar @lang('lang.general.white')">
        </a>
        <h2 class="sets_name">EvoSound Bar</h2>
        <p class="sets_subtitle">@lang('evosound.main_subtitle')</p>
        <div class="flex_ai-c_jc-c">
            <a href="javascript:;" class="sets_btn sets_btn-black js_show-tab" data-tab="barBlack">@lang('lang.general.black')</a>
            <a href="javascript:;" class="sets_btn sets_btn-white js_show-tab" data-tab="bardWhite">@lang('lang.general.white')</a>
        </div>
        <div class="base_price-old">111</div>
        <div class="base_price-current">222</div>
        <div class="base_double flex_jc-c ta-c">
            <a href="javascript:;" class="base_double-btn base_double-dark">@lang('lang.general.dark')</a>
            <a href="javascript:;" class="base_double-btn base_double-light">@lang('lang.general.light')</a>
        </div>
        <a href="/evosound-bar/" class="sets_link">@lang('lang.general.recognize_link')</a>
    </main>

    <hr class="sets_separator">

    <section class="evosound ta-c js_parent-tab">
        <a href="" class="sets_images">
            <img src="/images/evosound/sphere-black.jpg" class="sets_img js_tab-content active" id="sphereBlack" alt="evosound sphere @lang('lang.general.black')">
            <img src="/images/evosound/sphere-white.jpg" class="sets_img js_tab-content" id="sphereWhite" alt="evosound sphere @lang('lang.general.white')">
        </a>
        <h2 class="sets_name">EvoSound Sphere 2.1</h2>
        <p class="sets_subtitle">True Stereo @lang('lang.general.subtitle_karaoke')</p>
        <div class="flex_ai-c_jc-c">
            <a href="javascript:;" class="sets_btn sets_btn-black js_show-tab active" data-tab="sphereBlack">@lang('lang.general.black')</a>
            <a href="javascript:;" class="sets_btn sets_btn-white js_show-tab" data-tab="sphereWhite">@lang('lang.general.white')</a>
        </div>
        <div class="base_price-old">111</div>
        <div class="base_price-current">222</div>
        <div class="base_double flex_jc-c ta-c">
            <a href="javascript:;" class="base_double-btn base_double-dark">@lang('lang.general.dark')</a>
            <a href="javascript:;" class="base_double-btn base_double-light">@lang('lang.general.light')</a>
        </div>
        <a href="/evosound-sphere/" class="sets_link">@lang('lang.general.recognize_link')</a>
    </section>

    <section class="evosound-old">
        <div class="evosound-old_img">
            <img src="/images/evosound/old.jpg" alt="evosound old">
        </div>
        <div class="ta-c">
            <p class="evosound-old_label">@lang('evosound.old_label')</p>
            <h2 class="evosound-old_title">EvoSound</h2>
            <a href="/evosound-old/" class="sets_link">@lang('lang.general.recognize_link')</a>
        </div>
    </section>

    @include('widgets.terms')

    @include('widgets.dealers')

@stop

@section('scripts')
    <link rel="preload" href="{{ mix('js/evosound.min.js') }}" as="script">
    <script src="{{ mix('js/evosound.min.js') }}"></script>
@stop
