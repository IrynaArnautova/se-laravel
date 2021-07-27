@extends('layout')

@section('head')
    <title>Evosound Sphere</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <link rel="preload" href="{{ mix('css/sphere.min.css') }}" as="style">
    <link href="{{ mix('css/sphere.min.css') }}" rel="stylesheet">
@stop

@section('content')
    <main class="sphere-main base_col-reverse base_row">
        <div class="sphere-main_item">
            <h1 class="sphere-main_title">EvoSound Sphere 2.1</h1>
            <p class="sphere-main_subtitle">True Stereo  @lang('lang.general.subtitle_karaoke')</p>
            <div class="base_price-box">
                <div class="base_price-old">111</div>
                <div class="base_price-profit">@lang('lang.general.profit') 11</div>
            </div>
            <div class="base_price-current">11</div>
            <div class="base_double ta-c">
                <a href="javascript:;" class="base_double-btn base_double-dark">@lang('lang.general.dark')</a>
                <a href="javascript:;" class="base_double-btn base_double-light">@lang('lang.general.light')</a>
            </div>
        </div>
        <div class="sphere-main_slider ">
            <div class="base_row">
                <a href="javascript:;" class="sphere-main_btn sphere-main_btn-black active" data-tab="sphereBlack">@lang('lang.general.black')</a>
                <a href="javascript:;" class="sphere-main_btn sphere-main_btn-white" data-tab="sphereWhite">@lang('lang.general.white')</a>
                <a href="javascript:;" class="sphere-main_bigger js_show-modal" data-modal="modalGallery">@lang('lang.general.bigger')</a>
            </div>
            <div class="sphere-main_system active" id="sphereBlack">
                <div class="sphere-main_tab">
                    <img src="/images/sphere/slider-black-1.jpg" class="sphere-main_tab-img sphereTab-1 active" id="" alt="@lang('sphere.alt_main_tab_img_black1')">
                    <img src="/images/sphere/slider-black-2.jpg" class="sphere-main_tab-img sphereTab-2" alt="@lang('sphere.alt_main_tab_img_black2')">
                    <img src="/images/sphere/slider-black-3.jpg" class="sphere-main_tab-img sphereTab-3" alt="@lang('sphere.alt_main_tab_img_black3')">
                    <img src="/images/sphere/slider-black-4.jpg" class="sphere-main_tab-img sphereTab-4" alt="@lang('sphere.alt_main_tab_img_black4')">
                    <img src="/images/sphere/slider-black-5.jpg" class="sphere-main_tab-img sphereTab-6" alt="@lang('sphere.alt_main_tab_img_black5')">
                    <img src="/images/sphere/slider-black-6.jpg" class="sphere-main_tab-img sphereTab-5" alt="@lang('sphere.alt_main_tab_img_black6')">
                </div>
                <div class="sphere-main_tab-content">
                    <img src="/images/sphere/slider-black-sm-1.jpg" class="sphere-main_tab-preview sphereTab-1 active" data-tab="sphereTab-1" alt="@lang('sphere.alt_main_tab_preview_black1')">
                    <img src="/images/sphere/slider-black-sm-2.jpg" class="sphere-main_tab-preview sphereTab-2" data-tab="sphereTab-2" alt="@lang('sphere.alt_main_tab_preview_black2')">
                    <img src="/images/sphere/slider-black-sm-3.jpg" class="sphere-main_tab-preview sphereTab-3" data-tab="sphereTab-3" alt="@lang('sphere.alt_main_tab_preview_black3')">
                    <img src="/images/sphere/slider-black-sm-4.jpg" class="sphere-main_tab-preview sphereTab-4" data-tab="sphereTab-4" alt="@lang('sphere.alt_main_tab_preview_black4')">
                    <img src="/images/sphere/slider-black-sm-6.jpg" class="sphere-main_tab-preview sphereTab-6" data-tab="sphereTab-6" alt="@lang('sphere.alt_main_tab_preview_black5')">
                    <img src="/images/sphere/slider-black-sm-5.jpg" class="sphere-main_tab-preview sphereTab-5" data-tab="sphereTab-5" alt="@lang('sphere.alt_main_tab_preview_black6')">
                </div>
            </div>
            <div class="sphere-main_system" id="sphereWhite">
                <div class="sphere_tab">
                    <img src="/images/sphere/slider-white-1.jpg" class="sphere-main_tab-img sphereTab-1 active" alt="@lang('sphere.alt_main_tab_img_white1')">
                    <img src="/images/sphere/slider-white-2.jpg" class="sphere-main_tab-img sphereTab-2" alt="@lang('sphere.alt_main_tab_img_white2')">
                    <img src="/images/sphere/slider-white-3.jpg" class="sphere-main_tab-img sphereTab-3" alt="@lang('sphere.alt_main_tab_img_white3')">
                    <img src="/images/sphere/slider-white-4.jpg" class="sphere-main_tab-img sphereTab-4" alt="@lang('sphere.alt_main_tab_img_white4')">
                    <img src="/images/sphere/slider-white-5.jpg" class="sphere-main_tab-img sphereTab-6" alt="@lang('sphere.alt_main_tab_img_white5')">
                    <img src="/images/sphere/slider-white-6.jpg" class="sphere-main_tab-img sphereTab-5"  alt="@lang('sphere.alt_main_tab_img_white6')">
                </div>
                <div class="sphere_tab-content">
                    <img src="/images/sphere/slider-white-sm-1.jpg" class="sphere-main_tab-preview sphereTab-1 active" data-tab="sphereTab-1" alt="@lang('sphere.alt_main_tab_img_white1')">
                    <img src="/images/sphere/slider-white-sm-2.jpg" class="sphere-main_tab-preview sphereTab-2" data-tab="sphereTab-2" alt="@lang('sphere.alt_main_tab_img_white2')">
                    <img src="/images/sphere/slider-white-sm-3.jpg" class="sphere-main_tab-preview sphereTab-3" data-tab="sphereTab-3" alt="@lang('sphere.alt_main_tab_img_white3')">
                    <img src="/images/sphere/slider-white-sm-4.jpg" class="sphere-main_tab-preview sphereTab-4" data-tab="sphereTab-4" alt="@lang('sphere.alt_main_tab_img_white4')">
                    <img src="/images/sphere/slider-white-sm-5.jpg" class="sphere-main_tab-preview sphereTab-6" data-tab="sphereTab-6" alt="@lang('sphere.alt_main_tab_img_white5')">
                    <img src="/images/sphere/slider-white-sm-6.jpg" class="sphere-main_tab-preview sphereTab-5" data-tab="sphereTab-5" alt="@lang('sphere.alt_main_tab_img_white6')">
                </div>
            </div>
        </div>
    </main>

    <section class="sphere-overview">
        <a href="https://youtu.be/dq52HDuxumk" class="sphere-overview_video" target="_blank">
            <img src="/images/sphere/sphere-overview.jpg" class="sphere-overview_video-img" alt="@lang('sphere.alt_overview_video_img')">
            <div class="sphere-overview_video-inner">
                <h2 class="sphere-overview_video-txt">@lang('sphere.overview_title')<br>EvoSound Sphere 2.1</h2>
                <p class="sphere-overview_video-play flex_ai-c">@lang('sphere.overview_play')</p>
            </div>
        </a>
    </section>

    <section class="sphere-sound">
        <div class="sphere-sound_inner base_container">
            <div class="sphere-sound_title">
                <h2 class="base_title">@lang('sphere.sound_title')</h2>
                <p class="sphere-sound_description base_txt">@lang('sphere.sound_description')</p>
            </div>
            <div class="sphere-sound_images">
                <div>
                    <div class="sphere-sound_images-1">
                        <img src="/images/sphere/sound-1.png" alt="evosound power">
                    </div>
                    <p class="sphere-sound_txt">@lang('sphere.sound_txt1')</p>
                </div>
                <div class="sphere-sound_middle">
                    <div class="sphere-sound_images-2">
                        <img src="/images/sphere/sound-2.png" alt="evosound power">
                    </div>
                    <p class="sphere-sound_txt">@lang('sphere.sound_txt2')</p>
                </div>
                <div>
                    <div class="sphere-sound_images-2">
                        <img src="/images/sphere/sound-3.png" alt="evosound sphere @lang('sphere.alt_sound_images')">
                    </div>
                    <p class="sphere-sound_txt">@lang('sphere.sound_txt2')</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sphere-connection">
        <h2 class="sphere-connection_title base_title">@lang('sphere.connection_title')</h2>
        <p class="base_txt">@lang('sphere.connection_txt') @lang('lang.general.size') (mini-Jack)</p>
        <div class="sphere-connection_img">
            <img src="/images/sphere/install.jpg" alt="evosound sphere install">
        </div>
    </section>

    <section class="sphere-decision">
        <div class="base_container">
            <h2 class="base_title ta-c">@lang('sphere.decision_title')</h2>
            <div class="sphere-decision_inner">
                <div class="sphere-decision_item">
                    <div class="sphere-decision_img">
                       <img src="/images/sphere/decision-1.png" alt="evosound install">
                    </div>
                    <p class="base_txt"><b>@lang('sphere.decision_item_title1')</b></p>
                    <p class="sphere-decision_txt">@lang('sphere.decision_item_txt1')</p>
                </div>
                <div class="sphere-decision_item">
                    <div class="sphere-decision_img">
                       <img src="/images/sphere/decision-2.png" alt="evosound install">
                    </div>
                    <p class="base_txt"><b>@lang('sphere.decision_item_title2')</b></p>
                    <p class="sphere-decision_txt">@lang('sphere.decision_item_txt2')</p>
                </div>
                <div class="sphere-decision_item">
                    <div class="sphere-decision_img">
                        <img src="/images/sphere/decision-3.png" alt="evosound sphere @lang('sphere.alt_decision_img')">
                    </div>
                    <p class="base_txt"><b>@lang('sphere.decision_item_title3')</b></p>
                    <p class="sphere-decision_txt">@lang('sphere.decision_item_txt3')</p>
                </div>
            </div>
            <div class="sphere-decision_view">
                <img src="/images/sphere/decision-4.jpg" class="sphere-decision_view-img" alt="@lang('sphere.alt_decision_view_img1')">
                <img src="/images/sphere/decision-4-mob.jpg" class="sphere-decision_view-mob" alt="@lang('sphere.alt_decision_view_img1')">
                <div class="sphere-decision_view-box">
                    <div class="sphere-decision_view-left">
                        <p class="base_txt"><b>@lang('sphere.table_mounts')</b></p>
                        <p class="sphere-decision_view-mark ta-c">@lang('sphere.decision_view_mark')</p>
                    </div>
                    <div class="sphere-decision_view-right">
                        <p class="sphere-decision_view-parametr"><b>@lang('lang.general.height')</b> 215 @lang('lang.general.size')</p>
                        <p class="sphere-decision_view-parametr"><b>@lang('lang.general.length')</b> 180 @lang('lang.general.size')</p>
                        <p class="sphere-decision_view-parametr"><b>@lang('lang.general.width')</b> 180 @lang('lang.general.size')</p>
                        <p class="sphere-decision_view-parametr"><b>@lang('lang.general.heft')</b> 1,796 @lang('lang.general.weight')</p>
                    </div>
                </div>
            </div>
            <div class="sphere-decision_view">
                <img src="/images/sphere/decision-5.jpg" class="sphere-decision_view-img" alt="@lang('sphere.alt_decision_view_img2')">
                <img src="/images/sphere/decision-5-mob.jpg" class="sphere-decision_view-mob" alt="@lang('sphere.alt_decision_view_img2')">
                <div class="sphere-decision_view-box">
                    <div class="sphere-decision_view-left">
                        <p class="base_txt"><b>@lang('sphere.floor_mounts')</b></p>
                        <p class="base_txt sphere-decision_price">111</p>
                        <a href="javascript:;" class="sphere-decision_btn base_btn">@lang('lang.general.dark')</a>
                    </div>
                    <div class="sphere-decision_view-right">
                        <p class="sphere-decision_view-parametr"><b>@lang('lang.general.height')</b> 1130 @lang('lang.general.size')</p>
                        <p class="sphere-decision_view-parametr"><b>@lang('lang.general.length')</b> 215 @lang('lang.general.size')</p>
                        <p class="sphere-decision_view-parametr"><b>@lang('lang.general.width'):</b> 215 @lang('lang.general.size')</p>
                        <p class="sphere-decision_view-parametr"><b>@lang('lang.general.heft')</b> 5,036 @lang('lang.general.weight')</p>
                    </div>
                </div>
            </div>
            <div class="sphere-decision_view">
                <img src="/images/sphere/decision-6.jpg" class="sphere-decision_view-img" alt="@lang('sphere.alt_decision_view_img3')">
                <img src="/images/sphere/decision-6-mob.jpg" class="sphere-decision_view-mob" alt="@lang('sphere.alt_decision_view_img3')">
                <div class="sphere-decision_view-box">
                    <div class="sphere-decision_view-left">
                        <p class="base_txt"><b>@lang('sphere.wall_mounts')</b></p>
                        <p class="base_txt sphere-decision_price">111</p>
                        <a href="javascript:;" class="sphere-decision_btn base_btn">@lang('lang.general.dark')</a>
                    </div>
                    <div class="sphere-decision_view-right">
                        <p class="sphere-decision_view-parametr"><b>@lang('lang.general.height')</b> 185 @lang('lang.general.size')</p>
                        <p class="sphere-decision_view-parametr"><b>@lang('lang.general.length')</b> 185 @lang('lang.general.size')</p>
                        <p class="sphere-decision_view-parametr"><b>@lang('lang.general.width')</b> 180 @lang('lang.general.size')</p>
                        <p class="sphere-decision_view-parametr"><b>@lang('lang.general.heft')</b> 1,179 @lang('lang.general.weight')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sphere-specification">
        <div class="base_container">
            <img src="/images/sphere/sphere-specification.jpg" class="sphere-specification_img" alt="evosound specification">
            <div class="base_row base_col-reverse">
                <div>
                    <dl>
                        <dt class="sphere-specification_title base_title">@lang('sphere.specification_title') <br>EvoSound Sphere</dt>
                        <dd class="base_txt">@lang('sphere.specification_txt1')</dd>
                        <dd class="base_txt">@lang('sphere.specification_txt2')</dd>
                        <dd class="base_txt">@lang('sphere.specification_txt3')</dd>
                        <dd class="base_txt">@lang('sphere.specification_txt4')</dd>
                        <dd class="base_txt">@lang('sphere.specification_txt5')</dd>
                    </dl>
                    <a href="" class="sphere-specification_link" target="_blank">@lang('lang.general.more_information_link')</a>
                </div>
                <div class="sphere-specification_parametrs">
                    <div>
                        <p class="sphere-specification_details">@lang('lang.general.details3')</p>
                        <p class="sphere-specification_parametr"><b>@lang('lang.general.height')</b> 180 @lang('lang.general.size')</p>
                        <p class="sphere-specification_parametr"><b>@lang('lang.general.length')</b> 180 @lang('lang.general.size')</p>
                        <p class="sphere-specification_parametr"><b>@lang('lang.general.width')</b> 165 @lang('lang.general.size')</p>
                        <p class="sphere-specification_parametr"><b>@lang('lang.general.heft')</b> 1,036 @lang('lang.general.weight')</p>
                    </div>
                    <div>
                        <p class="sphere-specification_details">@lang('lang.general.details2')</p>
                        <p class="sphere-specification_parametr"><b>@lang('lang.general.height')</b> 270 @lang('lang.general.size')</p>
                        <p class="sphere-specification_parametr"><b>@lang('lang.general.length')</b> 385 @lang('lang.general.size')</p>
                        <p class="sphere-specification_parametr"><b>@lang('lang.general.width')</b> 249 @lang('lang.general.size')</p>
                        <p class="sphere-specification_parametr"><b>@lang('lang.general.heft')</b> 7,7 @lang('lang.general.weight')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('widgets.profit')

    <section class="sphere-packshot">
        <div class="sphere-banner">
            <div class="sphere-banner_img">
                <img src="/images/sphere/banner-sphere.png" alt="evosound sphere">
            </div>
            <div>
                <img src="/images/evosound/banner-icons.png" class="sphere-banner_icons" alt="evosound icons">
                <h2 class="sphere-banner_title">EvoSound Sphere 2.1</h2>
                <div class="base_price-box">
                    <div class="base_price-old">111</div>
                    <div class="base_price-profit">11</div>
                </div>
                <div class="base_price-current">122</div>
                <div class="base_double ta-c">
                    <a href="javascript:;" class="base_double-btn base_double-dark">@lang('lang.general.dark')</a>
                    <a href="javascript:;" class="base_double-btn base_double-light">@lang('lang.general.light')</a>
                </div>
            </div>
        </div>
        <div class="sphere-set">
            <div>
                <p class="sphere-set_title">@lang('sphere.set_title')</p>
                <p class="base_txt">@lang('sphere.set_txt')</p>
                <a href="" class="sphere-set_link" target="_blank">@lang('sphere.set_link')</a>
            </div>
            <div class="sphere-set_img">
                <img src="/images/sphere/karaoke-set.png" alt="karaoke set">
            </div>
        </div>
    </section>
@stop

@section('scripts')
    <link rel="preload" href="{{ mix('js/sphere.min.js') }}" as="script">
    <script src="{{ mix('js/sphere.min.js') }}"></script>
@stop
