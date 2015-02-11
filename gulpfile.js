var gulp = require('gulp');
var elixir = require('laravel-elixir');

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
	    	'resources/assets/bower_components/bootstrap-sass/assets/fonts/bootstrap', 
	    	'public/fonts/bootstrap'
    	)
        .copy(
            'resources/assets/bower_components/animate.css/animate.css',
            'public/css/animate.css'
        )
        .copy(
            'resources/assets/bower_components/jquery/dist/jquery.js',
            'public/js/jquery.js'
        )
        .copy(
            'resources/assets/js/coming.js',
            'public/js/coming.js'
        )
    	.scripts([
    		'jquery.js',
            'coming.js'
            ],
    		'public/js/all.js',
            'public/js'
    	)
    	.sass('main.scss')
        .styles([
            'animate.css',
            'main.css'
        ],
            'public/css/all.css',
            'public/css'
        );
   //  	.browserSync([
			// 'app/**/*',
			// 'public/**/*',
			// 'resources/views/**/*',
   //  	], {
   //  		proxy: 'sicna.app'
   //  	});
});
