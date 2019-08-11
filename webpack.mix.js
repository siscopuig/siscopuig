const mix = require('laravel-mix');

mix.scripts([
        './resources/js/jquery3.4.1.min.js',
        './resources/js/headroom.min.js',
        './resources/js/jQuery.headroom.js',
        './resources/js/smooth-scroll.min.js',
        './resources/js/application.js'
    ], './public/js/all.js');

mix.styles([
    './resources/css/normalize.css',
    './resources/css/styles.css'
], 'public/css/all.css');