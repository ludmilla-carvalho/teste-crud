<?php

Route::get('/home', 'Admin\DashboardController@index')->name('home');

/*Users*/
Route::resource('users', 'Admin\UserController', ['except' => ['show']]);
