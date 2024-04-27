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

Route::post('/register', 'App\Http\Controllers\AuthController@register');
Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->middleware('auth:api');

Route::prefix('users')->group(function () {
    Route::post('/', 'App\Http\Controllers\UserController@store'); 
    Route::put('/{user}', 'App\Http\Controllers\UserController@update'); 
    Route::delete('/{user}', 'App\Http\Controllers\UserController@destroy'); 
    Route::get('/{user}', 'App\Http\Controllers\UserController@show'); 
    Route::get('/', 'App\Http\Controllers\UserController@index'); 
});

Route::prefix('books')->group(function () {
    Route::post('/', 'App\Http\Controllers\BookController@store'); 
    Route::put('/{book}', 'App\Http\Controllers\BookController@update'); 
    Route::delete('/{book}', 'App\Http\Controllers\BookController@destroy'); 
    Route::get('/{book}', 'App\Http\Controllers\BookController@show'); 
    Route::get('/', 'App\Http\Controllers\BookController@index'); 
});

Route::prefix('orders')->group(function () {
    Route::post('/', 'App\Http\Controllers\OrderController@store'); 
    Route::put('/{order}', 'App\Http\Controllers\OrderController@update'); 
    Route::delete('/{order}', 'App\Http\Controllers\OrderController@destroy'); 
    Route::get('/{order}', 'App\Http\Controllers\OrderController@show'); 
    Route::get('/', 'App\Http\Controllers\OrderController@index'); 
});