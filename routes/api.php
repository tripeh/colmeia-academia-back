<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1',  'middleware' => 'cors'], function () {
    Route::get('training', 'TrainingController@index');
    Route::get('training/create/{title}/{subtitle}/{description}', 'TrainingController@store');
    Route::post('token', 'TokenController@store');
    Route::post('push', 'PushController@send');
});