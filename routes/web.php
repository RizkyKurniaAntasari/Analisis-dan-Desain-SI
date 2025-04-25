<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\SubsidiController;
use App\Models\Subsidi;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Admin\AdminArticleController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/articles', [AdminArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [AdminArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [AdminArticleController::class, 'store'])->name('articles.store');
    Route::get('/articles/{id}/edit', [AdminArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{id}', [AdminArticleController::class, 'update'])->name('articles.update');
    Route::get('/articles/{id}/delete', [AdminArticleController::class, 'confirmDelete'])->name('articles.confirm-delete');
    Route::delete('/articles/{id}', [AdminArticleController::class, 'destroy'])->name('articles.destroy');
    
        // Announcements routes
        Route::get('/announcements', [AdminAnnouncementController::class, 'index'])->name('announcements.index');
        
        // Guidance routes
        Route::get('/guidance', [AdminGuidanceController::class, 'index'])->name('guidance.index');
});

// Admin dashboard
Route::get('/admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])
     ->name('admin.dashboard');

Route::get('/', function () {
    return redirect()->route('articles.index');
});

Route::get('article', [ArticleController::class, 'index'])->name('article');
Route::get('article/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/', function(){
    return view('welcome');
});

Route::get('/admin/a_dashboard', function(){
    return view ('admin.a_dashboard');
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
    $subsidi = Subsidi::all();
    return view ('petugas.p_subsidi', compact('subsidi'));
});

Route::get('/petugas/p_pengaturan', function(){
    return view ('petugas.p_pengaturan');
});

Route::get('/pengajuan_subsidi', [SubsidiController::class, 'index']);
Route::post('/store', [SubsidiController::class, 'store'])->name('pengajuan_subsidi.store');
 
Route::get('pengaduan', function(){
    return view ('pengaduan');
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
