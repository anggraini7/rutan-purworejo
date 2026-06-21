<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan Pengaduan - Rutan Purworejo</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 font-sans min-h-screen flex flex-col">

    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold text-xs shadow-sm">PAS</div>
                    <span class="font-bold text-sm sm:text-base text-blue-900">RUTAN PURWOREJO</span>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ url('/') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Beranda</a>
                    <a href="{{ url('/profil') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Profil</a>
                    <a href="{{ url('/kunjungan') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Layanan Kunjungan</a>
                    <a href="{{ url('/standar-pelayanan') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Standar Pelayanan</a>
                    <a href="{{ url('/informasi-wbp') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Informasi WBP</a>
                    <a href="{{ url('/layanan-pengaduan') }}" class="text-xs sm:text-sm font-semibold text-blue-900 border-b-2 border-blue-900 pb-1">Layanan Pengaduan</a>
                    <a href="{{ url('/berita') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Berita</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-4 py-12 flex-1 w-full space-y-12">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-950">Layanan Pengaduan & Survey</h1>
            <p class="text-sm text-gray-500 mt-1">Mendukung komitmen Wilayah Birokrasi Bersih dan Melayani (WBBM) bebas pungli.</p>
            <div class="w-12 h-1 bg-amber-500 mx-auto mt-3 rounded"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-4">
            <div class="bg-white rounded-xl p-6 border border-red-150 shadow-sm flex flex-col justify-between">
                <div>
                    <span class="bg-red-100 text-red-700 text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded inline-block mb-3">Anti-Korupsi</span>
                    <h3 class="text-lg font-bold text-gray-950 mb-2">Hotline Pengaduan Pelanggaran</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mb-4">
                        Menemukan indikasi pungli, pemerasan, gratifikasi, atau pelanggaran disiplin kode etik petugas rutan? Laporkan melalui kanal pengaduan rahasia (Whistleblowing System) internal kami.
                    </p>
                </div>
                <a href="https://wa.me/628999888777" target="_blank" class="bg-red-600 hover:bg-red-700 text-white font-bold text-xs py-2.5 px-4 rounded-lg text-center transition">
                    Laporkan Lewat WhatsApp
                </a>
            </div>

            <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm flex flex-col justify-between">
                <div>
                    <span class="bg-blue-100 text-blue-700 text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded inline-block mb-3">Indeks Kepuasan</span>
                    <h3 class="text-lg font-bold text-gray-950 mb-2">Survey Indeks Pelayanan (IKM / IPK)</h3>
                    <p class="text-xs text-gray-600 leading-relaxed mb-4">
                        Bantu kami meningkatkan kualitas pelayanan dengan mengisi Indeks Kepuasan Masyarakat (IKM) dan Indeks Persepsi Korupsi (IPK) melalui tautan kuesioner resmi eksternal berikut.
                    </p>
                </div>
                <a href="https://forms.gle/link-google-form-kamu" target="_blank" class="border border-gray-300 hover:border-gray-400 text-gray-700 font-bold text-xs py-2.5 px-4 rounded-lg text-center transition">
                    Isi Survey Layanan (Google Form)
                </a>
            </div>
        </div>
    </main>

    <footer class="bg-gray-900 text-gray-500 text-xs py-6 text-center">&copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.</footer>
</body>
</html>