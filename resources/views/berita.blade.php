<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berita & Kegiatan - Rutan Purworejo</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 font-sans min-h-screen flex flex-col">

    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold text-xs">PAS</div>
                    <span class="font-bold text-blue-900 text-sm sm:text-base">RUTAN PURWOREJO</span>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ url('/') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Beranda</a>
                    <a href="{{ url('/profil') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Profil</a>
                    <a href="{{ url('/kunjungan') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Layanan Kunjungan</a>
                    <a href="{{ url('/standar-pelayanan') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Standar Pelayanan</a>
                    <a href="{{ url('/informasi-wbp') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Informasi WBP</a>
                    <a href="{{ url('/layanan-pengaduan') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Layanan Pengaduan</a>
                    <a href="{{ url('/berita') }}" class="text-xs sm:text-sm font-semibold text-blue-900 border-b-2 border-blue-900 pb-1">Berita</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex-1 w-full">
        <div class="mb-10">
            <h1 class="text-3xl font-bold text-gray-950">Berita & Kegiatan Terkini</h1>
            <p class="text-sm text-gray-500 mt-1">Meng canangkan transparansi aktivitas kerja dan pembinaan di Rutan Kelas IIB Purworejo.</p>
            <div class="w-12 h-1 bg-amber-500 mt-3 rounded"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts as $post)
                <article class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col">
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                    @else
                        <div class="w-full h-48 bg-gray-100 flex items-center justify-center text-gray-400 text-xs">Tidak ada foto</div>
                    @endif
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs text-gray-400 font-medium block mb-2">{{ $post->created_at->format('d M Y') }}</span>
                            <h3 class="text-base font-bold text-gray-950 mb-2 line-clamp-2">{{ $post->title }}</h3>
                            <p class="text-xs text-gray-600 line-clamp-3 mb-4">{{ strip_tags($post->content) }}</p>
                        </div>
                        <a href="#" class="text-blue-900 hover:text-blue-700 text-xs font-bold inline-flex items-center gap-1">
                            Baca Selengkapnya &rarr;
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-full text-center py-16 bg-white rounded-xl border border-dashed border-gray-300 text-gray-400 text-sm">
                    Belum ada artikel berita yang dipublikasikan.
                </div>
            @endforelse
        </div>
    </main>

    <footer class="bg-gray-900 text-gray-500 text-xs py-6 text-center">
        &copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.
    </footer>
</body>
</html>