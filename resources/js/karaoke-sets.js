// $(document).ready(function(){
//     $('.base_tab-preview').click(function(){
//         var tab_id = $(this).attr('data-tab');
//         $(this).closest('.base_container').find('.base_tab-img').removeClass('active');
//         $(this).closest('.base_container').find('.base_tab-preview').removeClass('active');
//
//         $(this).addClass('active');
//         $("#"+tab_id).addClass('active');
//     })
//     $('.evosound_btn').click(function(){
//         var tab_id = $(this).attr('data-tab');
//         $(this).closest('.base_container').find('.base_img').removeClass('active');
//         $(this).closest('.base_container').find('.base_img-mob').removeClass('active');
//         $(this).closest('.base_container').find('.evosound_btn').removeClass('active');
//
//         $(this).addClass('active');
//         $("."+tab_id).addClass('active');
//     })
// })

import { partChangeByClick } from './parts.js';

//PARTS: Табы: смена по клику
partChangeByClick();