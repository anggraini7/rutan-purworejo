<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi WBP - Rutan Purworejo</title>
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
                    <a href="{{ url('/informasi-wbp') }}" class="text-xs sm:text-sm font-semibold text-blue-900 border-b-2 border-blue-900 pb-1">Informasi WBP</a>
                    <a href="{{ url('/layanan-pengaduan') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Layanan Pengaduan</a>
                    <a href="{{ url('/berita') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Berita</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-4 py-12 flex-1 w-full space-y-12">
        <div>
            <h1 class="text-3xl font-bold text-gray-950">Informasi Warga Binaan Pemasyarakatan</h1>
            <p class="text-sm text-gray-500 mt-1">Aspek pembinaan, hak integrasi, serta transparansi tata tertib warga binaan.</p>
            <div class="w-12 h-1 bg-amber-500 mt-3 rounded"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="text-lg font-bold text-blue-900 mb-3">Program Pembinaan WBP</h3>
                <div class="space-y-3 text-sm text-gray-600">
                    <p><strong>1. Pembinaan Kepribadian:</strong> Berfokus pada aspek spiritual, keagamaan, bela negara, serta penyuluhan kesadaran hukum rutin bekerjasama dengan instansi eksternal.</p>
                    <p><strong>2. Pembinaan Kemandirian:</strong> Pelatihan keterampilan kerja produktif (agribisnis, kerajinan tangan, manufaktur ringan) untuk bekal kemandirian ekonomi pasca masa tahanan berakhir.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 border border-gray-200">
                <h3 class="text-lg font-bold text-blue-900 mb-3">Hak & Kewajiban WBP</h3>
                <div class="space-y-3 text-sm text-gray-600">
                    <p>Setiap WBP berhak atas program integrasi hukum transparan tanpa dipungut biaya apapun, meliputi:</p>
                    <ul class="list-disc list-inside space-y-1 text-xs">
                        <li>Remisi (Pengurangan masa pidana)</li>
                        <li>Asimilasi (Pembauran dengan masyarakat)</li>
                        <li>Pembebasan Bersyarat (PB)</li>
                        <li>Cuti Bersyarat (CB) & Cuti Menjelang Bebas (CMB)</li>
                    </ul>
                    <p class="text-xs border-t border-gray-150 pt-2 italic text-red-500">Wajib mematuhi seluruh peraturan tata tertib kehidupan blok hunian rutan.</p>
                </div>
            </div>
        </div>

        <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-6 text-center max-w-xl mx-auto">
            <h4 class="font-bold text-emerald-950 mb-1">Pusat Informasi Kendala & Layanan WBP</h4>
            <p class="text-xs text-emerald-700 mb-4">Butuh informasi status masa tahanan keluarga? Hubungi WhatsApp resmi Pusat Informasi Rutan:</p>
            <a href="https://wa.me/6281234567890" target="_blank" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm py-2.5 px-6 rounded-lg transition inline-flex items-center gap-2">
                Hubungi Hotline Informasi (WA)
            </a>
        </div>
    </main>

    <footer class="bg-gray-900 text-gray-500 text-xs py-6 text-center">&copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.</footer>
</body>
</html>