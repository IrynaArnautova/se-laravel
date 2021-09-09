@extends('layout')

@section('head')
    <title>Studio Evolution | Evosound Bar</title>
    <meta name="description" content="@lang('bar.description') ">
    <meta name="keywords" content="@lang('bar.keywords')">
    <meta property="og:title" content="@lang('bar.og_title') EvoSound Bar"/>
    <meta property="og:description" content="@lang('bar.description') "/>
    <link rel="preload" href="{{ mix('css/bar.min.css') }}" as="style">
    <link href="{{ mix('css/bar.min.css') }}" rel="stylesheet">
@stop

@section('content')
    <main class="bar-main">
        <img src="/images/evosound/main.jpg" class="bar-main_img" alt="@lang('bar.alt_main_img')">
        <div class="base_container base_row bar-main_detail">
            <div>
                <h1 class="bar-main_title">EvoSound Bar</h1>
                <p class="bar-main_subtitle">@lang('bar.main_subtitle')</p>
                <div class="base_price-box">
                    <div class="base_price-old">111</div>
                    <div class="base_price-profit">@lang('lang.general.profit') 11</div>
                </div>
                <div class="base_price-current">222</div>
                <div class="base_double ta-c">
                    <a href="javascript:;" class="base_double-btn base_double-dark">@lang('lang.general.dark')</a>
                    <a href="javascript:;" class="base_double-btn base_double-light">@lang('lang.general.light')</a>
                </div>
            </div>
            <div class="bar-main_slider">
                <div class="base_row">
                    <a href="javascript:;" class="bar-main_btn bar-main_btn-black active" data-tab="barBlack">@lang('lang.general.black')</a>
                    <a href="javascript:;" class="bar-main_btn bar-main_btn-white" data-tab="barWhite">@lang('lang.general.white')</a>
                    <a href="javascript:;" class="bar-main_bigger js_show-modal" data-modal="modalGallery">@lang('lang.general.bigger')</a>
                </div>
                <div class="bar-main_system active" id="barBlack">
                    <div class="bar-main_tab">
                        <img src="/images/evosound/slider-black-1.jpg" class="bar-main_tab-img barTab-1 active" id="" alt="@lang('bar.alt_main_tab_img_black1')">
                        <img src="/images/evosound/slider-black-2.jpg" class="bar-main_tab-img barTab-2" alt="@lang('bar.alt_main_tab_img_black2')">
                        <img src="/images/evosound/slider-black-3.jpg" class="bar-main_tab-img barTab-3" alt="@lang('bar.alt_main_tab_img_black3')">
                        <img src="/images/evosound/slider-black-4.jpg" class="bar-main_tab-img barTab-4" alt="@lang('bar.alt_main_tab_img_black4')">
                        <img src="/images/evosound/slider-black-5.jpg" class="bar-main_tab-img barTab-5" alt="@lang('bar.alt_main_tab_img_black5')">
                    </div>
                    <div class="bar-main_tab-content">
                        <img src="/images/evosound/slider-black-sm-1.jpg" class="bar-main_tab-preview barTab-1 active" data-tab="barTab-1" alt="@lang('bar.alt_main_tab_img_black1')">
                        <img src="/images/evosound/slider-black-sm-2.jpg" class="bar-main_tab-preview barTab-2" data-tab="barTab-2" alt="@lang('bar.alt_main_tab_img_black2')">
                        <img src="/images/evosound/slider-black-sm-3.jpg" class="bar-main_tab-preview barTab-3" data-tab="barTab-3" alt="@lang('bar.alt_main_tab_img_black3')">
                        <img src="/images/evosound/slider-black-sm-4.jpg" class="bar-main_tab-preview barTab-4" data-tab="barTab-4" alt="@lang('bar.alt_main_tab_img_black4')">
                        <img src="/images/evosound/slider-black-sm-5.jpg" class="bar-main_tab-preview barTab-5" data-tab="barTab-5" alt="@lang('bar.alt_main_tab_img_black5')">
                    </div>
                </div>
                <div class="bar-main_system" id="barWhite">
                    <div class="bar-main_tab">
                        <img src="/images/evosound/slider-white-1.jpg" class="bar-main_tab-img barTab-1 active" alt="@lang('bar.alt_main_tab_img_white1')">
                        <img src="/images/evosound/slider-white-2.jpg" class="bar-main_tab-img barTab-2" alt="@lang('bar.alt_main_tab_img_white2')">
                        <img src="/images/evosound/slider-white-3.jpg" class="bar-main_tab-img barTab-3" alt="@lang('bar.alt_main_tab_img_white3')">
                        <img src="/images/evosound/slider-white-4.jpg" class="bar-main_tab-img barTab-4" alt="@lang('bar.alt_main_tab_img_white4')">
                        <img src="/images/evosound/slider-white-5.jpg" class="bar-main_tab-img barTab-5" alt="@lang('bar.alt_main_tab_img_white5')">
                    </div>
                    <div class="bar-main_tab-content">
                        <img src="/images/evosound/slider-white-sm-1.jpg" class="bar-main_tab-preview barTab-1 active" data-tab="barTab-1" alt="@lang('bar.alt_main_tab_img_white1')">
                        <img src="/images/evosound/slider-white-sm-2.jpg" class="bar-main_tab-preview barTab-2" data-tab="barTab-2" alt="@lang('bar.alt_main_tab_img_white2')">
                        <img src="/images/evosound/slider-white-sm-3.jpg" class="bar-main_tab-preview barTab-3" data-tab="barTab-3" alt="@lang('bar.alt_main_tab_img_white3')">
                        <img src="/images/evosound/slider-white-sm-4.jpg" class="bar-main_tab-preview barTab-4" data-tab="barTab-4" alt="@lang('bar.alt_main_tab_img_white4')">
                        <img src="/images/evosound/slider-white-sm-5.jpg" class="bar-main_tab-preview barTab-5" data-tab="barTab-5" alt="@lang('bar.alt_main_tab_img_white5')">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="bar-overview">
        <a href="https://youtu.be/QSTgF2mr1qw" class="bar-overview_video" target="_blank">
            <img src="/images/evosound/bar-overview.jpg" alt="">
            <div class="bar-overview_video-inner">
                <h2 class="bar-overview_video-txt">@lang('bar.overview_title')<br>EvoSound Bar</h2>
                <p class="bar-overview_video-play">@lang('bar.overview_play')</p>
            </div>
        </a>
    </section>

    <section class="bar-vat">
        <div class="base_container">
            <h2 class="bar-vat_title">@lang('bar.vat_title')</h2>
            <p class="bar-vat_sound base_title">@lang('bar.vat_sound')</p>
            <p class="bar-vat_txt">@lang('bar.vat_txt')</p>
            <div class="bar-vat_power">
                <img src="/images/evosound/evosound-power-ru.jpg" alt="evosound power">
            </div>
            <div class="bar-vat_power-mob">
                <img src="/images/evosound/evosound-power-mob-ru.jpg" alt="evosound power">
            </div>
        </div>
    </section>

    <section class="bar-connection">
        <div class="bar-connection_inner">
            <div>
                <div class="bar-connection_icon">
                    <img src="/images/evosound/ic-hdmi.svg" alt="evosound hdmi">
                </div>
                <h2 class="bar-connection_title base_title">@lang('bar.connection_title_hdmi')</h2>
                <p class="bar-connection_txt">@lang('bar.connection_txt_hdmi')</p>
                <p class="bar-connection_attention">@lang('bar.connection_attention_hdmi')</p>
            </div>
            <div>
                <div class="bar-connection_icon">
                    <img src="/images/evosound/ic-bluetooth.svg" alt="evosound bluetooth">
                </div>
                <h3 class="bar-connection_title base_title">@lang('bar.connection_title_bluetooth')</h3>
                <p class="bar-connection_txt">@lang('bar.connection_txt_bluetooth')</p>
                <p class="bar-connection_attention">@lang('bar.connection_attention_bluetooth')</p>
            </div>
        </div>
    </section>

    <section class="bar-comfort">
        <img src="/images/evosound/backside-soundbar.jpg" class="bar-comfort_backside" alt="evosound backside">
        <div class="bar-comfort_inner base_container">
            <h2 class="bar-comfort_title base_title">@lang('bar.comfort_title')</h2>
            <p class="bar-comfort_txt">@lang('bar.comfort_txt')</p>
            <p class="bar-comfort_4k">@lang('bar.comfort_4k')</p>
           <div class="bar-comfort_remote">
               <img src="/images/evosound/se-remote.png" alt="evosound remote">
           </div>
            <p class="bar-comfort_panel">@lang('bar.comfort_panel')</p>
        </div>
    </section>

    <section class="bar-wall">
        <div class="base_container">
            <img src="/images/evosound/wall.jpg" class="bar-wall_img" alt="evosound bar">
            <h2 class="base_title">@lang('bar.wall_title')</h2>
            <p class="bar-wall_txt">@lang('bar.wall_txt')</p>
        </div>
    </section>

    <section class="bar-specification">
        <div class="base_container">
            <div class="bar-specification_img">
                <img src="/images/evosound/bar-specification.jpg" alt="evosound specification">
            </div>
            <div class="base_row bar_col-reverse">
                <div>
                    <dl>
                        <dt class="bar-specification_title">@lang('bar.specification_title') <br>EvoSound Bar</dt>
                        <dd class="bar-specification_txt">@lang('bar.specification_txt1')</dd>
                        <dd class="bar-specification_txt">@lang('bar.specification_txt2')</dd>
                        <dd class="bar-specification_txt">@lang('bar.specification_txt3')</dd>
                        <dd class="bar-specification_txt">@lang('bar.specification_txt4')</dd>
                        <dd class="bar-specification_txt">@lang('bar.specification_txt5')</dd>
                        <dd class="bar-specification_txt">@lang('bar.specification_txt6')</dd>
                    </dl>
                    <a href="" class="bar-specification_link" target="_blank">@lang('lang.general.more_information_link')</a>
                </div>
                <div class="bar-specification_parametrs">
                    <div>
                        <p class="bar-specification_details">@lang('lang.general.details1')</p>
                        <p class="bar-specification_parametr"><b>@lang('lang.general.height')</b> 107 @lang('lang.general.size')</p>
                        <p class="bar-specification_parametr"><b>@lang('lang.general.length')</b> 1210 @lang('lang.general.size')</p>
                        <p class="bar-specification_parametr"><b>@lang('lang.general.width')</b> 126 @lang('lang.general.size')</p>
                        <p class="bar-specification_parametr"><b>@lang('lang.general.heft')</b> 8,6 @lang('lang.general.weight')</p>
                    </div>
                    <div>
                        <p class="bar-specification_details">@lang('lang.general.details2')</p>
                        <p class="bar-specification_parametr"><b>@lang('lang.general.height')</b> 270 @lang('lang.general.size')</p>
                        <p class="bar-specification_parametr"><b>@lang('lang.general.length')</b> 385 @lang('lang.general.size')</p>
                        <p class="bar-specification_parametr"><b>@lang('lang.general.width')</b> 249 @lang('lang.general.size')</p>
                        <p class="bar-specification_parametr"><b>@lang('lang.general.heft')</b> 7,7 @lang('lang.general.weight')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('widgets.profit')

    <section>
        <div class="bar-banner">
            <div class="bar-banner_img">
                <img src="/images/evosound/banner-bar.png" alt="evosound bar">
            </div>
            <div>
                <img src="/images/evosound/banner-icons.png" class="bar-banner_icons" alt="evosound icons">
                <h2 class="bar-banner_title base_title">EvoSound Bar</h2>
                <div class="base_price-box">
                    <div class="base_price-old">111</div>
                    <div class="base_price-profit">@lang('lang.general.profit') 11</div>
                </div>
                <div class="base_price-current">222</div>
                <div class="base_double ta-c">
                    <a href="javascript:;" class="base_double-btn base_double-dark">@lang('lang.general.dark')</a>
                    <a href="javascript:;" class="base_double-btn base_double-light">@lang('lang.general.light')</a>
                </div>
            </div>
        </div>
        <div class="bar-set">
            <div>
                <p class="bar-set_title">@lang('bar.set_title')</p>
                <a href="" class="bar-set_link" target="_blank">@lang('bar.set_link')</a>
            </div>
            <div class="bar-set_img">
                <img src="/images/evosound/karaoke-set.png" alt="karaoke set">
            </div>
        </div>
    </section>
@stop

@section('scripts')
    <link rel="preload" href="{{ mix('js/bar.min.js') }}" as="script">
    <script src="{{ mix('js/bar.min.js') }}"></script>
@stop
