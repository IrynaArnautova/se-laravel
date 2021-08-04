import { partChangeByClick } from './parts.js';
import Swiper, { Controller, Navigation, EffectFade} from 'swiper';
Swiper.use([Controller, Navigation, EffectFade]);

//PARTS: Табы: смена по клику
partChangeByClick();

const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    slidesPerView: 6,
    loop: true,
    
  });

// jQuery(document).ready(function ($) {
//     $('.owl-karaoke-sets').owlCarousel({
//         loop:false,
//         autoWidth: true,
//         items: 6,
//         responsive : {
//             0: {
//                 loop:true,
//                 autoplay:true,
//                 autoplayTimeout:3000,
//                 autoplayHoverPause:true
//             },
//             1600: {
//                 autoplay:false,
//                 autoplayHoverPause:false
//             }
//         }
//     });
//
//
// });
