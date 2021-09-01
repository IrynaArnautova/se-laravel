@extends('layout')

@section('head')
    <title>Караоке комплеты</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <link rel="preload" href="{{ mix('css/karaoke-set_acoustic.min.css') }}" as="style">
    <link href="{{ mix('css/karaoke-set_acoustic.min.css') }}" rel="stylesheet">
@stop

@section('content')
    <main class="set-evosound-main">
        <img src="/images/karaoke-set/EVOBOX+mic+SoundBar-RU.jpg" class="set-evosound-main_img" alt="">
        <div class="base_container">
            <h1 class="set-evosound-main_title">
                <a href="/komplekty-dlya-karaoke/">Караоке-комплект</a>
                <br>со стереосистемой
            </h1>
            <div class="base_txt">Полный караоке-комплект для домашнего караоке от Studio Evolution. Включает в себя профессиональную караоке-систему, два цифровых беспроводных микрофона SE&nbsp;•&nbsp;200D и акустическую стереосистему для караоке EvoSound Sphere.</div>
            <div class="set-evosound-main_row js_parent-tab flex_ai-c_jc-fe">
                <div class="set-evosound-main_btn set-evosound-main_btn-black js_show-tab active" data-tab="barBlackAll">@lang('lang.general.black')</div>
                <div class="set-evosound-main_btn set-evosound-main_btn-white js_show-tab" data-tab="barWhiteAll">@lang('lang.general.white')</div>
            </div>
            <div class="base_tab">
                <div class="js_parent-tab">
                    <img src="/images/karaoke-set/with-all-black.jpg" class="base_img-tab js_tab-content active" id="barBlackAll" alt="">
                    <img src="/images/karaoke-set/with-all-white.jpg" class="base_img-tab js_tab-content" id="barWhiteAll" alt="">
                    <img src="/images/karaoke-set/with-all-black-mob.jpg" class="base_img-tab-mob js_tab-content barBlackAll active" alt="">
                    <img src="/images/karaoke-set/with-all-white-mob.jpg" class="base_img-tab-mob js_tab-content barWhiteAll"  alt="">
                </div>
                <div class="js_parent-tab">
                    <div  class="base_tab-img js_tab-content active" id="micGrey">
                        <img src="/images/karaoke-set/evobox-mic-grey.png" alt="караоке с микрофом evobox серый">
                    </div>
                    <div class="base_tab-img js_tab-content" id="micRed">
                        <img src="/images/karaoke-set/evobox-mic-red.png"  alt="караоке с микрофом evobox красный">
                    </div>
                    <div class="base_tab-img js_tab-content" id="micBlue">
                        <img src="/images/karaoke-set/evobox-mic-blue.png"  alt="караоке с микрофом evobox синий">
                    </div>
                    <div class="base_tab-img js_tab-content" id="micGold">
                        <img src="/images/karaoke-set/evobox-mic-gold.png"  alt="караоке с микрофом evobox золотой">
                    </div>
                    <div class="base_tab-img js_tab-content" id="micSilver">
                        <img src="/images/karaoke-set/evobox-mic-silver.png"  alt="караоке с микрофом evobox серебрянный">
                    </div>
                    <div class="base_tab-img js_tab-content" id="micBlack">
                        <img src="/images/karaoke-set/evobox-mic-black.png"  alt="караоке с микрофом evobox черный">
                    </div>
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
                    <p class="base_subtitle">EVOBOX<br> с микрофонами<br>и стереосистемой</p>
                    <p class="base_txt">Караоке-система, 2 цифровых беспроводных микрофона и акустическая система для караоке EvoSound Sphere.</p>
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
                    <p class="base_subtitle">EVOBOX Plus <br> с микрофонами<br>и стереосистемой</p>
                    <p class="base_txt">Караоке-система, 2 цифровых беспроводных микрофона и акустическая система для караоке EvoSound Sphere.</p>
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
           <h2 class="set-evosound-include_title">Что входит в караоке-комплект?</h2>
           <div class="set-evosound-include_tabs flex_ai-c">
               <a href="javascript:;" class="set-evosound-include_tab js_show-tab active" data-tab="systemBlock">Караоке</a>
               <a href="javascript:;" class="set-evosound-include_tab js_show-tab" data-tab="micBlock">Микрофоны</a>
               <a href="javascript:;" class="set-evosound-include_tab js_show-tab" data-tab="evosoundBlock">Стереосистема</a>
           </div>
           <div class="set-evosound-include_tab-content js_tab-content active" id="systemBlock">
               <a href="javascript:;" class="set-evosound-include_img" target="_blank">
                   <img src="/images/karaoke-set/EvoBox-set.jpg" alt="EvoBox-complect">
               </a>
               <h3 class="set-evosound-include_content-title">Премиальная караоке-система<br> EVOBOX или EVOBOX Plus</h3>
               <div class="set-evosound-include_list flex_jc-sb">
                   <div>
                       <ul>
                           <li>Корпус из авиационного алюминия в одном из 6 цветов</li>
                           <li>Караоке в 4К</li>
                           <li>Эффект LiveFX</li>
                           <li>Бесшумная работа</li>
                           <li>2000 предустановленных песен</li>
                           <li>100 любых песен для бесплатной загрузки</li>
                           <li>Покупка любимых песен из караоке-каталога на 80000+ композиций</li>
                           <li>Управление с планшета или телефона</li>
                           <li>Интеграция с умным домом</li>
                           <li>Запись выступлений в студийном качестве</li>
                       </ul>
                       <a href="javascript:;" class="set-evosound-include_link" target="_blank">@lang('lang.general.recognize_link')</a>
                   </div>
                   <div class="set-evosound-include_list-specification">
                       <div>
                           <p class="set-evosound-include_list-specification-details">EVOBOX</p>
                           <p class="set-evosound-include_list-specification-parametr"><b>2 000+ песен</b><br> предуставлено</p>
                           <p class="set-evosound-include_list-specification-parametr"><b>+100 песен</b><br> для загрузки бесплатно</p>
                           <p class="set-evosound-include_list-specification-parametr"><b>120 ГБ</b> SSD-накопитель</p>
                       </div>
                       <div>
                           <p class="sset-evosound-include_list-specification-details">EVOBOX Plus</p>
                           <p class="set-evosound-include_list-specification-parametr"><b>41 000+ песен</b><br> предуставлено</p>
                           <p class="set-evosound-include_list-specification-parametr"><b>оригинальные видеоклипы </b><br> к топовым хитам</p>
                           <p class="set-evosound-include_list-specification-parametr"><b>960 ГБ</b> SSD-накопитель</p>
                       </div>
                   </div>
               </div>
           </div>
           <div class="set-evosound-include_tab-content js_tab-content" id="micBlock">
               <a href="javascript:;" class="set-evosound-include_img " target="_blank">
                   <img src="/images/karaoke-set/mic-set.jpg" alt="EvoSound-complect">
               </a>
               <h3 class="set-evosound-include_content-title">Беспроводные цифровые<br> микрофоны SE&nbsp;•&nbsp;200D</h3>
               <div class="set-evosound-include_list">
                   <ul>
                       <li>До 9 часов непрерывной работы</li>
                       <li>Радиус действия — до 40 метров</li>
                       <li>Быстрая зарядка через USB Type-C</li>
                       <li>Кристально чистое звучание вашего голоса</li>
                       <li>Задержка аудиосигнала всего 3 мс</li>
                       <li>Минимальный уровень шумовых помех и искажений</li>
                       <li>Защищенный аудиосигнал</li>
                       <li>Простое и быстрое подключение</li>
                       <li>Металлический корпус</li>
                       <li>Первоклассные комплектующие</li>
                   </ul>
                   <a href="javascript:;" class="set-evosound-include_link" target="_blank">@lang('lang.general.recognize_link')</a>
               </div>
           </div>
           <div class="set-evosound-include_tab-content js_tab-content" id="evosoundBlock">
               <a href="javascript:;" class="set-evosound-include_img" target="_blank">
                   <img src="/images/karaoke-set/audio.jpg" alt="EvoBox-complect">
               </a>
               <h3 class="set-evosound-include_content-title">Караоке-стереосистема EvoSound Sphere</h3>
               <div class="set-evosound-include_list">
                   <ul>
                       <li>Созданы специально для караоке. Выдерживают резкие перепады и пиковые нагрузки живого вокала.</li>
                       <li>Мощность сабвуфера — 150 Вт</li>
                       <li>Мощность сателлитов — 120 Вт × 2</li>
                       <li>Коаксиальные динамики сателлитов</li>
                       <li>Раскрытие звука на 270˚</li>
                       <li>Подключение с помощью 3,5 мм кабеля (mini-jack)</li>
                       <li>Подключение через Bluetooth®</li>
                       <li>2 цвета корпуса на выбор</li>
                       <li>Настольное крепление в комплекте</li>
                       <li>Возможность напольного и настенного монтажа с помощью дополнительных креплений</li>
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


