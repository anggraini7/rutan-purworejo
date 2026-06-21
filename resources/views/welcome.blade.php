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
<body class="bg-[#0a1d37] text-gray-100 font-sans min-h-screen flex flex-col">

    <!-- NAVBAR INSTANSI -->
    <nav class="bg-[#0f294a] shadow-md border-b border-blue-900/50 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-3">
                <!-- Pastikan file gambar logo (misal: logo-pas.png) sudah kamu taruh di folder public/img/ -->
                <img src="{{ asset('img/logo.png') }}" alt="Logo PAS" class="w-10 h-10 object-contain">
    
                    <div>
                        <span class="font-bold text-sm sm:text-base text-white block leading-tight tracking-wide">RUTAN PURWOREJO</span>
                        <span class="text-[10px] sm:text-xs text-gray-400 block">Kementerian Imigrasi dan Pemasyarakatan</span>
                    </div>
                </div>
                
                <div class="flex items-center gap-5">
                    <a href="{{ url('/') }}" class="text-xs sm:text-sm font-semibold text-amber-400 border-b-2 border-amber-400 pb-1">Beranda</a>
                    <a href="{{ url('/profil') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Profil</a>
                    <a href="{{ url('/kunjungan') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Layanan Kunjungan</a>
                    <a href="{{ url('/standar-pelayanan') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Standar Pelayanan</a>
                    <a href="{{ url('/informasi-wbp') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Informasi WBP</a>
                    <a href="{{ url('/layanan-pengaduan') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Layanan Pengaduan</a>
                    <a href="{{ url('/berita') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Berita</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <header class="bg-gradient-to-b from-[#0f294a] to-[#0a1d37] text-white py-28 text-center flex-1 flex flex-col justify-center items-center border-b border-blue-900/30">
        <div class="max-w-4xl mx-auto px-4">
            <span class="bg-blue-950/80 text-amber-400 text-xs font-bold uppercase tracking-widest px-3 py-1.5 rounded-full inline-block mb-5 border border-amber-500/20">
                Situs Resmi Instansi
            </span>
            <h1 class="text-3xl font-extrabold tracking-tight sm:text-5xl mb-6 leading-tight text-white drop-shadow-sm">
                Selamat Datang di Website Resmi<br>Rutan Kelas IIB Purworejo
            </h1>
            <p class="text-base sm:text-lg text-gray-300 max-w-2xl mx-auto mb-8 leading-relaxed">
                Mengenalkan keterbukaan informasi publik, sistem pelayanan masyarakat, serta program pembinaan humanis di bawah naungan Kementerian Imigrasi dan Pemasyarakatan.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ url('/profil') }}" class="bg-amber-500 hover:bg-amber-600 text-gray-950 text-xs sm:text-sm font-bold py-3 px-6 rounded-lg transition shadow-lg shadow-amber-500/10">
                    Pelajari Profil Rutan
                </a>
                <a href="{{ url('/kunjungan') }}" class="bg-white/5 hover:bg-white/10 text-white text-xs sm:text-sm font-semibold py-3 px-6 rounded-lg transition border border-gray-700">
                    Lihat Jadwal Kunjungan
                </a>
            </div>
        </div>
    </header>

    <!-- FOOTER -->
    <footer class="bg-[#08172c] text-gray-500 text-[11px] sm:text-xs py-6 border-t border-blue-900/40">
        <div class="text-center">&copy; {{ date('Y') }} Rumah Tahanan Negara Kelas IIB Purworejo.</div>
    </footer>

</body>
</html>