const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

     mix.styles([
        'resources/css/style.css',
        'resources/css/thi.css',
        'resources/css/2.css',
    ], 'public/css/adminstyle.css')
    //  mix.js(
    //     'resources/js/2.js',
    //     'resources/js/3.js',
    //     'resources/js/4.js',
    //     'resources/js/5.js',
    //     'resources/js/cs.js',
    //     'resources/js/cs.js',
    //      'public/js/adminscript.js')
    mix.scripts([
        'resources/js/2.js',
        'resources/js/3.js',
        'resources/js/4.js',
        'resources/js/5.js',
        'resources/js/cs.js',
        'resources/js/cs.js'
    ], 'public/js/adminscript.js');