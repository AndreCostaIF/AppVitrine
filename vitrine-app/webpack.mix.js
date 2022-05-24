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
//responsive.css tem que sempre ser o ultimo arquivo
 mix.styles(['resources/views/site/css/config.css', 'resources/views/site/css/header.css', 'resources/views/site/css/responsive.css'], 'public/site/css/main.css');
 mix.styles(['resources/views/partener/css/custom.css', 'resources/views/site/css/header.css', 'resources/views/site/css/responsive.css'], 'public/partener/css/custom.css');
 mix.sass('resources/views/scss/bootstrap.scss',
 'public/bootstrap.css');


 mix.scripts('node_modules/jquery/dist/jquery.js',
 'public/jquery.js')
 .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 
             'public/bootstrap.js')
 .scripts('resources/views/site/js/menu.js', 'public/site/js/menu.js')

 .scripts('resources/views/site/js/main.js', 'public/site/js/main.js')
 ;

 
