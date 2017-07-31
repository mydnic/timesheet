<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::name('home')->get('/', 'HomeController@index');
});
