process.env.DISABLE_NOTIFIER = true;
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

elixir(function (mix) {

    mix.less(['app.less'])

        .styles(
        [
            'fullcalendar/dist/fullcalendar.min.css',
            'bootstrap/dist/css/bootstrap.min.css',
            'sweetalert/dist/sweetalert.css'

        ], 'public/css/appVendor.css', 'vendor/bower/'
    )


        .scripts(
        [
            'jquery/dist/jquery.min.js',
            'jquery-ui/jquery-ui.min.js',
            'angular-ui-calendar/calendar.min.js',
            'fullcalendar/dist/fullcalendar.min.js',
            'fullcalendar/dist/gcal.js',
            'moment/min/moment-with-locales.min.js',
            'bootstrap/dist/js/bootstrap.min.js',
            'sweetalert/dist/sweetalert.min.js',
            'angular/angular.min.js',


        ], 'public/js/appVendor.js', 'vendor/bower/'
    )
        .scripts(
        [
            'jquery/dist/jquery.min.js',
            'jquery-ui/jquery-ui.min.js',
            'bootstrap/dist/js/bootstrap.min.js',

        ], 'public/js/homeVendor.js', 'vendor/bower/'
    )


});
