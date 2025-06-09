<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\RadeemedController;
use App\Http\Controllers\Api\AuthController;

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/redeem', [RadeemedController::class, 'redeemCoupon']);
    Route::get('/profile_info', [AuthController::class, 'getUserDetails']);
});