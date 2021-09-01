import Swiper, { Pagination} from 'swiper';
Swiper.use([Pagination]);

const packageUpdate = new Swiper('.js_package-slider', {
    slidesPerView: 2,
    pagination: {
        el: '.js_package-pagination',
        type: 'bullets',
    },
});

window.addEventListener('scroll', function(e) {
    var positionTop = document.querySelector('.comparison_header');
    if (positionTop.getBoundingClientRect().top <= 75) { // elem.getBoundingClientRect() возвращает в px координаты элемента относительно верхнего левого угла области просмотра окна браузера
        document.querySelector('.comparison_header').classList.add('sticky');
    } else {
        document.querySelector('.comparison_header').classList.remove('sticky');
    }
    var positionTop1 = document.querySelector('.js_unsticky');
    if (positionTop1.getBoundingClientRect().top <= 200) { // elem.getBoundingClientRect() возвращает в px координаты элемента относительно верхнего левого угла области просмотра окна браузера
        document.querySelector('.comparison_header').classList.remove('sticky');
    }
});
