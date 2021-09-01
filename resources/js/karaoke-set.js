import { partChangeByClick } from './parts.js';
import Swiper, { Autoplay } from 'swiper';
Swiper.use([ Autoplay ]);

//PARTS: Табы: смена по клику
partChangeByClick();

const swiper = new Swiper('.js_set-slider', {
    slidesPerView: 6,
    breakpoints: {
        0: {
            loop:true,
            autoplay: {
                delay: 5000
            }
        },
        1900: {
            loop: false,
            autoplay: false,
            pauseOnMouseEnter: false
        }
    }
});
swiper.autoplay.start();
