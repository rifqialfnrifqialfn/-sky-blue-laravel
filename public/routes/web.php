<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;

// 1. Halaman Login (Halaman Pertama)
Route::get('/', function () {
    return view('login');
});

// Alternatif akses login via /login
Route::get('/login', function () {
    return view('login');
});

// 2. Halaman Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

// 3. Halaman Jadwal (Menggunakan SchedulesController)
Route::get('/jadwal', [SchedulesController::class, 'index']);

// 4. Halaman Tugas (Menggunakan TaskController)
Route::get('/tugas', [TaskController::class, 'index']);

// 5. Halaman Our Team / Nama Kelompok (Menggunakan TeamController)
Route::get('/ourteam', [TeamController::class, 'index']);