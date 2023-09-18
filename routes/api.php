<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

// Route::middleware('auth')->get('user', [UserController::class, 'show']);

Route::post('/user/login', [LoginController::class, 'authenticate']);
