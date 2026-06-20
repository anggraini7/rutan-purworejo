<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Mengambil semua berita dari database dan mengurutkan dari yang terbaru
    $posts = \App\Models\Post::latest()->get();
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
        'image'   => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // 2. Mengolah file gambar/foto jika admin mengunggah foto kegiatan
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('posts', 'public');
    }

    // 3. Simpan data berita ke dalam tabel database db_rutan
    \App\Models\Post::create([
        'title'   => $request->title,
        'slug'    => \Illuminate\Support\Str::slug($request->title),
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
