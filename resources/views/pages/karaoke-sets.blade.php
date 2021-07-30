@extends('layout')

@section('head')
    <title>Караоке комплеты</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <link rel="preload" href="{{ mix('css/karaoke-sets.min.css') }}" as="style">
    <link href="{{ mix('css/karaoke-sets.min.css') }}" rel="stylesheet">
@stop

@section('content')
<main class="sets base_container js_parent-tab">
    <h1 class="base_title">@lang('karaoke-sets.main_title')</h1>
    <div class="base_tab">
        <img src="/images/karaoke-set/with-mic.jpg" class="base_img"  alt="@lang('karaoke-sets.alt_main_with_mic')">
        <img src="/images/karaoke-set/with-mic-mob.jpg" class="base_img-mob"  alt="@lang('karaoke-sets.alt_main_with_mic_mob')">
        <div class="base_tab-img active js_tab-content" id="micGrey">
            <img src="/images/karaoke-set/evobox-grey.png" alt="evobox @lang('karaoke-sets.alt_main_evobox_grey')">
        </div>
        <div class="base_tab-img js_tab-content" id="micRed">
            <img src="/images/karaoke-set/evobox-red.png" alt="evobox @lang('karaoke-sets.alt_main_evobox_red')">
        </div>
        <div class="base_tab-img js_tab-content" id="micBlue">
            <img src="/images/karaoke-set/evobox-blue.png" alt="evobox @lang('karaoke-sets.alt_main_evobox_blue')">
        </div>
        <div class="base_tab-img js_tab-content" id="micGold">
            <img src="/images/karaoke-set/evobox-gold.png" alt="evobox @lang('karaoke-sets.alt_main_evobox_gold')">
        </div>
        <div class="base_tab-img js_tab-content" id="micSilver">
            <img src="/images/karaoke-set/evobox-silver.png" alt="evobox @lang('karaoke-sets.alt_main_evobox_silver')">
        </div>
        <div class="base_tab-img js_tab-content" id="micBlack">
            <img src="/images/karaoke-set/evobox-black.png" alt="evobox @lang('karaoke-sets.alt_main_evobox_black')">
        </div>
    </div>
    <div class="base_tab-content">
        <img src="/images/karaoke-set/preview-grey.jpg" class="base_tab-preview js_show-tab active" data-tab="micGrey" alt="@lang('lang.general.dark') evobox  @lang('karaoke-sets.alt_main_evobox_grey')">
        <img src="/images/karaoke-set/preview-red.jpg" class="base_tab-preview js_show-tab" data-tab="micRed" alt="@lang('lang.general.dark') evobox  @lang('karaoke-sets.alt_main_evobox_red')">
        <img src="/images/karaoke-set/preview-blue.jpg" class="base_tab-preview js_show-tab" data-tab="micBlue" alt="@lang('lang.general.dark') evobox  @lang('karaoke-sets.alt_main_evobox_blue')">
        <img src="/images/karaoke-set/preview-gold.jpg" class="base_tab-preview js_show-tab" data-tab="micGold" alt="@lang('lang.general.dark') evobox  @lang('karaoke-sets.alt_main_evobox_gold')">
        <img src="/images/karaoke-set/preview-silver.jpg" class="base_tab-preview js_show-tab" data-tab="micSilver" alt="@lang('lang.general.dark') evobox  @lang('karaoke-sets.alt_main_evobox_silver')">
        <img src="/images/karaoke-set/preview-black.jpg" class="base_tab-preview js_show-tab" data-tab="micBlack" alt="@lang('lang.general.dark') evobox  @lang('karaoke-sets.alt_main_evobox_black')">
    </div>
    <div class="sets_inner">
        <div class="sets_col">
            <h3 class="base_subtitle">EVOBOX<br> @lang('karaoke-sets.main_subtitle')</h3>
            <a href="karaoke-komplekty-s-mikrofonami/" class="base_link">@lang('karaoke-sets.base_link')</a>
            <p class="base_txt">@lang('karaoke-sets.main_txt')</p>
            <p class="base_txt">2 000 @lang('karaoke-sets.base_txt')</p>
            <div class="base_price-box">
                <p class="base_price-old">111</p>
                <p class="base_price-profit">@lang('lang.general.profit') 11</p>
            </div>
            <p class="base_price-current">222</p>
            <div class="base_double ta-c">
                <a href="javascript:;" class="base_double-btn base_double-dark">@lang('lang.general.dark')</a>
                <a href="javascript:;" class="base_double-btn base_double-light">@lang('lang.general.light')</a>
            </div>
        </div>
        <div class="sets_col">
            <h3 class="base_subtitle">EVOBOX Plus <br> @lang('karaoke-sets.main_subtitle')</h3>
            <a href="karaoke-komplekty-s-mikrofonami/" class="base_link">@lang('karaoke-sets.base_link')</a>
            <p class="base_txt">@lang('karaoke-sets.main_txt')</p>
            <p class="base_txt">41 000+ @lang('karaoke-sets.base_txt')</p>
            <div class="base_price-box">
                <p class="base_price-old">111</p>
                <p class="base_price-profit">@lang('lang.general.profit') 11</p>
            </div>
            <p class="base_price-current">222</p>
            <div class="base_double ta-c">
                <a href="javascript:;" class="base_double-btn base_double-dark">@lang('lang.general.dark')</a>
                <a href="javascript:;" class="base_double-btn base_double-light">@lang('lang.general.light')</a>
            </div>
        </div>
    </div>
