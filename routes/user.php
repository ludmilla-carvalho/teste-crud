<?php
Route::post('/logout', 'UserAuth\LoginController@logout')->name('logout');
/* Profile */
Route::get('/home', 'HomeController@index')->name('home');
