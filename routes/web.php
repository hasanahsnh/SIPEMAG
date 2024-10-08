<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UnauthorizedController;
use App\Http\Middleware\CheckRole;

Route::get('/', [SesiController::class, 'index'])->name('login');
Route::post('/', [SesiController::class, 'login']);
Route::get('/logout', [SesiController::class, 'logout']);

Route::fallback(function () {
    return response()->view('auth.unauthorized', [], 404);
});
//Route::get('/unauthorized', [UnauthorizedController::class, 'index']);

Route::middleware(['auth', CheckRole::class.':admin'])->group(function() {
    // Hanya admin yang dapat mengakses halaman:
    Route::get('/home', [AdminController::class, 'index'])->name('home');
    Route::get('/pembimbing-lapangan', [AdminController::class, 'pemlap'])->name('pemlap');
    Route::get('/pembimbing-lembaga', [AdminController::class, 'pembaga'])->name('pembaga');
    Route::get('/pemagang', [AdminController::class, 'magang'])->name('magang');
    Route::get('/kehadiran', [AdminController::class, 'hadir'])->name('hadir');
    Route::get('/rekap-kehadiran', [AdminController::class, 'rekaphadir']);
    Route::get('/sertifikat', [AdminController::class, 'sertif']);
    Route::get('/lokasi', [AdminController::class, 'lokasi1']);    
    Route::get('/td-pembimbing', [AdminController::class, 'tdpembimbing']);
    Route::get('/td-pemagang', [AdminController::class, 'tdpemagang']);


});

/*Route::middleware(['auth', CheckRole::class.':siswa'])->group(function() {
    // Hanya siswa/pemagang yang dapat mengakses halaman:
});

Route::middleware(['auth', CheckRole::class.':guru'])->group(function() {
    // Hanya Dosen, guru pembimbing dan atau pembimbing lapangan yang dapat mengakses halaman:
});*/

