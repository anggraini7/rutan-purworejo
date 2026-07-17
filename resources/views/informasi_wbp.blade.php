<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi WBP - Rutan Purworejo</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-bg text-gray-100 font-sans min-h-screen flex flex-col">

    <!-- NAVBAR INSTANSI -->
    @include('partials.navbar')
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden flex items-center justify-center">
        <img src="{{ asset('img/rutan2.jpeg') }}" alt="Background Rutan" class="w-full h-full object-cover opacity-10 filter grayscale">
    </div>
    <!-- KONTEN -->
    <main class="max-w-5xl mx-auto px-4 py-12 flex-1 w-full space-y-12">
        <div>
            <h1 class="text-3xl font-bold text-font-biru">Program Pembinaan</h1>
            <p class="text-sm text-font-abu mt-1">Rutan Kelas IIB Purworejo menyelenggarakan program pembinaan bagi Warga Binaan Pemasyarakatan (WBP), meliputi pembinaan kemandirian, kepribadian, dan penyuluhan hukum.</p>
            <div class="w-12 h-1 bg-amber-500 mt-3 rounded"></div>
        </div>

        <!-- DIUBAH: MEMBUAT CARD DI TENGAH DAN AGAK LEBAR -->
        <div class="flex justify-center">
            <!-- Menggunakan max-w-3xl agar card lebih lebar dan nyaman dibaca di monitor besar -->
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-sm w-full max-w-3xl">
                <h3 class="text-lg font-bold text-amber-400 mb-3 text-center md:text-left">Program Pembinaan WBP</h3>
                <div class="space-y-4 text-sm text-gray-300">
                    <p><strong>1. Pembinaan Kepribadian:</strong> Berfokus pada aspek spiritual, keagamaan, bela negara, serta penyuluhan kesadaran hukum rutin.</p>
                    <p><strong>2. Pembinaan Kemandirian:</strong> Pelatihan keterampilan kerja produktif (agribisnis, kerajinan tangan) untuk bekal kemandirian ekonomi.</p>
                    <p><strong>3. Penyuluhan Hukum:</strong> Penyuluhan hukum diberikan kepada Warga Binaan Pemasyarakatan (WBP) untuk meningkatkan pemahaman dan kesadaran hukum.</p>
                </div>
            </div>
        </div>

        <!-- Call Center WhatsApp -->
        <div class="bg-card-biru border border-emerald-900/60 rounded-xl p-6 text-center max-w-xl mx-auto shadow-sm">
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