<?php

use App\Http\Controllers\Api\UserController;

Route::middleware('auth:sanctum')->get('/users', [UserController::class, 'index']);
use App\Http\Controllers\Auth\LoginController;              