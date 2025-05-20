<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\SubsidiController;
use App\Http\Controllers\DataPengaduanController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PetugasController;
use App\Models\DataArtikel;
use App\Models\Petugas;
use App\Models\Subsidi;
use App\Models\DataPengaduan;

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('dashboard'); // sebelumnya welcome
});
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| AuthController
|--------------------------------------------------------------------------
*/
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| SubsidiController
|--------------------------------------------------------------------------
*/
Route::get('/pengajuan_subsidi', [SubsidiController::class, 'index'])->name('pengajuan_subsidi');
Route::post('/store', [SubsidiController::class, 'store'])->name('pengajuan_subsidi.store');

/*
|--------------------------------------------------------------------------
| DataPengaduanController
|--------------------------------------------------------------------------
*/
Route::get('/pengaduan', [DataPengaduanController::class, 'pengaduan'])->name('pengaduan');
Route::post('/simpan', [DataPengaduanController::class, 'simpan'])->name('simpan.pengaduan');

/*
|--------------------------------------------------------------------------
| UsersController
|--------------------------------------------------------------------------
*/
Route::get('/users/pengumuman', [UsersController::class, 'pengumuman'])->name('users.pengumuman');
Route::get('/users/penyuluhan', [UsersController::class, 'penyuluhan'])->name('users.penyuluhan');
Route::get('profile', [UsersController::class, 'profile'])->name('profile');
Route::get('statistik', [UsersController::class, 'statistik'])->name('statistik');

/*
|--------------------------------------------------------------------------
| ArtikelController
|--------------------------------------------------------------------------
*/
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');
Route::get('admin/a_create_artikel', [ArtikelController::class, 'create'])->name('artikel.create');
Route::post('admin/a_create_artikel', [ArtikelController::class, 'store'])->name('artikel.store');
Route::get('/users/artikel', [ArtikelController::class, 'index'])->name('users.artikel');

/*
|--------------------------------------------------------------------------
| PetugasController
|--------------------------------------------------------------------------
*/
Route::prefix('petugas')->group(function () {
    // Auth Routes
    Route::get('p_login', [PetugasController::class, 'showLoginForm'])->name('petugas.p_login');
    Route::post('p_login', [PetugasController::class, 'login'])->name('petugas.login.submit');
    Route::post('logout', [PetugasController::class, 'logout'])->name('petugas.logout');

    // Authenticated Routes
    Route::middleware(['auth:petugas'])->group(function () {
        Route::get('p_dashboard', [PetugasController::class, 'dashboard'])->name('petugas.p_dashboard');
        Route::get('p_pengaduan', [PetugasController::class, 'pengaduan'])->name('petugas.p_pengaduan');
        Route::get('p_subsidi', [PetugasController::class, 'subsidi'])->name('petugas.p_subsidi');

        // Data Dinas
        Route::get('p_datadinas', [PetugasController::class, 'datadinas'])->name('petugas.datadinas');
        // Untuk mengambil/memuat konten sebuah tipe
        Route::post('p_datadinas/menulis', [PetugasController::class, 'menulis'])->name('p_datadinas.menulis');
        // Untuk menyimpan/perbarui konten
        Route::post('p_datadinas/memperbarui', [PetugasController::class, 'memperbarui'])->name('p_datadinas.memperbarui');

        Route::get('p_updateHarga', [PetugasController::class, 'updateHarga'])->name('petugas.p_updateHarga');
        Route::get('p_informasiPertanian', [PetugasController::class, 'informasiPertanian'])->name('petugas.p_informasiPertanian');
        Route::get('p_pengaturan', [PetugasController::class, 'pengaturan'])->name('petugas.p_pengaturan');
    });
});
