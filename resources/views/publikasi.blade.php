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
                            <span class="text-xs text-gray-300">SOP LAYANAN INFORMASI MEDIA SOSIAL.pdf</span>
                            <a href="{{ asset('pdf/pub/SOP LAYANAN INFORMASI MEDIA SOSIAL.pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>

                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300">SOP LAYANAN KUNJUNGAN.pdf</span>
                            <a href="{{ asset('pdf/pub/SOP LAYANAN KUNJUNGAN.pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>

                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300">SOP LAYANAN PENITIPAN BARANG.pdf</span>
                            <a href="{{ asset('pdf/pub/SOP LAYANAN PENITIPAN BARANG.pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>

                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300">SOP LAYANAN PENGADUAN ONLINE.pdf</span>
                            <a href="{{ asset('pdf/pub/SOP LAYANAN PENGADUAN ONLINE.pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>

                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300">SOP PENGGELEDAHAN BADAN.pdf</span>
                            <a href="{{ asset('pdf/pub/SOP PENGGELEDAHAN BADAN.pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>

                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300">SOP INTEGRASI.pdf</span>
                            <a href="{{ asset('pdf/pub/SOP INTEGRASI.pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>

                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300">SOP NASI LAUK TRASI (INOVASI WBBM).pdf</span>
                            <a href="{{ asset('pdf/pub/SOP NASI LAUK TRASI (INOVASI WBBM).pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>

                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300">SOP GADIS JELITAS (INOVASI WBBM).pdf</span>
                            <a href="{{ asset('pdf/pub/SOP GADIS JELITAS (INOVASI WBBM).pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>

                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300">SOP LAUK KETAN (INOVASI WBBM).pdf</span>
                            <a href="{{ asset('pdf/pub/SOP LAUK KETAN (INOVASI WBBM).pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>

                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300">SOP TAKON ROSI (INOVASI WBBM ).pdf</span>
                            <a href="{{ asset('pdf/pub/SOP TAKON ROSI (INOVASI WBBM ).pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>

                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300">SOP E-TROLINGKAMP.pdf</span>
                            <a href="{{ asset('pdf/pub/SOP E-TROLINGKAMP.pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>

                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300">SOP SIPASRATIH.pdf</span>
                            <a href="{{ asset('pdf/pub/SOP SIPASRATIH.pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>

                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300">SOP RUNOS 9ALARM ANTAR INSTANSI.pdf</span>
                            <a href="{{ asset('pdf/pub/SOP RUNOS 9ALARM ANTAR INSTANSI).pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
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
                            <span class="text-xs text-gray-300">Undang-Undang Nomor 22 Tahun 2022 Tentang Pemasyarakatan.pdf</span>
                            <a href="{{ asset('pdf/pub/Salinan UU No 22 Tahun 2022.pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
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
                    <img src="{{ asset('img/qr.jpeg') }}" alt="Barcode Survey IKM IPK" class="w-40 h-40 object-contain mx-auto">
                </div>
                <a href="https://star-survei3a.kemenimipas.go.id/ly/gqKZro8I" target="_blank" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs py-3 px-4 rounded-lg text-center transition tracking-wide shadow-md shadow-emerald-900/20">
                    klik di sini
                </a>
                <span class="text-[11px] text-gray-400 italic">Atau klik tautan langsung untuk mengisi survey.</span>
            </div>
        </div>
    </main>

    <footer class="bg-[#08172c] text-gray-500 text-xs py-6 text-center">&copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.</footer>
</body>
</html>