</main>

<section class="sets base_container">
    <h2 class="base_title">@lang('karaoke-sets.soundbar_title')</h2>
    <div class="sets_row js_parent-tab">
        <div class="sets_btn sets_btn-black js_show-tab active" data-tab="barBlack">@lang('lang.general.black')</div>
        <div class="sets_btn sets_btn-white js_show-tab" data-tab="barWhite">@lang('lang.general.white')</div>
    </div>
    <div class="base_tab sets_sab">
        <div class="js_parent-tab">
            <img src="/images/karaoke-set/with-sab-black.jpg" class="base_img sets_img js_tab-content active" id="barBlack" alt="evosound bar @lang('karaoke-sets.alt_main_evobox_black')">
            <img src="/images/karaoke-set/with-sab-white.jpg" class="base_img sets_img js_tab-content" id="barWhite" alt="evosound bar @lang('karaoke-sets.alt_main_evobox_white')">
            <img src="/images/karaoke-set/with-sab-black-mob.jpg" class="base_img-mob js_tab-content barBlack active" alt="@lang('lang.general.dark') evosound bar @lang('karaoke-sets.alt_main_evobox_black')">
            <img src="/images/karaoke-set/with-sab-white-mob.jpg" class="base_img-mob js_tab-content barWhite" alt="@lang('lang.general.dark') evosound bar @lang('karaoke-sets.alt_main_evobox_white')">
        </div>
        <div class="js_parent-tab">
            <div class="base_tab-img js_tab-content active" id="sabGrey">
                <img src="/images/karaoke-set/evobox-grey.png" alt="evobox evolution @lang('karaoke-sets.alt_main_evobox_grey')">
            </div>
            <div class="base_tab-img js_tab-content" id="sabRed">
                <img src="/images/karaoke-set/evobox-red.png" alt="evobox evolution @lang('karaoke-sets.alt_main_evobox_red')">
            </div>
            <div class="base_tab-img js_tab-content" id="sabBlue">
                <img src="/images/karaoke-set/evobox-blue.png" alt="evobox evolution @lang('karaoke-sets.alt_main_evobox_blue')">
            </div>
            <div class="base_tab-img js_tab-content" id="sabGold">
                <img src="/images/karaoke-set/evobox-gold.png" alt="evobox evolution @lang('karaoke-sets.alt_main_evobox_gold')">
            </div>
            <div class="base_tab-img js_tab-content" id="sabSilver">
                <img src="/images/karaoke-set/evobox-silver.png" alt="evobox evolution @lang('karaoke-sets.alt_main_evobox_silver')">
            </div>
            <div class="base_tab-img js_tab-content" id="sabBlack">
                <img src="/images/karaoke-set/evobox-black.png" alt="evobox evolution @lang('karaoke-sets.alt_main_evobox_black')">
            </div>

        </div>
    </div>
    <div class="base_tab-content js_parent-tab">
        <img src="/images/karaoke-set/preview-grey.jpg" class="base_tab-preview js_show-tab active" data-tab="sabGrey" alt="@lang('lang.general.dark') evobox evolution @lang('karaoke-sets.alt_main_evobox_grey')">
        <img src="/images/karaoke-set/preview-red.jpg" class="base_tab-preview js_show-tab" data-tab="sabRed" alt="@lang('lang.general.dark') evobox evolution @lang('karaoke-sets.alt_main_evobox_red')">
        <img src="/images/karaoke-set/preview-blue.jpg" class="base_tab-preview js_show-tab" data-tab="sabBlue" alt="@lang('lang.general.dark') evobox evolution @lang('karaoke-sets.alt_main_evobox_blue')">
        <img src="/images/karaoke-set/preview-gold.jpg" class="base_tab-preview js_show-tab" data-tab="sabGold" alt="@lang('lang.general.dark') evobox evolution @lang('karaoke-sets.alt_main_evobox_gold')">
        <img src="/images/karaoke-set/preview-silver.jpg" class="base_tab-preview js_show-tab" data-tab="sabSilver" alt="@lang('lang.general.dark') evobox evolution @lang('karaoke-sets.alt_main_evobox_silver')">
        <img src="/images/karaoke-set/preview-black.jpg" class="base_tab-preview js_show-tab" data-tab="sabBlack" alt="@lang('lang.general.dark') evobox evolution @lang('karaoke-sets.alt_main_evobox_black')">
    </div>
    <div class="sets_inner">
        <div class="sets_col">
            <h3 class="base_subtitle">EVOBOX<br> @lang('karaoke-sets.soundbar_subtitle')</h3>
            <a href="karaoke-komplekty-s-saundbarom/" class="base_link">@lang('karaoke-sets.base_link')</a>
            <p class="base_txt">@lang('karaoke-sets.base_txt2') EvoSound Bar.</p>
            <p class="base_txt">2 000 @lang('karaoke-sets.base_txt')</p>
            <div class="base_price-box">
                <p class="base_price-old">111</p>
                <p class="base_price-profit">@lang('lang.general.profit') 11</p>
            </div>
            <p class="base_price-current">222</p>
            <div class="base_double ta-c">
                <a href="javascript:;" class="base_double-btn base_double-dark">@lang('lang.general.dark')</a>
                <a href="javascript:;" class="base_double-btn base_double-light">@lang('lang.general.light')</a>
            </div>
        </div>
        <div class="sets_col">
            <h3 class="base_subtitle">EVOBOX Plus <br>@lang('karaoke-sets.soundbar_subtitle')</h3>
            <a href="karaoke-komplekty-s-saundbarom/" class="base_link">@lang('karaoke-sets.base_link')</a>
            <p class="base_txt">@lang('karaoke-sets.base_txt2') EvoSound Bar.</p>
            <p class="base_txt">41 000+ @lang('karaoke-sets.base_txt')</p>
            <div class="base_price-box">
                <p class="base_price-old">111</p>
                <p class="base_price-profit">@lang('lang.general.profit') 11</p>
            </div>
            <p class="base_price-current">222</p>
            <div class="base_double ta-c">
                <a href="javascript:;" class="base_double-btn base_double-dark">@lang('lang.general.dark')</a>
                <a href="javascript:;" class="base_double-btn base_double-light">@lang('lang.general.light')</a>
            </div>
        </div>
    </div>
