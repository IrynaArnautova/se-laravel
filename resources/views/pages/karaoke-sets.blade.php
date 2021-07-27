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
        <section class="sets base_container">
            <h1 class="base_title"><?php _e('Караоке-комплекты','my'); ?> <br><?php _e('с микрофонами','my'); ?></h1>
            <div class="base_tab">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-mic.jpg" class="base_img"  alt="микрофон для караоке купить">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-mic-mob.jpg" class="base_img-mob"  alt="микрофон купить для караоке">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-grey.png" class="base_tab-img active" id="micGrey" alt="evobox серый">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-red.png" class="base_tab-img" id="micRed" alt="evobox красный">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-blue.png" class="base_tab-img" id="micBlue" alt="evobox синий">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-gold.png" class="base_tab-img" id="micGold" alt="evobox золотой">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-silver.png" class="base_tab-img" id="micSilver" alt="evobox серебрянный">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-black.png" class="base_tab-img" id="micBlack" alt="evobox черный">
            </div>
            <div class="base_tab-content">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-grey.jpg" class="base_tab-preview active" data-tab="micGrey" alt="купить evobox серый">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-red.jpg" class="base_tab-preview" data-tab="micRed" alt="купить evobox красный">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-blue.jpg" class="base_tab-preview" data-tab="micBlue" alt="купить evobox синий">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-gold.jpg" class="base_tab-preview" data-tab="micGold" alt="купить evobox золотой">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-silver.jpg" class="base_tab-preview" data-tab="micSilver" alt="купить evobox серебрянный">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-black.jpg" class="base_tab-preview" data-tab="micBlack" alt="купить evobox черный">
            </div>
            <div class="sets_inner">
                <div class="sets_col">
                    <div class="base_subtitle">EVOBOX<br> <?php _e('с микрофонами','my'); ?></div>
                    <a href="<?php echo $pre_lang;?>karaoke-komplekty-s-mikrofonami/" class="base_link"><?php _e('Узнать больше','my'); ?></a>
                    <div class="base_txt"><?php _e('Караоке-система и 2 цифровых беспроводных микрофона SE • 200D.','my'); ?></div>
                    <br>
                    <div class="base_txt"><?php _e('2 000 песен и возможность загрузки песен из каталога на 80 000 караоке-фонограмм.','my'); ?></div>
                    <div class="base_price">
                        <div class="base_price-old"><?php echo do_shortcode( '[countryPriceOld id="52" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                        <div class="base_price-profit"><?php _e('выгода','my'); ?> <?php echo do_shortcode( '[countryPrice id="52" project_id="6" profit="1"] [countryPriceCurrencyFull]' );?></div>
                    </div>
                    <div class="base_price-current"><?php echo do_shortcode( '[countryPrice id="52" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                    <div class="base_btns">
                        <?php
                        if(ICL_LANGUAGE_CODE == 'ru'){
                            echo do_shortcode( '[vc_button title="Купить" el_class="base_btn base_btn-dark" form_id="129"]' );
                        } elseif (ICL_LANGUAGE_CODE == 'en'){
                            echo do_shortcode( '[vc_button title="Buy" el_class="base_btn base_btn-dark" form_id="149"]' );
                        } elseif(ICL_LANGUAGE_CODE == 'uk'){
                            echo do_shortcode( '[vc_button title="Купити" el_class="base_btn base_btn-dark" form_id="139"]' );
                        }
                        ?>
                        <?php
                        if(ICL_LANGUAGE_CODE == 'ru'){
                            echo do_shortcode( '[vc_button title="Рассрочка 0%" el_class="base_btn base_btn-light" form_id="180"]' );
                        } elseif (ICL_LANGUAGE_CODE == 'en'){
                            echo do_shortcode( '[vc_button title="Credit 0%" el_class="base_btn base_btn-light" form_id="179"]' );
                        } elseif(ICL_LANGUAGE_CODE == 'uk'){
                            echo do_shortcode( '[vc_button title="Розстрочка 0%" el_class="base_btn base_btn-light" form_id="181"]' );
                        }
                        ?>
                    </div>
                </div>
                <div class="sets_col">
                    <div class="base_subtitle">EVOBOX Plus <br> <?php _e('с микрофонами','my'); ?></div>
                    <a href="<?php echo $pre_lang;?>karaoke-komplekty-s-mikrofonami/" class="base_link"><?php _e('Узнать больше','my'); ?></a>
                    <div class="base_txt"><?php _e('Караоке-система и 2 цифровых беспроводных микрофона SE • 200D.','my'); ?></div>
                    <br>
                    <div class="base_txt"><?php _e('41 000+ песен и возможность загрузки песен из каталога на 80 000 караоке-фонограмм.','my'); ?></div>
                    <div class="base_price">
                        <div class="base_price-old"><?php echo do_shortcode( '[countryPriceOld id="53" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                        <div class="base_price-profit"><?php _e('выгода','my'); ?> <?php echo do_shortcode( '[countryPrice id="53" project_id="6" profit="1"] [countryPriceCurrencyFull]' );?></div>
                    </div>
                    <div class="base_price-current"><?php echo do_shortcode( '[countryPrice id="53" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                    <div class="base_btns">
                        <?php
                        if(ICL_LANGUAGE_CODE == 'ru'){
                            echo do_shortcode( '[vc_button title="Купить" el_class="base_btn base_btn-dark" form_id="169"]' );
                        } elseif (ICL_LANGUAGE_CODE == 'en'){
                            echo do_shortcode( '[vc_button title="Buy" el_class="base_btn base_btn-dark" form_id="169"]' );
                        } elseif(ICL_LANGUAGE_CODE == 'uk'){
                            echo do_shortcode( '[vc_button title="Купити" el_class="base_btn base_btn-dark" form_id="169"]' );
                        }
                        ?>
                        <?php
                        if(ICL_LANGUAGE_CODE == 'ru'){
                            echo do_shortcode( '[vc_button title="Рассрочка 0%" el_class="base_btn base_btn-light" form_id="180"]' );
                        } elseif (ICL_LANGUAGE_CODE == 'en'){
                            echo do_shortcode( '[vc_button title="Credit 0%" el_class="base_btn base_btn-light" form_id="179"]' );
                        } elseif(ICL_LANGUAGE_CODE == 'uk'){
                            echo do_shortcode( '[vc_button title="Розстрочка 0%" el_class="base_btn base_btn-light" form_id="181"]' );
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part( '/templates/evocase_gift' ); ?>

        <section class="sets base_container">
            <div class="base_title"><?php _e('Караоке-комплекты','my'); ?> <br><?php _e('с саундбаром','my'); ?></div>
            <div class="evosound_row">
                <div class="evosound_btn evosound_btn-black active" data-tab="bar-Black"><?php _e('Черный','my'); ?></div>
                <div class="evosound_btn evosound_btn-white" data-tab="bar-White"><?php _e('Жемчужный','my'); ?></div>
            </div>
            <div class="base_tab sets_sab">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-sab-black.jpg" class="base_img bar-Black active" alt="evosound bar черный">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-sab-white.jpg" class="base_img bar-White"alt="evosound bar белый">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-sab-black-mob.jpg" class="base_img-mob bar-Black active" alt="купить evosound bar черный">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-sab-white-mob.jpg" class="base_img-mob bar-White" alt="купить evosound bar белый">

                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-grey.png" class="base_tab-img active" id="sabGrey" alt="evobox evolution серый">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-red.png" class="base_tab-img" id="sabRed" alt="evobox evolution красный">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-blue.png" class="base_tab-img" id="sabBlue" alt="evobox evolution синий">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-gold.png" class="base_tab-img" id="sabGold" alt="evobox evolution золотой">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-silver.png" class="base_tab-img" id="sabSilver" alt="evobox evolution серебрянный">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-black.png" class="base_tab-img" id="sabBlack" alt="evobox evolution черный">
            </div>
            <div class="base_tab-content">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-grey.jpg" class="base_tab-preview active" data-tab="sabGrey" alt="купить evobox evolution серый">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-red.jpg" class="base_tab-preview" data-tab="sabRed" alt="купить evobox evolution красный">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-blue.jpg" class="base_tab-preview" data-tab="sabBlue" alt="купить evobox evolution синий">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-gold.jpg" class="base_tab-preview" data-tab="sabGold" alt="купить evobox evolution золотой">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-silver.jpg" class="base_tab-preview" data-tab="sabSilver" alt="купить evobox evolution серебрянный">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-black.jpg" class="base_tab-preview" data-tab="sabBlack" alt="купить evobox evolution черный">
            </div>
            <div class="sets_inner">
                <div class="sets_col">
                    <div class="base_subtitle">EVOBOX<br> <?php _e('с микрофонами','my'); ?><br><?php _e('и саундбаром','my'); ?></div>
                    <a href="<?php echo $pre_lang;?>karaoke-komplekty-s-saundbarom/" class="base_link"><?php _e('Узнать больше','my'); ?></a>
                    <div class="base_txt"><a href ='/'><?php _e('Караоке','my'); ?></a><?php _e('-система, 2 цифровых беспроводных микрофона и акустическая система для караоке EvoSound Bar.','my'); ?></div>
                    <br>
                    <div class="base_txt"><?php _e('2 000 песен и возможность загрузки песен из каталога на 80 000 караоке-фонограмм.','my'); ?></div>
                    <div class="base_price">
                        <div class="base_price-old"><?php echo do_shortcode( '[countryPriceOld id="56" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                        <div class="base_price-profit"><?php _e('выгода','my'); ?> <?php echo do_shortcode( '[countryPrice id="56" project_id="6" profit="1"] [countryPriceCurrencyFull]' );?></div>
                    </div>
                    <div class="base_price-current"><?php echo do_shortcode( '[countryPrice id="56" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                    <div class="base_btns">
                        <?php
                        if(ICL_LANGUAGE_CODE == 'ru'){
                            echo do_shortcode( '[vc_button title="Купить" el_class="base_btn base_btn-dark" form_id="186"]' );
                        } elseif (ICL_LANGUAGE_CODE == 'en'){
                            echo do_shortcode( '[vc_button title="Buy" el_class="base_btn base_btn-dark" form_id="186"]' );
                        } elseif(ICL_LANGUAGE_CODE == 'uk'){
                            echo do_shortcode( '[vc_button title="Купити" el_class="base_btn base_btn-dark" form_id="186"]' );
                        }
                        ?>
                        <?php
                        if(ICL_LANGUAGE_CODE == 'ru'){
                            echo do_shortcode( '[vc_button title="Рассрочка 0%" el_class="base_btn base_btn-light" form_id="180"]' );
                        } elseif (ICL_LANGUAGE_CODE == 'en'){
                            echo do_shortcode( '[vc_button title="Credit 0%" el_class="base_btn base_btn-light" form_id="179"]' );
                        } elseif(ICL_LANGUAGE_CODE == 'uk'){
                            echo do_shortcode( '[vc_button title="Розстрочка 0%" el_class="base_btn base_btn-light" form_id="181"]' );
                        }
                        ?>
                    </div>
                </div>
                <div class="sets_col">
                    <div class="base_subtitle">EVOBOX Plus <br><?php _e('с микрофонами','my'); ?> <br><?php _e('и саундбаром','my'); ?></div>
                    <a href="<?php echo $pre_lang;?>karaoke-komplekty-s-saundbarom/" class="base_link"><?php _e('Узнать больше','my'); ?></a>
                    <div class="base_txt"><?php _e('Караоке-система, 2 цифровых беспроводных микрофона и акустическая система для караоке EvoSound Bar.','my'); ?></div>
                    <br>
                    <div class="base_txt"><?php _e('41 000+ песен и возможность загрузки песен из каталога на 80 000 караоке-фонограмм.','my'); ?></div>
                    <div class="base_price">
                        <div class="base_price-old"><?php echo do_shortcode( '[countryPriceOld id="57" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                        <div class="base_price-profit"><?php _e('выгода','my'); ?> <?php echo do_shortcode( '[countryPrice id="57" project_id="6" profit="1"] [countryPriceCurrencyFull]' );?></div>
                    </div>
                    <div class="base_price-current"><?php echo do_shortcode( '[countryPrice id="57" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                    <div class="base_btns">
                        <?php
                        if(ICL_LANGUAGE_CODE == 'ru'){
                            echo do_shortcode( '[vc_button title="Купить" el_class="base_btn base_btn-dark" form_id="187"]' );
                        } elseif (ICL_LANGUAGE_CODE == 'en'){
                            echo do_shortcode( '[vc_button title="Buy" el_class="base_btn base_btn-dark" form_id="187"]' );
                        } elseif(ICL_LANGUAGE_CODE == 'uk'){
                            echo do_shortcode( '[vc_button title="Купити" el_class="base_btn base_btn-dark" form_id="187"]' );
                        }
                        ?>
                        <?php
                        if(ICL_LANGUAGE_CODE == 'ru'){
                            echo do_shortcode( '[vc_button title="Рассрочка 0%" el_class="base_btn base_btn-light" form_id="180"]' );
                        } elseif (ICL_LANGUAGE_CODE == 'en'){
                            echo do_shortcode( '[vc_button title="Credit 0%" el_class="base_btn base_btn-light" form_id="179"]' );
                        } elseif(ICL_LANGUAGE_CODE == 'uk'){
                            echo do_shortcode( '[vc_button title="Розстрочка 0%" el_class="base_btn base_btn-light" form_id="181"]' );
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="sets base_container">
            <div class="base_title"><?php _e('Караоке-комплекты','my'); ?> <br><?php _e('со стереосистемой','my'); ?></div>
            <div class="evosound_row">
                <div class="evosound_btn evosound_btn-black active" data-tab="bar-Black-All"><?php _e('Черный','my'); ?></div>
                <div class="evosound_btn evosound_btn-white" data-tab="bar-White-All"><?php _e('Жемчужный','my'); ?></div>
            </div>
            <div class="base_tab sets_all">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-all-black.jpg" class="base_img bar-Black-All active" alt="аудиосистема evosound bar черный">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-all-white.jpg" class="base_img bar-White-All" alt="аудиосистема evosound bar белый">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-all-black-mob.jpg" class="base_img-mob bar-Black-All active" alt="evosound bar черный">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-all-white-mob.jpg" class="base_img-mob bar-White-All"  alt="evosound bar белый">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-mic-grey.png" class="base_tab-img active" id="allGrey" alt="караоке evobox серый">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-mic-red.png" class="base_tab-img" id="allRed" alt="караоке evobox черный">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-mic-blue.png" class="base_tab-img" id="allBlue" alt="караоке evobox синий">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-mic-gold.png" class="base_tab-img" id="allGold" alt="караоке evobox золотой">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-mic-silver.png" class="base_tab-img" id="allSilver" alt="караоке evobox серебро">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-mic-black.png" class="base_tab-img" id="allBlack" alt="караоке evobox черный">
            </div>
            <div class="base_tab-content">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-grey.jpg" class="base_tab-preview active" data-tab="allGrey" alt="">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-red.jpg" class="base_tab-preview" data-tab="allRed" alt="">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-blue.jpg" class="base_tab-preview" data-tab="allBlue" alt="">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-gold.jpg" class="base_tab-preview" data-tab="allGold" alt="">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-silver.jpg" class="base_tab-preview" data-tab="allSilver" alt="">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-black.jpg" class="base_tab-preview" data-tab="allBlack" alt="">
            </div>
            <div class="sets_inner">
                <div class="sets_col">
                    <div class="base_subtitle">EVOBOX<br> <?php _e('с микрофонами','my'); ?><br><?php _e('и стереосистемой','my'); ?></div>
                    <a href="<?php echo $pre_lang;?>karaoke-komplekt-so-stereosistemoj/" class="base_link"><?php _e('Узнать больше','my'); ?></a>
                    <div class="base_txt"><?php _e('Караоке-система, 2 цифровых беспроводных микрофона и акустическая система для караоке EvoSound Sphere.','my'); ?></div>
                    <br>
                    <div class="base_txt"><?php _e('2 000 песен и возможность загрузки песен из каталога на 80 000 караоке-фонограмм.','my'); ?></div>
                    <div class="base_price">
                        <div class="base_price-old"><?php echo do_shortcode( '[countryPriceOld id="54" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                        <div class="base_price-profit"><?php _e('выгода','my'); ?> <?php echo do_shortcode( '[countryPrice id="54" project_id="6" profit="1"] [countryPriceCurrencyFull]' );?></div>
                    </div>
                    <div class="base_price-current"><?php echo do_shortcode( '[countryPrice id="54" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                    <div class="base_btns">
                        <?php
                        if(ICL_LANGUAGE_CODE == 'ru'){
                            echo do_shortcode( '[vc_button title="Купить" el_class="base_btn base_btn-dark" form_id="188"]' );
                        } elseif (ICL_LANGUAGE_CODE == 'en'){
                            echo do_shortcode( '[vc_button title="Buy" el_class="base_btn base_btn-dark" form_id="188"]' );
                        } elseif(ICL_LANGUAGE_CODE == 'uk'){
                            echo do_shortcode( '[vc_button title="Купити" el_class="base_btn base_btn-dark" form_id="188"]' );
                        }
                        ?>
                        <?php
                        if(ICL_LANGUAGE_CODE == 'ru'){
                            echo do_shortcode( '[vc_button title="Рассрочка 0%" el_class="base_btn base_btn-light" form_id="180"]' );
                        } elseif (ICL_LANGUAGE_CODE == 'en'){
                            echo do_shortcode( '[vc_button title="Credit 0%" el_class="base_btn base_btn-light" form_id="179"]' );
                        } elseif(ICL_LANGUAGE_CODE == 'uk'){
                            echo do_shortcode( '[vc_button title="Розстрочка 0%" el_class="base_btn base_btn-light" form_id="181"]' );
                        }
                        ?>
                    </div>
                </div>
                <div class="sets_col">
                    <div class="base_subtitle">EVOBOX Plus <br> <?php _e('с микрофонами','my'); ?><br><?php _e('и стереосистемой','my'); ?></div>
                    <a href="<?php echo $pre_lang;?>karaoke-komplekt-so-stereosistemoj/" class="base_link"><?php _e('Узнать больше','my'); ?></a>
                    <div class="base_txt"><?php _e('Караоке-система, 2 цифровых беспроводных микрофона и акустическая система для караоке EvoSound Sphere.','my'); ?></div>
                    <br>
                    <div class="base_txt"><?php _e('41 000+ песен и возможность загрузки песен из каталога на 80 000 караоке-фонограмм.','my'); ?></div>
                    <div class="base_price">
                        <div class="base_price-old"><?php echo do_shortcode( '[countryPriceOld id="55" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                        <div class="base_price-profit"><?php _e('выгода','my'); ?> <?php echo do_shortcode( '[countryPrice id="55" project_id="6" profit="1"] [countryPriceCurrencyFull]' );?></div>
                    </div>
                    <div class="base_price-current"><?php echo do_shortcode( '[countryPrice id="55" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                    <div class="base_btns">
                        <?php
                        if(ICL_LANGUAGE_CODE == 'ru'){
                            echo do_shortcode( '[vc_button title="Купить" el_class="base_btn base_btn-dark" form_id="189"]' );
                        } elseif (ICL_LANGUAGE_CODE == 'en'){
                            echo do_shortcode( '[vc_button title="Buy" el_class="base_btn base_btn-dark" form_id="189"]' );
                        } elseif(ICL_LANGUAGE_CODE == 'uk'){
                            echo do_shortcode( '[vc_button title="Купити" el_class="base_btn base_btn-dark" form_id="189"]' );
                        }
                        ?>
                        <?php
                        if(ICL_LANGUAGE_CODE == 'ru'){
                            echo do_shortcode( '[vc_button title="Рассрочка 0%" el_class="base_btn base_btn-light" form_id="180"]' );
                        } elseif (ICL_LANGUAGE_CODE == 'en'){
                            echo do_shortcode( '[vc_button title="Credit 0%" el_class="base_btn base_btn-light" form_id="179"]' );
                        } elseif(ICL_LANGUAGE_CODE == 'uk'){
                            echo do_shortcode( '[vc_button title="Розстрочка 0%" el_class="base_btn base_btn-light" form_id="181"]' );
                        }
                        ?>
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
