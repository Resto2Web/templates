const mix = require('laravel-mix');

mix
    .setPublicPath('./publishable/assets/theme1')
    .js('resources/views/themes/theme1/assets/js/theme1.js', 'js')
    .extract()
    .sass('resources/views/themes/theme1/assets/sass/theme1.scss', 'css')
    .version();
