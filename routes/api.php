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

Route::group(['prefix' => 'talks'], function() {
    Route::get('/index', 'ApiController@index');
    Route::get('/show/{uuid}', 'ApiController@show');
    Route::delete('/delete/{uuid}', 'ApiController@delete');
    Route::put('/update/{uuid}', 'ApiController@update');
    Route::post('/create', 'ApiController@store');
});
