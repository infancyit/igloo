<?php

<<<<<<< HEAD
Route::group(['prefix' => 'igloo'], function() {

    Route::get('/', 'InfancyIt\Igloo\Controllers\AutomateController@igloo');

    Route::group(['prefix' => 'api'], function() {
        Route::get('ping', 'InfancyIt\Igloo\Controllers\AutomateController@ping');
        Route::post('make', 'InfancyIt\Igloo\Controllers\AutomateController@make');
    });
=======
Route::group(['prefix' => 'api/igloo'], function() {
    Route::get('ping', 'Farhad\Igloo\Controllers\AutomateController@ping');
//    Route::get('index', 'Farhad\Igloo\Controllers\AutomateController@index');
//    Route::post('model', 'Farhad\Igloo\Controllers\AutomateController@model');
    Route::post('make', 'Farhad\Igloo\Controllers\AutomateController@make');
>>>>>>> ebd6cc870c8aa20af7642a13ab6ad3cda25fbe94
});

