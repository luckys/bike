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
        Route::get('/', 'Admin\AdminController@index');
        Route::get('/categories', ['as' =>'categories', 'uses' => 'Admin\CategoryController@index']);
        Route::post('/categories', ['as' =>'categories.create', 'uses' => 'Admin\CategoryController@create']);
        Route::delete('/categories/{id}', ['as' =>'categories.delete', 'uses' => 'Admin\CategoryController@delete']);
    });
});
