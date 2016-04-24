<?php


Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');

Route::get('product', 'PagesController@product');
Route::get('contact', 'PagesController@contact');

Route::group(['middleware' => ['web']], function () {
    //Route::resource('blog', 'BlogController');

});

Route::get('dashboard', 'DashboardController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
