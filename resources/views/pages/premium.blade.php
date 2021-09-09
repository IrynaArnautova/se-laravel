@extends('layout')

@section('head')
    <title>Evosound Bar</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <link rel="preload" href="{{ mix('css/premium.min.css') }}" as="style">
    <link href="{{ mix('css/premium.min.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="premium">
        <section class="premium-main">
            <h2 class="premium-main_title lazytext">EVOBOX™ Premium</h2>
            <div class="premium-main_subtitle js_main-subtitle lazytext">
                <span class="blue-color">Hi-End</span> <?php _e('караоке','my'); ?><br>
            </div>
            <img src="/wp-content/themes/html5blank-master/images/premium/main.jpg" class="premium-main_img" alt="EVOBOX">
            <div class="premium-main_inner">
                <div class="base_price-box">
                    <div class="base_price-old"><?php echo do_shortcode( '[countryPriceOld id="58" project_id="11"] [countryPriceCurrencyFull]' );?></div>
                    <div class="base_price-profit"><?php _e('выгода','my'); ?> <?php echo do_shortcode( '[countryPrice id="58" project_id="11" profit="1"] [countryPriceCurrencyFull]' );?></div>
                </div>
                <div class="premium-main_price"><?php echo do_shortcode( '[countryPrice id="58" project_id="11"] [countryPriceCurrencyFull]' );?></div>
                <div class="premium-main_buttons js_main-subtitle lazytext">
                    <?php
                    if(ICL_LANGUAGE_CODE == 'ru'){
                        echo do_shortcode( '[vc_button title="Купить" form_id="219"]' );
                    } elseif (ICL_LANGUAGE_CODE == 'en'){
                        echo do_shortcode( '[vc_button title="Buy" form_id="221"]' );
                    } elseif(ICL_LANGUAGE_CODE == 'uk'){
                        echo do_shortcode( '[vc_button title="Придбати" form_id="220"]' );
                    }
                    ?>
                    <?php
                    if(ICL_LANGUAGE_CODE == 'ru'){
                        echo do_shortcode( '[vc_button title="Рассрочка 0%" el_class="premium-main_credit" form_id="180"]' );
                    } elseif (ICL_LANGUAGE_CODE == 'en'){
                        echo do_shortcode( '[vc_button title="Credit 0%" el_class="premium-main_credit" form_id="179"]' );
                    } elseif(ICL_LANGUAGE_CODE == 'uk'){
                        echo do_shortcode( '[vc_button title="Розстрочка 0%" el_class="premium-main_credit" form_id="181"]' );
                    }
                    ?>
                </div>
            </div>
            <div class="premium-main_limit">*<?php _e('лимитированная серия','my'); ?></div>
        </section>
        <section class="premium-format base_container lazytext">
            <h2 class="base_title"><?php _e('Превосходство формата','my'); ?></h2>
            <div class="base_txt premium-format_subtitle">
                <?php _e('Только в EVOBOX Premium тысячи караоке-фонограмм представлены в качестве Lossless Audio','my'); ?>
                <span class="white-color"><?php _e('FLAC','my'); ?></span>.
            </div>
            <div>
                <div class="premium-format_inner base_scroll js_move-scroll">
                    <div>
                        <div class="premium-format_col">
                            <div class="premium-format_label premium-format_standart">Standart</div>
                            <div>
                                <svg class="premium-format_img" width="555" height="333" viewBox="0 0 555 333" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0" mask-type="alpha"  x="0" y="0" width="555" height="333">
                                        <rect width="555" height="333" fill="#C4C4C4"/>
                                    </mask>
                                    <g mask="url(#mask0)" class="svg-standart">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8525 290.803H21.4427V300.393H11.8525V290.803ZM11.8526 307.107H21.4427V316.697H11.8526V307.107ZM21.4427 323.41H11.8526V333H21.4427V323.41Z" fill="url(#paint0_linear)"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M77.0654 290.803H86.6556V300.393H77.0654V290.803ZM77.0654 307.107H86.6556V316.697H77.0654V307.107ZM86.6556 323.41H77.0654V333H86.6556V323.41Z" fill="url(#paint1_linear)"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M142.279 225.59H151.869V235.18H142.279V225.59ZM142.279 241.893H151.869V251.483H142.279V241.893ZM151.869 258.196H142.279V267.787H151.869V258.196ZM142.279 274.5H151.869V284.09H142.279V274.5ZM151.869 290.803H142.279V300.393H151.869V290.803ZM142.279 307.106H151.869V316.696H142.279V307.106ZM151.869 323.41H142.279V333H151.869V323.41Z" fill="url(#paint2_linear)"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M207.492 95.1641H217.082V104.754H207.492V95.1641ZM207.492 111.467H217.082V121.058H207.492V111.467ZM217.082 127.771H207.492V137.361H217.082V127.771ZM207.492 144.074H217.082V153.664H207.492V144.074ZM217.082 160.377H207.492V169.967H217.082V160.377ZM207.492 176.681H217.082V186.271H207.492V176.681ZM217.082 192.984H207.492V202.574H217.082V192.984ZM207.492 209.287H217.082V218.877H207.492V209.287ZM217.082 225.59H207.492V235.181H217.082V225.59ZM207.492 241.894H217.082V251.484H207.492V241.894ZM217.082 258.197H207.492V267.787H217.082V258.197ZM207.492 274.5H217.082V284.09H207.492V274.5ZM217.082 290.804H207.492V300.394H217.082V290.804ZM207.492 307.107H217.082V316.697H207.492V307.107ZM217.082 323.41H207.492V333H217.082V323.41Z" fill="url(#paint3_linear)"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M272.705 29.9507H282.295V39.5408H272.705V29.9507ZM272.705 46.2539H282.295V55.844H272.705V46.2539ZM282.295 62.5571H272.705V72.1473H282.295V62.5571ZM272.705 78.8604H282.295V88.4506H272.705V78.8604ZM282.295 95.1637H272.705V104.754H282.295V95.1637ZM272.705 111.467H282.295V121.057H272.705V111.467ZM282.295 127.77H272.705V137.36H282.295V127.77ZM272.705 144.074H282.295V153.664H272.705V144.074ZM282.295 160.377H272.705V169.967H282.295V160.377ZM272.705 176.68H282.295V186.27H272.705V176.68ZM282.295 192.983H272.705V202.574H282.295V192.983ZM272.705 209.287H282.295V218.877H272.705V209.287ZM282.295 225.59H272.705V235.18H282.295V225.59ZM272.705 241.893H282.295V251.483H272.705V241.893ZM282.295 258.196H272.705V267.787H282.295V258.196ZM272.705 274.5H282.295V284.09H272.705V274.5ZM282.295 290.803H272.705V300.393H282.295V290.803ZM272.705 307.106H282.295V316.696H272.705V307.106ZM282.295 323.41H272.705V333H282.295V323.41Z" fill="url(#paint4_linear)"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M347.508 46.2539H337.918V55.8441H347.508V46.2539ZM347.508 62.5571H337.918V72.1473H347.508V62.5571ZM337.918 78.8604H347.508V88.4506H337.918V78.8604ZM347.508 95.1637H337.918V104.754H347.508V95.1637ZM337.918 111.467H347.508V121.057H337.918V111.467ZM347.508 127.77H337.918V137.36H347.508V127.77ZM337.918 144.074H347.508V153.664H337.918V144.074ZM347.508 160.377H337.918V169.967H347.508V160.377ZM337.918 176.68H347.508V186.27H337.918V176.68ZM347.508 192.983H337.918V202.574H347.508V192.983ZM337.918 209.287H347.508V218.877H337.918V209.287ZM347.508 225.59H337.918V235.18H347.508V225.59ZM337.918 241.893H347.508V251.483H337.918V241.893ZM347.508 258.196H337.918V267.787H347.508V258.196ZM337.918 274.5H347.508V284.09H337.918V274.5ZM347.508 290.803H337.918V300.393H347.508V290.803ZM337.918 307.106H347.508V316.696H337.918V307.106ZM347.508 323.41H337.918V333H347.508V323.41Z" fill="url(#paint5_linear)"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M412.722 144.074H403.131V153.664H412.722V144.074ZM412.722 160.377H403.131V169.967H412.722V160.377ZM403.131 176.68H412.722V186.27H403.131V176.68ZM412.722 192.984H403.131V202.574H412.722V192.984ZM403.131 209.287H412.722V218.877H403.131V209.287ZM412.722 225.59H403.131V235.18H412.722V225.59ZM403.131 241.893H412.722V251.484H403.131V241.893ZM412.722 258.197H403.131V267.787H412.722V258.197ZM403.131 274.5H412.722V284.09H403.131V274.5ZM412.722 290.803H403.131V300.393H412.722V290.803ZM403.131 307.107H412.722V316.697H403.131V307.107ZM412.722 323.41H403.131V333H412.722V323.41Z" fill="url(#paint6_linear)"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M477.934 274.5H468.344V284.09H477.934V274.5ZM477.934 290.803H468.344V300.393H477.934V290.803ZM468.344 307.107H477.934V316.697H468.344V307.107ZM477.934 323.41H468.344V333H477.934V323.41Z" fill="url(#paint7_linear)"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M533.558 225.59H543.148V235.18H533.558V225.59ZM533.558 241.893H543.148V251.483H533.558V241.893ZM543.148 258.196H533.558V267.787H543.148V258.196ZM533.558 274.5H543.148V284.09H533.558V274.5ZM543.148 290.803H533.558V300.393H543.148V290.803ZM533.558 307.106H543.148V316.696H533.558V307.106ZM543.148 323.41H533.558V333H543.148V323.41Z" fill="url(#paint8_linear)"/>
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="16.6476" y1="290.803" x2="16.6476" y2="333" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#848587"/>
                                            <stop offset="1" stop-color="#848587" stop-opacity="0"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear" x1="81.8605" y1="290.803" x2="81.8605" y2="333" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#848587"/>
                                            <stop offset="1" stop-color="#848587" stop-opacity="0"/>
                                        </linearGradient>
                                        <linearGradient id="paint2_linear" x1="147.074" y1="225.59" x2="147.074" y2="333" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#848587"/>
                                            <stop offset="1" stop-color="#848587" stop-opacity="0"/>
                                        </linearGradient>
                                        <linearGradient id="paint3_linear" x1="212.287" y1="95.1641" x2="212.287" y2="333" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#848587"/>
                                            <stop offset="1" stop-color="#848587" stop-opacity="0"/>
                                        </linearGradient>
                                        <linearGradient id="paint4_linear" x1="277.5" y1="29.9507" x2="277.5" y2="333" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#848587"/>
                                            <stop offset="1" stop-color="#848587" stop-opacity="0"/>
                                        </linearGradient>
                                        <linearGradient id="paint5_linear" x1="342.713" y1="46.2539" x2="342.713" y2="333" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#848587"/>
                                            <stop offset="1" stop-color="#848587" stop-opacity="0"/>
                                        </linearGradient>
                                        <linearGradient id="paint6_linear" x1="407.926" y1="144.074" x2="407.926" y2="333" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#848587"/>
                                            <stop offset="1" stop-color="#848587" stop-opacity="0"/>
                                        </linearGradient>
                                        <linearGradient id="paint7_linear" x1="473.139" y1="274.5" x2="473.139" y2="333" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#848587"/>
                                            <stop offset="1" stop-color="#848587" stop-opacity="0"/>
                                        </linearGradient>
                                        <linearGradient id="paint8_linear" x1="538.353" y1="225.59" x2="538.353" y2="333" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#848587"/>
                                            <stop offset="1" stop-color="#848587" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="premium-format_col">
                            <div class="premium-format_label premium-format_flac">FLAC</div>
                            <svg class="premium-format_img" width="555" height="333" viewBox="0 0 555 333" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0" mask-type="alpha" x="0" y="0" width="555" height="333">
                                    <rect width="555" height="333" fill="#C4C4C4"/>
                                </mask>
                                <g mask="url(#mask0)" class="svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M31.6959 300.864H21.8638V310.696H31.6959V300.864ZM31.6959 317.578H21.8638V327.411H31.6959V317.578Z" fill="url(#flac0_linear)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M55.2935 284.149H65.1256V293.982H55.2935V284.149ZM55.2935 300.864H65.1256V310.696H55.2935V300.864ZM65.1256 317.579H55.2935V327.411H65.1256V317.579Z" fill="url(#flac1_linear)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M98.5548 267.435H88.7227V277.267H98.5548V267.435ZM98.5548 284.149H88.7227V293.981H98.5548V284.149ZM88.7227 300.864H98.5548V310.696H88.7227V300.864ZM98.5548 317.579H88.7227V327.411H98.5548V317.579Z" fill="url(#flac2_linear)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M122.152 217.291H131.984V227.123H122.152V217.291ZM122.152 234.005H131.984V243.837H122.152V234.005ZM131.984 250.72H122.152V260.552H131.984V250.72ZM122.152 267.435H131.984V277.267H122.152V267.435ZM131.984 284.149H122.152V293.981H131.984V284.149ZM122.152 300.864H131.984V310.696H122.152V300.864ZM131.984 317.579H122.152V327.411H131.984V317.579Z" fill="url(#flac3_linear)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M165.413 167.146H155.581V176.979H165.413V167.146ZM165.413 183.861H155.581V193.693H165.413V183.861ZM155.581 200.576H165.413V210.408H155.581V200.576ZM165.413 217.29H155.581V227.123H165.413V217.29ZM155.581 234.005H165.413V243.837H155.581V234.005ZM165.413 250.72H155.581V260.552H165.413V250.72ZM155.581 267.434H165.413V277.267H155.581V267.434ZM165.413 284.149H155.581V293.981H165.413V284.149ZM155.581 300.864H165.413V310.696H155.581V300.864ZM165.413 317.578H155.581V327.411H165.413V317.578Z" fill="url(#flac4_linear)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M189.011 83.5732H198.843V93.4054H189.011V83.5732ZM189.011 100.288H198.843V110.12H189.011V100.288ZM198.843 117.003H189.011V126.835H198.843V117.003ZM189.011 133.717H198.843V143.549H189.011V133.717ZM198.843 150.432H189.011V160.264H198.843V150.432ZM189.011 167.147H198.843V176.979H189.011V167.147ZM198.843 183.861H189.011V193.693H198.843V183.861ZM189.011 200.576H198.843V210.408H189.011V200.576ZM198.843 217.291H189.011V227.123H198.843V217.291ZM189.011 234.005H198.843V243.837H189.011V234.005ZM198.843 250.72H189.011V260.552H198.843V250.72ZM189.011 267.435H198.843V277.267H189.011V267.435ZM198.843 284.149H189.011V293.981H198.843V284.149ZM189.011 300.864H198.843V310.696H189.011V300.864ZM198.843 317.579H189.011V327.411H198.843V317.579Z" fill="url(#flac5_linear)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M232.272 33.4292H222.44V43.2614H232.272V33.4292ZM232.272 50.1437H222.44V59.9759H232.272V50.1437ZM222.44 66.8584H232.272V76.6906H222.44V66.8584ZM232.272 83.5731H222.44V93.4052H232.272V83.5731ZM222.44 100.288H232.272V110.12H222.44V100.288ZM232.272 117.002H222.44V126.835H232.272V117.002ZM222.44 133.717H232.272V143.549H222.44V133.717ZM232.272 150.432H222.44V160.264H232.272V150.432ZM222.44 167.146H232.272V176.979H222.44V167.146ZM232.272 183.861H222.44V193.693H232.272V183.861ZM222.44 200.576H232.272V210.408H222.44V200.576ZM232.272 217.29H222.44V227.123H232.272V217.29ZM222.44 234.005H232.272V243.837H222.44V234.005ZM232.272 250.72H222.44V260.552H232.272V250.72ZM222.44 267.434H232.272V277.267H222.44V267.434ZM232.272 284.149H222.44V293.981H232.272V284.149ZM222.44 300.864H232.272V310.696H222.44V300.864ZM232.272 317.578H222.44V327.411H232.272V317.578Z" fill="url(#flac6_linear)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M255.869 16.7148H265.701V26.547H255.869V16.7148ZM255.869 33.4296H265.701V43.2617H255.869V33.4296ZM265.701 50.1442H255.869V59.9764H265.701V50.1442ZM255.869 66.8589H265.701V76.6911H255.869V66.8589ZM265.701 83.5736H255.869V93.4057H265.701V83.5736ZM255.869 100.288H265.701V110.12H255.869V100.288ZM265.701 117.003H255.869V126.835H265.701V117.003ZM255.869 133.718H265.701V143.55H255.869V133.718ZM265.701 150.432H255.869V160.264H265.701V150.432ZM255.869 167.147H265.701V176.979H255.869V167.147ZM265.701 183.862H255.869V193.694H265.701V183.862ZM255.869 200.576H265.701V210.408H255.869V200.576ZM265.701 217.291H255.869V227.123H265.701V217.291ZM255.869 234.006H265.701V243.838H255.869V234.006ZM265.701 250.72H255.869V260.552H265.701V250.72ZM255.869 267.435H265.701V277.267H255.869V267.435ZM265.701 284.15H255.869V293.982H265.701V284.15ZM255.869 300.864H265.701V310.696H255.869V300.864ZM265.701 317.579H255.869V327.411H265.701V317.579Z" fill="url(#flac7_linear)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M299.131 0H289.299V9.83216H299.131V0ZM299.131 16.7147H289.299V26.5468H299.131V16.7147ZM289.299 33.4293H299.131V43.2615H289.299V33.4293ZM299.131 50.144H289.299V59.9762H299.131V50.144ZM289.299 66.8587H299.131V76.6908H289.299V66.8587ZM299.131 83.5733H289.299V93.4055H299.131V83.5733ZM289.299 100.288H299.131V110.12H289.299V100.288ZM299.131 117.003H289.299V126.835H299.131V117.003ZM289.299 133.717H299.131V143.549H289.299V133.717ZM299.131 150.432H289.299V160.264H299.131V150.432ZM289.299 167.147H299.131V176.979H289.299V167.147ZM299.131 183.861H289.299V193.693H299.131V183.861ZM289.299 200.576H299.131V210.408H289.299V200.576ZM299.131 217.291H289.299V227.123H299.131V217.291ZM289.299 234.005H299.131V243.837H289.299V234.005ZM299.131 250.72H289.299V260.552H299.131V250.72ZM289.299 267.435H299.131V277.267H289.299V267.435ZM299.131 284.149H289.299V293.981H299.131V284.149ZM289.299 300.864H299.131V310.696H289.299V300.864ZM299.131 317.579H289.299V327.411H299.131V317.579Z" fill="url(#flac8_linear)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M332.56 33.4292H322.728V43.2614H332.56V33.4292ZM332.56 50.1437H322.728V59.9759H332.56V50.1437ZM322.728 66.8584H332.56V76.6906H322.728V66.8584ZM332.56 83.5731H322.728V93.4052H332.56V83.5731ZM322.728 100.288H332.56V110.12H322.728V100.288ZM332.56 117.002H322.728V126.835H332.56V117.002ZM322.728 133.717H332.56V143.549H322.728V133.717ZM332.56 150.432H322.728V160.264H332.56V150.432ZM322.728 167.146H332.56V176.979H322.728V167.146ZM332.56 183.861H322.728V193.693H332.56V183.861ZM322.728 200.576H332.56V210.408H322.728V200.576ZM332.56 217.29H322.728V227.123H332.56V217.29ZM322.728 234.005H332.56V243.837H322.728V234.005ZM332.56 250.72H322.728V260.552H332.56V250.72ZM322.728 267.434H332.56V277.267H322.728V267.434ZM332.56 284.149H322.728V293.981H332.56V284.149ZM322.728 300.864H332.56V310.696H322.728V300.864ZM332.56 317.578H322.728V327.411H332.56V317.578Z" fill="url(#flac9_linear)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M356.157 83.5732H365.989V93.4054H356.157V83.5732ZM356.157 100.288H365.989V110.12H356.157V100.288ZM365.989 117.003H356.157V126.835H365.989V117.003ZM356.157 133.717H365.989V143.549H356.157V133.717ZM365.989 150.432H356.157V160.264H365.989V150.432ZM356.157 167.147H365.989V176.979H356.157V167.147ZM365.989 183.861H356.157V193.693H365.989V183.861ZM356.157 200.576H365.989V210.408H356.157V200.576ZM365.989 217.291H356.157V227.123H365.989V217.291ZM356.157 234.005H365.989V243.837H356.157V234.005ZM365.989 250.72H356.157V260.552H365.989V250.72ZM356.157 267.435H365.989V277.267H356.157V267.435ZM365.989 284.149H356.157V293.981H365.989V284.149ZM356.157 300.864H365.989V310.696H356.157V300.864ZM365.989 317.579H356.157V327.411H365.989V317.579Z" fill="url(#flac10_linear)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M399.419 133.717H389.586V143.549H399.419V133.717ZM399.419 150.432H389.586V160.264H399.419V150.432ZM389.586 167.147H399.419V176.979H389.586V167.147ZM399.419 183.861H389.586V193.693H399.419V183.861ZM389.586 200.576H399.419V210.408H389.586V200.576ZM399.419 217.291H389.586V227.123H399.419V217.291ZM389.586 234.005H399.419V243.837H389.586V234.005ZM399.419 250.72H389.586V260.552H399.419V250.72ZM389.586 267.435H399.419V277.267H389.586V267.435ZM399.419 284.149H389.586V293.981H399.419V284.149ZM389.586 300.864H399.419V310.696H389.586V300.864ZM399.419 317.579H389.586V327.411H399.419V317.579Z" fill="url(#flac11_linear)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M432.848 234.005H423.016V243.838H432.848V234.005ZM432.848 250.72H423.016V260.552H432.848V250.72ZM423.016 267.435H432.848V277.267H423.016V267.435ZM432.848 284.149H423.016V293.981H432.848V284.149ZM423.016 300.864H432.848V310.696H423.016V300.864ZM432.848 317.579H423.016V327.411H432.848V317.579Z" fill="url(#flac12_linear)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M466.277 267.435H456.445V277.267H466.277V267.435ZM466.277 284.149H456.445V293.981H466.277V284.149ZM456.445 300.864H466.277V310.696H456.445V300.864ZM466.277 317.579H456.445V327.411H466.277V317.579Z" fill="url(#flac13_linear)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M489.875 284.149H499.707V293.982H489.875V284.149ZM489.875 300.864H499.707V310.696H489.875V300.864ZM499.707 317.579H489.875V327.411H499.707V317.579Z" fill="url(#flac14_linear)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M523.304 217.291H533.136V227.123H523.304V217.291ZM523.304 234.005H533.136V243.837H523.304V234.005ZM533.136 250.72H523.304V260.552H533.136V250.72ZM523.304 267.435H533.136V277.267H523.304V267.435ZM533.136 284.149H523.304V293.981H533.136V284.149ZM523.304 300.864H533.136V310.696H523.304V300.864ZM533.136 317.579H523.304V327.411H533.136V317.579Z" fill="url(#flac15_linear)"/>
                                </g>
                                <defs>
                                    <linearGradient id="flac0_linear" x1="26.7798" y1="300.864" x2="26.7798" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="flac1_linear" x1="60.2095" y1="284.149" x2="60.2095" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="flac2_linear" x1="93.6387" y1="267.435" x2="93.6387" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="flac3_linear" x1="127.068" y1="217.291" x2="127.068" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="flac4_linear" x1="160.497" y1="167.146" x2="160.497" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="flac5_linear" x1="193.927" y1="83.5732" x2="193.927" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="flac6_linear" x1="227.356" y1="33.4292" x2="227.356" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="flac7_linear" x1="260.785" y1="16.7148" x2="260.785" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="flac8_linear" x1="294.215" y1="0" x2="294.215" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="flac9_linear" x1="327.644" y1="33.4292" x2="327.644" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="flac10_linear" x1="361.073" y1="83.5732" x2="361.073" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="flac11_linear" x1="394.503" y1="133.717" x2="394.503" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="flac12_linear" x1="427.932" y1="234.005" x2="427.932" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="flac13_linear" x1="461.361" y1="267.435" x2="461.361" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="flac14_linear" x1="494.791" y1="284.149" x2="494.791" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="flac15_linear" x1="528.22" y1="217.291" x2="528.22" y2="327.411" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00AFED"/>
                                        <stop offset="1" stop-color="#00AFED" stop-opacity="0"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="base_txt premium-format_txt"><?php _e('В композициях EVOBOX Premium впервые в караоке используется кодировка FLAC (Lossless Audio). Это лучший аудиоформат, позволяющий воспроизводить музыку в студийном качестве.','my'); ?></div>
            </div>
        </section>
        <section class="premium-sound base_container lazytext">
            <div class="premium-sound_inner">
                <div class="premium-sound_images">
                    <h2 class="base_title"><?php _e('Бархатное звучание','my'); ?></h2>
                    <br>
                    <img src="/wp-content/themes/html5blank-master/images/premium/AKM@2x.jpg" class="premium-sound_img active js_sticky-img" alt="Standart">
                    <img src="/wp-content/themes/html5blank-master/images/premium/AKM2@2x.jpg" class="premium-sound_img js_sticky-img" alt="Standart">
                    <img src="/wp-content/themes/html5blank-master/images/premium/AKM3@2x.jpg" class="premium-sound_img js_sticky-img" alt="Standart">
                </div>
                <div>
                    <div class="premium-sound_content js_scroll-text">
                        <img src="/wp-content/themes/html5blank-master/images/premium/AKM@2x.jpg" class="premium-sound_img-mob " alt="Standart">
                        <span class="base_txt premium-sound_txt">
                        <?php _e('Безукоризненную трансформацию','my'); ?><br>
                        <?php _e('цифрового сигнала','my'); ?><br>
                        <?php _e('в аналоговый гарантирует','my'); ?><br>
                    </span>
                        <span class="base_txt white-color"><?php _e('32-битный ЦАП AK4495EQ*.','my'); ?></span>
                        <span class="premium-sound_subtxt">*<?php _e('Премиальная серия микросхем VELVET SOUND от мирового лидера Asahi Kasei Microdevices (Япония).','my'); ?></span>
                    </div>
                    <div class="premium-sound_content js_scroll-text">
                        <img src="/wp-content/themes/html5blank-master/images/premium/AKM2@2x.jpg" class="premium-sound_img-mob" alt="Standart">
                        <div class="base_txt premium-sound_txt">
                            <span class="white-color"><?php _e('Гальваническая развязка','my'); ?></span><br>
                            <?php _e('Для аудиоинтерфейса EVOBOX Premium разработан уникальный модуль гальванической развязки.','my'); ?><br>
                            <?php _e('Он защищает аудиосигнал от возможных наводок в звуковой цепи, которые могут возникнуть при инсталляции.','my'); ?><br>
                            *<?php _e('Принцип работы гальванической развязки в EVOBOX Premium можно сравнить с дополнительной установкой в цепи аудиоинсталляции модуля DI-Box (Директ-бокс).','my'); ?><br>
                        </div>
                    </div>
                    <div class="premium-sound_content js_scroll-text">
                        <img src="/wp-content/themes/html5blank-master/images/premium/AKM3@2x.jpg" class="premium-sound_img-mob" alt="Standart">
                        <span class="base_txt premium-sound_txt">
                        <?php _e('За естественное звучание','my'); ?><br>
                        <?php _e('вашего голоса отвечает','my'); ?><br>
                        <?php _e('профессиональный','my'); ?><br>
                    </span>
                        <span class="base_txt white-color"><?php _e('24-битный АЦП АК 5703','my'); ?>*</span>
                        <span class="premium-sound_subtxt">*<?php _e('Премиальная серия микросхем VELVET SOUND от мирового лидера Asahi Kasei Microdevices (Япония).','my'); ?></span>
                    </div>
                </div>
            </div>
        </section>
        <section class="premium-mic lazytext">
            <img src="/wp-content/themes/html5blank-master/images/premium/mic.png" class="premium-mic_img" alt="Standart">
            <h2 class="base_title"><?php _e('4 микрофона','my'); ?></h2>
            <div class="base_subtitle"><?php _e('Пойте дуэтом, трио и даже квартетом!','my'); ?></div>
            <div class="base_txt premium-mic_txt"><?php _e('Индивидуальная настройка эквализации и громкости микрофонов под особенности вокала исполнителей. ','my'); ?></div>
        </section>
        <section class="premium-quantity lazytext">
            <div class="premium-quantity_inner">
                <div class="premium-quantity_content js_scroll-text">
                    <img src="/wp-content/themes/html5blank-master/images/premium/tv.jpg" class="premium-quantity_img-mob" alt="Standart">
                    <h2 class="base_title">65 000+</h2>
                    <div class="base_subtitle"><?php _e('предустановленых караоке-композиций','my'); ?></div>
                </div>
                <div class="premium-quantity_content js_scroll-text">
                    <img src="/wp-content/themes/html5blank-master/images/premium/tv-blade2.jpg" class="premium-quantity_img-mob" alt="Standart">
                    <h2 class="base_title">10 000+</h2>
                    <div class="base_txt premium-quantity_description"><?php _e('топовых видеоклипов','my'); ?></div>
                </div>
                <div class="premium-quantity_content js_scroll-text">
                    <a href="https://www.youtube.com/watch?v=ewT1msZvetQ" class="premium-quantity_img-mob" target="_blank"><img src="/wp-content/themes/html5blank-master/images/premium/LIFRFX.jpg" alt="Standart"></a>
                    <!--                <img src="/wp-content/themes/html5blank-master/images/premium/LIFRFX.png" class="premium-quantity_img-mob" alt="Standart">-->
                    <img src="/wp-content/themes/html5blank-master/images/premium/ic_live_fx_screen_act.png" class="premium-quantity_fx" alt="Standart">
                    <div class="base_txt premium-quantity_description"><?php _e('Караоке-эффект LiveFX перенесет вас на сцену настоящего концертного зала или в уютную атмосферу квартирника.','my'); ?></div>
                </div>
            </div>
            <div class="premium-quantity_images">
                <img src="/wp-content/themes/html5blank-master/images/premium/tv.jpg" class="premium-quantity_img active js_sticky-img" alt="Standart">
                <!--            <img src="/wp-content/themes/html5blank-master/images/premium/tv2.png" class="premium-quantity_img js_sticky-img" alt="Standart">-->
                <div class="premium-quantity_img js_sticky-img premium-quantity_video">
                    <img src="/wp-content/themes/html5blank-master/images/premium/tv-blade2.jpg" class="" alt="Standart">
                    <video class="premium-quantity_video-inner" poster="/wp-content/themes/html5blank-master/images/premium/tv3-poster.jpg" muted="muted" tabindex="0" playsinline="playsinline" preload="preload" autoplay="autoplay" loop="loop">
                        <source src="/wp-content/themes/html5blank-master/images/premium/loboda.mp4" type="video/mp4">
                    </video>
                </div>

                <a href="https://www.youtube.com/watch?v=ewT1msZvetQ" class="premium-quantity_img js_sticky-img" target="_blank"><img src="/wp-content/themes/html5blank-master/images/premium/LIFRFX.jpg" alt="Standart"></a>
            </div>
        </section>
        <section class="premium-flag lazytext">
            <img src="/wp-content/themes/html5blank-master/images/premium/flags.png" class="premium-flag_img" alt="Standart">
            <div>
                <h2 class="base_subtitle premium-flag_title"><?php _e('Самый большой региональный каталог','my'); ?></h2>
                <div class="base_txt premium-flag_txt"><?php _e('Пойте на русском, английском, итальянском, французском и многих других языках.','my'); ?></div>
            </div>
        </section>
        <section class="premium-corps base_container lazytext">
            <h2 class="base_title premium-corps_title"><?php _e('Лаконичность стиля','my'); ?></h2>
            <div>
                <div class="base_txt premium-corps_subtitle"><?php _e('Корпус EVOBOX Premium выточен из цельного бруска авиационного алюминия','my'); ?>.</div>
                <div class="base_txt premium-corps_subtitle"><?php _e(' Используется в аэрокосмической инженерии.','my'); ?>.</div>
            </div>
            <div class="premium-corp_inner">
                <img src="/wp-content/themes/html5blank-master/images/premium/corps.jpg" class="premium-corps_img" alt="Standart">
                <div class="base_txt premium-corps_txt">
                    <?php _e('Последующее анодирование придает караоке-системе характерное для премиальных устройств сатиновое покрытие в цветах','my'); ?>
                    <span>Black</span>
                    <?php _e('или','my'); ?>
                    <span>Graphite</span>.
                </div>
            </div>
        </section>
        <section class="premium-pleasure base_container lazytext">
            <h2 class="base_title"><?php _e('Визуальное наслаждение','my'); ?></h2>
            <div class="base_txt premium-pleasure_subtitle">
                <?php _e('Для EVOBOX Premium специально подобрана коллекция видеофонов и слайдшоу в формате','my'); ?>
                <span><?php _e('4K UHD.','my'); ?></span>
            </div>
            <img src="/wp-content/themes/html5blank-master/images/premium/4k.jpg" class="premium-pleasure_img" alt="Standart">
            <div class="base_txt premium-pleasure_txt">
                <?php _e('Сверхчеткое насыщенное изображение.','my'); ?>
            </div>
        </section>

        <section class="premium-control base_container lazytext">
            <h2 class="base_title premium-control_title"><?php _e('Удобное управление','my'); ?></h2>
            <div class="premium-control_inner">
                <div>
                    <div class="premium-control_content js_scroll-text">
                        <img src="/wp-content/themes/html5blank-master/images/premium/control.jpg" class="premium-control_img-mob" alt="Standart">
                        <div class="base_subtitle premium-control_subtitle"><?php _e('Bluetooth-пульт','my'); ?></div>
                        <div class="base_txt"><?php _e('Эргономичный пульт с полноразмерной клавиатурой и функциональными клавишами, разработанный для комфортного управления.','my'); ?></div>
                    </div>
                    <div class="premium-control_content js_scroll-text">
                        <img src="/wp-content/themes/html5blank-master/images/premium/control2.jpg" class="premium-control_img-mob" alt="Standart">
                        <div class="base_subtitle premium-control_subtitle"><?php _e('Приложения','my'); ?></div>
                        <div class="premium-control_app">
                            <div>
                                <div class="premium-control_label">Evocontrol<br><?php _e('для планшета','my'); ?></div>
                                <div class="premium-control_shop">
                                    <a href="https://apps.apple.com/us/app/evocontrol/id1279792717" class="premium-control_link" target="_blank">
                                        <img src="/wp-content/themes/html5blank-master/images/premium/appstore.svg" alt="Standart">
                                    </a>
                                    <a href="https://play.google.com/store/apps/details?id=com.studio_evolution.evocontrol" class="premium-control_link" target="_blank">
                                        <img src="/wp-content/themes/html5blank-master/images/premium/googleplay.svg" alt="Standart">
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="premium-control_label">EvoNet<br><?php _e('для смартфона','my'); ?></div>
                                <div class="premium-control_shop">
                                    <a href="https://apps.apple.com/ru/app/evonet/id1106494315" class="premium-control_link" target="_blank">
                                        <img src="/wp-content/themes/html5blank-master/images/premium/appstore.svg" alt="Standart">
                                    </a>
                                    <a href="https://play.google.com/store/apps/details?id=com.evolution.evonet" class="premium-control_link" target="_blank">
                                        <img src="/wp-content/themes/html5blank-master/images/premium/googleplay.svg" alt="Standart">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="premium-control_images">
                    <img src="/wp-content/themes/html5blank-master/images/premium/control.jpg" class="premium-control_img active js_sticky-img" alt="Standart">
                    <img src="/wp-content/themes/html5blank-master/images/premium/control2.jpg" class="premium-control_img js_sticky-img" alt="Standart">
                </div>
            </div>
        </section>

        <section class="premium-main premium-bottom lazytext">
            <h2 class="premium-main_title">EVOBOX™ Premium</h2>
            <div class="premium-main_subtitle"><span class="blue-color">Hi-End</span> <?php _e('караоке','my'); ?>
            </div>
            <img src="/wp-content/themes/html5blank-master/images/premium/final.jpg" class="premium-main_bottom" alt="EVOBOX">
            <div class="premium-main_inner">
                <div class="base_price-box">
                    <div class="base_price-old"><?php echo do_shortcode( '[countryPriceOld id="58" project_id="11"] [countryPriceCurrencyFull]' );?></div>
                    <div class="base_price-profit"><?php _e('выгода','my'); ?><?php echo do_shortcode( '[countryPrice id="58" project_id="11" profit="1"] [countryPriceCurrencyFull]' );?></div>
                </div>
                <div class="premium-main_price"><?php echo do_shortcode( '[countryPrice id="58" project_id="11"] [countryPriceCurrencyFull]' );?></div>
                <div class="premium-main_buttons js_main-subtitle lazytext">
                    <?php
                    if(ICL_LANGUAGE_CODE == 'ru'){
                        echo do_shortcode( '[vc_button title="Купить" form_id="219"]' );
                    } elseif (ICL_LANGUAGE_CODE == 'en'){
                        echo do_shortcode( '[vc_button title="Buy" form_id="221"]' );
                    } elseif(ICL_LANGUAGE_CODE == 'uk'){
                        echo do_shortcode( '[vc_button title="Придбати" form_id="220"]' );
                    }
                    ?>
                    <?php
                    if(ICL_LANGUAGE_CODE == 'ru'){
                        echo do_shortcode( '[vc_button title="Рассрочка 0%" el_class="premium-main_credit" form_id="180"]' );
                    } elseif (ICL_LANGUAGE_CODE == 'en'){
                        echo do_shortcode( '[vc_button title="Credit 0%" el_class="premium-main_credit" form_id="179"]' );
                    } elseif(ICL_LANGUAGE_CODE == 'uk'){
                        echo do_shortcode( '[vc_button title="Розстрочка 0%" el_class="premium-main_credit" form_id="181"]' );
                    }
                    ?>
                </div>
                <div class="premium-main_limit">*<?php _e('лимитированная серия','my'); ?></div>
            </div>
        </section>
        <section class="premium-profit">
            <div class="base_container">
                <div class="evosound_row evosound_profit">
                    <div class="evosound_profit-item">
                        <img src="/wp-content/themes/html5blank-master/images/evosound/ic-delivery.svg" class="evosound_profit-icon" alt="free delivery">
                        <div class="evosound_profit-title"><?php _e('Бесплатная доставка','my'); ?></div>
                        <div class="evosound_profit-txt"><?php _e('При покупке в комплекте мы бесплатно доставим оборудование в отделение службы доставки или курьером прямо вам домой.','my'); ?></div>
                        <a href="<?php echo $pre_lang;?>payment-delivery-warranty-and-return/" class="evosound_profit-link" target="_blank"><?php _e('Подробнее','my'); ?></a>
                    </div>
                    <div class="evosound_profit-item">
                        <img src="/wp-content/themes/html5blank-master/images/evosound/ic-pay.svg" class="evosound_profit-icon" alt="comfort pay">
                        <div class="evosound_profit-title"><?php _e('Удобная оплата','my'); ?></div>
                        <div class="evosound_profit-txt"><?php _e('Оплачивайте по безналичному расчету либо наложенным платежом при передаче товара курьером или получении в отделении службы доставки.','my'); ?>  </div>
                        <a href="<?php echo $pre_lang;?>payment-delivery-warranty-and-return/" class="evosound_profit-link" target="_blank"><?php _e('Подробнее','my'); ?></a>
                    </div>
                    <div class="evosound_profit-item">
                        <img src="/wp-content/themes/html5blank-master/images/evosound/ic-warranty.svg" class="evosound_profit-icon" alt="warranty">
                        <div class="evosound_profit-title"><?php _e('12 месяцев гарантии','my'); ?></div>
                        <div class="evosound_profit-txt"><?php _e('Гарантийное обслуживание включает  бесплатный гарантийный ремонт или замену на аналогичное устройство.','my'); ?></div>
                        <a href="<?php echo $pre_lang;?>payment-delivery-warranty-and-return/" class="evosound_profit-link" target="_blank"><?php _e('Подробнее','my'); ?></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('scripts')
    <link rel="preload" href="{{ mix('js/premium.min.js') }}" as="script">
    <script src="{{ mix('js/premium.min.js') }}"></script>
@stop
