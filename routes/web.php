<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// 1. Beranda (Pure Landing Page, Tanpa mengambil data post)
Route::get('/', function () {
    return view('welcome');
});

// 2. Halaman Profil
Route::get('/profil', function () {
    return view('profil');
});

// 3. Halaman Layanan Kunjungan
Route::get('/kunjungan', function () {
    return view('kunjungan');
});

// 4. Halaman Standar Pelayanan (Baru)
Route::get('/standar-pelayanan', function () {
    return view('standar_pelayanan');
});

// 5. Halaman Informasi WBP (Baru)
Route::get('/informasi-wbp', function () {
    return view('informasi_wbp');
});

// 6. Halaman Layanan Pengaduan (Baru)
Route::get('/layanan-pengaduan', function () {
    return view('layanan_pengaduan');
});

// 7. Halaman Berita Khusus (Pure Satu Halaman Berita)
Route::get('/berita', function () {
    $posts = \App\Models\Post::latest()->get(); // Mengambil data berita dari DB
    return view('berita', compact('posts'));
});

Route::get('/', function () {
    // Mengambil semua postingan berita terbaru untuk ditampilkan di halaman depan
    $posts = \App\Models\Post::latest()->get();
    return view('welcome', compact('posts'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
use App\Http\Controllers\PostController;

Route::middleware(['auth'])->group(function () {
    Route::resource('admin/posts', PostController::class);
});