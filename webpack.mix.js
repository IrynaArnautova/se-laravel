const mix = require('laravel-mix');


mix
    // Общее
    .js('resources/js/scripts.js', 'public/js/scripts.min.js')
    .styles([
        'node_modules/swiper/swiper-bundle.min.css', 'resources/css/styles.css'
    ], 'public/css/styles.min.css')

    // Главная
    .postCss('resources/css/home.css', 'public/css/home.min.css')

    // Сравнение караоке-систем
    .js('resources/js/comparison.js', 'public/js/comparison.min.js')
    .postCss('resources/css/comparison.css', 'public/css/comparison.min.css')

    // Evosound
    .js('resources/js/evosound.js', 'public/js/evosound.min.js')
    .postCss('resources/css/evosound.css', 'public/css/evosound.min.css')

    // Evosound bar
    .js('resources/js/bar.js', 'public/js/bar.min.js')
    .postCss('resources/css/bar.css', 'public/css/bar.min.css')

    // Evosound bar спецификация
    .postCss('resources/css/bar-specification.css', 'public/css/bar-specification.min.css')

    // Evosound sphere
    .js('resources/js/sphere.js', 'public/js/sphere.min.js')
    .postCss('resources/css/sphere.css', 'public/css/sphere.min.css')

    // Караоке комплекты
    .js('resources/js/karaoke-sets.js', 'public/js/karaoke-sets.min.js')
    .postCss('resources/css/karaoke-sets.css', 'public/css/karaoke-sets.min.css')

    // Караоке комплект + микрофоны
    .js('resources/js/karaoke-set.js', 'public/js/karaoke-set.min.js')
    .postCss('resources/css/karaoke-set_mic.css', 'public/css/karaoke-set_mic.min.css')

    // Караоке комплект + саундбар
    .postCss('resources/css/karaoke-set_evosound.css', 'public/css/karaoke-set_evosound.min.css')

    // Караоке комплект + стереосистема
    .postCss('resources/css/karaoke-set_acoustic.css', 'public/css/karaoke-set_acoustic.min.css')

    // Пакеты обновлений
    .js('resources/js/package-update.js', 'public/js/package-update.min.js')
    .postCss('resources/css/package-update.css', 'public/css/package-update.min.css')

    // EVOBOX Premium
    .js('resources/js/premium.js', 'public/js/premium.min.js')
    .postCss('resources/css/premium.css', 'public/css/premium.min.css')


    .options({
        processCssUrls: false,
        postCss: [
            // require('postcss-css-variables')()
        ]
    })
    .version();


//запуск управления версиями только во время npm run production
if (mix.inProduction()) {
    mix.version();
}
