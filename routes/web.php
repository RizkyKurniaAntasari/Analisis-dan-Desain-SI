<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function(){
    return view('welcome');
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
    return view ('petugas.p_pengaduan');
});

Route::get('/petugas/p_subsidi', function(){
    return view ('petugas.p_subsidi');
});

Route::get('/petugas/p_pengaturan', function(){
    return view ('petugas.p_pengaturan');
});

// user
Route::get('pengajuan_subsidi', function(){
    return view ('pengajuan_subsidi');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 

Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 

Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('profile', [AuthController::class, 'profile'])->name('profile');
Route::get('pengaduan', [AuthController::class, 'pengaduan'])->name('pengaduan');
Route::get('pengumuman', [AuthController::class, 'pengumuman'])->name('pengumuman');
Route::get('statistik', [AuthController::class, 'statistik'])->name('statistik');
