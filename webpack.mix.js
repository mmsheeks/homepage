const mix = require('laravel-mix')

mix.sass('resources/sass/main.scss', 'main.css')
    .copyDirectory('resources/js', 'public/js')
    .copyDirectory('resources/images', 'public/images')
