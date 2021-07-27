@extends('layout')

@section('head')
    <title>Сравнение караоке-систем Studio Evolution – Studio Evolution</title>
    <meta name="description" content="Сравнение профессиональных караоке-систем Studio Evolution">
    <meta name="keywords" content="">
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <link rel="preload" href="{{ mix('css/comparison.min.css') }}" as="style">
    <link href="{{ mix('css/comparison.min.css') }}" rel="stylesheet">
@stop

@section('content')
    {{--Для десктопа версия--}}
    <div class="for-desktop">
        <section class="comparison">
            <h1 class="comparison_title ta-c">@lang('comparison.title') Studio Evolution</h1>
            <div class="flex comparison_header">
                <div class="comparison_header-col">
                    <div class="comparison_main-header">
                        <p class="comparison_main-title">@lang('comparison.main_title')</p>
                        <label class="comparison_main-radio js_all-parametrs">@lang('comparison.main_allparameters')
                            <input type="radio" name="radio1" checked="checked">
                            <span class="comparison_main-checkmark"></span>
                        </label>
                        <label class="comparison_main-radio js_difference-parametrs">@lang('comparison.main_difference')
                            <input type="radio" name="radio1">
                            <span class="comparison_main-checkmark"></span>
                        </label>
                    </div>
                    <div class="comparison_header-item comparison_evobox">
                        <a href="/karaoke-system/" target="_blank">
                            <div class="comparison_header-img"><img src="/images/comparison/evobox.png" alt="evobox"></div>
                            <p class="comparison_header-title">EVOBOX</p>
                        </a>
                        <div class="comparison_header-icon home_icon"><span class="comparison_header-home"></span>@lang('comparison.header_home')</div>
                        <div class="comparison_header-price">111</div>
                        <a href="javascript:;" class="comparison_header-btn ta-c">@lang('lang.general.dark')</a>
                        <a href="javascript:;" class="comparison_header-credit">@lang('lang.general.light')</a>
                    </div>
                    <div class="comparison_header-item comparison_plus">
                        <a href="/karaoke-system/evobox/" target="_blank">
                            <div class="comparison_header-img">
                                <img src="/images/comparison/plus.png" alt="EVOBOX Plus">
                            </div>
                            <p class="comparison_header-title">EVOBOX Plus</p>
                        </a>
                        <div class="flex">
                            <p class="comparison_header-icon home_icon"><span class="comparison_header-home"></span>@lang('comparison.header_home')</p>
                            <p class="comparison_header-icon vip_icon"><span class="comparison_header-vip"></span>@lang('comparison.header_vip')</p>
                        </div>
                        <div class="comparison_header-price">111</div>
                        <a href="javascript:;" class="comparison_header-btn">@lang('lang.general.dark')</a>
                        <a href="javascript:;" class="comparison_header-credit">@lang('lang.general.light')</a>
                    </div>
                    <div class="comparison_header-item pro2 comparison_pro2">
                        <a href="/karaoke-system/evolution-pro2/" target="_blank">
                            <div class="comparison_header-img">
                                <img src="/images/comparison/pro2.png" alt="Evolution Pro2">
                            </div>
                            <p class="comparison_header-title">Evolution Pro2</p>
                        </a>
                        <p class="comparison_header-icon club_icon"><span class="comparison_header-club"></span>@lang('comparison.header_club')</p>
                        <div class="comparison_header-price">111</div>
                        <a href="javascript:;" class="comparison_header-btn">@lang('lang.general.dark')</a>
                        <a href="javascript:;" class="comparison_header-credit">@lang('lang.general.light')</a>
                    </div>
                    <div class="comparison_header-item lite2 comparison_lite2">
                        <a href="/karaoke-system/evolution-lite2/" target="_blank">
                            <div class="comparison_header-img">
                                <img src="/images/comparison/lite2.png" alt="Lite2 Premium">
                            </div>
                            <p class="comparison_header-title">Lite2 Premium</p>
                        </a>
                        <div class="flex">
                            <p class="comparison_header-icon home_icon"><span class="comparison_header-home"></span>@lang('comparison.header_home')</p>
                            <p class="comparison_header-icon vip_icon"><span class="comparison_header-vip"></span>@lang('comparison.header_vip')</p>
                        </div>
                        <div class="comparison_header-price">111</div>
                        <a href="javascript:;" class="comparison_header-btn">@lang('lang.general.dark')</a>
                        <a href="javascript:;" class="comparison_header-credit">@lang('lang.general.light')</a>
                    </div>
                </div>
            </div>
            <div class="flex">
                <p class="comparison_main">@lang('comparison.list1')</p>
                <p class="comparison_item">@lang('comparison.list1_item1')</p>
                <p class="comparison_item">@lang('comparison.list1_item1')</p>
                <p class="comparison_item">@lang('comparison.list1_item2')</p>
                <p class="comparison_item">@lang('comparison.list1_item2')</p>
            </div>
            <div class="flex">
                <p class="comparison_main">@lang('comparison.list2')</p>
                <p class="comparison_item">@lang('comparison.list2_item1')</p>
                <p class="comparison_item">@lang('comparison.list2_item1')</p>
                <p class="comparison_item">@lang('comparison.list2_item2')</p>
                <p class="comparison_item">@lang('comparison.list2_item2')</p>
            </div>
            <div class="flex no-difference_row">
                <p class="comparison_main">@lang('comparison.list3')</p>
                <p class="comparison_item">2</p>
                <p class="comparison_item">2</p>
                <p class="comparison_item">2</p>
                <p class="comparison_item">2</p>
            </div>
            <div class="flex no-difference_row">
                <p class="comparison_main">@lang('comparison.list4')</p>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
            </div>
            <div class="flex no-difference_row">
                <p class="comparison_main comparison_top">@lang('comparison.list5')</p>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
            </div>
            <div class="flex no-difference_row">
                <p class="comparison_main">@lang('comparison.list6')</p>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
            </div>
            <div class="flex">
                <p class="comparison_main">@lang('comparison.list7')</p>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_close"></div>
                <div class="comparison_item comparison_close"></div>
            </div>
            <div class="flex">
                <p class="comparison_main">@lang('comparison.list8')</p>
                <p class="comparison_item">@lang('comparison.list8_item1')</p>
                <p class="comparison_item">@lang('comparison.list8_item1')</p>
                <p class="comparison_item">@lang('comparison.list8_item2')</p>
                <p class="comparison_item">@lang('comparison.list8_item1')</p>
            </div>
            <div class="flex no-difference_row">
                <p class="comparison_main">@lang('comparison.list9')</p>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
            </div>
            <div class="flex no-difference_row">
                <p class="comparison_main">@lang('comparison.list10')</p>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
            </div>
            <div class="flex">
                <p class="comparison_main">Wi-Fi</p>
                <p class="comparison_item comparison_check">@lang('comparison.list11_item')</p>
                <p class="comparison_item comparison_check">@lang('comparison.list11_item')</p>
                <div class="comparison_item comparison_close"></div>
                <div class="comparison_item comparison_check"></div>
            </div>
            <div class="flex">
                <p class="comparison_main">@lang('comparison.list12')</p>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_close"></div>
                <div class="comparison_item comparison_close"></div>
            </div>
            <div class="flex">
                <p class="comparison_main">@lang('comparison.list13')</p>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_close"></div>
                <div class="comparison_item comparison_check"></div>
            </div>
            <div class="flex no-difference_row">
                <p class="comparison_main">@lang('comparison.list14')</p>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
            </div>
            <div class="flex">
                <p class="comparison_main">@lang('comparison.list15')</p>
                <p class="comparison_item">@lang('comparison.list15_item1')</p>
                <p class="comparison_item">@lang('comparison.list15_item1')</p>
                <p class="comparison_item">@lang('comparison.list15_item2')</p>
                <p class="comparison_item">@lang('comparison.list15_item3')</p>
            </div>
            <div class="flex">
                <p class="comparison_main">@lang('comparison.list16')</p>
                <p class="comparison_item">120 @lang('comparison.list16_item1')</p>
                <p class="comparison_item">960 @lang('comparison.list16_item1')</p>
                <p class="comparison_item">2 @lang('comparison.list16_item2')</p>
                <p class="comparison_item">2 @lang('comparison.list16_item2')</p>
            </div>
            <div class="flex">
                <p class="comparison_main">USB</p>
                <p class="comparison_item">3.0</p>
                <p class="comparison_item">3.0</p>
                <p class="comparison_item">2.0, 3.0</p>
                <p class="comparison_item">3.0</p>
            </div>
            <div class="flex no-difference_row">
                <p class="comparison_main">@lang('comparison.list17')</p>
                <div class="comparison_item comparison_close"></div>
                <div class="comparison_item comparison_close"></div>
                <div class="comparison_item comparison_close"></div>
                <div class="comparison_item comparison_close"></div>
            </div>
            <div class="flex">
                <p class="comparison_main">@lang('comparison.list18')</p>
                <p class="comparison_item">Asahi Kasei AK4430</p>
                <p class="comparison_item">Asahi Kasei AK4430</p>
                <p class="comparison_item">PCM1792</p>
                <p class="comparison_item">Asahi Kasei Microdevices AK4490EQ</p>
            </div>
            <div class="flex ">
                <p class="comparison_main">@lang('comparison.list19')</p>
                <p class="comparison_item">@lang('lang.general.analog') TRS 6.3-TRS 6.3 balanced stereo – 2 @lang('lang.general.things')</p>
                <p class="comparison_item">@lang('lang.general.analog') TRS 6.3-TRS 6.3 balanced stereo – 2 @lang('lang.general.things')</p>
                <p class="comparison_item">@lang('lang.general.analog') TRS 6.3-TRS 6.3 balanced stereo – 2 @lang('lang.general.things')</p>
                <p class="comparison_item">@lang('lang.general.analog') TRS 6.3 balanced/ unbalanced – 2 @lang('lang.general.things')</p>
            </div>
            <div class="flex">
                <p class="comparison_main">@lang('comparison.list20')</p>
                <p class="comparison_item">@lang('lang.general.analog') RCA – 2 @lang('lang.general.things')</p>
                <p class="comparison_item">@lang('lang.general.analog') RCA – 2 @lang('lang.general.things')</p>
                <p class="comparison_item">@lang('lang.general.analog') TRS 6.3-TRS 6.3 balanced stereo – 2 @lang('lang.general.things')</p>
                <p class="comparison_item">@lang('lang.general.analog') RCA – 2 @lang('lang.general.things')</p>
            </div>
            <div class="flex">
                <p class="comparison_main">@lang('comparison.list21')</p>
                <p class="comparison_item">HDMI</p>
                <p class="comparison_item">HDMI</p>
                <p class="comparison_item">HDMI, DVI, VGA, Composite (5 @lang('lang.general.things'))</p>
                <p class="comparison_item">HDMI</p>
            </div>
            <div class="flex">
                <p class="comparison_main">@lang('comparison.list22')</p>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_close"></div>
                <div class="comparison_item comparison_check"></div>
            </div>
            <div class="flex">
                <p class="comparison_main">@lang('comparison.list23')</p>
                <div class="comparison_item comparison_close"></div>
                <div class="comparison_item comparison_close"></div>
                <div class="comparison_item comparison_check"></div>
                <div class="comparison_item comparison_check"></div>
            </div>
            <div class="flex js_unsticky">
                <p class="comparison_main">@lang('comparison.list24'), @lang('lang.general.size')</p>
                <p class="comparison_item">198×49×198</p>
                <p class="comparison_item">198×49×198</p>
                <p class="comparison_item">434×166×404</p>
                <p class="comparison_item">200×x56×200</p>
            </div>
            <div class="flex no-difference_row">
                <p class="comparison_main">@lang('comparison.list25_1') @lang('lang.general.weight')<br>@lang('comparison.list25_2') @lang('lang.general.weight')</p>
                <p class="comparison_item"><br>1,14</p>
                <p class="comparison_item"><br>1,14</p>
                <p class="comparison_item">10,8<br> 12,5</p>
                <p class="comparison_item">1,49<br>4,2</p>
            </div>
        </section>

        <section class="comparison_form">
            <div class="comparison_form-inner">
                <div class="comparison_form-img">
                    <img src="/images/comparison/men.png" alt="men">
                </div>
                <div class="comparison_form-wrapper">
                    <h2 class="comparison_form-title">@lang('comparison.form_title')</h2>
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
    </div>

    {{--Для мобильного версия--}}
    <div class="for-mobile">
        <h2 class="comparison_title ta-c">@lang('comparison.title') Evolution</h2>
        <div class="comparison_main-header">
            <p class="comparison_main-title">@lang('comparison.main_title')</p>
            <label class="comparison_main-radio js_all-parametrs">@lang('comparison.main_allparameters')
                <input type="radio" checked="checked" name="radio2">
                <span class="comparison_main-checkmark"></span>
            </label>
            <label class="comparison_main-radio js_difference-parametrs">@lang('comparison.main_difference')
                <input type="radio" name="radio2">
                <span class="comparison_main-checkmark"></span>
            </label>
        </div>
        <section class="comparison">
            <div class="js_comparison-mobile swiper-container">
                <div class="swiper-pagination js_comparison-pagination"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="comparison_slide">
                            <div class="comparison_header">
                                <a href="/karaoke-system/" target="_blank">
                                    <div class="comparison_header-img">
                                        <img src="/images/comparison/evobox-mob.png" alt="@lang('comparison.header_img')">
                                    </div>
                                    <p class="comparison_header-title">EVOBOX</p>
                                </a>
                                <div class="flex_jc-c">
                                    <div class="comparison_header-icon home_icon"><span class="comparison_header-home"></span></div>
                                </div>
                                <div class="comparison_header-price">111</div>
                                <div class="comparison_header-btn">@lang('lang.general.dark')</div>
                                <div class="comparison_header-credit">@lang('lang.general.light')</div>
                            </div>
                            <p class="comparison_item">@lang('comparison.list1_item1')</p>
                            <p class="comparison_item">@lang('comparison.list2_item1')</p>
                            <p class="comparison_item no-difference_row">2</p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item comparison_check"></p>
                            <p class="comparison_item">@lang('comparison.list8_item1')</p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item comparison_check"> @lang('comparison.list11_item')</p>
                            <p class="comparison_item comparison_check"></p>
                            <p class="comparison_item comparison_check"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item">@lang('comparison.list15_item1')</p>
                            <p class="comparison_item">120 @lang('comparison.list16_item1')</p>
                            <p class="comparison_item">3.0</p>
                            <p class="comparison_item no-difference_row comparison_close"></p>
                            <p class="comparison_item">Asahi Kasei AK4430</p>
                            <p class="comparison_item">@lang('lang.general.analog') TRS 6.3-TRS 6.3 balanced stereo – 2 @lang('lang.general.things')</p>
                            <p class="comparison_item">@lang('lang.general.analog') RCA – 2 @lang('lang.general.things')</p>
                            <p class="comparison_item">HDMI</p>
                            <p class="comparison_item comparison_check"></p>
                            <p class="comparison_item comparison_close"></p>
                            <p class="comparison_item">198×49×198</p>
                            <p class="comparison_item"><br>1,14</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="comparison_slide">
                            <div class="comparison_header">
                                <a href="/karaoke-system/evobox/" target="_blank">
                                    <div class="comparison_header-img">
                                        <img src="/images/comparison/plus-mob.png" alt="evobox plus">
                                    </div>
                                    <p class="comparison_header-title">EVOBOX Plus</p>
                                </a>
                                <div class="flex_jc-c">
                                    <div class="comparison_header-icon home_icon"><span class="comparison_header-home"></span></div>
                                    <div class="comparison_header-icon vip_icon"><span class="comparison_header-vip"></span></div>
                                </div>
                                <div class="comparison_header-price">111</div>
                                <div class="comparison_header-btn">@lang('lang.general.dark')</div>
                                <div class="comparison_header-credit">@lang('lang.general.light')</div>
                            </div>
                            <p class="comparison_item">@lang('comparison.list1_item1')</p>
                            <p class="comparison_item">@lang('comparison.list2_item1')</p>
                            <p class="comparison_item no-difference_row">2</p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item comparison_check"></p>
                            <p class="comparison_item">@lang('comparison.list8_item1')</p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item comparison_check"> @lang('comparison.list11_item')</p>
                            <p class="comparison_item comparison_check"></p>
                            <p class="comparison_item comparison_check"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item">@lang('comparison.list15_item1')</p>
                            <p class="comparison_item">960 @lang('comparison.list16_item1')</p>
                            <p class="comparison_item">3.0</p>
                            <p class="comparison_item no-difference_row comparison_close"></p>
                            <p class="comparison_item">Asahi Kasei AK4430</p>
                            <p class="comparison_item">@lang('lang.general.analog') TRS 6.3-TRS 6.3 balanced stereo – 2 @lang('lang.general.things')</p>
                            <p class="comparison_item">@lang('lang.general.analog') RCA – 2 @lang('lang.general.things')</p>
                            <p class="comparison_item">HDMI</p>
                            <p class="comparison_item comparison_check"></p>
                            <p class="comparison_item comparison_close"></p>
                            <p class="comparison_item">198×49×198</p>
                            <p class="comparison_item"><br>1,14</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="comparison_slide">
                            <div class="comparison_header pro2">
                                <a href="/karaoke-system/evolution-pro2/" target="_blank">
                                    <div class="comparison_header-img">
                                        <img src="/images/comparison/pro2.png" alt="Evolution Pro2">
                                    </div>
                                    <p class="comparison_header-title">Evolution Pro2</p>
                                </a>
                                <div class="flex_jc-c">
                                    <div class="comparison_header-icon club_icon"><span class="comparison_header-club"></span></div>
                                </div>
                                <div class="comparison_header-price">111</div>
                                <div class="comparison_header-btn">@lang('lang.general.dark')</div>
                                <div class="comparison_header-credit">@lang('lang.general.light')</div>
                            </div>
                            <p class="comparison_item">@lang('comparison.list1_item2')</p>
                            <p class="comparison_item">@lang('comparison.list2_item2')</p>
                            <p class="comparison_item no-difference_row">2</p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item comparison_close"></p>
                            <p class="comparison_item">@lang('comparison.list8_item2')</p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item comparison_close"></p>
                            <p class="comparison_item comparison_close"></p>
                            <p class="comparison_item comparison_close"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item">@lang('comparison.list15_item2')</p>
                            <p class="comparison_item">2 @lang('comparison.list16_item2')</p>
                            <p class="comparison_item">2.0, 3.0</p>
                            <p class="comparison_item no-difference_row comparison_close"></p>
                            <p class="comparison_item">PCM1792</p>
                            <p class="comparison_item">@lang('lang.general.analog') TRS 6.3-TRS 6.3 balanced stereo – 2 @lang('lang.general.things')</p>
                            <p class="comparison_item">@lang('lang.general.analog') TRS 6.3-TRS 6.3 balanced stereo – 2 @lang('lang.general.things')</p>
                            <p class="comparison_item">HDMI, DVI, VGA, Composite (5 @lang('lang.general.things'))</p>
                            <p class="comparison_item comparison_close"></p>
                            <p class="comparison_item comparison_check"></p>
                            <p class="comparison_item">434×166×404</p>
                            <p class="comparison_item">10,8<br>12,5</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="comparison_slide">
                            <div class="comparison_header lite2">
                                <a href="/karaoke-system/evolution-lite2/" target="_blank">
                                    <div class="comparison_header-img">
                                        <img src="/images/comparison/lite2-mob.png" alt="Lite2 Premium">
                                    </div>
                                    <p class="comparison_header-title">Lite2 Premium</p>
                                </a>
                                <div class="flex_jc-c">
                                    <div class="comparison_header-icon home_icon"><span class="comparison_header-home"></span></div>
                                    <div class="comparison_header-icon vip_icon"><span class="comparison_header-vip"></span></div>
                                </div>
                                <div class="comparison_header-price">111</div>
                                <div class="comparison_header-btn">@lang('lang.general.dark')</div>
                                <div class="comparison_header-credit">@lang('lang.general.light')</div>
                            </div>
                            <p class="comparison_item">@lang('comparison.list1_item2')</p>
                            <p class="comparison_item">@lang('comparison.list2_item2')</p>
                            <p class="comparison_item no-difference_row">2</p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item comparison_close"></p>
                            <p class="comparison_item">@lang('comparison.list8_item1')</p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item comparison_check"></p>
                            <p class="comparison_item comparison_close"></p>
                            <p class="comparison_item comparison_check"></p>
                            <p class="comparison_item no-difference_row comparison_check"></p>
                            <p class="comparison_item">@lang('comparison.list15_item3')</p>
                            <p class="comparison_item">2 @lang('comparison.list16_item2')</p>
                            <p class="comparison_item">3.0</p>
                            <p class="comparison_item no-difference_row comparison_close"></p>
                            <p class="comparison_item">Asahi Kasei Microdevices AK4490EQ</p>
                            <p class="comparison_item">@lang('lang.general.analog') TRS 6.3 balanced/ unbalanced – 2 @lang('lang.general.things')</p>
                            <p class="comparison_item">@lang('lang.general.analog') RCA – 2 @lang('lang.general.things')</p>
                            <p class="comparison_item">HDMI</p>
                            <p class="comparison_item comparison_check"></p>
                            <p class="comparison_item comparison_check"></p>
                            <p class="comparison_item">200×x56×200</p>
                            <p class="comparison_item">1,49<br>4,2</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comparison_block">
                <p class="comparison_main">@lang('comparison.list1')</p>
                <p class="comparison_main">@lang('comparison.list2')</p>
                <p class="comparison_main no-difference_row">@lang('comparison.list3')</p>
                <p class="comparison_main no-difference_row">@lang('comparison.list4')</p>
                <p class="comparison_main no-difference_row">@lang('comparison.list5')</p>
                <p class="comparison_main no-difference_row">@lang('comparison.list6')</p>
                <p class="comparison_main">@lang('comparison.list7')</p>
                <p class="comparison_main">@lang('comparison.list8')</p>
                <p class="comparison_main no-difference_row">@lang('comparison.list9')</p>
                <p class="comparison_main no-difference_row">@lang('comparison.list10')</p>
                <p class="comparison_main">Wi-Fi</p>
                <p class="comparison_main">@lang('comparison.list12')</p>
                <p class="comparison_main">@lang('comparison.list13')</p>
                <p class="comparison_main no-difference_row">@lang('comparison.list14')</p>
                <p class="comparison_main">@lang('comparison.list15')</p>
                <p class="comparison_main">@lang('comparison.list16')</p>
                <p class="comparison_main">USB</p>
                <p class="comparison_main no-difference_row">@lang('comparison.list17')</p>
                <p class="comparison_main">@lang('comparison.list18')</p>
                <p class="comparison_main">@lang('comparison.list19')</p>
                <p class="comparison_main">@lang('comparison.list20')</p>
                <p class="comparison_main">@lang('comparison.list21')</p>
                <p class="comparison_main">@lang('comparison.list22')</p>
                <p class="comparison_main">@lang('comparison.list23')</p>
                <p class="comparison_main">@lang('comparison.list24'), @lang('lang.general.size')</p>
                <p class="comparison_main">@lang('comparison.list25_1') @lang('lang.general.weight')<br>@lang('comparison.list25_2') @lang('lang.general.weight')</p>
            </div>
        </section>

        <section class="comparison_form">
            <div class="comparison_form-inner">
                <h2 class="comparison_form-title">@lang('comparison.form_title')</h2>
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
    </div>
@stop

@section('scripts')
    <link rel="preload" href="{{ mix('js/comparison.min.js') }}" as="script">
    <script src="{{ mix('js/comparison.min.js') }}"></script>
@stop
