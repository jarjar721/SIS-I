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
    .sass('resources/sass/app.scss', 'public/css');

mix.copy('vendor/bootstrap/dist/css', 'public/bootstrap/css');
mix.copy('vendor/bootstrap/dist/js', 'public/bootstrap/js');
mix.copy('vendor/font-awesome/css', 'public/font-awesome/css');
mix.copy('vendor/nprogress', 'public/nprogress');
mix.copy('vendor/iCheck', 'public/iCheck');
mix.copy('vendor/bootstrap-progressbar', 'public/bootstrap-progressbar');
mix.copy('vendor/jqvmap', 'public/jqvmap');
mix.copy('vendor/bootstrap-daterangepicker', 'public/bootstrap-daterangepicker');
mix.copy('vendor/jquery', 'public/jquery');
mix.copy('vendor/fastclick', 'public/fastclick');
mix.copy('vendor/Chart.js', 'public/Chart.js');
mix.copy('vendor/gauge.js', 'public/gauge.js');
mix.copy('vendor/skycons', 'public/skycons');
mix.copy('vendor/Flot', 'public/Flot');
mix.copy('vendor/flot.orderbars', 'public/flot.orderbars');
mix.copy('vendor/flot-spline', 'public/flot-spline');
mix.copy('vendor/flot.curvedlines', 'public/flot.curvedlines');
mix.copy('vendor/DateJS', 'public/DateJS');
mix.copy('vendor/jqvmap', 'public/jqvmap');
mix.copy('vendor/moment', 'public/moment');