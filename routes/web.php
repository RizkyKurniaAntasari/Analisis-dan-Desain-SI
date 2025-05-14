<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\SubsidiController;
use App\Http\Controllers\DataPengaduanController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ArtikelController;
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

Route::get('/pengajuan_subsidi', [SubsidiController::class, 'index'])->name('pengajuan_subsidi');
Route::post('/store', [SubsidiController::class, 'store'])->name('pengajuan_subsidi.store');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 

Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 

Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get( '/users/pengumuman',[UsersController::class, 'pengumuman'])->name('users.pengumuman');
Route::get('/users/penyuluhan',[UsersController::class,'penyuluhan'])->name('users.penyuluhan');

Route::get('profile', [AuthController::class, 'profile'])->name('profile');
Route::get('statistik', [AuthController::class, 'statistik'])->name('statistik');

//Route::get('pengaduan', [AuthController::class, 'pengaduan'])->name('pengaduan');

// Pengaduan STORE USer
Route::get('/pengaduan', [DataPengaduanController::class, 'pengaduan'])->name('pengaduan');
Route::post('/simpan',[DataPengaduanController::class, 'simpan'])->name('simpan.pengaduan');

// Route Arttikel
Route::get('/users/artikel',[UsersController::class, 'artikel'])->name("users.artikel");

// Route::get('users/temp_artikel', function(){
//     return view('users.temp_artikel');
// });

Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');

// ADMIN ADMIN ADMIN
Route::get('admin/a_create_artikel', [ArtikelController::class, 'create'])->name('artikel.create');
Route::post('admin/a_create_artikel', [ArtikelController::class, 'store'])->name('artikel.store');


