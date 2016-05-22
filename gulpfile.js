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
  'jquery': './bower_components/jquery/dist/jquery.min.js',
  'bootstrap': './bower_components/bootstrap/dist/js/bootstrap.min.js',
  'bootstrap_css': './bower_components/bootstrap/dist/css/bootstrap.min.css',
  'jquery_ui': './bower_components/jquery-ui/jquery-ui.min.js',
  'fa_icons': './bower_components/font-awesome/css/font-awesome.min.css',
  'switch_js': './bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js',
  'switch_css': './bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css',
  'chart_js': './bower_components/Chart.js/dist/Chart.min.js',
};



elixir.config.sourcemaps = false;

elixir(function(mix) {

  //Admin CSS  & JS
  mix.scripts([
    paths.jquery,
    paths.bootstrap,
    paths.switch_js,
    paths.chart_js,
    'admin.js',
  ], 'public/js/admin.js');

  mix.sass([
    'back/main.scss'
  ], 'resources/assets/css/back/admin.css');

  mix.styles([
      paths.switch_css,
      paths.fa_icons,
      'back/admin.css',
  ], 'public/css/admin.css');

  mix.copy('./bower_components/font-awesome/fonts/', 'public/fonts/');



  // Front CSS & JS

  mix.scripts([
     paths.jquery,
     paths.bootstrap,
     paths.jquery_ui,
     'main.js',
  ], 'public/js/app.js');

  mix.styles([
    paths.bootstrap_css,
  ], 'public/css/app.css');

  mix.copy('bower_components/bootstrap/fonts', 'public/fonts/bootstrap');

  mix.browserSync({
    proxy:'http://localhost/ecommerce-app/public',
    browser: 'chrome'
  });
  
  mix.sass('front/main.scss');


});
