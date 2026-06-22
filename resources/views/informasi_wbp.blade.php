<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi WBP - Rutan Purworejo</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0a1d37] text-gray-100 font-sans min-h-screen flex flex-col">

    <!-- NAVBAR INSTANSI -->
        @include('partials.navbar')


    <!-- KONTEN -->
    <main class="max-w-5xl mx-auto px-4 py-12 flex-1 w-full space-y-12">
        <div>
            <h1 class="text-3xl font-bold text-white">Informasi Warga Binaan Pemasyarakatan</h1>
            <p class="text-sm text-gray-400 mt-1">Aspek pembinaan, hak integrasi, serta transparansi tata tertib warga binaan.</p>
            <div class="w-12 h-1 bg-amber-500 mt-3 rounded"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-sm">
                <h3 class="text-lg font-bold text-amber-400 mb-3">Program Pembinaan WBP</h3>
                <div class="space-y-3 text-sm text-gray-300">
                    <p><strong>1. Pembinaan Kepribadian:</strong> Berfokus pada aspek spiritual, keagamaan, bela negara, serta penyuluhan kesadaran hukum rutin.</p>
                    <p><strong>2. Pembinaan Kemandirian:</strong> Pelatihan keterampilan kerja produktif (agribisnis, kerajinan tangan) untuk bekal kemandirian ekonomi.</p>
                </div>
            </div>

            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-sm">
                <h3 class="text-lg font-bold text-amber-400 mb-3">Hak & Kewajiban WBP</h3>
                <div class="space-y-3 text-sm text-gray-300">
                    <p>Setiap WBP berhak atas program integrasi hukum transparan tanpa dipungut biaya apapun, meliputi:</p>
                    <ul class="list-disc list-inside space-y-1 text-xs text-gray-400">
                        <li>Remisi (Pengurangan masa pidana)</li>
                        <li>Asimilasi (Pembauran dengan masyarakat)</li>
                        <li>Pembebasan Bersyarat (PB)</li>
                    </ul>
                    <p class="text-xs border-t border-blue-900/40 pt-2 italic text-rose-400 font-medium">Wajib mematuhi seluruh peraturan tata tertib kehidupan blok hunian rutan.</p>
                </div>
            </div>
        </div>

        <!-- Call Center WhatsApp -->
        <div class="bg-[#113a2a] border border-emerald-900/60 rounded-xl p-6 text-center max-w-xl mx-auto shadow-sm">
            <h4 class="font-bold text-emerald-300 mb-1">Pusat Informasi Kendala & Layanan WBP</h4>
            <p class="text-xs text-gray-300 mb-4">Butuh informasi status masa tahanan keluarga? Hubungi WhatsApp resmi Pusat Informasi Rutan:</p>
            <a href="https://wa.me/6281234567890" target="_blank" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm py-2.5 px-6 rounded-lg transition inline-flex items-center gap-2">
                Hubungi Hotline Informasi (WA)
            </a>
        </div>
    </main>

    <footer class="bg-[#08172c] text-gray-500 text-xs py-6 text-center">&copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.</footer>
</body>
</html>