<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RadeemedController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return 'Api Home';
});

Route::middleware(['auth:admin', 'role:super admin'])->group(function () {
    Route::get('/admin/dashboard', fn() => view('admin.dashboard'));
});

Route::get('/admin/login', [AdminController::class, 'showLoginForm']);
Route::post('/admin/login', [AdminController::class, 'attemptLogin']);

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
