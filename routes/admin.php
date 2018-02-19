<?php
Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');
/* Dashboard */
Route::get('/home', 'Admin\DashboardController@index')->name('home');
/* Users */
Route::resource('users', 'Admin\UserController', ['except' => ['show']]);
