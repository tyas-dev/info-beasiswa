<?php

use Illuminate\Support\Facades\Route;
// Controller untuk Halaman Publik
use App\Http\Controllers\BeasiswaController;

// Controller untuk Autentikasi
use App\Http\Controllers\Auth\LoginController;

// Controller untuk Halaman Admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BeasiswaController as AdminBeasiswaController; // Kita beri alias agar tidak bentrok

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// == RUTE PUBLIK ==
Route::get('/', [BeasiswaController::class, 'index'])->name('home');
Route::get('/beasiswa/{beasiswa}', [BeasiswaController::class, 'show'])->name('beasiswa.show');


// == RUTE AUTENTIKASI ==
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [LoginController::class, 'login']);
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout');


// == RUTE ADMIN YANG TERPROTEKSI ==
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Menggunakan BeasiswaController yang ada di dalam folder Admin
    Route::resource('beasiswa', AdminBeasiswaController::class);

});