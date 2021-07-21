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
            <p class="sphere-main_subtitle">True Stereo аудиосистема для караоке</p>
            <div class="base_price-box">
                <div class="base_price-old">111</div>
                <div class="base_price-profit">выгода 11</div>
            </div>
            <div class="base_price-current">11</div>
            <div class="base_double ta-c">
                <a href="javascript:;" class="base_double-btn base_double-dark">Купить</a>
                <a href="javascript:;" class="base_double-btn base_double-light">Рассрочка 0%</a>
            </div>
        </div>
        <div class="sphere-main_slider ">
            <div class="base_row">
                <a href="javascript:;" class="sphere-main_btn sphere-main_btn-black active" data-tab="sphereBlack">Черный</a>
                <a href="javascript:;" class="sphere-main_btn sphere-main_btn-white" data-tab="sphereWhite">Жемчужный</a>
                <a href="javascript:;" class="sphere-main_bigger js_show-modal" data-modal="modalGallery">Увеличить</a>
            </div>
            <div class="sphere-main_system active" id="sphereBlack">
                <div class="sphere-main_tab">
                    <img src="/images/sphere/slider-black-1.jpg" class="sphere-main_tab-img sphereTab-1 active" id="" alt="аудиосистема evosound sphere черный">
                    <img src="/images/sphere/slider-black-2.jpg" class="sphere-main_tab-img sphereTab-2" alt="аудиосистема evosound sphere черная с напольными покрытием">
                    <img src="/images/sphere/slider-black-3.jpg" class="sphere-main_tab-img sphereTab-3" alt="колонки черные аудиосистемы evosound sphere">
                    <img src="/images/sphere/slider-black-4.jpg" class="sphere-main_tab-img sphereTab-4" alt="колонка черная аудиосистемы evosound sphere">
                    <img src="/images/sphere/slider-black-5.jpg" class="sphere-main_tab-img sphereTab-6" alt="сабвуфер черный аудиосистемы evosound sphere">
                    <img src="/images/sphere/slider-black-6.jpg" class="sphere-main_tab-img sphereTab-5" alt="задняя панель черного сабвуфера аудиосистемы evosound sphere">
                </div>
                <div class="sphere-main_tab-content">
                    <img src="/images/sphere/slider-black-sm-1.jpg" class="sphere-main_tab-preview sphereTab-1 active" data-tab="sphereTab-1" alt="мощная аудиосистема для дома">
                    <img src="/images/sphere/slider-black-sm-2.jpg" class="sphere-main_tab-preview sphereTab-2" data-tab="sphereTab-2" alt="аудиосистемы для дома купить">
                    <img src="/images/sphere/slider-black-sm-3.jpg" class="sphere-main_tab-preview sphereTab-3" data-tab="sphereTab-3" alt="бюджетная аудиосистема для дома">
                    <img src="/images/sphere/slider-black-sm-4.jpg" class="sphere-main_tab-preview sphereTab-4" data-tab="sphereTab-4" alt="мощные аудиосистемы для дома">
                    <img src="/images/sphere/slider-black-sm-6.jpg" class="sphere-main_tab-preview sphereTab-6" data-tab="sphereTab-6" alt="самая лучшая аудиосистема для дома">
                    <img src="/images/sphere/slider-black-sm-5.jpg" class="sphere-main_tab-preview sphereTab-5" data-tab="sphereTab-5" alt="лучшие аудиосистемы для дома">
                </div>
            </div>
            <div class="sphere-main_system" id="sphereWhite">
                <div class="sphere_tab">
                    <img src="/images/sphere/slider-white-1.jpg" class="sphere-main_tab-img sphereTab-1 active" alt="аудиосистема evosound sphere белый">
                    <img src="/images/sphere/slider-white-2.jpg" class="sphere-main_tab-img sphereTab-2" alt="аудиосистема evosound sphere белая с напольными покрытием">
                    <img src="/images/sphere/slider-white-3.jpg" class="sphere-main_tab-img sphereTab-3" alt="колонки белые аудиосистемы evosound sphere">
                    <img src="/images/sphere/slider-white-4.jpg" class="sphere-main_tab-img sphereTab-4" alt="колонка белая аудиосистемы evosound sphere">
                    <img src="/images/sphere/slider-white-5.jpg" class="sphere-main_tab-img sphereTab-6" alt="сабвуфер белый аудиосистемы evosound sphere">
                    <img src="/images/sphere/slider-white-6.jpg" class="sphere-main_tab-img sphereTab-5"  alt="задняя панель белого сабвуфера аудиосистемы evosound sphere">
                </div>
                <div class="sphere_tab-content">
                    <img src="/images/sphere/slider-white-sm-1.jpg" class="sphere-main_tab-preview sphereTab-1 active" data-tab="sphereTab-1" alt="аудиосистема evosound sphere белый">
                    <img src="/images/sphere/slider-white-sm-2.jpg" class="sphere-main_tab-preview sphereTab-2" data-tab="sphereTab-2" alt="аудиосистема evosound sphere белая с напольными покрытием">
                    <img src="/images/sphere/slider-white-sm-3.jpg" class="sphere-main_tab-preview sphereTab-3" data-tab="sphereTab-3" alt="колонки белые аудиосистемы evosound sphere">
                    <img src="/images/sphere/slider-white-sm-4.jpg" class="sphere-main_tab-preview sphereTab-4" data-tab="sphereTab-4" alt="колонка белая аудиосистемы evosound sphere">
                    <img src="/images/sphere/slider-white-sm-5.jpg" class="sphere-main_tab-preview sphereTab-6" data-tab="sphereTab-6" alt="сабвуфер белый аудиосистемы evosound sphere">
                    <img src="/images/sphere/slider-white-sm-6.jpg" class="sphere-main_tab-preview sphereTab-5" data-tab="sphereTab-5" alt="задняя панель белого сабвуфера аудиосистемы evosound sphere">
                </div>
            </div>
        </div>
    </main>

    <section class="sphere-overview">
        <a href="https://youtu.be/dq52HDuxumk" class="sphere-overview_video" target="_blank">
            <img src="/images/sphere/sphere-overview.jpg" class="sphere-overview_video-img" alt="аудиосистема для дома evosound sphere ">
            <div class="sphere-overview_video-inner">
                <h2 class="sphere-overview_video-txt">Видеообзор<br>EvoSound Sphere 2.1</h2>
                <p class="sphere-overview_video-play flex_ai-c">Смотреть видео</p>
            </div>
        </a>
    </section>

    <section class="sphere-sound">
        <div class="sphere-sound_inner base_container">
            <div class="sphere-sound_title">
                <h2 class="base_title">Мощный, чистый стереозвук</h2>
                <p class="sphere-sound_description base_txt">Аудиосистема спроектирована и создана именно для караоке.<br>5-дюймовые коаксиальные динамики сателлитов и 8-дюймовый динамик сабвуфера выдерживают резкие перепады и пиковые нагрузки живого вокала, давая вам возможность насладиться любимым занятием — караоке.</p>
            </div>
            <div class="sphere-sound_images">
                <div>
                    <div class="sphere-sound_images-1">
                        <img src="/images/sphere/sound-1.png" alt="evosound power">
                    </div>
                    <p class="sphere-sound_txt">150 Вт</p>
                </div>
                <div class="sphere-sound_middle">
                    <div class="sphere-sound_images-2">
                        <img src="/images/sphere/sound-2.png" alt="evosound power">
                    </div>
                    <p class="sphere-sound_txt">120 Вт</p>
                </div>
                <div>
                    <div class="sphere-sound_images-2">
                        <img src="/images/sphere/sound-3.png" alt="evosound sphere колонка">
                    </div>
                    <p class="sphere-sound_txt">120 Вт</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sphere-connection">
        <h2 class="sphere-connection_title base_title">Простое подключение</h2>
        <p class="base_txt">Аудиосистему можно подключить через Bluetooth® или с помощью 3.5 мм (mini-Jack)</p>
        <div class="sphere-connection_img">
            <img src="/images/sphere/install.jpg" alt="evosound sphere install">
        </div>
    </section>

    <section class="sphere-decision">
        <div class="base_container">
            <h2 class="base_title ta-c">Гибкое решение для<br>любого интерьера </h2>
            <div class="sphere-decision_inner">
                <div class="sphere-decision_item">
                    <div class="sphere-decision_img">
                       <img src="/images/sphere/decision-1.png" alt="evosound install">
                    </div>
                    <p class="base_txt"><b>Легко установить</b></p>
                    <p class="sphere-decision_txt">Сателлиты фиксируются на креплениях при помощи магнитных контактов.</p>
                </div>
                <div class="sphere-decision_item">
                    <div class="sphere-decision_img">
                       <img src="/images/sphere/decision-2.png" alt="evosound install">
                    </div>
                    <p class="base_txt"><b>Не скользят и<br> не вибрируют </b></p>
                    <p class="sphere-decision_txt">В основании настольного и напольного крепления есть специальная резиновая опора, благодаря которой сателлиты крепко держатся на месте. </p>
                </div>
                <div class="sphere-decision_item">
                    <div class="sphere-decision_img">
                        <img src="/images/sphere/decision-3.png" alt="evosound sphere установка">
                    </div>
                    <p class="base_txt"><b>Регулируются наклоны</b></p>
                    <p class="sphere-decision_txt">Магнитные контакты позволяют регулировать наклон сателлитов по вертикали.</p>
                </div>
            </div>
            <div class="sphere-decision_view">
                <img src="/images/sphere/decision-4.jpg" class="sphere-decision_view-img" alt="evosound колонка черная">
                <img src="/images/sphere/decision-4-mob.jpg" class="sphere-decision_view-mob" alt="evosound колонка черная">
                <div class="sphere-decision_view-box">
                    <div class="sphere-decision_view-left">
                        <p class="base_txt"><b>Настольные крепления</b></p>
                        <p class="sphere-decision_view-mark ta-c">В комплекте</p>
                    </div>
                    <div class="sphere-decision_view-right">
                        <p class="sphere-decision_view-parametr"><b>Высота:</b> 215 мм</p>
                        <p class="sphere-decision_view-parametr"><b>Длина:</b> 180 мм</p>
                        <p class="sphere-decision_view-parametr"><b>Ширина:</b> 180 мм</p>
                        <p class="sphere-decision_view-parametr"><b>Вес:</b> 1,796 кг</p>
                    </div>
                </div>
            </div>
            <div class="sphere-decision_view">
                <img src="/images/sphere/decision-5.jpg" class="sphere-decision_view-img" alt="evosound sphere напольное крепление">
                <img src="/images/sphere/decision-5-mob.jpg" class="sphere-decision_view-mob" alt="evosound sphere напольное крепление">
                <div class="sphere-decision_view-box">
                    <div class="sphere-decision_view-left">
                        <p class="base_txt"><b>Напольные крепления</b></p>
                        <p class="base_txt sphere-decision_price">111</p>
                        <a href="javascript:;" class="sphere-decision_btn base_btn">Купить</a>
                    </div>
                    <div class="sphere-decision_view-right">
                        <p class="sphere-decision_view-parametr"><b>Высота:</b> 1130 мм</p>
                        <p class="sphere-decision_view-parametr"><b>Длина:</b> 215 мм</p>
                        <p class="sphere-decision_view-parametr"><b>Ширина:</b> 215 мм</p>
                        <p class="sphere-decision_view-parametr"><b>Вес:</b> 5,036 кг</p>
                    </div>
                </div>
            </div>
            <div class="sphere-decision_view">
                <img src="/images/sphere/decision-6.jpg" class="sphere-decision_view-img" alt="evosound колонка черная угол наклона">
                <img src="/images/sphere/decision-6-mob.jpg" class="sphere-decision_view-mob" alt="evosound колонка черная угол наклона">
                <div class="sphere-decision_view-box">
                    <div class="sphere-decision_view-left">
                        <p class="base_txt"><b>Настенные крепления</b></p>
                        <p class="base_txt sphere-decision_price">111</p>
                        <a href="javascript:;" class="sphere-decision_btn base_btn">Купить</a>
                    </div>
                    <div class="sphere-decision_view-right">
                        <p class="sphere-decision_view-parametr"><b>Высота:</b> 185 мм</p>
                        <p class="sphere-decision_view-parametr"><b>Длина:</b> 185 мм</p>
                        <p class="sphere-decision_view-parametr"><b>Ширина:</b> 180 мм</p>
                        <p class="sphere-decision_view-parametr"><b>Вес:</b> 1,179 кг</p>
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
                        <dt class="sphere-specification_title base_title">Спецификация <br>EvoSound Sphere</dt>
                        <dd class="base_txt">Входная чувствительность / входное сопротивление: 400 мВ / 47 кΩ</dd>
                        <dd class="base_txt">Общие гармонические искажения: ≤ 0,06%</dd>
                        <dd class="base_txt">Частотная характеристика: 26 ~ 20000 Гц (± 3 дБ) </dd>
                        <dd class="base_txt">Максимальная потребляемая мощность: 550 Вт</dd>
                        <dd class="base_txt">Напряжение питания: 220–240 В, 50 Гц </dd>
                    </dl>
                    <a href="" class="sphere-specification_link" target="_blank">Больше информации</a>
                </div>
                <div class="sphere-specification_parametrs">
                    <div>
                        <p class="sphere-specification_details">Сателлит</p>
                        <p class="sphere-specification_parametr"><b>Высота:</b> 180 мм</p>
                        <p class="sphere-specification_parametr"><b>Длина:</b> 180 мм</p>
                        <p class="sphere-specification_parametr"><b>Ширина:</b> 165 мм</p>
                        <p class="sphere-specification_parametr"><b>Вес:</b> 1,036 кг</p>
                    </div>
                    <div>
                        <p class="sphere-specification_details">Cабвуфер</p>
                        <p class="sphere-specification_parametr"><b>Высота:</b> 270 мм</p>
                        <p class="sphere-specification_parametr"><b>Длина:</b> 385 мм</p>
                        <p class="sphere-specification_parametr"><b>Ширина:</b> 249 мм</p>
                        <p class="sphere-specification_parametr"><b>Вес:</b> 7,7 кг</p>
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
                    <a href="javascript:;" class="base_double-btn base_double-dark">Купить</a>
                    <a href="javascript:;" class="base_double-btn base_double-light">Рассрочка 0%</a>
                </div>
            </div>
        </div>
        <div class="sphere-set">
            <div>
                <p class="sphere-set_title">Выгодная скидка</p>
                <p class="base_txt">При покупке акустики в комплекте</p>
                <a href="" class="sphere-set_link" target="_blank">Подробнее о комплекте</a>
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
