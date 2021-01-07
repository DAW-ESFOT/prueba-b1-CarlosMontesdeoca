<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

    Route::get('movie', 'MovieController@index');
    Route::get('movie/{movie}','MovieController@show');
    Route::post('movie', 'MovieController@store');
    Route::put('movie/{movie}', 'MovieController@update');
    Route::delete('movie/{movie}', 'MovieController@delete');

