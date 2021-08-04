<?php
/*
*Template Name: Шаблон караоке комплектов Karaoke Set with SYSTEM
*/
?>

        <?php
        get_header();
        ?>

        <script src="/js/karaoke-set.js"></script>
        <link rel='stylesheet' href='/css/custom-widjet.css'>
        <link rel='stylesheet' href='/css/karaoke-set_copy.css'>

           <?php
            if(ICL_LANGUAGE_CODE == 'ru'){
                $pre_lang = "/";
                $call_form_id='79';
                $image_main='/images/karaoke-set/sets_Sphere-RU.jpg';
                $delivery_link='/payment-delivery-warranty-and-return/';
                $evocase_link='/evocase/';
                $evobox_link='/karaoke-system/evobox/';
                $sphere = '/evosound-sphere/';
                $microphones_link='/microphones-se-200d/';
                $image_main_alt='караоке комплект для дома evobox';
                $image_main_alt_with_all_black='аудиосистема для дома черная';
                $image_main_alt_with_all_white='аудиосистема для дома белая';
            } elseif (ICL_LANGUAGE_CODE == 'en'){
                $pre_lang = "/".ICL_LANGUAGE_CODE."/";
                $call_form_id='78';
                $image_main='/images/karaoke-set/sets_Sphere-EN.jpg';
                $delivery_link='/en/payment-delivery-warranty-and-return/';
                $evocase_link='/en/evocase/';
                $sphere = '/en/evosound-sphere/';
                $image_main_alt='karaoke set up for home';
                $evobox_link='/en/karaoke-system/evobox/';
                $microphones_link='/en/microphones-se-200d/';
                $image_main_alt_with_all_black='audio music for karaoke black';
                $image_main_alt_with_all_white='audio music for karaoke white';
            } elseif(ICL_LANGUAGE_CODE == 'uk'){
                $pre_lang = "/".ICL_LANGUAGE_CODE."/";
                $call_form_id='80';
                $image_main='/images/karaoke-set/sets_Sphere-UA.jpg';
                $delivery_link='/uk/payment-delivery-warranty-and-return/';
                $evocase_link='/uk/evocase/';
                $sphere = '/uk/evosound-sphere/';
                $image_main_alt='караоке комплект для дома';
                $evobox_link='/uk/karaoke-system/evobox/';
                $image_main_alt_with_all_black='аудіосистема для караоке вдома чорний';
                $image_main_alt_with_all_white='аудіосистема для караоке вдома біла';
                $microphones_link='/uk/microphones-se-200d/';
            }
            ?>
        <img src="<?php echo $image_main;?>" class="sets_main" alt="<?php echo $image_main_alt;?>">
        <section class="sets base_container sets-system">
            <h1 class="base_title"><a href="<?php echo $pre_lang;?>komplekty-dlya-karaoke/">Караоке-комплект</a> <br>со стереосистемой</h1>
            <div class="base_txt">Полный караоке-комплект для домашнего караоке от Studio Evolution. Включает в себя<br> профессиональную караоке-систему, два цифровых беспроводных микрофона SE • 200D<br> и акустическую стереосистему для караоке EvoSound Sphere.</div>
            <div class="sets_row">
                <div class="sets_btn sets_btn-black active" data-tab="bar-Black-All">Черный</div>
                <div class="sets_btn sets_btn-white" data-tab="bar-White-All">Жемчужный</div>
            </div>
            <div class="base_tab">
                <img src="/images/karaoke-set/with-all-black.jpg" class="base_img-tab bar-Black-All active" alt="<?php echo $image_main_alt_with_all_black;?>">
                <img src="/images/karaoke-set/with-all-white.jpg" class="base_img-tab bar-White-All" alt="<?php echo $image_main_alt_with_all_white;?>">
                <img src="/images/karaoke-set/with-all-black-mob.jpg" class="base_img-tab-mob bar-Black-All active" alt="<?php echo $image_main_alt_with_all_black;?>">
                <img src="/images/karaoke-set/with-all-white-mob.jpg" class="base_img-tab-mob bar-White-All"  alt="<?php echo $image_main_alt_with_all_white;?>">

                <img src="/images/karaoke-set/evobox-mic-grey.png" class="base_tab-img active" id="micGrey" alt="караоке с микрофом evobox серый">
                <img src="/images/karaoke-set/evobox-mic-red.png" class="base_tab-img" id="micRed" alt="караоке с микрофом evobox красный">
                <img src="/images/karaoke-set/evobox-mic-blue.png" class="base_tab-img" id="micBlue" alt="караоке с микрофом evobox синий">
                <img src="/images/karaoke-set/evobox-mic-gold.png" class="base_tab-img" id="micGold" alt="караоке с микрофом evobox золотой">
                <img src="/images/karaoke-set/evobox-mic-silver.png" class="base_tab-img" id="micSilver" alt="караоке с микрофом evobox серебрянный">
                <img src="/images/karaoke-set/evobox-mic-black.png" class="base_tab-img" id="micBlack" alt="караоке с микрофом evobox черный">
            </div>
            <div class="base_tab-content">
                <img src="/images/karaoke-set/preview-grey.jpg" class="base_tab-preview active" data-tab="micGrey" alt="">
                <img src="/images/karaoke-set/preview-red.jpg" class="base_tab-preview" data-tab="micRed" alt="">
                <img src="/images/karaoke-set/preview-blue.jpg" class="base_tab-preview" data-tab="micBlue" alt="">
                <img src="/images/karaoke-set/preview-gold.jpg" class="base_tab-preview" data-tab="micGold" alt="">
                <img src="/images/karaoke-set/preview-silver.jpg" class="base_tab-preview" data-tab="micSilver" alt="">
                <img src="/images/karaoke-set/preview-black.jpg" class="base_tab-preview" data-tab="micBlack" alt="">
            </div>
            <div class="sets_inner">
                <div class="sets_col">
                    <div class="base_subtitle">EVOBOX<br> с микрофонами<br>и стереосистемой</div>
                    <div class="base_txt">Караоке-система, 2 цифровых беспроводных микрофона и акустическая система для караоке EvoSound Sphere.</div>
                    <br>
                    <div class="base_txt">2 000 песен и возможность загрузки песен из каталога на 80 000 караоке-фонограмм.</div>
                    <div class="base_price">
                        <div class="base_price-old"><?php echo do_shortcode( '[countryPriceOld id="54" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                        <div class="base_price-profit">выгода <?php echo do_shortcode( '[countryPrice id="54" project_id="6" profit="1"] [countryPriceCurrencyFull]' );?></div>
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
                    <div class="base_subtitle">EVOBOX Plus <br> с микрофонами<br>и стереосистемой</div>
                    <div class="base_txt">Караоке-система, 2 цифровых беспроводных микрофона и акустическая система для караоке EvoSound Sphere.</div>
                    <br>
                    <div class="base_txt">41 000+ песен и возможность загрузки песен из каталога на 80 000 караоке-фонограмм.</div>
                    <div class="base_price">
                        <div class="base_price-old"><?php echo do_shortcode( '[countryPriceOld id="55" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                        <div class="base_price-profit">выгода <?php echo do_shortcode( '[countryPrice id="55" project_id="6" profit="1"] [countryPriceCurrencyFull]' );?></div>
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

        <?php get_template_part( '/templates/evocase_gift' ); ?>

        <section class="sets_slider">
            <h2 class="sets_slider-title">Комплект караоке любимого цвета</h2>
            <div class="sets_slider-content">
                <div class="owl-carousel owl-karaoke-sets">
                    <div class="item"><img src="/images/karaoke-set/pic-ocean.jpg" alt="EVOBOX ocean"></div>
                    <div class="item"><img src="/images/karaoke-set/pic-ruby.jpg" alt="EVOBOX ruby"></div>
                    <div class="item"><img src="/images/karaoke-set/pic-gold.jpg" alt="EVOBOX gold"></div>
                    <div class="item"><img src="/wp-content/uploads/2020/06/EVO-SILVER.jpg" alt="EVOBOX silver"></div>
                    <div class="item"><img src="/wp-content/uploads/2020/06/EVO-GRAPHIT.jpg" alt="EVOBOX graphit"></div>
                    <div class="item"><img src="/images/karaoke-set/pic-black.jpg" alt="EVOBOX black"></div>
                </div>
            </div>
        </section>

        <section class="sets_include">
           <div class="base_container">
               <h2 class="sets_include-title">Что входит в караоке-комплект?</h2>
               <div class="sets_include-tabs flex_ai-c">
                   <div class="sets_include-tab active" data-tab="systemBlock">Караоке</div>
                   <div class="sets_include-tab" data-tab="micBlock">Микрофоны</div>
                   <div class="sets_include-tab" data-tab="evosoundBlock">Стереосистема</div>
               </div>
               <div class="sets_include-tab-content active" id="systemBlock">
                   <a href="<?php echo $evobox_link;?>" class="sets_include-img" target="_blank"><img src="/images/karaoke-set/EvoBox-set.jpg" class="sets_include-evobox" alt="EvoBox-complect"></a>
                   <h3 class="sets_include-content-title">Премиальная караоке-система<br> EVOBOX или EVOBOX Plus</h3>
                   <div class="sets_include-list flex_jc-sb">
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
                           <a href="<?php echo $evobox_link;?>" class="sets_include-link" target="_blank">Узнать больше</a>
                       </div>
                       <div class="sets_specification-parametrs">
                           <div>
                               <div class="sets_specification-details">EVOBOX</div>
                               <div class="sets_specification-parametr"><b>2 000+ песен</b><br> предуставлено</div>
                               <div class="sets_specification-parametr"><b>+100 песен</b><br> для загрузки бесплатно</div>
                               <div class="sets_specification-parametr"><b>120 ГБ</b> SSD-накопитель</div>
                           </div>
                           <div>
                               <div class="sets_specification-details">EVOBOX Plus</div>
                               <div class="sets_specification-parametr"><b>41 000+ песен</b><br> предуставлено</div>
                               <div class="sets_specification-parametr"><b>оригинальные видеоклипы </b><br> к топовым хитам</div>
                               <div class="sets_specification-parametr"><b>960 ГБ</b> SSD-накопитель</div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="sets_include-tab-content" id="micBlock">
                       <a href="<?php echo $microphones_link;?>" class="sets_include-img " target="_blank"><img src="/images/karaoke-set/mic-set.jpg" class="sets_include-evosound" alt="EvoSound-complect"></a>
                       <h3 class="sets_include-content-title">Беспроводные цифровые<br> микрофоны SE • 200D</h3>
                       <div class="sets_include-list">
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
                           <a href="<?php echo $microphones_link;?>" class="sets_include-link" target="_blank">Узнать больше</a>
                       </div>
                   </div>
               <div class="sets_include-tab-content" id="evosoundBlock">
                   <a href="<?php echo $sphere;?>" class="sets_include-img" target="_blank"><img src="/images/karaoke-set/audio.jpg" class="sets_include-evobox" alt="EvoBox-complect"></a>
                   <h3 class="sets_include-content-title">Караоке-стереосистема EvoSound Sphere</h3>
                   <div class="sets_include-list">
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
                       <a href="<?php echo $sphere;?>" class="sets_include-link" target="_blank">Узнать больше</a>
                   </div>
               </div>
           </div>
        </section>

        <section class="sets_banner">
            <div class="base_container">
                <div class="sets_banner-inner">
                    <div class="sets_banner-content sets_banner-grey">
                        <img src="/images/karaoke-set/evobox-ocean-mic.png" class="sets_banner-evobox-mic" alt="EVOBOX">
                        <div class="sets_banner-title">Караоке-комплект<br> на базе EVOBOX</div>
                        <div class="sets_banner-number">2 000</div>
                        <div class="sets_banner-title">песен предустановлено</div>
                        <div class="base_txt">+ 100 любых песен можно загрузить бесплатно</div>
                        <div class="base_price">
                            <div class="base_price-old"><?php echo do_shortcode( '[countryPriceOld id="54" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                            <div class="base_price-profit">выгода <?php echo do_shortcode( '[countryPrice id="54" project_id="6" profit="1"] [countryPriceCurrencyFull]' );?></div>
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
                    <div class="sets_banner-img sets_banner-grey">
                        <img src="/images/karaoke-set/banner_evobox.png" class="sets_banner-evobox" alt="караоке система EVOBOX для дома с микрофонами">
                    </div>
                </div>
                <div class="sets_banner-inner">
                    <div class="sets_banner-content sets_banner-yellow">
                        <img src="/images/karaoke-set/evobox-plus-mob.png" class="sets_banner-evobox-mob" alt="караоке система EVOBOX для дома с микрофонами">
                        <div class="sets_banner-title">Караоке-комплект<br> на базе EVOBOX Plus</div>
                        <div class="sets_banner-number">41 000+</div>
                        <div class="sets_banner-title">песен предустановлено</div>
                        <div class="base_txt">+ оригинальные видеоклипы к топовым хитам</div>
                        <div class="base_price">
                            <div class="base_price-old"><?php echo do_shortcode( '[countryPriceOld id="55" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                            <div class="base_price-profit">выгода <?php echo do_shortcode( '[countryPrice id="55" project_id="6" profit="1"] [countryPriceCurrencyFull]' );?></div>
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
                    <div class="sets_banner-img sets_banner-yellow">
                        <img src="/images/karaoke-set/banner_evobox-plus.png" class="sets_banner-evobox-plus" alt="караоке система EVOBOX для дома с микрофонами">
                    </div>
                </div>
            </div>
        </section>

        <section class="sets_video"  style="display: none;">
            <div class="base_container">
                <h2 class="sets_video-title">Видеообзор караоке-комплекта от Studio Evolution</h2>
                <a href="https://youtu.be/Yuj9NlnI7Fg" class="sets_video-link" target="_blank">
                    <img src="/images/karaoke-set/video-bg.jpg" class="sets_video-link-img" alt="видео обзор караоке систем">
                    <span class="sets_video-watch">Смотреть видео</span>
                </a>
            </div>
        </section>

        <section>
            <div class="base_container">
                <div class="sets_profit">
                    <div class="sets_profit-item">
                        <img src="/images/evosound/ic-delivery.svg" class="sets_profit-icon" alt="free delivery">
                        <div class="sets_profit-title">Бесплатная доставка</div>
                        <div class="sets_profit-txt">При покупке в комплекте мы бесплатно доставим оборудование в отделение службы доставки или курьером прямо вам домой.</div>
                        <a href="<?php echo $pre_lang;?>payment-delivery-warranty-and-return/" class="sets_profit-link" target="_blank">Подробнее</a>
                    </div>
                    <div class="sets_profit-item">
                        <img src="/images/evosound/ic-pay.svg" class="sets_profit-icon" alt="comfort pay">
                        <div class="sets_profit-title">Удобная оплата</div>
                        <div class="sets_profit-txt">Оплачивайте по безналичному расчету либо наложенным платежом при передаче товара курьером или получении в отделении службы доставки.  </div>
                        <a href="<?php echo $pre_lang;?>payment-delivery-warranty-and-return/" class="sets_profit-link" target="_blank">Подробнее</a>
                    </div>
                    <div class="sets_profit-item">
                        <img src="/images/evosound/ic-warranty.svg" class="sets_profit-icon" alt="warranty">
                        <div class="sets_profit-title">12 месяцев гарантии</div>
                        <div class="sets_profit-txt">Гарантийное обслуживание включает  бесплатный гарантийный ремонт или замену на аналогичное устройство.</div>
                        <a href="<?php echo $pre_lang;?>payment-delivery-warranty-and-return/" class="sets_profit-link" target="_blank">Подробнее</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sets_cart "  style="display: none;">
            <div class="sets_cart-content sets_evoplay">
                <div class="sets_cart-inner flex_ai-c">
                    <img src="/images/karaoke-set/karaoke-with-mic-card.png" class="sets_cart-img" alt="караоке онлайн с микрофоном">
                    <div class="sets_cart-item">
                        <h3 class="sets_cart-title">Караоке-комплект EVOBOX<br>с микрофонами <br> и саундбаром</h3>
                        <div class="base_price">
                            <div class="base_price-old"><?php echo do_shortcode( '[countryPriceOld id="54" project_id="6"] [countryPriceCurrencyFull]' );?></div>
                            <div class="base_price-profit">выгода <?php echo do_shortcode( '[countryPrice id="54" project_id="6" profit="1"] [countryPriceCurrencyFull]' );?></div>
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
                </div>
                <div class="sets_cart-banner flex_ai-c">
                    <div class="sets_cart-banner-inner">
                        <h3 class="sets_cart-banner-title">Любите ходить в гости? Возьмите караоке с собой!</h3>
                        <a href="<?php echo $evocase_link;?>" class="sets_cart-banner-link" target="_blank">Подробнее об EvoCase</a>
                    </div>
                    <a href="<?php echo $evocase_link;?>" class="sets_cart-banne-img" target="_blank"><img src="/images/karaoke-set/evocase.png" alt="чемодан для караоке evocase"></a>
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
                $('.sets_btn').click(function(){
                    var tab_id = $(this).attr('data-tab');
                    $(this).closest('.base_container').find('.base_img-tab').removeClass('active');
                    $(this).closest('.base_container').find('.base_img-tab-mob').removeClass('active');
                    $(this).closest('.base_container').find('.sets_btn').removeClass('active');

                    $(this).addClass('active');
                    $("."+tab_id).addClass('active');
                })


            })
        </script>

        <div class="delivery-bg">
            <div class="container">
                <hr>
                <h2 class="delivery-bg_title">Условия доставки, оплаты и правила возврата</h2>
                <a href="<?php echo $delivery_link;?>" class="delivery-bg_link" target="_blank">Детальнее</a>
            </div>
        </div>

        <div class="diller-bg">
            <div class="container">
                <h2 class="diller-bg_title">Для дилеров</h2>
                <div class="diller-bg_subtitle">Хотите продавать лучшее караоке-оборудование? Отправьте нам заявку — наше партнерство будет плодотворным и взаимовыгодным.</div>
                <?php
                if(ICL_LANGUAGE_CODE == 'ru'){
                    echo do_shortcode( '[vc_button title="Стать дилером" form_id="120"]' );
                } elseif (ICL_LANGUAGE_CODE == 'en'){
                   echo do_shortcode( '[vc_button title="Become dealer" form_id="121"]' );
                } elseif(ICL_LANGUAGE_CODE == 'uk'){
                    echo do_shortcode( '[vc_button title="Стати дилером" form_id="122"]' );
                }
                ?>
                <div class="diller-bg_txt">Если вы уже являетесь нашим дилером и вам нужен промоматериал,<br>загрузите его по  <a href="https://cloud.studio-evolution.com/s/YE6QqfTkszPOacS" target="_blank">ссылке</a>.</div>
            </div>
        </div>




    <!-- footer -->
            <div class="myan-footer-wraper my-footer">
                <?php if( get_field('go_to_block') ): ?>


                <div class="blog-bg">
                    <div class="container">
                        <h2 class="blog-bg_title">Узнай первым всё самое интересное о караоке!</h2>
                        <p class="blog-bg_text">Блог Studio Evolution — новости, полезные советы, обзоры, акции. Участвуй в конкурсах и выигрывай призы.', 'my'); ?></p>
                        <a href="https://blog.studio-evolution.com/" class="blog-bg_button" target="_blank">Читать блог', 'my'); ?></a>
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
                            отдел продаж', 'my'); ?><br>
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
                            <a href="#frm_form_<?php echo $call_form_id;?>_container" class="callme buy-btn">перезвоните мне', 'my'); ?></a><br>
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
                                <p class="copyright-text">Copyright &copy; 2003 — <?=date('Y')?><br>Studio Evolution™ — все права защищены</p>
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
