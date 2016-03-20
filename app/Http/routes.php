<?php

Route::group(['middleware' => 'web'], function () {
    // Front-end area
    Route::auth();
    Route::get('/', function () {
        return view('frontend.home.index');
    });
    
    Route::group(['prefix' => 'vehicles'], function () {
        Route::get('/{type}/{category?}', 'VehicleController@index');
        Route::get('/show/{id}', 'VehicleController@show');
    });

    //Admin area
    Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
        Route::get('/', 'Admin\CategoryController@index');

        Route::get('/vehicles/{type}', ['as' =>'vehicles', 'uses' => 'Admin\VehicleController@index']);
        Route::post('/vehicles', ['as' =>'vehicles.create', 'uses' => 'Admin\VehicleController@create']);
        Route::delete('/vehicles/{id}', ['as' =>'vehicles.delete', 'uses' => 'Admin\VehicleController@delete']);

        Route::get('/categories', ['as' =>'categories', 'uses' => 'Admin\CategoryController@index']);
        Route::post('/categories', ['as' =>'categories.create', 'uses' => 'Admin\CategoryController@create']);
        Route::delete('/categories/{id}', ['as' =>'categories.delete', 'uses' => 'Admin\CategoryController@delete']);

        Route::get('/informations', ['as' =>'informations', 'uses' => 'Admin\InformationController@index']);
        Route::post('/informations', ['as' =>'informations.create', 'uses' => 'Admin\InformationController@create']);
        Route::delete('/informations/{id}', ['as' =>'informations.delete', 'uses' => 'Admin\InformationController@delete']);


    });
});
