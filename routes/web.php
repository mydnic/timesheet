<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::name('home')->get('/', 'HomeController@index');
    Route::name('timesheet.store')->post('/', 'HomeController@store');

    Route::resource('holiday', 'HolidayController');
});
