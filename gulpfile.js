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
    mix.styles([
        "bootstrap/css/bootstrap.min.css",
        "plugins/jvectormap/jquery-jvectormap-1.2.2.css",
        "dist/css/AdminLTE.min.css",
        "dist/css/skins/_all-skins.min.css"

    ], 'public/build/css/everything.css');

    mix.scripts([
        "plugins/jQuery/jQuery-2.1.4.min.js",
        "bootstrap/js/bootstrap.min.js",
        "plugins/fastclick/fastclick.min.js",
        "dist/js/app.min.js",
        "plugins/sparkline/jquery.sparkline.min.js",
        "plugins/jvectormap/jquery-jvectormap-1.2.2.min.js",
        "plugins/jvectormap/jquery-jvectormap-world-mill-en.js",
        "plugins/slimScroll/jquery.slimscroll.min.js",
        "plugins/chartjs/Chart.min.js",
        "dist/js/pages/dashboard2.js",
        "dist/js/demo.js"
    ],'public/build/js/everything.js');
});
