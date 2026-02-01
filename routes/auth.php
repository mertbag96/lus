<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// Auth
Route::name('auth.')->group(function (): void {
    // Guest
    Route::middleware('guest')->group(function (): void {
        // Login
        Route::post('/login', LoginController::class)
            ->name('login');

        // Register
        Route::post('/register', RegisterController::class)
            ->name('register');
    });

    // Authenticated
    Route::middleware('auth')->group(function (): void {
        // Logout
        Route::post('/logout', LogoutController::class)
            ->name('logout');
    });
});
