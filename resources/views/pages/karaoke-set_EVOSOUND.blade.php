<?php
/*
*Template Name: Шаблон караоке комплектов Karaoke Set with EVOSOUND
*/
?>

        <?php
        get_header();
        ?>

        <script src="/wp-content/themes/html5blank-master/js/karaoke-set.js"></script>
        <link rel='stylesheet' href='/wp-content/themes/html5blank-master/css/custom-widjet.css'>
        <link rel='stylesheet' href='/wp-content/themes/html5blank-master/css/karaoke-set_copy.css'>

           <?php
            if(ICL_LANGUAGE_CODE == 'ru'){
                $pre_lang = "/";
                $call_form_id='79';
                $image_main='/wp-content/themes/html5blank-master/images/karaoke-set/EVOBOX+mic+SoundBar-RU.jpg';
                $delivery_link='/payment-delivery-warranty-and-return/';
                $evocase_link='/evocase/';
                $evobox_link='/karaoke-system/evobox/';
                $bar='/evosound-bar/';
                $microphones_link='/microphones-se-200d/';
                $image_main_alt='саундбар с караоке';
            } elseif (ICL_LANGUAGE_CODE == 'en'){
                $pre_lang = "/".ICL_LANGUAGE_CODE."/";
                $call_form_id='78';
                $image_main='/wp-content/themes/html5blank-master/images/karaoke-set/EVOBOX+mic+SoundBar-EN.jpg';
                $delivery_link='/en/payment-delivery-warranty-and-return/';
                $evocase_link='/en/evocase/';
                $image_main_alt='new home audio systems with karaoke machine';
                $bar='/en/evosound-bar/';
                $evobox_link='/en/karaoke-system/evobox/';
                $microphones_link='/en/microphones-se-200d/';
            } elseif(ICL_LANGUAGE_CODE == 'uk'){
                $pre_lang = "/".ICL_LANGUAGE_CODE."/";
                $call_form_id='80';
                $image_main='/wp-content/themes/html5blank-master/images/karaoke-set/EVOBOX+mic+SoundBar-UA.jpg';
                $delivery_link='/uk/payment-delivery-warranty-and-return/';
                $evocase_link='/uk/evocase/';
                $image_main_alt='аудіосистеми для дому';  
                $bar='/uk/evosound-bar/';
                $evobox_link='/uk/karaoke-system/evobox/';
                $microphones_link='/uk/microphones-se-200d/';
            }
            ?>
        <img src="<?php echo $image_main;?>" class="sets_main" alt="<?php echo $image_main_alt;?>">
        <section class="sets base_container sets-evosound">
            <h1 class="base_title"><a href="<?php echo $pre_lang;?>komplekty-dlya-karaoke/"><?php _e('Караоке-комплект','my'); ?></a> <br><?php _e('с саундбаром','my'); ?></h1>
            <div class="base_txt"><?php _e('Полный караоке-комплект для домашнего караоке от Studio Evolution. Включает в себя','my'); ?><br> <?php _e('профессиональную караоке-систему, два цифровых беспроводных микрофона','my'); ?> SE • 200D<br> <?php _e('и акустическую систему для караоке EvoSound Bar.','my'); ?></div>
            <div class="evosound_row">
                <div class="evosound_btn evosound_btn-black active" data-tab="bar-Black"><?php _e('Черный','my'); ?></div>
                <div class="evosound_btn evosound_btn-white" data-tab="bar-White"><?php _e('Жемчужный','my'); ?></div>
            </div>
            <div class="base_tab">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-sab-black.jpg" class="base_img-tab bar-Black active" alt="аудиосистема с караоке черная evosound bar">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-sab-white.jpg" class="base_img-tab bar-White"alt="аудиосистема с караоке белая evosound bar">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-sab-black-mob.jpg" class="base_img-tab-mob bar-Black active" alt="аудиосистема с караоке черная evosound bar">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/with-sab-white-mob.jpg" class="base_img-tab-mob bar-White" alt="аудиосистема с караоке белая evosound bar">

                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-grey.png" class="base_tab-img active" id="micGrey" alt="evobox серый">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-red.png" class="base_tab-img" id="micRed" alt="evobox красный">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-blue.png" class="base_tab-img" id="micBlue" alt="evobox синий">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-gold.png" class="base_tab-img" id="micGold" alt="evobox gold">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-silver.png" class="base_tab-img" id="micSilver" alt="evobox серебрянный">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-black.png" class="base_tab-img" id="micBlack" alt="evobox черный">
            </div>
            <div class="base_tab-content">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-grey.jpg" class="base_tab-preview active" data-tab="micGrey" alt="">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-red.jpg" class="base_tab-preview" data-tab="micRed" alt="">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-blue.jpg" class="base_tab-preview" data-tab="micBlue" alt="">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-gold.jpg" class="base_tab-preview" data-tab="micGold" alt="">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-silver.jpg" class="base_tab-preview" data-tab="micSilver" alt="">
                <img src="/wp-content/themes/html5blank-master/images/karaoke-set/preview-black.jpg" class="base_tab-preview" data-tab="micBlack" alt="">
            </div>
            <div class="sets_inner">
                <div class="sets_col">
                    <div class="base_subtitle">EVOBOX<br> <?php _e('с микрофонами','my'); ?><br><?php _e('и саундбаром','my'); ?></div>
                    <div class="base_txt"><?php _e('Караоке-система, 2 цифровых беспроводных микрофона и акустическая система для караоке EvoSound Bar.','my'); ?></div>
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
                    <div class="base_subtitle">EVOBOX Plus <br> <?php _e('с микрофонами','my'); ?><br><?php _e('и саундбаром','my'); ?></div>
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

        <?php get_template_part( '/templates/evocase_gift' ); ?>

        <section class="sets_slider">
            <h2 class="sets_slider-title"><?php _e('Комплект караоке любимого цвета','my'); ?></h2>
            <div class="sets_slider-content">
                <div class="owl-carousel owl-karaoke-sets">
                    <div class="item"><img src="/wp-content/themes/html5blank-master/images/karaoke-set/pic-ocean.jpg" alt="EVOBOX ocean"></div>
                    <div class="item"><img src="/wp-content/themes/html5blank-master/images/karaoke-set/pic-ruby.jpg" alt="EVOBOX ruby"></div>
                    <div class="item"><img src="/wp-content/themes/html5blank-master/images/karaoke-set/pic-gold.jpg" alt="EVOBOX gold"></div>
                    <div class="item"><img src="/wp-content/uploads/2020/06/EVO-SILVER.jpg" alt="EVOBOX silver"></div>
                    <div class="item"><img src="/wp-content/uploads/2020/06/EVO-GRAPHIT.jpg" alt="EVOBOX graphit"></div>
                    <div class="item"><img src="/wp-content/themes/html5blank-master/images/karaoke-set/pic-black.jpg" alt="EVOBOX black"></div>
                </div>
            </div>
        </section>

        <section class="sets_include">
           <div class="base_container">
               <h2 class="sets_include-title"><?php _e('Что входит в караоке-комплект','my'); ?>?</h2>
               <div class="sets_include-tabs flex_ai-c">
                   <div class="sets_include-tab active" data-tab="systemBlock"><?php _e('Караоке-система','my'); ?></div>
                   <div class="sets_include-tab" data-tab="micBlock"><?php _e('Микрофоны','my'); ?></div>
                   <div class="sets_include-tab" data-tab="evosoundBlock"><?php _e('Саундбар','my'); ?></div>
               </div>
               <div class="sets_include-tab-content active" id="systemBlock">
                   <a href="<?php echo $evobox_link;?>" class="sets_include-img" target="_blank"><img src="/wp-content/themes/html5blank-master/images/karaoke-set/EvoBox-set.jpg" class="sets_include-evobox" alt="EvoBox-complect"></a>
                   <h3 class="sets_include-content-title"><?php _e('Премиальная караоке-система ','my'); ?><br> EVOBOX <?php _e('или','my'); ?> EVOBOX Plus</h3>
                   <div class="sets_include-list flex_jc-sb">
                       <div>
                           <ul>
                               <li><?php _e('Корпус из авиационного алюминия в одном из 6 цветов','my'); ?></li>
                               <li><?php _e('Караоке в 4К','my'); ?></li>
                               <li><?php _e('Эффект LiveFX','my'); ?></li>
                               <li><?php _e('Бесшумная работа','my'); ?></li>
                               <li><?php _e('2000 предустановленных песен','my'); ?></li>
                               <li><?php _e('100 любых песен для бесплатной загрузки','my'); ?></li>
                               <li><?php _e('Покупка любимых песен из караоке-каталога на 80000+ композиций','my'); ?></li>
                               <li><?php _e('Управление с планшета или телефона','my'); ?></li>
                               <li><?php _e('Интеграция с умным домом','my'); ?></li>
                               <li><?php _e('Запись выступлений в студийном качестве','my'); ?></li>
                           </ul>
                           <a href="<?php echo $evobox_link;?>" class="sets_include-link" target="_blank"><?php _e('Узнать больше','my'); ?></a>
                       </div>
                       <div class="evosound_specification-parametrs">
                           <div>
                               <div class="evosound_specification-details">EVOBOX</div>
                               <div class="evosound_specification-parametr"><b>2 000+ <?php _e('песен','my'); ?></b><br> <?php _e('предуставлено','my'); ?></div>
                               <div class="evosound_specification-parametr"><b>+100 <?php _e('песен','my'); ?></b><br> <?php _e('для загрузки бесплатно','my'); ?></div>
                               <div class="evosound_specification-parametr"><b>120 <?php _e('ГБ','my'); ?></b> <?php _e('SSD-накопитель','my'); ?></div>
                           </div>
                           <div>
                               <div class="evosound_specification-details">EVOBOX Plus</div>
                               <div class="evosound_specification-parametr"><b>41 000+ <?php _e('песен','my'); ?></b><br> <?php _e('предуставлено','my'); ?></div>
                               <div class="evosound_specification-parametr"><b><?php _e('оригинальные видеоклипы ','my'); ?></b><br> <?php _e('к топовым хитам','my'); ?></div>
                               <div class="evosound_specification-parametr"><b>960 <?php _e('ГБ','my'); ?></b> <?php _e('SSD-накопитель','my'); ?></div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="sets_include-tab-content" id="micBlock">
                       <a href="<?php echo $microphones_link;?>" class="sets_include-img " target="_blank"><img src="/wp-content/themes/html5blank-master/images/karaoke-set/mic-set.jpg" class="sets_include-evosound" alt="EvoSound-complect"></a>
                       <h3 class="sets_include-content-title"><?php _e('Беспроводные цифровые','my'); ?><br> <?php _e('микрофоны SE • 200D','my'); ?> </h3>
                       <div class="sets_include-list">
                           <ul>
                               <li><?php _e('До 9 часов непрерывной работы','my'); ?></li>
                               <li><?php _e('Радиус действия — до 40 метров','my'); ?></li>
                               <li><?php _e('Быстрая зарядка через USB Type-C','my'); ?></li>
                               <li><?php _e('Кристально чистое звучание вашего голоса','my'); ?></li>
                               <li><?php _e('Задержка аудиосигнала всего 3 мс','my'); ?></li>
                               <li><?php _e('Минимальный уровень шумовых помех и искажений','my'); ?></li>
                               <li><?php _e('Защищенный аудиосигнал','my'); ?></li>
                               <li><?php _e('Простое и быстрое подключение','my'); ?></li>
                               <li><?php _e('Металлический корпус','my'); ?></li>
                               <li><?php _e('Первоклассные комплектующие','my'); ?></li>
                           </ul>
                           <a href="<?php echo $microphones_link;?>" class="sets_include-link" target="_blank"><?php _e('Узнать больше','my'); ?></a>
                       </div>
                   </div>
               <div class="sets_include-tab-content" id="evosoundBlock">
                   <a href="<?php echo $pre_lang;?>evosound-bar" class="sets_include-img" target="_blank"><img src="/wp-content/themes/html5blank-master/images/karaoke-set/evosound.jpg" class="sets_include-evobox" alt="EvoBox-complect"></a>
                   <h3 class="sets_include-content-title"><?php _e('Караоке-саундбар','my'); ?> EvoSound Bar</h3>
                   <div class="sets_include-list">
                       <ul>
                           <li><?php _e('Созданы специально для караоке. Выдерживают резкие перепады и пиковые нагрузки живого вокала.','my'); ?></li>
                           <li><?php _e('Мощность сабвуфера — 150 Вт','my'); ?></li>
                           <li><?php _e('Мощность саундбара — 300 Вт','my'); ?></li>
                           <li><?php _e('Количество динамиков в саундбаре — 14','my'); ?></li>
                           <li><?php _e('Раскрытие звука на 270˚','my'); ?></li>
                           <li><?php _e('Подключение через HDMI ARC','my'); ?></li>
                           <li><?php _e('Подключение через Bluetooth®','my'); ?></li>
                           <li><?php _e('2 цвета корпуса на выбор','my'); ?></li>
                           <li><?php _e('Подключение нескольких устройств','my'); ?></li>
                           <li><?php _e('Настенное крепление в комплекте','my'); ?></li>
                       </ul>
                       <a href="<?php echo $bar;?>" class="sets_include-link" target="_blank"><?php _e('Узнать больше','my'); ?></a>
                   </div>
               </div>
           </div>
        </section>

        <section class="sets_banner">
            <div class="base_container">
                <div class="sets_banner-inner">
                    <div class="sets_banner-content sets_banner-grey">
                        <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-ocean-mic.png" class="sets_banner-evobox-mic" alt="EVOBOX">
                        <div class="sets_banner-title"><?php _e('Караоке-комплект','my'); ?><br> <?php _e('на базе ','my'); ?> EVOBOX</div>
                        <div class="sets_banner-number">2 000</div>
                        <div class="sets_banner-title"><?php _e('песен предустановлено','my'); ?></div>
                        <div class="base_txt"> <?php _e('+ 100 любых песен можно загрузить бесплатно','my'); ?></div>
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
                    <div class="sets_banner-img sets_banner-grey">
                        <img src="/wp-content/themes/html5blank-master/images/karaoke-set/banner_evobox.png" class="sets_banner-evobox" alt="караоке для дома EVOBOX синий с микрофонами">
                    </div>
                </div>
                <div class="sets_banner-inner">
                    <div class="sets_banner-content sets_banner-yellow">
                        <img src="/wp-content/themes/html5blank-master/images/karaoke-set/evobox-plus-mob.png" class="sets_banner-evobox-mob" alt="караоке система для дома с микрофонами EVOBOX золотой">
                        <div class="sets_banner-title"><?php _e('Караоке-комплект','my'); ?><br> <?php _e('на базе','my'); ?> EVOBOX Plus</div>
                        <div class="sets_banner-number">41 000+</div>
                        <div class="sets_banner-title"><?php _e('песен предустановлен','my'); ?>о</div>
                        <div class="base_txt">+ <?php _e('оригинальные видеоклипы к топовым хитам','my'); ?></div>
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
                    <div class="sets_banner-img sets_banner-yellow">
                        <img src="/wp-content/themes/html5blank-master/images/karaoke-set/banner_evobox-plus.png" class="sets_banner-evobox-plus" alt="EVOBOX">
                    </div>
                </div>
            </div>
        </section>

        <section class="sets_video"  style="display: none;">
            <div class="base_container">
                <h2 class="sets_video-title"><?php _e('Видеообзор караоке-комплекта от Studio Evolution','my'); ?></h2>
                <a href="https://youtu.be/Yuj9NlnI7Fg" class="sets_video-link" target="_blank">
                    <img src="/wp-content/themes/html5blank-master/images/karaoke-set/video-bg.jpg" class="sets_video-link-img" alt="Video">
                    <span class="sets_video-watch"><?php _e('Смотреть видео','my'); ?></span>
                </a>
            </div>
        </section>

        <section>
            <div class="base_container">
                <div class="evosound_profit">
                    <div class="evosound_profit-item">
                        <img src="/wp-content/themes/html5blank-master/images/evosound/ic-delivery.svg" class="evosound_profit-icon" alt="free delivery">
                        <div class="evosound_profit-title"><?php _e('Бесплатная доставка','my'); ?></div>
                        <div class="evosound_profit-txt"><?php _e('При покупке в комплекте мы бесплатно доставим оборудование в отделение службы доставки или курьером прямо вам домой.','my'); ?></div>
                        <a href="<?php echo $pre_lang;?>payment-delivery-warranty-and-return/" class="evosound_profit-link" target="_blank"><?php _e('Подробнее','my'); ?></a>
                    </div>
                    <div class="evosound_profit-item">
                        <img src="/wp-content/themes/html5blank-master/images/evosound/ic-pay.svg" class="evosound_profit-icon" alt="comfort pay">
                        <div class="evosound_profit-title"><?php _e('Удобная оплата','my'); ?></div>
                        <div class="evosound_profit-txt"><?php _e('Оплачивайте по безналичному расчету либо наложенным платежом при передаче товара курьером или получении в отделении службы доставки.','my'); ?></div>
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

        <section class="sets_cart "  style="display: none;">
            <div class="sets_cart-content sets_evoplay">
                <div class="sets_cart-inner flex_ai-c">
                    <img src="/wp-content/themes/html5blank-master/images/karaoke-set/karaoke-with-mic-card.png" class="sets_cart-img" alt="караоке онлайн с микрофоном">
                    <div class="sets_cart-item">
                        <h3 class="sets_cart-title"><?php _e('Караоке-комплект','my'); ?> EVOBOX<br> <?php _e('с микрофонами','my'); ?><br> <?php _e('и саундбаром','my'); ?></h3>
                        <div class="base_price">
                            <div class="base_price-old"><?php echo do_shortcode( '[countryPriceOld id="56" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                            <div class="base_price-profit"><?php _e('выгода','my'); ?> <?php echo do_shortcode( '[countryPrice id="56" project_id="6" profit="1"] [countryPriceCurrencyFull]' );?></div>
                        </div>
                        <div class="base_price-current"><?php echo do_shortcode( '[countryPrice id="56" project_id="6"] [countryPriceCurrencyFull]' );?></div>
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
                </div>
                <div class="sets_cart-banner flex_ai-c">
                    <div class="sets_cart-banner-inner">
                        <h3 class="sets_cart-banner-title"><?php _e('Любите ходить в гости? Возьмите караоке с собой!','my'); ?></h3>
                        <a href="<?php echo $evocase_link;?>" class="sets_cart-banner-link" target="_blank"><?php _e('Подробнее об EvoCase','my'); ?></a>
                    </div>
                    <a href="<?php echo $evocase_link;?>" class="sets_cart-banne-img" target="_blank"><img src="/wp-content/themes/html5blank-master/images/karaoke-set/evocase.png" alt="evocase"></a>
                </div>
            </div>
        </section>

        <script>
            $(document).ready(function(){
                $('.base_tab-preview').click(function(){
                    var tab_id = $(this).attr('data-tab');
                    $(this).closest('.base_container').find('.base_tab-img').removeClass('active');
                    $(this).closest('.base_container').find('.base_tab-preview').removeClass('active');

                    $(this).addClass('active');
                    $("#"+tab_id).addClass('active');
                })

                $('.sets_include-tab').click(function(){
                    var tab_id = $(this).attr('data-tab');
                    $(this).closest('.base_container').find('.sets_include-tab').removeClass('active');
                    $(this).closest('.base_container').find('.sets_include-tab-content').removeClass('active');

                    $(this).addClass('active');
                    $("#"+tab_id).addClass('active');
                })
                $('.evosound_btn').click(function(){
                    var tab_id = $(this).attr('data-tab');
                    $(this).closest('.base_container').find('.base_img-tab').removeClass('active');
                    $(this).closest('.base_container').find('.base_img-tab-mob').removeClass('active');
                    $(this).closest('.base_container').find('.evosound_btn').removeClass('active');

                    $(this).addClass('active');
                    $("."+tab_id).addClass('active');
                })


            })
        </script>

        <div class="delivery-bg">
            <div class="container">
                <hr>
                <h2 class="delivery-bg_title"><?php _e('Условия доставки, оплаты и правила возврата','my'); ?></h2>
                <a href="<?php echo $delivery_link;?>" class="delivery-bg_link" target="_blank"><?php _e('Детальнее','my'); ?></a>
            </div>
        </div>

        <div class="diller-bg">
            <div class="container">
                <h2 class="diller-bg_title"><?php _e('Для дилеров','my'); ?></h2>
                <div class="diller-bg_subtitle"><?php _e('Хотите продавать лучшее караоке-оборудование? Отправьте нам заявку — наше партнерство будет плодотворным и взаимовыгодным.','my'); ?></div>
                <?php
                if(ICL_LANGUAGE_CODE == 'ru'){
                    echo do_shortcode( '[vc_button title="Стать дилером" form_id="120"]' );
                } elseif (ICL_LANGUAGE_CODE == 'en'){
                   echo do_shortcode( '[vc_button title="Become dealer" form_id="121"]' );
                } elseif(ICL_LANGUAGE_CODE == 'uk'){
                    echo do_shortcode( '[vc_button title="Стати дилером" form_id="122"]' );
                }
                ?>
                <div class="diller-bg_txt"><?php _e('Если вы уже являетесь нашим дилером и вам нужен промоматериал,<br>загрузите его по ','my'); ?> <a href="https://cloud.studio-evolution.com/s/YE6QqfTkszPOacS" target="_blank"><?php _e('ссылке','my'); ?></a>.</div>
            </div>
        </div>




    <!-- footer -->
            <div class="myan-footer-wraper my-footer">
                <?php if( get_field('go_to_block') ): ?>


                <div class="blog-bg">
                    <div class="container">
                        <h2 class="blog-bg_title"><?php _e('Узнай первым всё самое интересное о караоке!','my'); ?></h2>
                        <p class="blog-bg_text"><?php _e('Блог Studio Evolution — новости, полезные советы, обзоры, акции. Участвуй в конкурсах и выигрывай призы.', 'my'); ?></p>
                        <a href="https://blog.studio-evolution.com/" class="blog-bg_button" target="_blank"><?php _e('Читать блог', 'my'); ?></a>
                    </div>
                </div>

                <?php endif; ?>
                <footer class="container">
                    <div class="row">
                        <?php if(!is_front_page() && get_query_var('post_type') != 'news' ) : ?>
                            <div class="breadcrumbs">
                                <div class="col-sm-12"><div class="separator"></div></div>
                                <div class="col-sm-12"><?php if(function_exists('bcn_display')) bcn_display(); ?></div>
                            </div>
                        <?php endif; ?>
                        <div class="col-sm-12"><div class="separator"></div></div>
                    </div>
                    <?php get_template_part( '/templates/seo-block' ); ?>
                    <?php $officeToShow = get_my_shared_vars(); ?>
                    <div class="footer-phone hidden-md hidden-lg visible-xs visible-sm">
                        <div class="align-center">
                            <?php _e('отдел продаж', 'my'); ?><br>
                            <p><span><?=$officeToShow['city']->name;?></span> <a href="tel:<?php echo str_replace(array(" ", "(", ")"), '', $officeToShow['phones'][0]['phone']); ?>"><?php echo $officeToShow['phones'][0]['phone']; ?></a></p>
                        </div>
                        <div class="more-footer-phone">
                            <div class="align-center">
                            <?php if(ICL_LANGUAGE_CODE == 'en'): echo '<a href="/en/contacts/">All contacts</a>';
                            elseif(ICL_LANGUAGE_CODE == 'uk'): echo '<a href="/uk/contacts/">Всі контакти</a>';
                            else : echo '<a href="/contacts/">Все контакты</a>';
                            endif;?>
                            </div>
                        </div>
                        <div class="align-center">
                            <a href="#frm_form_<?php echo $call_form_id;?>_container" class="callme buy-btn"><?php _e('перезвоните мне', 'my'); ?></a><br>
                        </div>
                    </div>
                    <div class="row bottom-sub-menu">
                        <div class="col-sm-12">
                            <?php CTheme::myan_footer_nav();?>
                            <div class="separator"></div>
                        </div>
                    </div>
                    <div class="row" style="padding: 15px 0;">
                        <div class="col-sm-9">
                            <nav class="myan-menu"><?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer'));?></nav>
                        </div>
                        <div class="col-sm-3">
                            <div class="myan-logo">
                                <a href="<?php echo home_url(); ?>" class="myan-logo-img-mini">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/myan-logo-mini.png" alt="Logo">
                                </a>
                                <p class="copyright-text">Copyright &copy; 2003 — <?=date('Y')?><br>Studio Evolution™ — <?php _e('все права защищены','my'); ?></p>
                            </div>
                        </div>
                    </div>
                </footer>
                <div class="clear"></div>
            </div>
            <!--/footer -->
        <!--/wrapper -->
        <?php
        // Block for currencies
        require_once 'module_currency.php';
        ?>
        <?php wp_footer(); ?>
            <script data-skip-moving="true">
                    (function(w,d,u){
                            var s=d.createElement('script');s.async=1;s.src=u+'?'+(Date.now()/60000|0);
                            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                    })(window,document,'https://cdn.bitrix24.ua/b5824109/crm/site_button/loader_2_elq00v.js');
            </script>
                <script>
                (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                })(window,document,'https://cdn.bitrix24.ua/b5824109/crm/site_button/loader_3_lfzdcg.js');
                </script>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        $('.menu-item-7171').addClass('col-sm-2');
                    });
                </script>
        <style>.home td, .home tr {
            border: none!important;
            padding: 0;
        }
        .menu-item-7171 > a:first-child {
            display: none;
        }
        body {overflow-x: unset;}
    </style>

 </body>
</html>
