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
        <h1 class="comparison_title">@lang('package-update.comparison_title1') <a href="/songs-and-clips/">@lang('package-update.comparison_title2')</a><br> @lang('package-update.comparison_title3')</h1>
        <div class="comparison_subtitle">@lang('package-update.comparison_subtitle1') <a href="https://account.studio-evolution.com/login" class="comparison_subtitle-link" target="_blank">@lang('package-update.comparison_subtitle2')</a></div>
        <section class="comparison base_scroll">
            <div class="comparison_row comparison_header">
                <div class="comparison_header-col base_scroll">
                    <div class="comparison_row-main-header">
                        <div class="comparison_row-main-title">@lang('package-update.comparison_row_main_title')</div>
                    </div>
                    <div class="comparison_row-header">
                        <div class="comparison_row-header-img">
                            <img src="/images/update/ic-clubs.png" alt="evobox">
                        </div>
                        <div class="comparison_row-header-title">@lang('package-update.comparison_row_heade_title')</div>
                        <div class="comparison_row-header-price">
                            111
                        </div>
                        <a href="javascript:;" class="comparison_row-btn base_purpure">@lang('package-update.comparison_row_btn')</a>
                    </div>
                    <div class="comparison_row-header">
                        <div class="comparison_row-header-img">
                            <img src="/images/update/ic-year.png" alt="EVOBOX Plus">
                        </div>
                        <div class="comparison_row-header-title">1 @lang('package-update.comparison_row_main_title2')</div>
                        <div class="comparison_row-header-price">
                            111
                        </div>
                        <a href="javascript:;" class="comparison_row-btn base_blue">@lang('package-update.comparison_row_btn')</a>
                    </div>
                    <div class="comparison_row-header">
                        <div class="comparison_row-header-img">
                            <img src="/images/update/ic-yesterday.png" alt="Evolution Pro2">
                        </div>
                        <div class="comparison_row-header-title">@lang('package-update.comparison_row_main_title3')</div>
                        <div class="comparison_row-header-price">
                            111
                        </div>
                        <a href="javascript:;" class="comparison_row-btn base_red">@lang('package-update.comparison_row_btn')</a>
                    </div>
                    <div class="comparison_row-header">
                        <div class="comparison_row-header-img">
                            <img src="/images/update/ic-month.png" alt="Lite2 Premium">
                        </div>
                        <div class="comparison_row-header-title">1 @lang('package-update.comparison_row_main_title3')</div>
                        <div class="comparison_row-header-price">
                           111
                        </div>
                        <a href="javascript:;" class="comparison_row-btn base_green">@lang('package-update.comparison_row_btn')</a>
                    </div>
                </div>
            </div>
            <div class="comparison_row">
                <div class="comparison_row-main">@lang('package-update.comparison_row_main')</div>
                <div class="comparison_row-item">12</div>
                <div class="comparison_row-item">12</div>
                <div class="comparison_row-item">13 @lang('package-update.comparison_row_item')</div>
                <div class="comparison_row-item">1</div>
            </div>
            <div class="comparison_row">
                <div class="comparison_row-main">@lang('package-update.comparison_row_main2')</div>
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
                <div class="comparison_row-main comparison_row-top">@lang('package-update.comparison_row_main3')</div>
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
                <div class="comparison_row-main">@lang('package-update.comparison_row_main4')</div>
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
                <div class="comparison_row-main">@lang('package-update.comparison_row_main5')</div>
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
            <img src="/images/update/video.png" class="comparison_video-img" alt="lang('package-update.alt_video')">
            <div>
                <div class="comparison_video-txt">@lang('package-update.comparison_video_txt')</div>
                <div class="comparison_video-look">@lang('package-update.comparison_video_look')</div>
            </div>
        </a>

        <section class="comparison_form">
            <div class="comparison_form-inner">
                <div class="comparison_form-img">
                    <img src="/images/update/any-question.png"  alt="lang('package-update.alt_form_img')">
                </div>
                <div class="comparison_form-wrapper">
                    <h2 class="comparison_form-title">@lang('package-update.comparison_form_title')</h2>
                    <div class="comparison_form-txt">@lang('package-update.comparison_form_txt')</div>
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
                <div class="comparison-specialist_title">@lang('package-update.comparison_specialist_title')</div>
                <div class="comparison-specialist_txt">@lang('package-update.comparison_specialist_txt')</div>
                <a href="javascript:;" class="comparison-specialist_btn">@lang('package-update.comparison_specialist_btn')</a>
            </div>
        </section>
    </div>

    <!-- for mobile -->

    <div class="for-mobile">
        <h2 class="comparison_title">@lang('package-update.comparison_title_mob')</h2>
        <section class="comparison">
            <div class="js_package-pagination swiper-pagination"></div>
            <div class="js_package-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="comparison_row-header">
                            <div class="comparison_row-header-img">
                                <img src="/images/update/ic-clubs.png" alt="evobox">
                            </div>
                            <div class="comparison_row-header-title">@lang('package-update.comparison_row_heade_title')</div>
                            <div class="comparison_row-header-price">111</div>
                            <a href="javascript:;" class="comparison_row-btn base_purpure">@lang('package-update.comparison_row_btn')</a>
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
                            <div class="comparison_row-header-title">1 @lang('package-update.comparison_row_main_title2')</div>
                            <div class="comparison_row-header-price">111</div>
                            <a href="javascript:;" class="comparison_row-btn base_blue">@lang('package-update.comparison_row_btn')</a>
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
                            <div class="comparison_row-header-title">@lang('package-update.comparison_row_main_title3')</div>
                            <div class="comparison_row-header-price">111</div>
                            <a href="javascript:;" class="comparison_row-btn base_red">@lang('package-update.comparison_row_btn')</a>
                        </div>
                        <div class="comparison_row-item">13 @lang('package-update.comparison_row_item')</div>
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
                            <div class="comparison_row-header-title">1 @lang('package-update.comparison_row_main_title3')</div>
                            <div class="comparison_row-header-price">111</div>
                            <a href="javascript:;" class="comparison_row-btn base_green">@lang('package-update.comparison_comparison_row_btnrow_item')</a>
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
                <div class="comparison_row-main">@lang('package-update.comparison_row_main')</div>
                <div class="comparison_row-main comparison_row-main-high">@lang('package-update.comparison_row_main2')</div>
                <div class="comparison_row-main">@lang('package-update.comparison_row_main3')</div>
                <div class="comparison_row-main">@lang('package-update.comparison_row_main4')</div>
                <div class="comparison_row-main">@lang('package-update.comparison_row_main5')</div>
            </div>
        </section>

        <a href="https://www.youtube.com/watch?v=NmsSLIYkodg" class="comparison_video" target="_blank">
            <div class="comparison_video-txt">@lang('package-update.comparison_video_txt')</div>
            <div class="comparison_video-look">@lang('package-update.comparison_video_look')</div>
        </a>

        <section class="comparison_form">
            <div class="comparison_form-inner">
                <img src="/images/comparison/men.png" class="comparison_form-img" alt="men">
                <h2 class="comparison_form-title">@lang('package-update.comparison_form_title_mob')</h2>
                <div class="comparison_form-txt">@lang('package-update.comparison_form_txt')</div>
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
            <div class="comparison-specialist_title">@lang('package-update.comparison_specialist_title')</div>
            <div class="comparison-specialist_txt">@lang('package-update.comparison_specialist_txt')</div>
            <a href="javascript:;" class="comparison-specialist_btn">@lang('package-update.comparison_specialist_btn')</a>
        </section>
    </div>
@stop

@section('scripts')
    <link rel="preload" href="{{ mix('js/package-update.min.js') }}" as="script">
    <script src="{{ mix('js/package-update.min.js') }}"></script>
@stop
