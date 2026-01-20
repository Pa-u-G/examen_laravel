<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;



Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    
    Route::post('/login', [AuthController::class, 'login']);
});


Route::middleware('auth')->group(function () {
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('users', UserController::class);
    Route::get('/', function () {
        return view('dashboard');
    })->name("dashboard");
});
    
Route::middleware('auth')->get('/{any}', function () {
    return view('dashboard');
})->where('any', '.*');