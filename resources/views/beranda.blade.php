<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rutan Kelas IIB Purworejo</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-hero-bg text-hero-text font-sans min-h-screen flex flex-col relative">

    <!-- FOTO RUTAN SEBAGAI BACKGROUND TRANSPARAN -->

    <!-- BUNGKUSAN UTAMA AGAR KONTEN DI ATAS BG TRANSPARAN & FOOTER TETAP DI BAWAH -->
    <div class="relative z-10 flex flex-col min-h-screen flex-1">
        
        <!-- NAVBAR INSTANSI -->
        @include('partials.navbar')
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden flex items-center justify-center">

        <img src="{{ asset('img/rutan2.jpeg') }}" alt="Background Rutan" class="w-full h-full object-cover opacity-10 filter grayscale">

    </div>

        <!-- HERO SECTION (Background Putih) -->
        <header class="bg-bg text-hero-text py-28 text-center flex flex-col justify-center items-center border-b border-gray-200">
            <div class="max-w-4xl mx-auto px-4">
                <span class="bg-instansi-dark text-font-putih text-xs font-bold uppercase tracking-widest px-3 py-1.5 rounded-full inline-block mb-5 border border-font-putih/20">
                    Situs Resmi Instansi
                </span>
                <h1 class="text-3xl font-extrabold tracking-tight sm:text-5xl mb-6 leading-tight text-font-biru drop-shadow-sm">
                    Selamat Datang di Website Resmi<br>Rutan Kelas IIB Purworejo
                </h1>
                <p class="text-base sm:text-lg text-font-abu max-w-2xl mx-auto mb-8 leading-relaxed">
                    Rutan (Rumah Tahanan Negara) merupakan unit pelaksana teknis di bawah naungan Direktorat Jenderal Pemasyarakatan, Kantor Wilayah Kementerian Imigrasi dan Pemasyarakatan Jawa Tengah. Melalui website ini, kami menyajikan keterbukaan informasi publik, sistem pelayanan masyarakat, serta program pembinaan humanis bagi Warga Binaan Pemasyarakatan (WBP).
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ url('/profil') }}" class="bg-aksen-yellow hover:bg-amber-600 text-gray-950 text-xs sm:text-sm font-bold py-3 px-6 rounded-lg transition shadow-lg shadow-amber-500/10">
                        Pelajari Profil Rutan
                    </a>
                    <a href="{{ url('/kunjungan') }}" class="bg-white hover:bg-gray-50 text-hero-text text-xs sm:text-sm font-semibold py-3 px-6 rounded-lg transition border border-gray-300">
                        Lihat Jadwal Kunjungan
                    </a>
                </div>
            </div>
        </header>

        <!-- SECTION BERITA TERKINI -->
        <section class="bg-bg py-16 border-b border-gray-200 w-full flex-1">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Header Section Berita -->
                <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between mb-8">
                    <div>
                        <h2 class="text-2xl font-bold text-font-biru">Berita & Kegiatan Terkini</h2>
                        <p class="text-xs sm:text-sm text-font-abu mt-1">Ikuti terus transparansi aktivitas kerja dan pembinaan terbaru kami.</p>
                    </div>
                    <a href="{{ url('/berita') }}" class="text-xs font-bold text-amber-500 hover:text-amber-600 transition mt-3 sm:mt-0 inline-flex items-center gap-1">
                        Lihat Semua Berita &rarr;
                    </a>
                </div>

                <!-- Grid Card 3 Berita Menyamping -->
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
                                <a href="{{ route('berita.show', $post->id) }}" class="text-amber-400 hover:text-amber-500 text-xs font-bold inline-flex items-center gap-1 mt-2">
                                    Baca Selengkapnya &rarr;
                                </a>
                            </div>
                        </article>
                    @empty
                        <!-- Tampilan Jika Berita Masih Kosong -->
                        <div class="col-span-full text-center py-12 bg-[#0f294a] rounded-xl border border-dashed border-blue-900 text-gray-400 text-sm">
                            Belum ada artikel berita terbaru yang dipublikasikan.
                        </div>
                    @endforelse
                </div>

            </div>
        </section>

        <!-- FOOTER (Kunci Tetap Berada di Paling Bawah Layar) -->
        <footer class="bg-footer text-gray-500 text-[11px] sm:text-xs py-6 border-t border-gray-800 w-full">
            <div class="text-center">&copy; {{ date('Y') }} Rumah Tahanan Negara Kelas IIB Purworejo.</div>
        </footer>

    </div>

</body>
</html>