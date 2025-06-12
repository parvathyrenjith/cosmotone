<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RolesAndPermissionController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return 'Api Home';
});

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');

Route::prefix('admin')->name('admin.')->group(function () {    
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});

// Start Roles and Permissions==================================================================
Route::get('add-permission', [RolesAndPermissionController::class, 'addPermissions']);
Route::get('show-roles', [RolesAndPermissionController::class, 'show']);
Route::get('create-roles', [RolesAndPermissionController::class, 'createRole']);
Route::post('add-role', [RolesAndPermissionController::class, 'create']);
Route::get('edit-role/{id}', [RolesAndPermissionController::class, 'editRole']);
Route::post('update-role', [RolesAndPermissionController::class, 'updateRole']);
Route::get('delete-role/{id}', [RolesAndPermissionController::class, 'delete']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
