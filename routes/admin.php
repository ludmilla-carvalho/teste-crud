<?php

Route::get('/home', 'Admin\DashboardController@index')->name('home');

/*Users*/
Route::resource('users', 'Admin\UserController');

/*Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');*/
