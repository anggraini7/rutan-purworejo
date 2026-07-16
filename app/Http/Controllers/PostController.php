<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua berita dari database dan mengurutkan dari yang terbaru
        $posts = Post::latest()->get();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan halaman formulir tambah berita
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi inputan form agar aman
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        // 2. Mengolah file gambar/foto jika admin mengunggah foto kegiatan
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
        }

        // 3. Simpan data berita ke dalam tabel database db_rutan
        Post::create([
            'title'   => $request->title,
            'slug'    => Str::slug($request->title),
            'content' => $request->content,
            'image'   => $imagePath,
            'user_id' => auth()->id(), // Otomatis mencatat ID admin yang sedang login
        ]);

        // 4. Jika sukses, lempar kembali admin ke halaman daftar berita
        return redirect()->route('posts.index')->with('success', 'Berita Rutan berhasil diterbitkan!');
    }

    /**
     * Display the specified resource.
     */
   public function show($id)
    {
    // Mengambil satu berita berdasarkan ID, jika tidak ketemu akan memunculkan error 404
    $post = Post::findOrFail($id); 

    // Mengirim data berita ke file template detail_berita.blade.php
    return view('detail_berita', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mengambil 1 data berita spesifik berdasarkan ID-nya
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        // 1. Validasi inputan form edit
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // 2. Cek apakah admin mengunggah foto baru untuk mengganti foto lama
        $imagePath = $post->image;
        if ($request->hasFile('image')) {
            // Hapus foto lama di storage jika ada agar tidak memenuhi memori laptop
            if ($post->image && Storage::disk('public')->exists($post->image)) {
                Storage::disk('public')->delete($post->image);
            }
            // Simpan foto baru
            $imagePath = $request->file('image')->store('posts', 'public');
        }

        // 3. Update data di database
        $post->update([
            'title'   => $request->title,
            'slug'    => Str::slug($request->title),
            'content' => $request->content,
            'image'   => $imagePath,
        ]);

        return redirect()->route('posts.index')->with('success', 'Berita Rutan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        // Hapus file gambarnya dari storage laptop sebelum datanya dihapus
        if ($post->image && Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
        }

        // Hapus data dari database
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Berita Rutan berhasil dihapus!');
    }
}