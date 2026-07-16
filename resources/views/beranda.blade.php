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
<body class="bg-hero-bg text-hero-text font-sans min-h-screen flex flex-col">

    <!-- NAVBAR INSTANSI (Dikunci tetap warna gelap lewat variabel) -->
    @include('partials.navbar')

    <!-- HERO SECTION (Berubah jadi background putih, teks biru instansi) -->
    <header class="bg-bg text-hero-text py-28 text-center flex-1 flex flex-col justify-center items-center border-b border-gray-200">
        <div class="max-w-4xl mx-auto px-4">
            <span class="bg-instansi-dark text-font-putih text-xs font-bold uppercase tracking-widest px-3 py-1.5 rounded-full inline-block mb-5 border border-font-putih/20">
                Situs Resmi Instansi
            </span>
            <h1 class="text-3xl font-extrabold tracking-tight sm:text-5xl mb-6 leading-tight text-font-biru drop-shadow-sm">
                Selamat Datang di Website Resmi<br>Rutan Kelas IIB Purworejo
            </h1>
            <p class="text-base sm:text-lg text-font-abu max-w-2xl mx-auto mb-8 leading-relaxed">
                Mengenalkan keterbukaan informasi publik, sistem pelayanan masyarakat, serta program pembinaan humanis di bawah naungan Kementerian Imigrasi dan Pemasyarakatan.
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

    <!-- FOOTER (Dikunci tetap warna gelap asli) -->
    <footer class="bg-footer text-gray-500 text-[11px] sm:text-xs py-6 border-t border-gray-800">
        <div class="text-center">&copy; {{ date('Y') }} Rumah Tahanan Negara Kelas IIB Purworejo.</div>
    </footer>

</body>
</html>