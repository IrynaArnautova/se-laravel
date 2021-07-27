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
    <!-- <div class="sets_page"> -->
        <main class="sets base_container js_parent-tab">
            <h1 class="base_title">@lang('karaoke-sets.main_title')</h1>
            <div class="base_tab">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-mic.jpg" class="base_img js_tab-content"  alt="@lang('karaoke-sets.alt_main_with_mic')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-mic-mob.jpg" class="base_img-mob js_tab-content"  alt="@lang('karaoke-sets.alt_main_with_mic_mob')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-grey.png" class="base_tab-img active js_tab-content" id="micGrey" alt="evobox @lang('karaoke-sets.alt_main_evobox_grey')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-red.png" class="base_tab-img js_tab-content" id="micRed" alt="evobox @lang('karaoke-sets.alt_main_evobox_red')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-blue.png" class="base_tab-img js_tab-content" id="micBlue" alt="evobox @lang('karaoke-sets.alt_main_evobox_blue')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-gold.png" class="base_tab-img js_tab-content" id="micGold" alt="evobox @lang('karaoke-sets.alt_main_evobox_gold')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-silver.png" class="base_tab-img js_tab-content" id="micSilver" alt="evobox @lang('karaoke-sets.alt_main_evobox_silver')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-black.png" class="base_tab-img js_tab-content" id="micBlack" alt="evobox @lang('karaoke-sets.alt_main_evobox_black')">
            </div>
            <div class="base_tab-content">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-grey.jpg" class="base_tab-preview js_show-tab active" data-tab="micGrey" alt="@lang('lang.general.dark') evobox  @lang('karaoke-sets.alt_main_evobox_grey')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-red.jpg" class="base_tab-preview js_show-tab" data-tab="micRed" alt="@lang('lang.general.dark') evobox  @lang('karaoke-sets.alt_main_evobox_red')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-blue.jpg" class="base_tab-preview js_show-tab" data-tab="micBlue" alt="@lang('lang.general.dark') evobox  @lang('karaoke-sets.alt_main_evobox_blue')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-gold.jpg" class="base_tab-preview js_show-tab" data-tab="micGold" alt="@lang('lang.general.dark') evobox  @lang('karaoke-sets.alt_main_evobox_gold')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-silver.jpg" class="base_tab-preview js_show-tab" data-tab="micSilver" alt="@lang('lang.general.dark') evobox  @lang('karaoke-sets.alt_main_evobox_silver')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-black.jpg" class="base_tab-preview js_show-tab" data-tab="micBlack" alt="@lang('lang.general.dark') evobox  @lang('karaoke-sets.alt_main_evobox_black')">
            </div>
            <div class="sets_inner">
                <div class="sets_col">
                    <h3 class="base_subtitle">EVOBOX<br> @lang('karaoke-sets.main_subtitle')</h3>
                    <a href="karaoke-komplekty-s-mikrofonami/" class="base_link">@lang('karaoke-sets.base_link')</a>
                    <p class="base_txt">@lang('karaoke-sets.main_txt')</p>
                    <br>
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
                    <br>
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
            <div class="evosound_row">
                <div class="evosound_btn evosound_btn-black active" data-tab="bar-Black">@lang('lang.general.black')</div>
                <div class="evosound_btn evosound_btn-white" data-tab="bar-White">@lang('lang.general.white')</div>
            </div>
            <div class="base_tab sets_sab">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-sab-black.jpg" class="base_img bar-Black active" alt="evosound bar @lang('karaoke-sets.alt_main_evobox_black')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-sab-white.jpg" class="base_img bar-White"alt="evosound bar @lang('karaoke-sets.alt_main_evobox_white')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-sab-black-mob.jpg" class="base_img-mob bar-Black active" alt="@lang('lang.general.dark') evosound bar @lang('karaoke-sets.alt_main_evobox_black')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-sab-white-mob.jpg" class="base_img-mob bar-White" alt="@lang('lang.general.dark') evosound bar @lang('karaoke-sets.alt_main_evobox_white')">

                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-grey.png" class="base_tab-img active" id="sabGrey" alt="evobox evolution @lang('karaoke-sets.alt_main_evobox_grey')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-red.png" class="base_tab-img" id="sabRed" alt="evobox evolution @lang('karaoke-sets.alt_main_evobox_red')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-blue.png" class="base_tab-img" id="sabBlue" alt="evobox evolution @lang('karaoke-sets.alt_main_evobox_blue')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-gold.png" class="base_tab-img" id="sabGold" alt="evobox evolution @lang('karaoke-sets.alt_main_evobox_gold')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-silver.png" class="base_tab-img" id="sabSilver" alt="evobox evolution @lang('karaoke-sets.alt_main_evobox_silver')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-black.png" class="base_tab-img" id="sabBlack" alt="evobox evolution @lang('karaoke-sets.alt_main_evobox_black')">
            </div>
            <div class="base_tab-content">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-grey.jpg" class="base_tab-preview active" data-tab="sabGrey" alt="@lang('lang.general.dark') evobox evolution @lang('karaoke-sets.alt_main_evobox_grey')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-red.jpg" class="base_tab-preview" data-tab="sabRed" alt="@lang('lang.general.dark') evobox evolution @lang('karaoke-sets.alt_main_evobox_red')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-blue.jpg" class="base_tab-preview" data-tab="sabBlue" alt="@lang('lang.general.dark') evobox evolution @lang('karaoke-sets.alt_main_evobox_blue')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-gold.jpg" class="base_tab-preview" data-tab="sabGold" alt="@lang('lang.general.dark') evobox evolution @lang('karaoke-sets.alt_main_evobox_gold')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-silver.jpg" class="base_tab-preview" data-tab="sabSilver" alt="@lang('lang.general.dark') evobox evolution @lang('karaoke-sets.alt_main_evobox_silver')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-black.jpg" class="base_tab-preview" data-tab="sabBlack" alt="@lang('lang.general.dark') evobox evolution @lang('karaoke-sets.alt_main_evobox_black')">
            </div>
            <div class="sets_inner">
                <div class="sets_col">
                    <h3 class="base_subtitle">EVOBOX<br> @lang('karaoke-sets.soundbar_subtitle')</h3>
                    <a href="karaoke-komplekty-s-saundbarom/" class="base_link">@lang('karaoke-sets.base_link')</a>
                    <p class="base_txt"><a href ='/'>@lang('karaoke-sets.soundbar_txt1')</a>@lang('karaoke-sets.soundbar_txt2') EvoSound Bar.</p>
                    <br>
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
                    <br>
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

        <section class="sets base_container">
            <h2 class="base_title">@lang('karaoke-sets.stereosystem_title')</h2>
            <div class="evosound_row">
                <div class="evosound_btn evosound_btn-black active" data-tab="bar-Black-All">@lang('lang.general.black')</div>
                <div class="evosound_btn evosound_btn-white" data-tab="bar-White-All">@lang('lang.general.white')</div>
            </div>
            <div class="base_tab sets_all">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-all-black.jpg" class="base_img bar-Black-All active" alt=" @lang('karaoke-sets.alt_main_evobox_audio') evosound bar  @lang('karaoke-sets.alt_main_evobox_black')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-all-white.jpg" class="base_img bar-White-All" alt=" @lang('karaoke-sets.alt_main_evobox_audio') evosound bar  @lang('karaoke-sets.alt_main_evobox_white')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-all-black-mob.jpg" class="base_img-mob bar-Black-All active" alt="evosound bar @lang('karaoke-sets.alt_main_evobox_black')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-all-white-mob.jpg" class="base_img-mob bar-White-All"  alt="evosound bar @lang('karaoke-sets.alt_main_evobox_white')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-mic-grey.png" class="base_tab-img active" id="allGrey" alt="@lang('karaoke-sets.alt_main_evobox_karaoke') evobox @lang('karaoke-sets.alt_main_evobox_grey')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-mic-red.png" class="base_tab-img" id="allRed" alt="@lang('karaoke-sets.alt_main_evobox_karaoke') evobox @lang('karaoke-sets.alt_main_evobox_red')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-mic-blue.png" class="base_tab-img" id="allBlue" alt="@lang('karaoke-sets.alt_main_evobox_karaoke') evobox @lang('karaoke-sets.alt_main_evobox_blue')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-mic-gold.png" class="base_tab-img" id="allGold" alt="@lang('karaoke-sets.alt_main_evobox_karaoke') evobox @lang('karaoke-sets.alt_main_evobox_gold')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-mic-silver.png" class="base_tab-img" id="allSilver" alt="@lang('karaoke-sets.alt_main_evobox_karaoke') evobox @lang('karaoke-sets.alt_main_evobox_silver')">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-mic-black.png" class="base_tab-img" id="allBlack" alt="@lang('karaoke-sets.alt_main_evobox_karaoke') evobox @lang('karaoke-sets.alt_main_evobox_black')">
            </div>
            <div class="base_tab-content">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-grey.jpg" class="base_tab-preview active" data-tab="allGrey" alt="">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-red.jpg" class="base_tab-preview" data-tab="allRed" alt="">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-blue.jpg" class="base_tab-preview" data-tab="allBlue" alt="">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-gold.jpg" class="base_tab-preview" data-tab="allGold" alt="">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-silver.jpg" class="base_tab-preview" data-tab="allSilver" alt="">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-black.jpg" class="base_tab-preview" data-tab="allBlack" alt="">
            </div>
            <div class="sets_inner">
                <div class="sets_col">
                    <h3 class="base_subtitle">EVOBOX<br> @lang('karaoke-sets.stereosystem_subtitle')</h3>
                    <a href="karaoke-komplekt-so-stereosistemoj/" class="base_link">@lang('karaoke-sets.base_link')</a>
                    <p class="base_txt">@lang('karaoke-sets.base_txt2') EvoSound Sphere.</p>
                    <br>
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
                    <br>
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
    <!-- </div> -->
@stop

@section('scripts')
    <link rel="preload" href="{{ mix('js/karaoke-sets.min.js') }}" as="script">
    <script src="{{ mix('js/karaoke-sets.min.js') }}"></script>
@stop
