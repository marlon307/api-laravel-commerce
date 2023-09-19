<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

// Route::middleware('auth')->get('user', [UserController::class, 'show']);

// Route::post('/user/login', [LoginController::class, 'authenticate']);

Route::group([

    'namespace' => 'App\Http\Controllers',
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});
