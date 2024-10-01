<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UnauthorizedController;
use App\Http\Middleware\CheckRole;

Route::get('/', [SesiController::class, 'index'])->name('login');
Route::post('/', [SesiController::class, 'login']);
Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
Route::get('/unauthorized', [UnauthorizedController::class, 'index']);

Route::middleware(['auth', CheckRole::class.':admin'])->group(function() {
    // Hanya admin yang dapat mengakses halaman:
    Route::get('/administrator', [AdminController::class, 'index'])->name('administrator');
    Route::get('/home', [AdminController::class, 'home'])->name('home');
    Route::get('/pembimbing-lapangan', [AdminController::class, 'pembimbing_lapangan'])->name('pembimbing-lapangan');
    Route::get('/pembimbing-lembaga', [AdminController::class, 'pembimbing_lembaga'])->name('pembimbing-lembaga');
    Route::get('/pemagang', [AdminController::class, 'pemagang'])->name('pemagang');
    Route::get('/rekap-kehadiran', [AdminController::class, 'rekap_kehadiran'])->name('rekap-kehadiran');
});

/*Route::middleware(['auth', CheckRole::class.':admin'])->group(function() {
    // Hanya siswa/pemagang yang dapat mengakses halaman:
});

Route::middleware(['auth', CheckRole::class.':admin'])->group(function() {
    // Hanya Dosen, guru pembimbing dan atau pembimbing lapangan yang dapat mengakses halaman:
});*/

