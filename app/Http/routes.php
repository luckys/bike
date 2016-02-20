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


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::group(['prefix' => 'admin'], function(){
        Route::get('/category', 'Admin\CategoryController@index');
        Route::get('/', 'HomeController@index');
    });

    Route::get('/', function () {
        return view('welcome');
    });

    Route::group(['prefix' => 'vehicles'], function () {
        Route::get('/{type}/{category?}', 'VehicleController@index');
        Route::get('/show/{id}', 'VehicleController@show');
    });

});