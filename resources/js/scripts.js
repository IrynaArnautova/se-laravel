// Скрипты для хедера на десктопе
(function () {
    const linkClicks = document.querySelectorAll('.js_change-lang');
    linkClicks.forEach(item => {
        item.addEventListener('click', e => {
            const lang = e.target.getAttribute('data-lang');
            let path = window.location.pathname.replace('/en/', '/').replace('/uk/', '/');
            const locale = lang === 'ru' ? '' : '/' + lang;
            window.location = window.location.origin + locale + path;
            console.log(window.location.origin)
        })
    })
}());

(function () {
    let currentLanguage = document.querySelector('html').getAttribute('lang');
    document.querySelector(`.js_change-lang[data-lang="${currentLanguage}"]`).classList.add('hide');
    document.querySelector(`.header-mobile_menu-langs .js_change-lang[data-lang="${currentLanguage}"]`).classList.add('active');
    if (currentLanguage === 'uk') {
        currentLanguage = 'ua';
    }
    document.querySelector('.js_set-lang').innerHTML = currentLanguage.toUpperCase();
}());


const firstShows = document.querySelectorAll('.js_show-content');
document.querySelector('.js_show-first').addEventListener('mouseenter', e => {
    firstShows.forEach(firstShow => {
        firstShow.classList.add('active');
    })
})
const hoverMains = document.querySelectorAll('.js_hover-main');
const hoverTabs = document.querySelectorAll('.js_parent-tab');
document.querySelector('.js_show-first').addEventListener('mouseleave', e => {
    firstShows.forEach(firstShow => {
        firstShow.classList.remove('active');
    })
    hoverMains.forEach(hoverMain => {
        hoverMain.classList.remove('active');
    })
    hoverTabs.forEach(hoverTab => {
        hoverTab.classList.remove('active');
    })

})
//Табы: смена по ховеру на основные пункты меню
const mainLinksHover = document.querySelectorAll('.js_main-link');
mainLinksHover.forEach(item => {
    item.addEventListener('mouseenter', e => {
        mainLinksHover.forEach(mainLinkHover => {
            mainLinkHover.classList.remove('active');
        })
        document.querySelector('.header_overlay').classList.add('active');
        e.target.classList.add('active');
    })
})

//Табы: убираем активный класс у всех пунктов меню с классом js_main-link при выводе курсора
document.querySelectorAll('.base_dropdown').forEach(function (item) {
    item.addEventListener('mouseleave', e => {
        mainLinksHover.forEach(mainLinkHover => {
            mainLinkHover.classList.remove('active');
        })
        document.querySelector('.header_overlay').classList.remove('active');
    })
})

//Табы: смена по ховеру внешних блоков
const tabsMainHover = document.querySelectorAll('.js_hover-main');
tabsMainHover.forEach(item => {
    item.addEventListener('mouseenter', e => {
        const parentItem = e.target.closest('.js_parent-main');
        const tabsHoverBlock = parentItem.querySelectorAll('.js_hover-main');
        const tabContentsHover = parentItem.querySelectorAll('.base_main-hover');
        const tabHover = e.target.getAttribute('data-hover');
        tabsHoverBlock.forEach(tabHoverBlock => {
            tabHoverBlock.classList.remove('active');
        })
        tabContentsHover.forEach(tabContentHover => {
            tabContentHover.classList.remove('active');
        })
        document.querySelector('#' + tabHover).classList.add('active');
        e.target.classList.add('active');
    })
})

//Табы: смена по ховеру внутренних блоков
const tabsHover = document.querySelectorAll('.js_hover-tab');
tabsHover.forEach(item => {
    item.addEventListener('mouseenter', e => {
        const parentItem = e.target.closest('.js_parent-tab');
        const tabsHoverBlock = parentItem.querySelectorAll('.js_hover-tab');
        const tabContentsHover = parentItem.querySelectorAll('.base_tab-hover');
        const tabHover = e.target.getAttribute('data-hover');
        tabsHoverBlock.forEach(tabHoverBlock => {
            tabHoverBlock.classList.remove('active');
        })
        tabContentsHover.forEach(tabContentHover => {
            tabContentHover.classList.remove('active');
        })
        document.querySelector('#' + tabHover).classList.add('active');
        e.target.classList.add('active');
    })
})

// Скрипты для хедера на мобильном
//Модальное окно: открытие при клике на js_show-modal
const jsShowModals = document.querySelectorAll('.js_show-modal')
for (const jsShowModal of jsShowModals) {
    jsShowModal.addEventListener('click', function (event) {
        event.preventDefault();
        const element = this.getAttribute('data-modal') ? document.querySelector('#' + this.getAttribute('data-modal')) : document.querySelector('#' + this.getAttribute('href'));
        element.classList.add('is-visible');
        closeAllModal();
        document.querySelector('#modalMenuNav').classList.add('is-visible');
        document.querySelector('body').classList.add('modal-is-open');
    })
}
document.querySelector('.js_show-product').addEventListener('click', function (event) {
    event.preventDefault();
    closeAllModal();
    document.querySelector('#modalMenuNav').classList.remove('slide-left');
    document.querySelector('#modalMenuProduct').classList.add('is-visible');
})
document.querySelector('.js_close-product').addEventListener('click', function (event) {
    event.preventDefault();
    closeAllModal();
    document.querySelector('#modalMenuNav').classList.add('slide-left');
    document.querySelector('#modalMenuNav').classList.add('is-visible');
})
document.querySelector('.js_show-call').addEventListener('click', function (event) {
    event.preventDefault();
    // closeAllModal();
    event.target.classList.toggle('active');
    document.querySelector('#modalCall').classList.toggle('is-visible');
})

function closeAllModal() {
    document.querySelectorAll('.js_header-modal').forEach(function (item) {
        item.classList.remove('is-visible');
        item.scrollTo(0,0);
    })
}

//Модальное окно: закрытие при клике на js_close-modal
const jsCloseModals = document.querySelectorAll('.js_close-modal')
for (const jsCloseModal of jsCloseModals) {
    jsCloseModal.addEventListener('click', function (event) {
        event.preventDefault();
        document.querySelector('.js_show-call').classList.remove('active');
        document.querySelector('#modalMenuNav').classList.remove('slide-left');
        document.querySelector('body').classList.remove('modal-is-open');
        document.querySelector('#modalMenu').classList.add('slide-left');
        setTimeout(function () {
            document.querySelector('#modalMenu').classList.remove('is-visible');
            document.querySelector('#modalMenu').classList.remove('slide-left');
        }, 600)
        closeAllModal();
    })
}


