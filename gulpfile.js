var elixir = require('laravel-elixir');
var bower = require('bower');
var gulp = require('gulp');
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

var paths = {
  'jquery': 'bower_components/jquery/dist',
  'bootstrap': 'bower_components/bootstrap/dist',
  'jquery_ui': 'bower_components/jquery-ui',
  'switch_js': 'bower_components/bootstrap-switch/dist/js',
  'switch_css': 'bower_components/bootstrap-switch/dist/css',
  'app_scripts': ''
};



elixir.config.sourcemaps = false;

elixir(function(mix) {

  //Admin CSS  & JS
  mix.scripts([
    '../../../' + paths.jquery + '/jquery.min.js',
     '../../../' + paths.bootstrap + '/js/bootstrap.js',
     '../../../' + paths.switch_js + '/bootstrap-switch.js',
    'admin.js',
  ], 'public/js/admin.js');

  mix.sass([
    'back/main.scss'
  ], 'resources/assets/css/back/admin.css');

  mix.styles([
      '../../../' + paths.switch_css + '/bootstrap3/bootstrap-switch.css',
      'back/admin.css',
  ], 'public/css/admin.css');



  // Site CSS & JS

  mix.scripts([
     '../../../' + paths.jquery + '/jquery.min.js',
     '../../../' + paths.bootstrap + '/js/bootstrap.js',
     '../../../' + paths.jquery_ui + '/jquery-ui.min.js',

     'main.js',
  ], 'public/js/app.js');

  mix.styles([
    '../../../' + paths.bootstrap + '/css/bootstrap.css'

  ], 'public/css/app.css');

  mix.browserSync({proxy:'http://localhost/ecommerce-app/public'});
  mix.sass('front/main.scss');


});
