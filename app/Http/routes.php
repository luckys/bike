<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'bikes'], function() {
    Route::get('/', 'BikeController@index');
    Route::get('/show/{id}', 'BikeController@show');
});

Route::group(['prefix' => 'motorbikes'], function() {
    Route::get('/', 'MotorbikeController@index');
    Route::get('/show/{id}', 'MotorbikeController@show');
});