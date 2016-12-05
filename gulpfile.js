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
    //Frontend
    mix.less([
        'libs/admin-lte/AdminLTE.less',
        'libs/datepicker.css',
        'app.less',
    ], 'public/css/app.css');
    mix.scripts([
        'libs/bootstrap.js',
        'libs/smoothscroll.js',
        'libs/datepicker/datepicker.js',
        'frontend/app.js'
    ], 'public/js/app.js');

    //Admin
    mix.less([
        'libs/bootstrap-less/bootstrap.less',
        'libs/admin-lte/skins/skin-blue.less',
        'admin/admin.less'
    ], 'public/css/admin.css');

    mix.scripts([
        'libs/bootstrap.js',
        'libs/adminLTE.js',
        'admin/admin.js'
    ], 'public/js/admin.js');


});
