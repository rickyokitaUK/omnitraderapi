<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChartAnalysisController;

Route::get('/', function () {
    return view('index');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [LoginController::class, 'me']);
    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/messages/send', [MessageController::class, 'send']);
    Route::get('/messages/inbox', [MessageController::class, 'inbox']);

});

  Route::get('/api/users', [UserController::class, 'index']);
Route::get('/upload-form', [ChartAnalysisController::class, 'showForm']);
Route::post('/analyze-images', [ChartAnalysisController::class, 'analyze']);