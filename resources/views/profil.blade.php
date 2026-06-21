<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil - Rutan Purworejo</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 font-sans min-h-screen flex flex-col">

    <!-- NAVBAR (Tetap Sama) -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold text-xs shadow-sm">PAS</div>
                    <div>
                        <span class="font-bold text-sm sm:text-base text-blue-900 block leading-tight">RUTAN PURWOREJO</span>
                        <span class="text-[10px] sm:text-xs text-gray-500 block">Kementerian Imigrasi dan Pemasyarakatan</span>
                    </div>
                </div>
                
                <div class="flex items-center gap-5">
                    <a href="{{ url('/') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Beranda</a>
                    <a href="{{ url('/profil') }}" class="text-xs sm:text-sm font-semibold text-blue-900 border-b-2 border-blue-900 pb-1">Profil</a>
                    <a href="{{ url('/kunjungan') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Layanan Kunjungan</a>
                    <a href="{{ url('/standar-pelayanan') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Standar Pelayanan</a>
                    <a href="{{ url('/informasi-wbp') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Informasi WBP</a>
                    <a href="{{ url('/layanan-pengaduan') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Layanan Pengaduan</a>
                    <a href="{{ url('/berita') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Berita</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- KONTEN PROFIL -->
    <main class="max-w-5xl mx-auto px-4 py-12 flex-1 w-full space-y-16">
        <!-- Sejarah -->
        <div id="sejarah" class="scroll-mt-24">
            <h1 class="text-3xl font-bold text-gray-950 mb-2">Sejarah Rutan Kelas IIB Purworejo</h1>
            <div class="w-16 h-1 bg-amber-500 mb-6 rounded"></div>
            <div class="bg-white rounded-xl p-6 border border-gray-200 text-gray-700 leading-relaxed space-y-4">
                <p>Rumah Tahanan Negara (Rutan) Kelas IIB Purworejo merupakan unit pelaksana teknis yang berdiri sebagai wujud penegakan hukum dan pelayanan kemasyarakatan di wilayah Kabupaten Purworejo...</p>
                <p>Dari masa ke masa, Rutan Purworejo terus mengalami transformasi baik dari segi infrastruktur keamanan maupun metode pendekatan pembinaan...</p>
            </div>
        </div>

        <!-- Visi Misi -->
        <div id="visimisi" class="scroll-mt-24 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-gradient-to-br from-blue-900 to-indigo-950 text-white rounded-xl p-6 shadow-sm">
                <h3 class="text-xl font-bold mb-3">Visi Resmi</h3>
                <p class="text-sm text-blue-100 leading-relaxed italic">"Mewujudkan Sistem Pemasyarakatan yang berdampak nyata dalam memulihkan warga binaan menjadi pribadi yang mandiri, produktif, dan diterima kembali oleh masyarakat..."</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl p-6">
                <h3 class="text-xl font-bold text-gray-950 mb-3">Misi Instansi</h3>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>&bull; Melaksanakan pembinaan kepribadian dan kemandirian secara optimal.</li>
                    <li>&bull; Menyelenggarakan pelayanan publik yang transparan dan bebas pungli.</li>
                    <li>&bull; Menjaga stabilitas keamanan dan ketertiban rutan.</li>
                </ul>
            </div>
        </div>

        <!-- Struktur -->
        <div id="struktur" class="scroll-mt-24">
            <h3 class="text-2xl font-bold text-gray-950 mb-4">Struktur Organisasi</h3>
            <div class="bg-white rounded-xl p-8 border border-gray-200 text-center text-gray-400">
                [ Tempat Gambar Bagan Organisasi PNG ]
            </div>
        </div>
    </main>

    <footer class="bg-gray-900 text-gray-400 text-xs py-6 mt-12">
        <div class="text-center">&copy; {{ date('Y') }} Rumah Tahanan Negara Kelas IIB Purworejo.</div>
    </footer>
</body>
</html>