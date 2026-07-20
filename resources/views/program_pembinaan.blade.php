<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Program Pembinaan - Rutan Purworejo</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-bg text-gray-100 font-sans min-h-screen flex flex-col relative">

    <!-- NAVBAR INSTANSI -->
    @include('partials.navbar')
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden flex items-center justify-center">
        <img src="{{ asset('img/rutan2.jpeg') }}" alt="Background Rutan" class="w-full h-full object-cover opacity-10 filter grayscale">
    </div>

    <!-- 💡 Tambahan CDN Alpine.js cadangan agar interaksi langsung aktif di HP saat lokal testing -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- KONTEN -->
    <main class="max-w-5xl mx-auto px-4 py-12 flex-1 w-full space-y-12 z-10 relative" x-data="{ bukaKepribadian: false, bukaKemandirian: false }">
        <div>
            <h1 class="text-3xl font-bold text-font-biru">Program Pembinaan</h1>
            <p class="text-sm text-font-abu mt-1">Rutan Kelas IIB Purworejo menyelenggarakan program pembinaan bagi Warga Binaan Pemasyarakatan (WBP), meliputi pembinaan kemandirian, kepribadian, dan penyuluhan hukum.</p>
            <div class="w-12 h-1 bg-amber-500 mt-3 rounded"></div>
        </div>

        <!-- MAIN CARD PROGRAM PEMBINAAN -->
        <div class="flex flex-col items-center space-y-6 w-full">
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-sm w-full max-w-3xl">
                <h3 class="text-lg font-bold text-amber-400 mb-4 text-center md:text-left">Program Pembinaan WBP</h3>
                <div class="space-y-6 text-sm text-gray-300">
                    
                    <!-- 1. PEMBINAAN KEPRIBADIAN -->
                    <div class="border-b border-blue-900/30 pb-4 last:border-0 last:pb-0">
                        <p class="text-justify hyphens-auto mb-2">
                            <strong>1. Pembinaan Kepribadian:</strong> Berfokus pada aspek spiritual, keagamaan, bela negara, serta penyuluhan kesadaran hukum rutin.
                        </p>
                        <div class="text-left mt-2">
                            <!-- 💡 DIUBAH: Ditambahkan relative z-20 & cursor-pointer agar aman di-tap jari di HP -->
                            <button @click="bukaKepribadian = !bukaKepribadian" class="relative z-20 cursor-pointer text-xs bg-blue-950 hover:bg-blue-900 border border-blue-800 text-amber-400 font-semibold px-4 py-2 rounded transition inline-flex items-center gap-1 min-h-[35px]">
                                <span x-text="bukaKepribadian ? 'Sembunyikan Foto ▲' : 'Lihat Kegiatan & Foto ▼'">Lihat Kegiatan & Foto ▼</span>
                            </button>
                        </div>
                    </div>

                    <!-- 2. PEMBINAAN KEMANDIRIAN -->
                    <div>
                        <p class="text-justify hyphens-auto mb-2">
                            <strong>2. Pembinaan Kemandirian:</strong> Pelatihan keterampilan kerja produktif (agribisnis, kerajinan tangan) untuk bekal kemandirian ekonomi.
                        </p>
                        <div class="text-left mt-2">
                            <!-- 💡 DIUBAH: Ditambahkan relative z-20 & cursor-pointer agar aman di-tap jari di HP -->
                            <button @click="bukaKemandirian = !bukaKemandirian" class="relative z-20 cursor-pointer text-xs bg-blue-950 hover:bg-blue-900 border border-blue-800 text-amber-400 font-semibold px-4 py-2 rounded transition inline-flex items-center gap-1 min-h-[35px]">
                                <span x-text="bukaKemandirian ? 'Sembunyikan Foto ▲' : 'Lihat Kegiatan & Foto ▼'">Lihat Kegiatan & Foto ▼</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ========================================================== -->
            <!-- TEMPAT FOTO MUNCUL DI BAWAH CARD UTAMA -->
            <!-- ========================================================== -->

            <!-- FOTO KEPRIBADIAN (1 Kegiatan x 2 Foto) -->
            <div x-show="bukaKepribadian" x-transition class="w-full max-w-3xl bg-[#0b203a] border border-blue-900/60 rounded-xl p-5 space-y-4 shadow-inner" style="display: none;">
                <h4 class="text-xs font-bold uppercase tracking-wider text-amber-500">Galeri Pembinaan Kepribadian</h4>
                    <div class="bg-blue-950/40 rounded-lg p-4 border border-blue-900/30">
                        <h5 class="text-xs font-semibold text-white mb-2">Kegiatan 1: Rohani</h5>
                        <div class="grid grid-cols-2 gap-4">
                            <img src="{{ asset('img/pembinaan/roh1.jpg') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+1'">
                            <img src="{{ asset('img/pembinaan/roh2.jpeg') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+2'">
                        </div>
                    </div>

                    <div class="bg-blue-950/40 rounded-lg p-4 border border-blue-900/30">
                        <h5 class="text-xs font-semibold text-white mb-2">Kegiatan 2: Jasmani</h5>
                        <div class="grid grid-cols-2 gap-4">
                            <img src="{{ asset('img/pembinaan/jas1.jpg') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+1'">
                            <img src="{{ asset('img/pembinaan/jas2.jpg') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+2'">
                        </div>
                    </div>

                    <div class="bg-blue-950/40 rounded-lg p-4 border border-blue-900/30">
                        <h5 class="text-xs font-semibold text-white mb-2">Kegiatan 3: Kesenian</h5>
                        <div class="grid grid-cols-2 gap-4">
                            <img src="{{ asset('img/pembinaan/kes1.jpeg') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+1'">
                            <img src="{{ asset('img/pembinaan/kes2.jpg') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+2'">
                        </div>
                    </div>

                    <div class="bg-blue-950/40 rounded-lg p-4 border border-blue-900/30">
                        <h5 class="text-xs font-semibold text-white mb-2">Kegiatan 4: Pinter Setara</h5>
                        <div class="grid grid-cols-2 gap-4">
                            <img src="{{ asset('img/pembinaan/pin1.jpg') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+1'">
                            <img src="{{ asset('img/pembinaan/pin2.jpeg') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+2'">
                        </div>
                    </div>
            </div>

            <!-- FOTO KEMANDIRIAN (4 Kegiatan x 2 Foto) -->
            <div x-show="bukaKemandirian" x-transition class="w-full max-w-3xl bg-[#0b203a] border border-blue-900/60 rounded-xl p-5 space-y-4 shadow-inner" style="display: none;">
                <h4 class="text-xs font-bold uppercase tracking-wider text-amber-500">Galeri Pembinaan Kemandirian</h4>
                <div class="grid grid-cols-1 gap-4">
                    <div class="bg-blue-950/40 rounded-lg p-4 border border-blue-900/30">
                        <h5 class="text-xs font-semibold text-white mb-2">Kegiatan 1: Ketahanan Pangan</h5>
                        <div class="grid grid-cols-2 gap-4">
                            <img src="{{ asset('img/pembinaan/pangan1.jpeg') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+1'">
                            <img src="{{ asset('img/pembinaan/pangan2.jpg') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+2'">
                        </div>
                    </div>

                    <div class="bg-blue-950/40 rounded-lg p-4 border border-blue-900/30">
                        <h5 class="text-xs font-semibold text-white mb-2">Kegiatan 2: Keahlian</h5>
                        <div class="grid grid-cols-2 gap-4">
                            <img src="{{ asset('img/pembinaan/keh1.png') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+1'">
                            <img src="{{ asset('img/pembinaan/keh2.jpeg') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+2'">
                            <img src="{{ asset('img/pembinaan/keh3.png') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+2'">

                        </div>
                    </div>

                    <div class="bg-blue-950/40 rounded-lg p-4 border border-blue-900/30">
                        <h5 class="text-xs font-semibold text-white mb-2">Kegiatan 3: Kerajinan Tangan</h5>
                        <div class="grid grid-cols-2 gap-4">
                            <img src="{{ asset('img/pembinaan/ker1.png') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+1'">
                            <img src="{{ asset('img/pembinaan/ker2.jpeg') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+2'">
                        </div>
                    </div>

                    <div class="bg-blue-950/40 rounded-lg p-4 border border-blue-900/30">
                        <h5 class="text-xs font-semibold text-white mb-2">Kegiatan 4: UMKM</h5>
                        <div class="grid grid-cols-2 gap-4">
                            <img src="{{ asset('img/pembinaan/um1.jpeg') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+1'">
                            <img src="{{ asset('img/pembinaan/um2.jpeg') }}" class="rounded-md w-full h-36 object-cover border border-blue-900/40" onerror="this.src='https://placehold.co/600x400/0a1e36/ffffff?text=Foto+2'">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Call Center WhatsApp -->
        <div class="bg-card-biru border border-emerald-900/60 rounded-xl p-6 text-center max-w-xl mx-auto shadow-sm">
            <h4 class="font-bold text-emerald-300 mb-1">Pusat Informasi Kendala & Layanan WBP</h4>
            <p class="text-xs text-gray-300 mb-4">Butuh informasi status masa tahanan keluarga? Hubungi WhatsApp resmi Pusat Informasi Rutan:</p>
            <a href="https://wa.me/6281234567890" target="_blank" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm py-2.5 px-6 rounded-lg transition inline-flex items-center gap-2">
                Hubungi Hotline Informasi 
            </a>
        </div>
    </main>

        @include('partials.footer')
</body>
</html>