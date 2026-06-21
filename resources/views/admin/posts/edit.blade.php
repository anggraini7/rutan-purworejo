<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Berita Rutan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="mb-6 flex justify-between items-center">
                    <h3 class="text-lg font-medium text-gray-900">Form Ubah Data Artikel</h3>
                    <a href="{{ route('posts.index') }}" class="text-sm text-gray-600 hover:text-gray-900 underline">
                        &larr; Kembali ke Daftar Berita
                    </a>
                </div>

                <!-- Form dihubungkan ke fungsi update di controller, wajib pakai enctype untuk upload gambar -->
                <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Input Judul -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Judul Berita</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Input Konten -->
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700">Isi Berita / Artikel</label>
                        <textarea name="content" id="content" rows="6" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">{{ old('content', $post->content) }}</textarea>
                        @error('content')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Bagian Preview Foto Lama & Upload Foto Baru -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Foto / Gambar Kegiatan</label>
                        
                        <!-- Kondisi mengecek apakah ada foto lama yang sudah diunggah -->
                        @if($post->image)
                            <div class="mb-3">
                                <p class="text-xs text-gray-500 mb-1">Foto yang saat ini digunakan:</p>
                                <img src="{{ asset('storage/' . $post->image) }}" alt="Foto Berita" class="w-48 h-auto object-cover rounded-md shadow-sm border border-gray-200">
                            </div>
                        @else
                            <div class="mb-3 p-3 bg-gray-50 rounded-md border border-dashed border-gray-300 text-xs text-gray-500">
                                Berita ini sebelumnya tidak mengunggah foto.
                            </div>
                        @endif

                        <!-- Input File untuk foto baru -->
                        <input type="file" name="image" id="image" accept="image/*"
                            class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        <p class="text-xs text-gray-400 mt-1">Format: jpeg, png, jpg. Maksimal 2MB. Kosongkan jika tidak ingin mengubah foto.</p>
                        @error('image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="flex justify-end pt-4">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded transition duration-200 shadow-sm">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>