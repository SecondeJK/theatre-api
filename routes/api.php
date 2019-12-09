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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/all', 'ApiController@index');
Route::get('/show/{uuid}', 'ApiController@index');
Route::get('/delete/{uuid}', 'ApiController@delete');
Route::get('/update/{uuid}', 'ApiController@update');
