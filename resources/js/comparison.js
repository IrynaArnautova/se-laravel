import Swiper, { Pagination} from 'swiper';
Swiper.use([Pagination]);

//COMPARISON: Переключение чекбокса
const differenceParams = document.querySelectorAll('.js_difference-parametrs');
differenceParams.forEach(item => {
    item.addEventListener('click', function () {
        const noDifferenceRows =  document.querySelectorAll('.no-difference_row');
        noDifferenceRows.forEach(item => {
            item.classList.add('hide');
        })
    })
})
const differenceParamAlls = document.querySelectorAll('.js_all-parametrs');
differenceParamAlls.forEach(item => {
    item.addEventListener('click', function () {
        const noDifferenceRows =  document.querySelectorAll('.no-difference_row');
        noDifferenceRows.forEach(item => {
            item.classList.remove('hide');
        })
    })
})


//COMPARISON: Фиксирование врхнего блока секции
window.addEventListener('scroll', function(e) {
    const positionTop = document.querySelector('.comparison_header');

    if (positionTop.getBoundingClientRect().top <= -85) {
        document.querySelector('.comparison_header').classList.add('sticky');
    } else {
        document.querySelector('.comparison_header').classList.remove('sticky');
    }
    const positionTop1 = document.querySelector('.js_unsticky');
    if (positionTop1.getBoundingClientRect().top <= 88) {
        document.querySelector('.comparison_header').classList.remove('sticky');
    }
});
const comparisonMobile = new Swiper('.js_comparison-mobile', {
    slidesPerView: 2,
    loop: false,
    pagination: {
        el: '.js_comparison-pagination',
        type: 'bullets',
        clickable: true,
    },

});

