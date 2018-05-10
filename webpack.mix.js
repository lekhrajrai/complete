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

mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css','resources/assets/css/bootstrap.min.css');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js','resources/assets/js/bootstrap.min.js');
mix.copy('node_modules/jquery/dist/jquery.min.js','resources/assets/js/jquery.min.js');

mix.scripts([

	'resources/assets/js/jquery.min.js',
	'resources/assets/js/bootstrap.min.js',
	'resources/assets/js/custom.js'
	], 'public/js/all.js');

mix.styles([
	'resources/assets/css/bootstrap.min.css',
	'resources/assets/css/custom.css'
	
	],'public/css/all.css');