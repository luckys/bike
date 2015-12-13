var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss', 'public/css/app.css');
});

elixir(function (mix) {
    mix.scripts([
        '../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
        'app.js'
    ], 'public/js/app.js');
});

elixir(function (mix) {
    mix.version(['css/app.css', 'js/app.js']);
});