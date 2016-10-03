<?php

Route::group(['middleware' => 'web'], function () {
    // Front-end area
    Route::auth();
    Route::group(['namespace' => 'Frontend'], function () {
        Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
        Route::group(['prefix' => 'vehicles'], function () {
            Route::get('/{type}/{category?}', 'VehicleController@index');
            Route::get('/show/{id}', 'VehicleController@show');
        });
    });

    //Admin area
    Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function () {
        Route::get('/', 'CategoryController@index');

        Route::get('/vehicles/{type}', ['as' => 'vehicles', 'uses' => 'VehicleController@index']);
        Route::post('/vehicles', ['as' => 'vehicles.create', 'uses' => 'VehicleController@create']);
        Route::put('/vehicles/sort', ['as' => 'vehicles.sort', 'uses' => 'VehicleController@sort']);
        Route::put('/vehicles/{id}/sortinformations', ['as' => 'vehicles.asortinformations', 'uses' => 'VehicleController@sortInformations']);
        Route::put('/vehicles/{id}', ['as' => 'vehicles.update', 'uses' => 'VehicleController@update']);
        Route::delete('/vehicles/{id}', ['as' => 'vehicles.delete', 'uses' => 'VehicleController@delete']);
        Route::get('/vehicles/edit/{id}', ['as' => 'vehicles.edit', 'uses' => 'VehicleController@edit']);
        Route::post('/vehicles/{id}/addinformation', ['as' => 'vehicles.addinformation', 'uses' => 'VehicleController@addInformation']);

        Route::delete('/vehicles/{vehicleid}/removeinformation/{id}', ['as' => 'vehicles.removeinformation', 'uses' => 'VehicleController@removeInformation']);

        Route::get('/categories', ['as' => 'categories', 'uses' => 'CategoryController@index']);
        Route::post('/categories', ['as' => 'categories.create', 'uses' => 'CategoryController@create']);
        Route::delete('/categories/{id}', ['as' => 'categories.delete', 'uses' => 'CategoryController@delete']);
        Route::put('/categories/{id}', ['as' => 'categories.update', 'uses' => 'CategoryController@update']);

        Route::get('/informations', ['as' => 'informations', 'uses' => 'InformationController@index']);
        Route::post('/informations', ['as' => 'informations.create', 'uses' => 'InformationController@create']);
        Route::delete('/informations/{id}', ['as' => 'informations.delete', 'uses' => 'InformationController@delete']);
        Route::put('/informations/sort', ['as' => 'informations.sort', 'uses' => 'InformationController@sort']);
        Route::put('/informations/{id}', ['as' => 'informations.update', 'uses' => 'InformationController@update']);


        Route::post('/attachments', ['as' => 'attachments.create', 'uses' => 'AttachmentController@create']);
        Route::delete('/attachments/{id}', ['as' => 'attachments.delete', 'uses' => 'AttachmentController@delete']);


    });
});
