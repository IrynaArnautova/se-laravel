const mix = require('laravel-mix');


mix
    // Общее
    .js('resources/js/scripts.js', 'public/js/scripts.min.js')
    .styles([
        'node_modules/swiper/swiper-bundle.min.css', 'resources/css/styles.css'
    ], 'public/css/styles.min.css')

    // Главная
    // .js('resources/js/home.js', 'public/js/home.min.js')
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
