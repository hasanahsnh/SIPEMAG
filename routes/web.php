<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UnauthorizedController;
use App\Http\Middleware\CheckRole;

Route::get('/', [SesiController::class, 'index']);
Route::post('/', [SesiController::class, 'login']);
Route::get('/logout', [SesiController::class, 'logout']);
//Route::get('/unauthorized', [UnauthorizedController::class, 'index']);

Route::middleware(['auth', CheckRole::class.':admin'])->group(function() {
    // Hanya admin yang dapat mengakses halaman:
    Route::get('/administrator', [AdminController::class, 'index']);
    Route::get('/pembimbing-lapangan', [AdminController::class, 'pemlap']);
    Route::get('/pembimbing-lembaga', [AdminController::class, 'pembaga']);
    Route::get('/pemagang', [AdminController::class, 'magang']);
    Route::get('/kehadiran', [AdminController::class, 'hadir']);

});

Route::fallback(function () {
    return response()->view('auth.unauthorized', [], 404);
});


/*Route::middleware(['auth', CheckRole::class.':admin'])->group(function() {
    // Hanya pemagang yangdapat mengakses halaman:
});

Route::middleware(['auth', CheckRole::class.':admin'])->group(function() {
    // Hanya Dosen, guru pembimbing dan atau pembimbing lapangan yang dapat mengakses halaman:
});*/

