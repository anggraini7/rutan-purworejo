<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Publikasi - Rutan Purworejo</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-bg text-gray-100 font-sans min-h-screen flex flex-col">

    <!-- NAVBAR INSTANSI -->
    @include('partials.navbar')

    <!-- KONTEN -->
    <main class="max-w-5xl mx-auto px-4 py-12 flex-1 w-full space-y-10">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-font-biru">Publikasi & Transparansi</h1>
            <p class="text-sm text-font-abu mt-1">Akses terbuka mengenai Standar Operasional Prosedur (SOP), Peraturan Pemasyarakatan, serta hasil Survey IKM/IPK Rutan Purworejo.</p>
            <div class="w-12 h-1 bg-amber-500 mx-auto mt-3 rounded"></div>
        </div>

        <!-- 1. CARD DOKUMEN & PERATURAN DI TENGAH -->
        <div class="flex justify-center">
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-sm w-full max-w-3xl space-y-6">
                
                <!-- Bagian SOP -->
                <div>
                    <h3 class="text-base font-bold text-amber-400 mb-3 flex items-center gap-2">
                        <span>📋</span> Standar Operasional Prosedur (SOP)
                    </h3>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300">SOP Layanan Kunjungan Tatap Muka.pdf</span>
                            <a href="{{ asset('pdf/sop-kunjungan.pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>
                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300">SOP Pengaduan Masyarakat.pdf</span>
                            <a href="{{ asset('pdf/sop-pengaduan.pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>
                    </div>
                </div>

                <hr class="border-blue-900/40">

                <!-- Bagian Peraturan Pemasyarakatan (Permen) -->
                <div>
                    <h3 class="text-base font-bold text-amber-400 mb-3 flex items-center gap-2">
                        <span>⚖️</span> Peraturan Pemasyarakatan (Permen)
                    </h3>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300">Permenkumham No. 7 Tahun 2022 (Syarat Pemberian CB/PB).pdf</span>
                            <a href="{{ asset('pdf/permen-no-7-2022.pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- 2. CARD BARCODE SURVEY IKM / IPK -->
        <div class="flex justify-center">
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-sm w-full max-w-xl text-center flex flex-col items-center">
                <span class="bg-amber-500/10 text-amber-400 text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded inline-block mb-3 border border-amber-500/20">E-Survey</span>
                <h3 class="text-lg font-bold text-white mb-2">Survey IKM / IPK</h3>
                <p class="text-xs text-gray-300 max-w-md mx-auto mb-4">
                    Pindai barcode di bawah ini menggunakan ponsel Anda untuk mengisi Survey Indeks Kepuasan Masyarakat & Indeks Persepsi Korupsi atas layanan kami.
                </p>
                
                <!-- Box Barcode Placeholder -->
                <div class="bg-white p-4 rounded-lg inline-block shadow-md mb-2">
                    <!-- Kamu tinggal ganti src gambar barcode aslimu di sini nanti -->
                    <img src="{{ asset('images/barcode-survey.png') }}" alt="Barcode Survey IKM IPK" class="w-40 h-40 object-contain mx-auto">
                </div>
                
                <span class="text-[11px] text-gray-400 italic">Atau klik tautan langsung untuk mengisi survey.</span>
            </div>
        </div>
    </main>

    <footer class="bg-[#08172c] text-gray-500 text-xs py-6 text-center">&copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.</footer>
</body>
</html>