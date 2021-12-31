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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/albums', 'App\Http\Controllers\AlbumController@index');
Route::post('/albums', 'App\Http\Controllers\AlbumController@store');
Route::get('/albums/{task}', 'App\Http\Controllers\AlbumController@show');
Route::put('/albums/{task}', 'App\Http\Controllers\AlbumController@update');
Route::delete('/albums/{task}', 'App\Http\Controllers\AlbumController@destroy');

Route::get('/images', 'App\Http\Controllers\ImageApiController@index');
Route::post('/images', 'App\Http\Controllers\ImageApiController@store');
Route::get('/images/{task}', 'App\Http\Controllers\ImageApiController@show');
Route::put('/images/{task}', 'App\Http\Controllers\ImageApiController@update');
Route::delete('/images/{task}', 'App\Http\Controllers\ImageApiController@destroy');