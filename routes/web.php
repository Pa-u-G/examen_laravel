<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\UserAdminController;



// Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    
    Route::post('/login', [AuthController::class, 'login']);
    Route::get("/", [InscriptionController::class, 'index'])->name('inscription.index');
    Route::get("/create/{event}", [InscriptionController::class, 'create'])->name('inscription.create');
    Route::post("/store/{event}", [InscriptionController::class, 'store'])->name('inscription.store');
// });

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get("/admin", [UserAdminController::class, 'index'])->name('admin.index');
    Route::get("/admin/dowload/{inscription}", [UserAdminController::class, 'download'])->name('admin.download');

    // Route::resource('users', UserController::class);
    // Route::get('/', function () {
    //     return view('dashboard');
    // })->name("dashboard");
    Route::post('/admin/search', [UserAdminController::class, 'search'])->name('admin.search');
});
    
// Route::middleware('auth')->get('/{any}', function () {
//     return view('dashboard');
// })->where('any', '.*');