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
    return view('home.index');
});

Route::group(['prefix' => 'vehicles'], function () {
    Route::get('/{type}', 'VehicleController@index');
    Route::get('/show/{id}', 'VehicleController@show');
});
