<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;




Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/auth/redirect', [GoogleController::class, 'redirect'])->name('google.redirect');
    Route::get('/google/redirect', [GoogleController::class, 'googleCallback'])->name('google.callback');
    Route::post('/register', [GoogleController::class, 'register'])->name('register');

    Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});
