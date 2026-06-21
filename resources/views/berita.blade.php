<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berita & Kegiatan - Rutan Purworejo</title>
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
                <!-- Pastikan file gambar logo (misal: logo-pas.png) sudah kamu taruh di folder public/img/ -->
                <img src="{{ asset('img/logo.png') }}" alt="Logo PAS" class="w-10 h-10 object-contain">
    
                    <div>
                        <span class="font-bold text-sm sm:text-base text-white block leading-tight tracking-wide">RUTAN PURWOREJO</span>
                        <span class="text-[10px] sm:text-xs text-gray-400 block">Kementerian Imigrasi dan Pemasyarakatan</span>
                    </div>
                </div>
                
                <!-- Menu Navigasi Sejajar -->
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

    <!-- MAIN KONTEN BERITA PURE SATU HALAMAN -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex-1 w-full">
        <div class="mb-10">
            <h1 class="text-3xl font-bold text-white">Berita & Kegiatan Terkini</h1>
            <p class="text-sm text-gray-400 mt-1">Mencanangkan transparansi aktivitas kerja dan pembinaan di Rutan Kelas IIB Purworejo.</p>
            <div class="w-12 h-1 bg-amber-500 mt-3 rounded"></div>
        </div>

        <!-- Grid Card Berita Dinamis -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts as $post)
                <article class="bg-[#0f294a] rounded-xl shadow-md border border-blue-900/40 overflow-hidden flex flex-col hover:border-blue-800 transition duration-200">
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