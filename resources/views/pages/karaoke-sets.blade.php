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
    <div class="sets_page">
        <main class="sets base_container">
            <h1 class="base_title">Караоке-комплекты <br>с микрофонами</h1>
            <div class="base_tab">
                <img src="/images/karaoke-set/with-mic.jpg" class="base_img"  alt="микрофон для караоке купить">
                <img src="/images/karaoke-set/with-mic-mob.jpg" class="base_img-mob"  alt="микрофон купить для караоке">
                <img src="/images/karaoke-set/evobox-grey.png" class="base_tab-img active" id="micGrey" alt="evobox серый">
                <img src="/images/karaoke-set/evobox-red.png" class="base_tab-img" id="micRed" alt="evobox красный">
                <img src="/images/karaoke-set/evobox-blue.png" class="base_tab-img" id="micBlue" alt="evobox синий">
                <img src="/images/karaoke-set/evobox-gold.png" class="base_tab-img" id="micGold" alt="evobox золотой">
                <img src="/images/karaoke-set/evobox-silver.png" class="base_tab-img" id="micSilver" alt="evobox серебрянный">
                <img src="/images/karaoke-set/evobox-black.png" class="base_tab-img" id="micBlack" alt="evobox черный">
            </div>
            <div class="base_tab-content">
                <img src="/images/karaoke-set/preview-grey.jpg" class="base_tab-preview active" data-tab="micGrey" alt="купить evobox серый">
                <img src="/images/karaoke-set/preview-red.jpg" class="base_tab-preview" data-tab="micRed" alt="купить evobox красный">
                <img src="/images/karaoke-set/preview-blue.jpg" class="base_tab-preview" data-tab="micBlue" alt="купить evobox синий">
                <img src="/images/karaoke-set/preview-gold.jpg" class="base_tab-preview" data-tab="micGold" alt="купить evobox золотой">
                <img src="/images/karaoke-set/preview-silver.jpg" class="base_tab-preview" data-tab="micSilver" alt="купить evobox серебрянный">
                <img src="/images/karaoke-set/preview-black.jpg" class="base_tab-preview" data-tab="micBlack" alt="купить evobox черный">
            </div>
            <div class="sets_inner">
                <div class="sets_col">
                    <h3 class="base_subtitle">EVOBOX<br> с микрофонами</h3>
                    <a href="karaoke-komplekty-s-mikrofonami/" class="base_link">Узнать больше</a>
                    <p class="base_txt">Караоке-система и 2 цифровых беспроводных микрофона SE • 200D.</p>
                    <br>
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
                <div class="sets_col">
                    <h3 class="base_subtitle">EVOBOX Plus <br> с микрофонами</h3>
                    <a href="karaoke-komplekty-s-mikrofonami/" class="base_link">Узнать больше</a>
                    <p class="base_txt">Караоке-система и 2 цифровых беспроводных микрофона SE • 200D.</p>
                    <br>
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
        </main>



        <section class="sets base_container">
            <h2 class="base_title">Караоке-комплекты <br>с саундбаром</h2>
            <div class="evosound_row">
                <div class="evosound_btn evosound_btn-black active" data-tab="bar-Black">Черный</div>
                <div class="evosound_btn evosound_btn-white" data-tab="bar-White">Жемчужный</div>
            </div>
            <div class="base_tab sets_sab">
                <img src="/images/karaoke-set/with-sab-black.jpg" class="base_img bar-Black active" alt="evosound bar черный">
                <img src="/images/karaoke-set/with-sab-white.jpg" class="base_img bar-White"alt="evosound bar белый">
                <img src="/images/karaoke-set/with-sab-black-mob.jpg" class="base_img-mob bar-Black active" alt="купить evosound bar черный">
                <img src="/images/karaoke-set/with-sab-white-mob.jpg" class="base_img-mob bar-White" alt="купить evosound bar белый">

                <img src="/images/karaoke-set/evobox-grey.png" class="base_tab-img active" id="sabGrey" alt="evobox evolution серый">
                <img src="/images/karaoke-set/evobox-red.png" class="base_tab-img" id="sabRed" alt="evobox evolution красный">
                <img src="/images/karaoke-set/evobox-blue.png" class="base_tab-img" id="sabBlue" alt="evobox evolution синий">
                <img src="/images/karaoke-set/evobox-gold.png" class="base_tab-img" id="sabGold" alt="evobox evolution золотой">
                <img src="/images/karaoke-set/evobox-silver.png" class="base_tab-img" id="sabSilver" alt="evobox evolution серебрянный">
                <img src="/images/karaoke-set/evobox-black.png" class="base_tab-img" id="sabBlack" alt="evobox evolution черный">
            </div>
            <div class="base_tab-content">
                <img src="/images/karaoke-set/preview-grey.jpg" class="base_tab-preview active" data-tab="sabGrey" alt="купить evobox evolution серый">
                <img src="/images/karaoke-set/preview-red.jpg" class="base_tab-preview" data-tab="sabRed" alt="купить evobox evolution красный">
                <img src="/images/karaoke-set/preview-blue.jpg" class="base_tab-preview" data-tab="sabBlue" alt="купить evobox evolution синий">
                <img src="/images/karaoke-set/preview-gold.jpg" class="base_tab-preview" data-tab="sabGold" alt="купить evobox evolution золотой">
                <img src="/images/karaoke-set/preview-silver.jpg" class="base_tab-preview" data-tab="sabSilver" alt="купить evobox evolution серебрянный">
                <img src="/images/karaoke-set/preview-black.jpg" class="base_tab-preview" data-tab="sabBlack" alt="купить evobox evolution черный">
            </div>
            <div class="sets_inner">
                <div class="sets_col">
                    <h3 class="base_subtitle">EVOBOX<br> с микрофонами<br>и саундбаром</h3>
                    <a href="karaoke-komplekty-s-saundbarom/" class="base_link">Узнать больше</a>
                    <p class="base_txt"><a href ='/'>Караоке</a>-система, 2 цифровых беспроводных микрофона и акустическая система для караоке EvoSound Bar.</p>
                    <br>
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
                <div class="sets_col">
                    <h3 class="base_subtitle">EVOBOX Plus <br>с микрофонами <br>и саундбаром</h3>
                    <a href="karaoke-komplekty-s-saundbarom/" class="base_link">Узнать больше</a>
                    <p class="base_txt">Караоке-система, 2 цифровых беспроводных микрофона и акустическая система для караоке EvoSound Bar.</p>
                    <br>
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
        </section>

        <section class="sets base_container">
            <h2 class="base_title">Караоке-комплекты <br>со стереосистемой</h2>
            <div class="evosound_row">
                <div class="evosound_btn evosound_btn-black active" data-tab="bar-Black-All">Черный</div>
                <div class="evosound_btn evosound_btn-white" data-tab="bar-White-All">Жемчужный</div>
            </div>
            <div class="base_tab sets_all">
                <img src="/images/karaoke-set/with-all-black.jpg" class="base_img bar-Black-All active" alt="аудиосистема evosound bar черный">
                <img src="/images/karaoke-set/with-all-white.jpg" class="base_img bar-White-All" alt="аудиосистема evosound bar белый">
                <img src="/images/karaoke-set/with-all-black-mob.jpg" class="base_img-mob bar-Black-All active" alt="evosound bar черный">
                <img src="/images/karaoke-set/with-all-white-mob.jpg" class="base_img-mob bar-White-All"  alt="evosound bar белый">
                <img src="/images/karaoke-set/evobox-mic-grey.png" class="base_tab-img active" id="allGrey" alt="караоке evobox серый">
                <img src="/images/karaoke-set/evobox-mic-red.png" class="base_tab-img" id="allRed" alt="караоке evobox черный">
                <img src="/images/karaoke-set/evobox-mic-blue.png" class="base_tab-img" id="allBlue" alt="караоке evobox синий">
                <img src="/images/karaoke-set/evobox-mic-gold.png" class="base_tab-img" id="allGold" alt="караоке evobox золотой">
                <img src="/images/karaoke-set/evobox-mic-silver.png" class="base_tab-img" id="allSilver" alt="караоке evobox серебро">
                <img src="/images/karaoke-set/evobox-mic-black.png" class="base_tab-img" id="allBlack" alt="караоке evobox черный">
            </div>
            <div class="base_tab-content">
                <img src="/images/karaoke-set/preview-grey.jpg" class="base_tab-preview active" data-tab="allGrey" alt="">
                <img src="/images/karaoke-set/preview-red.jpg" class="base_tab-preview" data-tab="allRed" alt="">
                <img src="/images/karaoke-set/preview-blue.jpg" class="base_tab-preview" data-tab="allBlue" alt="">
                <img src="/images/karaoke-set/preview-gold.jpg" class="base_tab-preview" data-tab="allGold" alt="">
                <img src="/images/karaoke-set/preview-silver.jpg" class="base_tab-preview" data-tab="allSilver" alt="">
                <img src="/images/karaoke-set/preview-black.jpg" class="base_tab-preview" data-tab="allBlack" alt="">
            </div>
            <div class="sets_inner">
                <div class="sets_col">
                    <h3 class="base_subtitle">EVOBOX<br> с микрофонами<br>и стереосистемой</h3>
                    <a href="karaoke-komplekt-so-stereosistemoj/" class="base_link">Узнать больше</a>
                    <p class="base_txt">Караоке-система, 2 цифровых беспроводных микрофона и акустическая система для караоке EvoSound Sphere.</p>
                    <br>
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
                <div class="sets_col">
                    <h3 class="base_subtitle">EVOBOX Plus <br> с микрофонами<br>и стереосистемой</h3>
                    <a href="karaoke-komplekt-so-stereosistemoj/" class="base_link">Узнать больше</a>
                    <p class="base_txt">Караоке-система, 2 цифровых беспроводных микрофона и акустическая система для караоке EvoSound Sphere.</p>
                    <br>
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
        </section>
    </div>
@stop

@section('scripts')
    <link rel="preload" href="{{ mix('js/karaoke-sets.min.js') }}" as="script">
    <script src="{{ mix('js/karaoke-sets.min.js') }}"></script>
@stop
