<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| 1. ROUTE PUBLIK (Bisa diakses oleh semua pengunjung tanpa login)
|--------------------------------------------------------------------------
*/

// Beranda (Mengambil data berita untuk ditampilkan di landing page jika perlu)
Route::get('/', function () {
    $posts = \App\Models\Post::latest()->get();
    return view('beranda', compact('posts'));
});

// halaman integrasi
Route::get('/layanan-integrasi', function () {
    return view('layanan_integrasi');
});

// halaman publikasi
Route::get('/publikasi', function () {
    return view('publikasi');
});

// halaman inovasi
Route::get('/inovasi', function () {
    return view('inovasi');
});

// Halaman Profil
Route::get('/profil', function () {
    return view('profil');
});

// Halaman Layanan Kunjungan
Route::get('/kunjungan', function () {
    return view('kunjungan');
});

// Halaman Standar Pelayanan
Route::get('/standar-pelayanan', function () {
    return view('standar_pelayanan');
});

// Halaman Informasi WBP
Route::get('/informasi-wbp', function () {
    return view('informasi_wbp');
});

// Halaman Layanan Pengaduan
Route::get('/layanan-pengaduan', function () {
    return view('layanan_pengaduan');
});

// Halaman Daftar Berita Utama
Route::get('/berita', function () {
    $posts = \App\Models\Post::latest()->get(); 
    return view('berita', compact('posts'));
})->name('berita.index');

// Halaman Detail Berita (Template Dinamis berdasarkan ID)
Route::get('/berita/{id}', [PostController::class, 'show'])->name('berita.show');



/*
|--------------------------------------------------------------------------
| 2. ROUTE ADMIN / AUTH (Wajib login terlebih dahulu)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    
    // Halaman Utama Dashboard Admin
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Kelola Berita (CRUD) oleh Admin
    Route::resource('admin/posts', PostController::class);

    // Kelola Akun Profile Admin
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    $routePatch = Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

/*
|--------------------------------------------------------------------------
| 3. AUTHENTICATION ROUTE BADAWAN
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';