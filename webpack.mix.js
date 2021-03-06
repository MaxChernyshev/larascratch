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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sourceMaps();


// FRONT
mix.js('resources/js/site/app.js', 'public/js/site/js')
    .sass('resources/sass/site/app.scss', 'public/css/site/css')
    .sourceMaps();


// ADMIN
mix.js([
    'resources/js/admin/app.js',
    // '~plugins/jquery/jquery.min.js',
    // '~plugins/bootstrap/js/bootstrap.bundle.min.js',
    // '~dist/js/adminlte.min.js',
], 'public/js/admin/js')
    .sass('resources/sass/admin/app.scss', 'public/css/admin/css')
    .sourceMaps();
