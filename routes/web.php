<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RadeemedController;


Route::get('/', function () {
    return 'Api Home';
});

Route::post('/auth/register', [AuthController::class, 'registerUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);

// Route::middleware('auth:sanctum')->group(function () {
//     Route::post('/redeem', [RadeemedController::class, 'redeemCoupon']);
//     Route::get('/profile_info', [AuthController::class, 'getUserDetails']);
// });