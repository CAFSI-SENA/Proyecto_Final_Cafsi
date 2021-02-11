const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles(
    [
    'resources/skote/css/bootstrap.min.css',
    'resources/skote/css/icons.min.css',
    'resources/skote/css/app.min.css'
    ]
    ,'public/css/app.css').scripts(
        [
            'resources/skote/js/jquery.min.js',
            'resources/skote/js/bootstrap.bundle.min.js',
            'resources/skote/js/metisMenu.min.js',
            'resources/skote/js/simplebar.min.js',
            'resources/skote/js/waves.min.js'
        ]
    ,'public/js/app.js');
