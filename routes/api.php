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
Route::get('/tasks', 'App\Http\Controllers\TaskController@index');
Route::post('/tasks', 'App\Http\Controllers\TaskController@store');
Route::get('/tasks/{task}', 'App\Http\Controllers\TaskController@show');
Route::put('/tasks/{task}', 'App\Http\Controllers\TaskController@update');
Route::delete('/tasks/{task}', 'App\Http\Controllers\TaskController@destroy');

Route::get('/images', 'App\Http\Controllers\ImageApiController@index');
Route::post('/images', 'App\Http\Controllers\ImageApiController@store');
Route::get('/images/{task}', 'App\Http\Controllers\ImageApiController@show');
Route::put('/images/{task}', 'App\Http\Controllers\ImageApiController@update');
Route::delete('/images/{task}', 'App\Http\Controllers\ImageApiController@destroy');