</section>

<section class="sets base_container  js_parent-tab">
    <h2 class="base_title">@lang('karaoke-sets.stereosystem_title')</h2>
    <div class="sets_row js_parent-tab">
        <div class="sets_btn sets_btn-black js_show-tab active" data-tab="barBlackAll">@lang('lang.general.black')</div>
        <div class="sets_btn sets_btn-white js_show-tab" data-tab="barWhiteAll">@lang('lang.general.white')</div>
    </div>
    <div class="base_tab sets_all">
        <div class="js_parent-tab">
            <img src="/images/karaoke-set/with-all-black.jpg" class="base_img sets_img js_tab-content active" id="barBlackAll" alt=" @lang('karaoke-sets.alt_main_evobox_audio') evosound bar  @lang('karaoke-sets.alt_main_evobox_black')">
            <img src="/images/karaoke-set/with-all-white.jpg" class="base_img sets_img js_tab-content" id="barWhiteAll" alt="@lang('karaoke-sets.alt_main_evobox_audio') evosound bar  @lang('karaoke-sets.alt_main_evobox_white')">
            <img src="/images/karaoke-set/with-all-black-mob.jpg" class="base_img-mob js_tab-content active barBlackAll" alt="evosound bar @lang('karaoke-sets.alt_main_evobox_black')">
            <img src="/images/karaoke-set/with-all-white-mob.jpg" class="base_img-mob js_tab-content barWhiteAll" alt="evosound bar @lang('karaoke-sets.alt_main_evobox_white')">
        </div>
        <div class="js_parent-tab">
            <div class="base_tab-img js_tab-content active" id="allGrey">
                <img src="/images/karaoke-set/evobox-mic-grey.png" alt="@lang('karaoke-sets.alt_main_evobox_karaoke') evobox @lang('karaoke-sets.alt_main_evobox_grey')">
            </div>
            <div class="base_tab-img js_tab-content" id="allRed">
                <img src="/images/karaoke-set/evobox-mic-red.png" alt="@lang('karaoke-sets.alt_main_evobox_karaoke') evobox @lang('karaoke-sets.alt_main_evobox_red')">
            </div>
            <div class="base_tab-img js_tab-content" id="allBlue">
                <img src="/images/karaoke-set/evobox-mic-blue.png" alt="@lang('karaoke-sets.alt_main_evobox_karaoke') evobox @lang('karaoke-sets.alt_main_evobox_blue')">
            </div>
            <div class="base_tab-img js_tab-content" id="allGold">
                <img src="/images/karaoke-set/evobox-mic-gold.png" alt="@lang('karaoke-sets.alt_main_evobox_karaoke') evobox @lang('karaoke-sets.alt_main_evobox_gold')">
            </div>
            <div class="base_tab-img js_tab-content" id="allSilver">
                <img src="/images/karaoke-set/evobox-mic-silver.png" alt="@lang('karaoke-sets.alt_main_evobox_karaoke') evobox @lang('karaoke-sets.alt_main_evobox_silver')">
            </div>
            <div class="base_tab-img js_tab-content" id="allBlack">
                <img src="/images/karaoke-set/evobox-mic-black.png" alt="@lang('karaoke-sets.alt_main_evobox_karaoke') evobox @lang('karaoke-sets.alt_main_evobox_black')">
            </div>
        </div>
    </div>
    <div class="base_tab-content js_parent-tab">
        <img src="/images/karaoke-set/preview-grey.jpg" class="base_tab-preview js_show-tab active" data-tab="allGrey" alt="">
        <img src="/images/karaoke-set/preview-red.jpg" class="base_tab-preview js_show-tab" data-tab="allRed" alt="">
        <img src="/images/karaoke-set/preview-blue.jpg" class="base_tab-preview js_show-tab" data-tab="allBlue" alt="">
        <img src="/images/karaoke-set/preview-gold.jpg" class="base_tab-preview js_show-tab" data-tab="allGold" alt="">
        <img src="/images/karaoke-set/preview-silver.jpg" class="base_tab-preview js_show-tab" data-tab="allSilver" alt="">
        <img src="/images/karaoke-set/preview-black.jpg" class="base_tab-preview js_show-tab" data-tab="allBlack" alt="">
    </div>
    <div class="sets_inner">
        <div class="sets_col">
            <h3 class="base_subtitle">EVOBOX<br> @lang('karaoke-sets.stereosystem_subtitle')</h3>
            <a href="karaoke-komplekt-so-stereosistemoj/" class="base_link">@lang('karaoke-sets.base_link')</a>
            <p class="base_txt">@lang('karaoke-sets.base_txt2') EvoSound Sphere.</p>
            <p class="base_txt">2 000 @lang('karaoke-sets.base_txt')</p>
            <div class="base_price-box">
                <p class="base_price-old">111</p>
                <p class="base_price-profit">@lang('lang.general.profit') 11</p>
            </div>
            <p class="base_price-current">222</p>
            <div class="base_double ta-c">
                <a href="javascript:;" class="base_double-btn base_double-dark">@lang('lang.general.dark')</a>
                <a href="javascript:;" class="base_double-btn base_double-light">@lang('lang.general.light')</a>
            </div>
        </div>
        <div class="sets_col">
            <h3 class="base_subtitle">EVOBOX Plus <br> @lang('karaoke-sets.stereosystem_subtitle')</h3>
            <a href="karaoke-komplekt-so-stereosistemoj/" class="base_link">@lang('karaoke-sets.base_link')</a>
            <p class="base_txt">@lang('karaoke-sets.base_txt2') EvoSound Sphere.</p>
            <p class="base_txt">41 000+ @lang('karaoke-sets.base_txt')</p>
            <div class="base_price-box">
                <p class="base_price-old">111</p>
                <p class="base_price-profit">@lang('lang.general.profit') 11</p>
            </div>
            <p class="base_price-current">222</p>
            <div class="base_double ta-c">
                <a href="javascript:;" class="base_double-btn base_double-dark">@lang('lang.general.dark')</a>
                <a href="javascript:;" class="base_double-btn base_double-light">@lang('lang.general.light')</a>
            </div>
        </div>
    </div>
</section>

<hr>

@include('widgets.terms')

@include('widgets.dealers')

@stop

@section('scripts')
    <link rel="preload" href="{{ mix('js/karaoke-sets.min.js') }}" as="script">
    <script src="{{ mix('js/karaoke-sets.min.js') }}"></script>
@stop
