<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PasienController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LaporanPasienController;
use App\Http\Controllers\LaporanDaftarController;
use App\Http\Controllers\PoliController;

// Route::resource('pasien', PasienController::class);
// Route::get('profil', [ProfilController::class, 'index']);
// Route::get('profil/create', [ProfilController::class, 'create']) ->name('profil.create');
// Route::get('profil/{nama}/{id}/edit', [ProfilController::class, 'edit']);
Route::resource('laporan-pasien', LaporanPasienController::class);
Route::resource('laporan-daftar', LaporanDaftarController::class);
Route::resource('poli_index', PoliController::class);
Route::resource('poli_edit', PoliController::class);
Route::resource('poli_create', PoliController::class);

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([Authenticate::class])->group(function () {
    Route::resource('pasien', PasienController::class);
});

Route::middleware([Authenticate::class])->group(function () {
    Route::resource('pasien', PasienController::class);
    Route::resource('daftar', DaftarController::class);
});
