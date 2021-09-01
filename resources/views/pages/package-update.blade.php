@extends('layout')

@section('head')
    <title>Пакеты обновлений</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <link rel="preload" href="{{ mix('css/package-update.min.css') }}" as="style">
    <link href="{{ mix('css/package-update.min.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="for-desktop">
        <h1 class="comparison_title">Пакеты обновлений <a href="/songs-and-clips/">караоке-каталога</a><br> для систем Evolution</h1>
        <div class="comparison_subtitle">Заказать пакет обновлений вы можете выбрав его на этой странице или <a href="https://account.studio-evolution.com/login" class="comparison_subtitle-link" target="_blank">перейдя в личный кабинет</a></div>
        <section class="comparison base_scroll">
            <div class="comparison_row comparison_header">
                <div class="comparison_header-col base_scroll">
                    <div class="comparison_row-main-header">
                        <div class="comparison_row-main-title">Название пакета</div>
                    </div>
                    <div class="comparison_row-header">
                        <div class="comparison_row-header-img">
                            <img src="/images/update/ic-clubs.png" alt="evobox">
                        </div>
                        <div class="comparison_row-header-title">Клубный</div>
                        <div class="comparison_row-header-price">
                            111
                        </div>
                        <a href="javascript:;" class="comparison_row-btn base_purpure">Заказать</a>
                    </div>
                    <div class="comparison_row-header">
                        <div class="comparison_row-header-img">
                            <img src="/images/update/ic-year.png" alt="EVOBOX Plus">
                        </div>
                        <div class="comparison_row-header-title">1 год</div>
                        <div class="comparison_row-header-price">
                            111
                        </div>
                        <a href="javascript:;" class="comparison_row-btn base_blue">Заказать</a>
                    </div>
                    <div class="comparison_row-header">
                        <div class="comparison_row-header-img">
                            <img src="/images/update/ic-yesterday.png" alt="Evolution Pro2">
                        </div>
                        <div class="comparison_row-header-title">Вчерашний</div>
                        <div class="comparison_row-header-price">
                            111
                        </div>
                        <a href="javascript:;" class="comparison_row-btn base_red">Заказать</a>
                    </div>
                    <div class="comparison_row-header">
                        <div class="comparison_row-header-img">
                            <img src="/images/update/ic-month.png" alt="Lite2 Premium">
                        </div>
                        <div class="comparison_row-header-title">1 месяц</div>
                        <div class="comparison_row-header-price">
                           111
                        </div>
                        <a href="javascript:;" class="comparison_row-btn base_green">Заказать</a>
                    </div>
                </div>
            </div>
            <div class="comparison_row">
                <div class="comparison_row-main">Количество обновлений</div>
                <div class="comparison_row-item">12</div>
                <div class="comparison_row-item">12</div>
                <div class="comparison_row-item">13 и более</div>
                <div class="comparison_row-item">1</div>
            </div>
            <div class="comparison_row">
                <div class="comparison_row-main">Обновления доступны для караоке-систем</div>
                <a href="/karaoke-system/evolution-pro2/" class="comparison_row-item" target="_blank">Evolution Pro2</a>
                <div class="comparison_row-item comparison_row-long">
                    <a href="/karaoke-system/evolution-pro2/" target="_blank">Evolution Pro2</a>,
                    <a href="/karaoke-system/evolution-lite2/"  target="_blank">Evolution Lite2</a>,
                    <a href="/karaoke-system/evolution-compact-hd/"  target="_blank">Evolution Compact HD</a>,
                    <a href="/karaoke-system/evolution-home-hd/" target="_blank">Evolution Home HD</a>,
                    <a href="/karaoke-system/evolution-home-hd/" target="_blank">Evolution Home HD v2.0</a>
                </div>
            </div>
            <div class="comparison_row">
                <div class="comparison_row-main comparison_row-top">Самостоятельная online-загрузка и установка пользователем</div>
                <div class="comparison_row-item">
                    <div class="comparison_row-check">
                        <img src="/images/comparison/check.png">
                    </div>
                </div>
                <div class="comparison_row-item">
                    <div class="comparison_row-check">
                        <img src="/images/comparison/check.png">
                    </div>
                </div>
                <div class="comparison_row-item">
                    <div class="comparison_row-check">
                        <img src="/images/comparison/check.png">
                    </div>
                </div>
                <div class="comparison_row-item">
                    <div class="comparison_row-check">
                        <img src="/images/comparison/check.png">
                    </div>
                </div>
            </div>
            <div class="comparison_row">
                <div class="comparison_row-main">Загрузка и установка в сервисном центре компании «Studio Evolution»</div>
                <div class="comparison_row-item">
                    <div class="comparison_row-close">
                        <img src="/images/comparison/close.png">
                    </div>
                </div>
                <div class="comparison_row-item">
                    <div class="comparison_row-check">
                        <img src="/images/comparison/check.png">
                    </div>
                </div>
                <div class="comparison_row-item">
                    <div class="comparison_row-check">
                        <img src="/images/comparison/check.png">
                    </div>
                </div>
                <div class="comparison_row-item">
                    <div class="comparison_row-check">
                        <img src="/images/comparison/check.png">
                    </div>
                </div>
            </div>
            <div class="comparison_row js_unsticky">
                <div class="comparison_row-main">Online-загрузка и установка песен несколько раз в неделю по мере их изготовления в наших студиях</div>
                <div class="comparison_row-item">
                    <div class="comparison_row-check">
                        <img src="/images/comparison/check.png">
                    </div>
                </div>
                <div class="comparison_row-item">
                    <div class="comparison_row-check">
                        <img src="/images/comparison/check.png">
                    </div>
                </div>
                <div class="comparison_row-item">
                    <div class="comparison_row-check">
                        <img src="/images/comparison/check.png">
                    </div>
                </div>
                <div class="comparison_row-item">
                    <div class="comparison_row-check">
                        <img src="/images/comparison/check.png">
                    </div>
                </div>
            </div>

        </section>

        <a href="https://www.youtube.com/watch?v=NmsSLIYkodg" class="comparison_video" target="_blank">
            <img src="/images/update/video.png" class="comparison_video-img" alt="обновление караоке систем">
            <div>
                <div class="comparison_video-txt">Обзор пакетов обновлений<br>караоке-систем</div>
                <div class="comparison_video-look">смотреть</div>
            </div>
        </a>

        <section class="comparison_form">
            <div class="comparison_form-inner">
                <div class="comparison_form-img">
                    <img src="/images/update/any-question.png"  alt="поем караоке">
                </div>
                <div class="comparison_form-wrapper">
                    <h2 class="comparison_form-title">Есть вопросы ?</h2>
                    <div class="comparison_form-txt">Получите бесплатную<br> консультацию</div>
                    <a href="tel:+380443793151" class="comparison_form-tel" target="_blank">+38 (044) 379 31 51</a>
                    <a href="mailto:buy_ua@studio-evolution.com" class="comparison_form-email" target="_blank">buy_ua@studio-evolution.com</a>
                </div>
                <form>
                    <label class="comparison_form-label">
                        <input class="comparison_form-input" type="text" name="name" placeholder="@lang('lang.general.name')">
                    </label>
                    <label class="comparison_form-label">
                        <input class="comparison_form-input" type="tel" name="phone" placeholder="@lang('lang.general.phone')">
                    </label>
                    <label class="comparison_form-label">
                        <textarea class="comparison_form-input" rows="4" name="msg" placeholder="@lang('lang.general.question')"></textarea>
                    </label>
                    <p class="comparison_form-policy">
                        @lang('comparison.form_policy')
                        <a>@lang('lang.general.privacy_policy')</a> @lang('lang.general.and')
                        <a>@lang('lang.general.user_agreement')</a>
                    </p>
                    <label>
                        <input class="comparison_form-btn" type="submit" value="@lang('lang.general.send')">
                    </label>
                </form>
            </div>
        </section>

        <section class="comparison-specialist">
            <div class="comparison-specialist_inner">
                <div class="comparison-specialist_title">Установка специалистом</div>
                <div class="comparison-specialist_txt">Хотите, чтобы обновление установил наш специалист? Мы можем приехать к вам в любое удобное для вас время</div>
                <a href="javascript:;" class="comparison-specialist_btn">Вызвать специалиста</a>
            </div>
        </section>
    </div>

    <!-- for mobile -->

    <div class="for-mobile">
        <h2 class="comparison_title">Пакеты обновлений караоке-каталога  для систем Evolution</h2>
        <section class="comparison">
            <div class="js_package-pagination swiper-pagination"></div>
            <div class="js_package-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="comparison_row-header">
                            <div class="comparison_row-header-img">
                                <img src="/images/update/ic-clubs.png" alt="evobox">
                            </div>
                            <div class="comparison_row-header-title">Клубный</div>
                            <div class="comparison_row-header-price">111</div>
                            <a href="javascript:;" class="comparison_row-btn base_purpure">Заказать</a>
                        </div>
                        <div class="comparison_row-item">12</div>
                        <a href="/karaoke-system/evolution-pro2/" class="comparison_row-item comparison_row-high" target="_blank">Evolution Pro2</a>
                        <div class="comparison_row-item">
                            <div class="comparison_row-check">
                                <img src="/images/comparison/check.png">
                            </div>
                        </div>
                        <div class="comparison_row-item">
                            <div class="comparison_row-check">
                                <img src="/images/comparison/check.png">
                            </div>
                        </div>
                        <div class="comparison_row-item">
                            <div class="comparison_row-check">
                                <img src="/images/comparison/check.png">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="comparison_row-header">
                            <div class="comparison_row-header-img">
                                <img src="/images/update/ic-year.png" alt="evobox plus">
                            </div>
                            <div class="comparison_row-header-title">1 год</div>
                            <div class="comparison_row-header-price">111</div>
                            <a href="javascript:;" class="comparison_row-btn base_blue">Заказать</a>
                        </div>
                        <div class="comparison_row-item">12</div>
                        <div class="comparison_row-item comparison_row-high">
                            <a href="/karaoke-system/evolution-pro2/" target="_blank">Evolution Pro2</a>,
                            <a href="/karaoke-system/evolution-lite2/"  target="_blank">Evolution Lite2</a>,
                            <a href="/karaoke-system/evolution-compact-hd/"  target="_blank">Evolution Compact HD</a>,
                            <a href="/karaoke-system/evolution-home-hd/" target="_blank">Evolution Home HD</a>,
                            <a href="/karaoke-system/evolution-home-hd/" target="_blank">Evolution Home HD v2.0</a>
                        </div>
                        <div class="comparison_row-item">
                            <div class="comparison_row-check">
                                <img src="/images/comparison/check.png">
                            </div>
                        </div>
                        <div class="comparison_row-item">
                            <div class="comparison_row-check">
                                <img src="/images/comparison/check.png">
                            </div>
                        </div>
                        <div class="comparison_row-item">
                            <div class="comparison_row-check">
                                <img src="/images/comparison/check.png">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="comparison_row-header">
                            <div class="comparison_row-header-img">
                                <img src="/images/update/ic-yesterday.png" alt="Evolution Pro2">
                            </div>
                            <div class="comparison_row-header-title">Вчерашний</div>
                            <div class="comparison_row-header-price">111</div>
                            <a href="javascript:;" class="comparison_row-btn base_red">Заказать</a>
                        </div>
                        <div class="comparison_row-item">13 и более</div>
                        <div class="comparison_row-item comparison_row-high">
                            <a href="/karaoke-system/evolution-pro2/" target="_blank">Evolution Pro2</a>,
                            <a href="/karaoke-system/evolution-lite2/"  target="_blank">Evolution Lite2</a>,
                            <a href="/karaoke-system/evolution-compact-hd/"  target="_blank">Evolution Compact HD</a>,
                            <a href="/karaoke-system/evolution-home-hd/" target="_blank">Evolution Home HD</a>,
                            <a href="/karaoke-system/evolution-home-hd/" target="_blank">Evolution Home HD v2.0</a>
                        </div>
                        <div class="comparison_row-item">
                            <div class="comparison_row-check">
                                <img src="/images/comparison/check.png">
                            </div>
                        </div>
                        <div class="comparison_row-item">
                            <div class="comparison_row-check">
                                <img src="/images/comparison/check.png">
                            </div>
                        </div>
                        <div class="comparison_row-item">
                            <div class="comparison_row-check">
                                <img src="/images/comparison/check.png">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="comparison_row-header">
                            <div class="comparison_row-header-img">
                                <img src="/images/update/ic-month.png" alt="Lite2 Premium">
                            </div>
                            <div class="comparison_row-header-title">1 месяц</div>
                            <div class="comparison_row-header-price">111</div>
                            <a href="javascript:;" class="comparison_row-btn base_green">Заказать</a>
                        </div>
                        <div class="comparison_row-item">1</div>
                        <div class="comparison_row-item comparison_row-high">
                            <a href="/karaoke-system/evolution-pro2/" target="_blank">Evolution Pro2</a>,
                            <a href="/karaoke-system/evolution-lite2/"  target="_blank">Evolution Lite2</a>,
                            <a href="/karaoke-system/evolution-compact-hd/"  target="_blank">Evolution Compact HD</a>,
                            <a href="/karaoke-system/evolution-home-hd/" target="_blank">Evolution Home HD</a>,
                            <a href="/karaoke-system/evolution-home-hd/" target="_blank">Evolution Home HD v2.0</a>
                        </div>
                        <div class="comparison_row-item">
                            <div class="comparison_row-check">
                                <img src="/images/comparison/check.png">
                            </div>
                        </div>
                        <div class="comparison_row-item">
                            <div class="comparison_row-check">
                                <img src="/images/comparison/check.png">
                            </div>
                        </div>
                        <div class="comparison_row-item">
                            <div class="comparison_row-check">
                                <img src="/images/comparison/check.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comparison_row-block">
                <div class="comparison_row-main">Количество обновлений</div>
                <div class="comparison_row-main comparison_row-main-high">Обновления доступны для караоке-систем</div>
                <div class="comparison_row-main">Самостоятельная online-загрузка и установка пользователем</div>
                <div class="comparison_row-main">Загрузка и установка в сервисном центре компании «Studio Evolution»</div>
                <div class="comparison_row-main">Online-загрузка и установка песен несколько раз в неделю по мере их изготовления в наших студиях</div>
            </div>
        </section>

        <a href="https://www.youtube.com/watch?v=NmsSLIYkodg" class="comparison_video" target="_blank">
            <div class="comparison_video-txt">Обзор пакетов обновлений<br>караоке-систем</div>
            <div class="comparison_video-look">смотреть</div>
        </a>

        <section class="comparison_form">
            <div class="comparison_form-inner">
                <img src="/images/comparison/men.png" class="comparison_form-img" alt="men">
                <h2 class="comparison_form-title">Есть<br> вопросы ?</h2>
                <div class="comparison_form-txt">Получите бесплатную консультацию</div>
                <a href="tel:+380443793151" class="comparison_form-tel" target="_blank">+38 (044) 379 31 51</a>
                <a href="mailto:buy_ua@studio-evolution.com" class="comparison_form-email" target="_blank">buy_ua@studio-evolution.com</a>
                <form>
                    <label class="comparison_form-label">
                        <input class="comparison_form-input" type="text" name="name" placeholder="@lang('lang.general.name')">
                    </label>
                    <label class="comparison_form-label">
                        <input class="comparison_form-input" type="tel" name="phone" placeholder="@lang('lang.general.phone')">
                    </label>
                    <label class="comparison_form-label">
                        <textarea class="comparison_form-input" rows="4" name="msg" placeholder="@lang('lang.general.question')"></textarea>
                    </label>
                    <p class="comparison_form-policy">
                        @lang('comparison.form_policy')
                        <a>@lang('lang.general.privacy_policy')</a> @lang('lang.general.and')
                        <a>@lang('lang.general.user_agreement')</a>
                    </p>
                    <label>
                        <input class="comparison_form-btn" type="submit" value="@lang('lang.general.send')">
                    </label>
                </form>
            </div>
        </section>

        <section class="comparison-specialist">
            <div class="comparison-specialist_title">Установка специалистом</div>
            <div class="comparison-specialist_txt">Хотите, чтобы обновление установил наш специалист? Мы можем приехать к вам в любое удобное для вас время</div>
            <a href="javascript:;" class="comparison-specialist_btn">Вызвать специалиста</a>
        </section>
    </div>
@stop

@section('scripts')
    <link rel="preload" href="{{ mix('js/package-update.min.js') }}" as="script">
    <script src="{{ mix('js/package-update.min.js') }}"></script>
@stop
