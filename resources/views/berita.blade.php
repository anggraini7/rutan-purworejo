<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berita & Kegiatan - Rutan Purworejo</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-bg text-gray-100 font-sans min-h-screen flex flex-col">

    <!-- NAVBAR INSTANSI -->
        @include('partials.navbar')


    <!-- MAIN KONTEN BERITA PURE SATU HALAMAN -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex-1 w-full">
        <div class="mb-10">
            <h1 class="text-3xl font-bold text-font-biru">Berita & Kegiatan Terkini</h1>
            <p class="text-sm text-font-abu mt-1">Mencanangkan transparansi aktivitas kerja dan pembinaan di Rutan Kelas IIB Purworejo.</p>
            <div class="w-12 h-1 bg-amber-500 mt-3 rounded"></div>
        </div>

        <!-- Grid Card Berita Dinamis -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts as $post)
                <article class="bg-footer rounded-xl shadow-md border border-blue-900/40 overflow-hidden flex flex-col hover:border-blue-800 transition duration-200">
                    <!-- Penanganan Foto Berita -->
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover opacity-90">
                    @else
                        <div class="w-full h-48 bg-blue-950 flex items-center justify-center text-gray-500 text-xs border-b border-blue-900/20">Tidak ada foto</div>
                    @endif
                    
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs text-amber-400/80 font-medium block mb-2">{{ $post->created_at->format('d M Y') }}</span>
                            <h3 class="text-base font-bold text-white mb-2 line-clamp-2 hover:text-amber-400 transition">{{ $post->title }}</h3>
                            <p class="text-xs text-gray-300 line-clamp-3 mb-4 leading-relaxed">{{ strip_tags($post->content) }}</p>
                        </div>
                        <!-- GANTI KODE YANG INI DI BERITA.BLADE.PHP -->
                        <a href="{{ route('berita.show', $post->id) }}" class="text-amber-400 hover:text-amber-500 text-xs font-bold inline-flex items-center gap-1 mt-2">
                        Baca Selengkapnya &rarr;
                        </a>
                    </div>
                </article>
            @empty
                <!-- Tampilan Jika Berita Masih Kosong -->
                <div class="col-span-full text-center py-16 bg-[#0f294a] rounded-xl border border-dashed border-blue-900 text-gray-450 text-sm">
                    Belum ada artikel berita yang dipublikasikan.
                </div>
            @endforelse
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-[#08172c] text-gray-500 text-xs py-6 text-center border-t border-blue-900/40">
        &copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.
    </footer>
</body>
</html>