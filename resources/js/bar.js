// import Swiper, { Pagination} from 'swiper';
// Swiper.use([Pagination]);
//
// / var tabIndex = 0;
// var slider1  = $('.js_slick-slider1').slick({
//     infinite: true,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     centerMode: true,
//     speed: 300,
//     asNavFor: '.js_slick-slider2'
// });
// var slider2  = $('.js_slick-slider2').slick({
//     infinite: true,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     centerMode: true,
//     speed: 300,
//     asNavFor: '.js_slick-slider1',
// });
//
// function modalOpen() {
//     const jsShowModals = document.querySelectorAll('.js_show-modal')
//     for (const jsShowModal of jsShowModals) {
//         jsShowModal.addEventListener('click', function (event) {
//             event.preventDefault();
//             const element = this.getAttribute('data-modal') ? document.querySelector('#' + this.getAttribute('data-modal')) : document.querySelector('#' + this.getAttribute('href'));
//             element.classList.add('is-visible');
//             document.querySelector('body').classList.add('modal-is-open');
//
//             $(".modal_slide").removeClass('active');
//             var sliderId = document.querySelector('.evosound_btn.active').getAttribute('data-tab');
//             $("#"+sliderId + 'Slider').addClass('active');
//             $(".modal .evosound_btn-modal").removeClass('active');
//             $("#"+sliderId + 'Tab').addClass('active');
//             console.log(sliderId)
//
//             slider1.slick('slickGoTo', tabIndex);
//             slider2.slick('slickGoTo', tabIndex);
//         })
//     }
// }
// modalOpen();
// $('.evosound_btn-modal').click(function(){
//     var tab_id = $(this).attr('data-tab');
//
//     $('.modal_slide').removeClass('active');
//     $('.evosound_btn-modal').removeClass('active');
//
//     $(this).addClass('active');
//     $("#"+tab_id).addClass('active');
// })
//
//
// //Закрываем модальное окно, при клике на close
// const jsCloseModals = document.querySelectorAll('.js_close-modal')
// for (const jsCloseModal of jsCloseModals) {
//     jsCloseModal.addEventListener('click', function (event) {
//         event.preventDefault();
//         this.closest('.modal').classList.remove('is-visible');
//         document.querySelector('body').classList.remove('modal-is-open');
//
//     })
// }
//
// //Закрываем модальное окно, при нажатии ESC
// document.addEventListener("keydown", keyDown, false);
//
// function keyDown(e) {
//     var keyCode = e.keyCode;
//     if (keyCode === 27) {
//         var modals = document.querySelectorAll('.modal');
//         for (let i = 0; i < modals.length; i++) {
//             modals[i].classList.remove('is-visible');
//         }
//         document.querySelector('body').classList.remove('modal-is-open');
//     }
// }
//
//
//
// $(document).ready(function(){
//
//     $('.evosound_btn').click(function(){
//         var tab_id = $(this).attr('data-tab');
//
//         $('.evosound_system').removeClass('active');
//         $('.evosound_btn').removeClass('active');
//
//         $(this).addClass('active');
//         $("#"+tab_id).addClass('active');
//     })
//     $('.evosound_tab-preview').click(function(){
//         var tab_id = $(this).attr('data-tab');
//         $('.evosound_tab-img').removeClass('active');
//         $('.evosound_tab-preview').removeClass('active');
//         tabIndex = $(this).index();
//
//
//         $("."+tab_id).addClass('active');
//     })
// })
