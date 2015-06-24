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

        /*////////////////////////////////////////////////////////////////
         || CSS scripts for the home theme
         ||
         *////////////////////////////////////////////////////////////////

        .styles(
        ['bootstrap/dist/css/bootstrap.min.css',
            'fullcalendar/dist/fullcalendar.min.css',

            'sweetalert/dist/sweetalert.css',
            'ngImgCrop/compile/minified/ng-img-crop.css',

        ], 'public/css/appVendor.css', 'vendor/bower/'
    )
        .styles(
        [
            'hoverex-all.css',
            'prettyPhoto.css',
            'style.css',
            'font-awesome.min.css',
            'animate.min.css'

        ], 'public/css/home/homeTheme.css', 'public/css/home'
    )

        /*////////////////////////////////////////////////////////////////
         || CSS scripts for the App
         ||
         *////////////////////////////////////////////////////////////////
        .styles(
        [
            'font-awesome/css/font-awesome.css',
            'zabuto_calendar.css',
            '../lineicons/style.css',

            'style.css',
            'style-responsive.css',


            ///js/app/gritter/css/jquery.gritter.css


        ], 'public/css/app/appTheme.css', 'public/css/app'
    )


        /*////////////////////////////////////////////////////////////////
         || JS scripts for the App theme
         ||
         *////////////////////////////////////////////////////////////////
        .scripts(
        [

            'jquery/dist/jquery.min.js',
            'jquery-ui/jquery-ui.min.js',
            'angular/angular.min.js',
            'bootstrap/dist/js/bootstrap.min.js',
            'angular-ui-calendar/calendar.min.js',
            'moment/min/moment-with-locales.min.js',
            'fullcalendar/dist/fullcalendar.min.js',
            'fullcalendar/dist/gcal.js',

            'sweetalert/dist/sweetalert.min.js',

            'angular-bootstrap/ui-bootstrap-tpls.min.js',
            'ngImgCrop/compile/minified/ng-img-crop.js',


        ], 'public/js/appVendor.js', 'vendor/bower/'
    )

        .scripts(
        [
            'jquery.dcjqaccordion.2.7.js',
            'jquery.scrollTo.min.js',
            'jquery.nicescroll.js',
            'jquery.sparkline.js',
            'common-scripts.js',
            //'jquery.gritter.js',
            'gritter-conf.js',
            'sparkline-chart.js',
            'zabuto_calendar.js'


        ], 'public/js/app/appTHeme.js', 'public/js/app'
    )


        /*////////////////////////////////////////////////////////////////
         || JS scripts for the home theme
         ||
         *////////////////////////////////////////////////////////////////
        .scripts(
        [
            'jquery/dist/jquery.min.js',
            'jquery-ui/jquery-ui.min.js',
            'bootstrap/dist/js/bootstrap.min.js',

        ], 'public/js/home/homeVendor.js', 'vendor/bower/'
    )

        .scripts(
        [
            'custom.js',
            'retina-1.1.0.js',
            'jquery.hoverdir.js',
            'jquery.hoverex.min.js',
            'jquery.isotope.min.js',
            'jquery.prettyPhoto.js'


        ], 'public/js/home/homeTHeme.js', 'public/js/home'
    )


});
