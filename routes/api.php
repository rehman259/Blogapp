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

Route::get('post', 'ApiController@index');
Route::get('post/{id}', 'ApiController@show');
Route::post('post', 'ApiController@store');
Route::put('post', 'ApiController@store');
Route::delete('post/{id}', 'ApiController@destroy');

// Route to send an email
Route::post('send', 'ApiController@sendEmail');