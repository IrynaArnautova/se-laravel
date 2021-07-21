@extends('layout')

@section('head')
    <title>Evosound Bar</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <link rel="preload" href="{{ mix('css/bar.min.css') }}" as="style">
    <link href="{{ mix('css/bar.min.css') }}" rel="stylesheet">
@stop

@section('content')
    <main class="bar-main">
        <img src="/images/evosound/main.jpg" class="bar-main_img" alt="аудиосистема белая evosound bar">
        <div class="base_container base_row bar-main_detail">
            <div>
                <h1 class="bar-main_title">EvoSound Bar</h1>
                <p class="bar-main_subtitle">Первый караоке-саундбар</p>
                <div class="base_price-box">
                    <div class="base_price-old">111</div>
                    <div class="base_price-profit">выгода 11</div>
                </div>
                <div class="base_price-current">222</div>
                <div class="base_double ta-c">
                    <a href="javascript:;" class="base_double-btn base_double-dark">Купить</a>
                    <a href="javascript:;" class="base_double-btn base_double-light">Рассрочка 0%</a>
                </div>
            </div>
            <div class="bar-main_slider">
                <div class="base_row">
                    <a href="javascript:;" class="bar-main_btn bar-main_btn-black active" data-tab="barBlack">Черный</a>
                    <a href="javascript:;" class="bar-main_btn bar-main_btn-white" data-tab="barWhite">Жемчужный</a>
                    <a href="javascript:;" class="bar-main_bigger js_show-modal" data-modal="modalGallery">Увеличить</a>
                </div>
                <div class="bar-main_system active" id="barBlack">
                    <div class="bar-main_tab">
                        <img src="/images/evosound/slider-black-1.jpg" class="bar-main_tab-img barTab-1 active" id="" alt="лучшая аудиосистема evosound bar">
                        <img src="/images/evosound/slider-black-2.jpg" class="bar-main_tab-img barTab-2" alt="лучший сабвуфер черный evosound bar">
                        <img src="/images/evosound/slider-black-3.jpg" class="bar-main_tab-img barTab-3" alt="лучший сабвуфер черный evosound вид сзади bar">
                        <img src="/images/evosound/slider-black-4.jpg" class="bar-main_tab-img barTab-4" alt="лучшие беспроводные колонки evosound bar">
                        <img src="/images/evosound/slider-black-5.jpg" class="bar-main_tab-img barTab-5" alt="лучшие беспроводные колонки evosound задняя панель bar">
                    </div>
                    <div class="bar-main_tab-content">
                        <img src="/images/evosound/slider-black-sm-1.jpg" class="bar-main_tab-preview barTab-1 active" data-tab="barTab-1" alt="лучшая аудиосистема evosound bar">
                        <img src="/images/evosound/slider-black-sm-2.jpg" class="bar-main_tab-preview barTab-2" data-tab="barTab-2" alt="лучший сабвуфер черный evosound bar">
                        <img src="/images/evosound/slider-black-sm-3.jpg" class="bar-main_tab-preview barTab-3" data-tab="barTab-3" alt="лучший сабвуфер черный evosound вид сзади bar">
                        <img src="/images/evosound/slider-black-sm-4.jpg" class="bar-main_tab-preview barTab-4" data-tab="barTab-4" alt="лучшие беспроводные колонки evosound bar">
                        <img src="/images/evosound/slider-black-sm-5.jpg" class="bar-main_tab-preview barTab-5" data-tab="barTab-5" alt="лучшие беспроводные колонки evosound задняя панель bar">
                    </div>
                </div>
                <div class="bar-main_system" id="barWhite">
                    <div class="bar-main_tab">
                        <img src="/images/evosound/slider-white-1.jpg" class="bar-main_tab-img barTab-1 active" alt="лучшие аудиосистемы для дома">
                        <img src="/images/evosound/slider-white-2.jpg" class="bar-main_tab-img barTab-2" alt="саундбар для дома evosound">
                        <img src="/images/evosound/slider-white-3.jpg" class="bar-main_tab-img barTab-3" alt="саундбар для дома evosound задняя панель">
                        <img src="/images/evosound/slider-white-4.jpg" class="bar-main_tab-img barTab-4" alt="лучшие колонки evosound">
                        <img src="/images/evosound/slider-white-5.jpg" class="bar-main_tab-img barTab-5" alt="лучшие колонки evosound задняя панель">
                    </div>
                    <div class="bar-main_tab-content">
                        <img src="/images/evosound/slider-white-sm-1.jpg" class="bar-main_tab-preview barTab-1 active" data-tab="barTab-1" alt="лучшие аудиосистемы для дома">
                        <img src="/images/evosound/slider-white-sm-2.jpg" class="bar-main_tab-preview barTab-2" data-tab="barTab-2" alt="саундбар для дома evosound">
                        <img src="/images/evosound/slider-white-sm-3.jpg" class="bar-main_tab-preview barTab-3" data-tab="barTab-3" alt="саундбар для дома evosound задняя панель">
                        <img src="/images/evosound/slider-white-sm-4.jpg" class="bar-main_tab-preview barTab-4" data-tab="barTab-4" alt="лучшие колонки evosound">
                        <img src="/images/evosound/slider-white-sm-5.jpg" class="bar-main_tab-preview barTab-5" data-tab="barTab-5" alt="лучшие колонки evosound задняя панель">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="bar-overview">
        <a href="https://youtu.be/QSTgF2mr1qw" class="bar-overview_video" target="_blank">
            <img src="/images/evosound/bar-overview.jpg" alt="">
            <div class="bar-overview_video-inner">
                <h2 class="bar-overview_video-txt">Видеообзор<br>EvoSound Bar</h2>
                <p class="bar-overview_video-play">Смотреть видео</p>
            </div>
        </a>
    </section>

    <section class="bar-vat">
        <div class="base_container">
            <h2 class="bar-vat_title">450 Вт</h2>
            <p class="bar-vat_sound base_title">мощного, чистого,<br> насыщенного звука </p>
            <p class="bar-vat_txt">Динамики саундбара и сабвуфера созданы специально для караоке. <br> Они легко выдерживают резкие перепады и пиковые нагрузки живого вокала.</p>
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
                <h2 class="bar-connection_title base_title">Подключение через HDMI ARC</h2>
                <p class="bar-connection_txt">Наслаждайтесь чистым насыщенным звуком при просмотре любимых фильмов и сериалов на своём ТВ с технологией HDMI ARC.</p>
                <p class="bar-connection_attention">* Активно при поддержке HDMI ARC вашим ТВ. В настройках аудио необходимо выбрать «Передавать звук по HDMI (ARC)».</p>
            </div>
            <div>
                <div class="bar-connection_icon">
                    <img src="/images/evosound/ic-bluetooth.svg" alt="evosound bluetooth">
                </div>
                <h3 class="bar-connection_title base_title">Подключение через Bluetooth<sup>®</sup></h3>
                <p class="bar-connection_txt">Используйте Bluetooth для подключения смартфона, планшета или ТВ к EvoSound Bar.</p>
                <p class="bar-connection_attention">* Проверьте, поддерживает ли ваш ТВ протокол Bluetooth®. Возможна задержка звука. Не рекомендуется использовать в режиме «караоке».  </p>
            </div>
        </div>
    </section>

    <section class="bar-comfort">
        <img src="/images/evosound/backside-soundbar.jpg" class="bar-comfort_backside" alt="evosound backside">
        <div class="bar-comfort_inner base_container">
            <h2 class="bar-comfort_title base_title">Это удобно!</h2>
            <p class="bar-comfort_txt">Подключайте к саундбару одновременно два любых устройства (к примеру, караоке-систему и IPTV-приставку). Легко переключайтесь между устройствами при помощи пульта EvoSound Bar.</p>
            <p class="bar-comfort_4k">Cаундбар поддерживает передачу видеосигнала в формате UHD 4K 60 FPS.</p>
           <div class="bar-comfort_remote">
               <img src="/images/evosound/se-remote.png" alt="evosound remote">
           </div>
            <p class="bar-comfort_panel">Выбор источника воспроизведения</p>
        </div>
    </section>

    <section class="bar-wall">
        <div class="base_container">
            <img src="/images/evosound/wall.jpg" class="bar-wall_img" alt="evosound bar">
            <h2 class="base_title">Легко и красиво</h2>
            <p class="bar-wall_txt">Установите саундбар на стене под ТВ<br>при помощи креплений, которые входят в комплект</p>
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
                        <dt class="bar-specification_title">Спецификация <br>EvoSound Bar</dt>
                        <dd class="bar-specification_txt">Входная чувствительность / входное сопротивление: 400 мВ / 47 кΩ</dd>
                        <dd class="bar-specification_txt">7-полосный эквалайзер: 57 Гц / 134 Гц / 400 Гц / 1 кГц / 2,5 кГц / 6,3 кГц / 10 кГц) +/- 10 дБ</dd>
                        <dd class="bar-specification_txt">Общее гармоническое искажение: менее или равно 1%</dd>
                        <dd class="bar-specification_txt">Частотная характеристика: 20 Гц – 20 000 Гц (+/- 2 дБ)</dd>
                        <dd class="bar-specification_txt">Максимальная потребляемая мощность: 550 Вт</dd>
                        <dd class="bar-specification_txt">Напряжение питания: 220 В, 50 Гц / 60 Гц</dd>
                    </dl>
                    <a href="" class="bar-specification_link" target="_blank">Больше информации</a>
                </div>
                <div class="bar-specification_parametrs">
                    <div>
                        <p class="bar-specification_details">Cаундбар</p>
                        <p class="bar-specification_parametr"><b>Высота:</b> 107 мм</p>
                        <p class="bar-specification_parametr"><b>Длина:</b> 1210 мм</p>
                        <p class="bar-specification_parametr"><b>Ширина:</b> 126 мм</p>
                        <p class="bar-specification_parametr"><b>Вес:</b> 8,6 кг</p>
                    </div>
                    <div>
                        <p class="bar-specification_details">Cабвуфер</p>
                        <p class="bar-specification_parametr"><b>Высота:</b> 270 мм</p>
                        <p class="bar-specification_parametr"><b>Длина:</b> 385 мм</p>
                        <p class="bar-specification_parametr"><b>Ширина:</b> 249 мм</p>
                        <p class="bar-specification_parametr"><b>Вес:</b> 7,7 кг</p>
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
                    <div class="base_price-profit">выгода 11</div>
                </div>
                <div class="base_price-current">222</div>
                <div class="base_double ta-c">
                    <a href="javascript:;" class="base_double-btn base_double-dark">Купить</a>
                    <a href="javascript:;" class="base_double-btn base_double-light">Рассрочка 0%</a>
                </div>
            </div>
        </div>
        <div class="bar-set">
            <div>
                <p class="bar-set_title">Синергия звука для<br> лучшего домашнего<br> караоке</p>
                <a href="" class="bar-set_link" target="_blank">Подробнее о караоке-комплекте</a>
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
