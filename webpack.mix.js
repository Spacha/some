let mix = require('laravel-mix');

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

mix.js([
	'resources/assets/js/app.js',
	'resources/assets/js/controllers/mainCtrl.js',
	'resources/assets/js/controllers/loggerCtrl.js',
	'resources/assets/js/controllers/loginCtrl.js'
	], 'public/js')
	.sass('resources/assets/sass/app.scss', 'public/css');
