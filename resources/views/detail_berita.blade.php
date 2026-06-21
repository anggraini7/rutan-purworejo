<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $post->title }} - Rutan Purworejo</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0a1d37] text-gray-100 font-sans min-h-screen flex flex-col">

    <!-- NAVBAR INSTANSI -->
    <nav class="bg-[#0f294a] shadow-md border-b border-blue-900/50 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-10 h-10 object-contain">
                    <span class="font-bold text-white text-sm sm:text-base">RUTAN PURWOREJO</span>
                </div>
                
                <!-- Menu Navigasi -->
                <div class="flex items-center gap-5">
                    <a href="{{ url('/') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Beranda</a>
                    <a href="{{ url('/profil') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Profil</a>
                    <a href="{{ url('/kunjungan') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Layanan Kunjungan</a>
                    <a href="{{ url('/standar-pelayanan') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Standar Pelayanan</a>
                    <a href="{{ url('/informasi-wbp') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Informasi WBP</a>
                    <a href="{{ url('/layanan-pengaduan') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Layanan Pengaduan</a>
                    <a href="{{ url('/berita') }}" class="text-xs sm:text-sm font-semibold text-amber-400 border-b-2 border-amber-400 pb-1">Berita</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- AREA DETAIL BERITA (TEMPLATE DINAMIS) -->
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex-1 w-full">
        
        <!-- Tombol Kembali -->
        <a href="{{ url('/berita') }}" class="text-xs text-amber-400 hover:text-amber-500 font-semibold inline-flex items-center gap-1 mb-6 transition">
            &larr; Kembali ke Daftar Berita
        </a>

        <article class="space-y-6">
            <!-- Header Berita -->
            <header class="space-y-3">
                <span class="text-xs sm:text-sm text-amber-400 font-medium block">
                    Diterbitkan pada: {{ $post->created_at->format('d M Y') }}
                </span>
                <h1 class="text-2xl sm:text-4xl font-bold text-white leading-tight">
                    {{ $post->title }}
                </h1>
                <div class="w-16 h-1 bg-amber-500 rounded mt-2"></div>
            </header>

            <!-- Foto Utama Berita -->
            <div class="rounded-xl overflow-hidden bg-[#0f294a] border border-blue-900/40 shadow-lg">
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full max-h-[450px] object-cover opacity-90">
                @else
                    <div class="w-full h-64 bg-blue-950 flex items-center justify-center text-gray-500 text-sm">
                        Tidak ada dokumentasi foto untuk berita ini.
                    </div>
                @endif
            </div>

            <!-- Isi Konten Berita -->
            <div class="bg-[#0f294a] rounded-xl p-6 sm:p-8 border border-blue-900/40 shadow-md text-gray-200 text-sm sm:text-base leading-relaxed space-y-4">
                {{-- Menggunakan {!! !!} jika konten berita disimpan dalam bentuk HTML editor / rich text --}}
                {!! nl2br(e($post->content)) !!}
            </div>
        </article>

    </main>

    <!-- FOOTER -->
    <footer class="bg-[#08172c] text-gray-500 text-xs py-6 text-center border-t border-blue-900/40">
        &copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.
    </footer>
</body>
</html>