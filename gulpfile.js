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

elixir(function(mix) {
    
   mix.less(['app.less','creative.less','mixins.less','variables.less'])

   .styles(
        [
            'fullcalendar/dist/fullcalendar.min.css',
            'bootstrap/dist/css/bootstrap.min.css',
            'sweetalert/dist/sweetalert.css'

        ], 'public/css/allVendor.css', 'vendor/bower/'
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
            

        ], 'public/js/allVendor.js', 'vendor/bower/'
    )
     .scripts(
        [
            
            'cbpAnimatedHeader.js',
            'jquery.easing.min.js',
            'jquery.fittext.js',
            'wow.min.js',
            'classie.js',
            'creative.js',
            
           

        ], 'public/js/app.js', 'public/js/'
    )
   





});
