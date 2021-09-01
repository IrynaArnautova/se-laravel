@extends('layout')

@section('head')
    <title>Караоке комплеты</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <link rel="preload" href="{{ mix('css/karaoke-set_mic.min.css') }}" as="style">
    <link href="{{ mix('css/karaoke-set_mic.min.css') }}" rel="stylesheet">
@stop

@section('content')
        <main class="set-evosound-main">
            <img src="/images/karaoke-set/EVOBOX+mic-RU.jpg" class="set-evosound-main_img" alt="">
            <div class="base_container">
                <h1 class="set-evosound-main_title">Караоке-комплект <br>с микрофонами</h1>
                <p class="base_txt">Базовый караоке-комплект для домашнего караоке от Studio Evolution. Включает в себя профессиональную караоке-систему и два цифровых беспроводных микрофона SE&nbsp;•&nbsp;200D. </p>
                <div class="base_tab js_parent-tab">
                    <img src="/images/karaoke-set/with-mic.jpg" class="base_img-tab"  alt="">
                    <img src="/images/karaoke-set/with-mic-mob.jpg" class="base_img-tab-mob" alt="">
                    <div class="base_tab-img js_tab-content active" id="micGrey">
                        <img src="/images/karaoke-set/evobox-grey.png" alt="профессиональная караоке система с микрофонами серая">
                    </div>
                    <div class="base_tab-img js_tab-content" id="micRed">
                        <img src="/images/karaoke-set/evobox-red.png" alt="профессиональная караоке система с микрофонами красная">
                    </div>
                    <div class="base_tab-img js_tab-content" id="micBlue">
                        <img src="/images/karaoke-set/evobox-blue.png" alt="профессиональная караоке система с микрофонами синяя">
                    </div>
                    <div class="base_tab-img js_tab-content" id="micGold">
                        <img src="/images/karaoke-set/evobox-gold.png" alt="профессиональная караоке система с микрофонами золотая">
                    </div>
                    <div class="base_tab-img js_tab-content" id="micSilver">
                        <img src="/images/karaoke-set/evobox-silver.png" alt="профессиональная караоке система с микрофонами серебрянная">
                    </div>
                    <div class="base_tab-img js_tab-content" id="micBlack">
                        <img src="/images/karaoke-set/evobox-black.png" alt="профессиональная караоке система с микрофонами черная">
                    </div>
                </div>
                <div class="base_tab-content js_parent-tab flex">
                    <img src="/images/karaoke-set/preview-grey.jpg" class="base_tab-preview js_show-tab active" data-tab="micGrey" alt="">
                    <img src="/images/karaoke-set/preview-red.jpg" class="base_tab-preview js_show-tab" data-tab="micRed" alt="">
                    <img src="/images/karaoke-set/preview-blue.jpg" class="base_tab-preview js_show-tab" data-tab="micBlue" alt="">
                    <img src="/images/karaoke-set/preview-gold.jpg" class="base_tab-preview js_show-tab" data-tab="micGold" alt="">
                    <img src="/images/karaoke-set/preview-silver.jpg" class="base_tab-preview js_show-tab" data-tab="micSilver" alt="">
                    <img src="/images/karaoke-set/preview-black.jpg" class="base_tab-preview js_show-tab" data-tab="micBlack" alt="">
                </div>
                <div class="set-evosound-main_inner flex">
                    <div class="set-evosound-main_col">
                        <p class="base_subtitle">EVOBOX<br> с микрофонами</p>
                        <p class="base_txt">Караоке-система и 2 цифровых беспроводных микрофона SE&nbsp;•&nbsp;200D.</p>
                        <p class="base_txt">2 000 песен и возможность загрузки песен из каталога на 80 000 караоке-фонограмм.</p>
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
                    <div class="set-evosound-main_col">
                        <p class="base_subtitle">EVOBOX Plus <br> с микрофонами</p>
                        <p class="base_txt">Караоке-система и 2 цифровых беспроводных микрофона SE&nbsp;•&nbsp;200D.</p>
                        <p class="base_txt">41 000+ песен и возможность загрузки песен из каталога на 80 000 караоке-фонограмм.</p>
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
            </div>
        </main>

        <section class="set-evosound-slider">
            <h2 class="set-evosound-slider_title">@lang('karaoke-set_evosound.slider_title')</h2>
            <div class="set-evosound-slider_content">
                <div class="swiper-container js_set-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="set-evosound-slider_item">
                                <img src="/images/karaoke-set/pic-ocean.jpg" alt="EVOBOX ocean">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="set-evosound-slider_item">
                                <img src="/images/karaoke-set/pic-ruby.jpg" alt="EVOBOX ruby">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="set-evosound-slider_item">
                                <img src="/images/karaoke-set/pic-gold.jpg" alt="EVOBOX gold">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="set-evosound-slider_item">
                                <img src="/images/karaoke-set/pic-black.jpg" alt="EVOBOX black">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="set-evosound-slider_item">
                                <img src="/images/karaoke-set/pic-silver.jpg" alt="EVOBOX ocean">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="set-evosound-slider_item">
                                <img src="/images/karaoke-set/pic-graphit.jpg" alt="EVOBOX ruby">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="set-evosound-include js_parent-tab">
           <div class="base_container">
               <h2 class="set-evosound-include_title">Что входит в <a href="">караоке-комплект?</a></h2>
               <div class="set-evosound-include_tabs flex_ai-c">
                   <a href="javascript:;" class="set-evosound-include_tab js_show-tab active" data-tab="systemBlock">@lang('lang.general.karaoke_system')</a>
                   <a href="javascript:;" class="set-evosound-include_tab js_show-tab" data-tab="micBlock">@lang('lang.general.microphones')</a>
               </div>
               <div class="set-evosound-include_tab-content js_tab-content active" id="systemBlock">
                   <a href="javascript:;" class="set-evosound-include_img" target="_blank">
                       <img src="/images/karaoke-set/EvoBox-set.jpg" alt="EvoBox-complect">
                   </a>
                   <h3 class="set-evosound-include_content-title">@lang('karaoke-set_evosound.include_content_title1')</h3>
                   <div class="set-evosound-include_list flex_jc-sb">
                       <div>
                           <ul>
                               <li>@lang('karaoke-set_evosound.include_li')</li>
                               <li>@lang('karaoke-set_evosound.include_li2')</li>
                               <li>@lang('karaoke-set_evosound.include_li3')</li>
                               <li>@lang('karaoke-set_evosound.include_li4')</li>
                               <li>@lang('karaoke-set_evosound.include_li5')</li>
                               <li>@lang('karaoke-set_evosound.include_li6')</li>
                               <li>@lang('karaoke-set_evosound.include_li7')</li>
                               <li>@lang('karaoke-set_evosound.include_li8')</li>
                               <li>@lang('karaoke-set_evosound.include_li9')</li>
                               <li>@lang('karaoke-set_evosound.include_li10')</li>
                           </ul>
                           <a href="javascript:;" class="set-evosound-include_link" target="_blank">@lang('lang.general.recognize_link')</a>
                       </div>
                       <div class="set-evosound-include_list-specification">
                           <div>
                               <p class="set-evosound-include_list-specification-details">EVOBOX</p>
                               <p class="set-evosound-include_list-specification-parametr">@lang('karaoke-set_evosound.include_specification_parametr1')</p>
                               <p class="set-evosound-include_list-specification-parametr">@lang('karaoke-set_evosound.include_specification_parametr2')</p>
                               <p class="set-evosound-include_list-specification-parametr">@lang('karaoke-set_evosound.include_specification_parametr3')</p>
                           </div>
                           <div>
                               <p class="set-evosound-include_list-specification-details">EVOBOX Plus</p>
                               <p class="set-evosound-include_list-specification-parametr">@lang('karaoke-set_evosound.include_specification_parametr4')</p>
                               <p class="set-evosound-include_list-specification-parametr">@lang('karaoke-set_evosound.include_specification_parametr5')</p>
                               <p class="set-evosound-include_list-specification-parametr">@lang('karaoke-set_evosound.include_specification_parametr6')</p>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="set-evosound-include_tab-content js_tab-content" id="micBlock">
                   <a href="javascript:;" class="set-evosound-include_img " target="_blank">
                       <img src="/images/karaoke-set/mic-set.jpg" alt="EvoSound-complect">
                   </a>
                   <h3 class="set-evosound-include_content-title">@lang('karaoke-set_evosound.include_content_title2')</h3>
                   <div class="set-evosound-include_list">
                       <ul>
                           <li>@lang('karaoke-set_evosound.include_li11')</li>
                           <li>@lang('karaoke-set_evosound.include_li12')</li>
                           <li>@lang('karaoke-set_evosound.include_li13')</li>
                           <li>@lang('karaoke-set_evosound.include_li14')</li>
                           <li>@lang('karaoke-set_evosound.include_li15')</li>
                           <li>@lang('karaoke-set_evosound.include_li16')</li>
                           <li>@lang('karaoke-set_evosound.include_li17')</li>
                           <li>@lang('karaoke-set_evosound.include_li18')</li>
                           <li>@lang('karaoke-set_evosound.include_li19')</li>
                           <li>@lang('karaoke-set_evosound.include_li20')</li>
                       </ul>
                       <a href="javascript:;" class="set-evosound-include_link" target="_blank">@lang('lang.general.recognize_link')</a>
                   </div>
               </div>
           </div>
        </section>

        <section class="set-evosound-banner">
            <div class="base_container">
                <div class="set-evosound-banner_inner flex_jc-c">
                    <div class="set-evosound-banner_content set-evosound-banner_grey">
                        <div class="set-evosound-banner_evobox-mic">
                            <img src="/images/karaoke-set/evobox-ocean-mic.png"  alt="EVOBOX">
                        </div>
                        <h3 class="set-evosound-banner_title">@lang('karaoke-set_evosound.banner_title1')  EVOBOX</h3>
                        <p class="set-evosound-banner_number">2 000</p>
                        <p class="set-evosound-banner_title">@lang('karaoke-set_evosound.banner_title1_1')</p>
                        <p class="base_txt"> @lang('karaoke-set_evosound.banner_txt')</p>
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
                    <div class="set-evosound-banner_img set-evosound-banner_grey flex_ai-c">
                        <div class="set-evosound-banner_evobox">
                            <img src="/images/karaoke-set/banner_evobox.png"  alt="@lang('karaoke-set_evosound.alt_banner_evobox')">
                        </div>

                    </div>
                </div>
                <div class="set-evosound-banner_inner flex_jc-c">
                    <div class="set-evosound-banner_content set-evosound-banner_yellow">
                        <div class="set-evosound-banner_evobox-mob">
                            <img src="/images/karaoke-set/evobox-plus-mob.png" alt="@lang('karaoke-set_evosound.alt_banner_evobox_gold')">
                        </div>
                        <h3 class="set-evosound-banner_title">@lang('karaoke-set_evosound.banner_title1') EVOBOX Plus</h3>
                        <p class="set-evosound-banner_number">41 000+</p>
                        <p class="set-evosound-banner_title">@lang('karaoke-set_evosound.banner_title1_1')</p>
                        <p class="base_txt">@lang('karaoke-set_evosound.banner_txt2')</p>
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
                    <div class="set-evosound-banner_img set-evosound-banner_yellow flex_ai-c">
                        <div class="set-evosound-banner_evobox">
                            <img src="/images/karaoke-set/banner_evobox-plus.png" alt="EVOBOX">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('widgets.profit')

        <hr>

        @include('widgets.terms')

        @include('widgets.dealers')

@stop

@section('scripts')
    <link rel="preload" href="{{ mix('js/karaoke-set.min.js') }}" as="script">
    <script src="{{ mix('js/karaoke-set.min.js') }}"></script>
@stop
