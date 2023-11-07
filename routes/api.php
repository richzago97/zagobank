<?php

use App\Http\Controllers\{AuthController, UserController};
use Illuminate\Support\Facades\Route;

Route::post('/users', [UserController::class, 'create']);


Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('/login', [AuthController::class, 'login']);
    // Route::post('/forget-password', [AuthController::class, 'forgetPassword']);
    // Route::post('/send-password', [AuthController::class, 'sendPassword']);
});