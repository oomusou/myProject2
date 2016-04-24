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
    /* basic */
    /*
     basic area is used to ervery page with you want.
     Be careful! don't mix to bigger!
     */
    mix.scripts([
        "jquery-2.1.1.js",
        "bootstrap.min.js"
    ], 'public/js/basic.js');
    mix.scripts([
        "shared.js"
    ], 'public/js/shared.js');

    mix.sass([
        "bootstrap.scss"
    ], 'public/css/bootstrap.css');
    mix.sass([
        "shared.sass"
    ], 'public/css/shared.css');

    
    /** 
     * Pages area
     * */
    mix.sass([
        "pages/pages.sass"
    ], 'public/css/pages.css');

    /**
     * dashboard area
     * */
    mix.sass([
        "dashboard/dashboard.sass"
    ], 'public/css/dashboard.css');


});
