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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps()
    .postCss('resources/css/style.css', 'public/css', [require('tailwindcss'), require('autoprefixer')])
    .postCss('resources/css/main.css', 'public/css', [require('tailwindcss'), require('autoprefixer')]);
