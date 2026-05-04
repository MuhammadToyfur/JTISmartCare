<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// ===== HALAMAN AWAL =====
Route::get('/', function() {
    return redirect()->route('login');
})->name('home');

// ===== AUTENTIKASI =====
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// ===== AREA USER =====
Route::middleware(['auth'])->group(function () {
    // Dashboard Sederhana
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Admin Dashboard Redirect (Jika role = admin)
Route::get('/admin/dashboard', function () {
    return view('dashboard'); // Untuk sementara disamakan
})->name('admin.dashboard');
