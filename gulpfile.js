var elixir = require('laravel-elixir');

require('laravel-elixir-browser-sync');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.copy(
	    	'resources/assets/bootstrap-sass/assets/fonts/bootstrap', 
	    	'public/fonts/bootstrap'
    	)
    	.scripts([
    		'coming.js'
            ],
    		'public/js/coming.js',
            'resources/assets/js' 
    	)
    	.sass('main.scss')
    	.browserSync([
			'app/**/*',
			'public/**/*',
			'resources/views/**/*',
    	], {
    		proxy: 'sicna.app'
    	});
});
