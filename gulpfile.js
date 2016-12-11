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


elixir.config.css.less.folder = '';
elixir.config.js.folder = '';


elixir(function(mix) {
    //Frontend
    mix.less([
        'plugins/adminLTE/less/AdminLTE.less',
        'plugins/adminLTE/less/skins/skin-blue.less',
        'plugins/daterangepicker/daterangepicker.css',
        'less/frontend.less',
    ], 'public/css/app.css');
    mix.scripts([
        'plugins/jQuery/jQuery-2.1.4.min.js',
        'plugins/bootstrap/bootstrap.js',
        'plugins/smoothscroll/smoothscroll.js',
        'plugins/moment/moment.min.js',
        'plugins/daterangepicker/daterangepicker.js',
        'js/frontend.js'
    ], 'public/js/app.js');

    //Admin
    mix.less([
        'plugins/adminLTE/less/AdminLTE.less',
        'plugins/adminLTE/less/skins/skin-blue.less',
        'plugins/iCheck/square/blue.css',
        'plugins/bootstrap-switch/bootstrap-switch.min.css',
        'plugins/cropper/cropper.min.css',
        'less/admin.less'
    ], 'public/css/admin.css');

    mix.scripts([
        'plugins/jQuery/jQuery-2.1.4.min.js',
        'plugins/jQueryUI/jquery-ui.min.js',
        'plugins/bootstrap/bootstrap.js',
        'plugins/adminLTE/adminLTE.js',
        '/plugins/bootstrap-switch/bootstrap-switch.min.js',
        '/plugins/cropper/cropper.min.js',
        'js/admin.js'
    ], 'public/js/admin.js');


});


