<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\SubsidiController;
use App\Http\Controllers\DataPengaduanController;
use App\Http\Controllers\UsersController;
use App\Models\DataArtikel;
use App\Models\Subsidi;
use App\Models\DataPengaduan;

Route::get('/', function(){
    return view('dashboard'); // sebelumnya welcome
});

Route::get('/petugas/p_login', function(){
    return view ('petugas.p_login');
});

Route::get('/petugas/p_dashboard', function(){
    return view ('petugas.p_dashboard');
});

Route::get('/petugas/p_datadinas', function(){
    return view ('petugas.p_datadinas');
})->name('petugas.datadinas');

Route::get('/petugas/p_pengaduan', function(){
    $data_pengaduan = DataPengaduan::all();
    return view('petugas.p_pengaduan', compact('data_pengaduan'));
});

Route::get('/petugas/p_subsidi', function(){
    $subsidi = Subsidi::all();
    return view ('petugas.p_subsidi', compact('subsidi'));
});

Route::get('/petugas/p_pengaturan', function(){
    return view ('petugas.p_pengaturan');
});

Route::get('/pengajuan_subsidi', [SubsidiController::class, 'index']);
Route::post('/store', [SubsidiController::class, 'store'])->name('pengajuan_subsidi.store');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 

Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 

Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('profile', [AuthController::class, 'profile'])->name('profile');
Route::get('pengumuman', [AuthController::class, 'pengumuman'])->name('pengumuman');
Route::get('statistik', [AuthController::class, 'statistik'])->name('statistik');
Route::get('penyuluhan', [AuthController::class, 'penyuluhan'])->name('penyuluhan');

//Route::get('pengaduan', [AuthController::class, 'pengaduan'])->name('pengaduan');

// Pengaduan STORE USer
Route::get('/pengaduan', [DataPengaduanController::class, 'pengaduan'])->name('pengaduan');
Route::post('/simpan',[DataPengaduanController::class, 'simpan'])->name('simpan.pengaduan');

// Route Arttikel
Route::get('/users/artikel',[UsersController::class, 'artikel'])->name("artikel");