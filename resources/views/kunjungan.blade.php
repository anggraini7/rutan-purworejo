<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan Kunjungan - Rutan Purworejo</title>
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
    <main class="max-w-5xl mx-auto px-4 py-12 flex-1 w-full space-y-10">
        <div>
            <h1 class="text-3xl font-bold text-font-biru">Layanan Kunjungan</h1>
            <p class="text-sm text-font-abu mt-1">Layanan Kunjungan Tatap Muka Dan Penitipan Makanan pada Rutan Kelas IIB Purworejo</p>
            <div class="w-12 h-1 bg-amber-500 mt-3 rounded"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Card Waktu Tahanan -->
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-sm">
                <h3 class="text-lg font-bold text-amber-400 mb-3 uppercase tracking-wide">JADWAL KUNJUNGAN TAHANAN</h3>
                <div class="text-sm text-gray-300 space-y-2">
                    <p><strong>Senin dan Rabu:</strong> 09.00 s/d 12.00</p>
                    <p><strong>Pendaftaran Maksimal:</strong> 11.30 WIB</p>
                    <p class="text-xs text-amber-500/80 italic mt-2">*Hari Selasa, Kamis, Jumat, dan Minggu Kunjungan Libur.</p>
                </div>
            </div>

            <!-- Card Waktu Narapidana -->
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-sm">
                <h3 class="text-lg font-bold text-amber-400 mb-3 uppercase tracking-wide">JADWAL KUNJUNGAN NARAPIDANA</h3>
                <div class="text-sm text-gray-300 space-y-2">
                    <!-- Silakan sesuaikan jam operasional narapidana di sini nanti -->
                    <p><strong>Senin dan Rabu:</strong> 09.00 s/d 12.00</p>
                    <p><strong>Pendaftaran Maksimal:</strong> 11.30 WIB</p>
                    <p class="text-xs text-amber-500/80 italic mt-2">*Hari Selasa, Kamis, Jumat, dan Minggu Kunjungan Libur.</p>
                </div>
            </div>
        </div>

        <!-- 1. CARD PERSYARATAN DI TENGAH -->
        <div class="flex justify-center">
            <!-- max-w-2xl agar card persyaratan tidak melebar terlalu ekstrem ke samping dan tetap proporsional -->
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-sm w-full max-w-2xl">
                <h3 class="text-lg font-bold text-amber-400 mb-3 text-center md:text-left">Persyaratan Identitas</h3>
                <ul class="list-disc list-inside text-sm text-gray-300 space-y-2">
                    <li>Wajib membawa identitas diri asli dan berfoto (KTP/SIM/Paspor/Buku Nikah/Kartu Pelajar/lainnya).</li>
                    <li>Pengunjung Tahanan, wajib membawa Surat Izin Berkunjung dari pihak yang menahan (Kepolisian/Kejaksaan/Pengadilan)</li>
                    <li>Jumlah pengunjung Tahanan mengikuti jumlah yang tertera dalam Surat Izin.</li>
                    <li>Maksimal 5 orang pengunjung (Tahanan/Narapidana) per 1 nomor antrian.</li>
                </ul>
            </div>
        </div>

        <div class="flex justify-center">
            <!-- max-w-2xl agar card persyaratan tidak melebar terlalu ekstrem ke samping dan tetap proporsional -->
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-sm w-full max-w-2xl">
                <h3 class="text-lg font-bold text-amber-400 mb-3 text-center md:text-left">Persyaratan Makanan Dan Barang Bawaan</h3>
                <ul class="list-disc list-inside text-sm text-gray-300 space-y-2">
                    <li>Maksimal 5 kg per kunjungan.</li>
                    <li>Diperbolehkan: makanan olahan/masakan matang siap konsumsi (sayur, lauk, kue basah, dll).</li>
                    <p>Tidak diperbolehkan:</p>
                    <li>Makanan matang yang berongga (kepala ayam, ikan utuh, dsb.)</li>
                    <li>Makanan/minuman kemasan pabrik</li>
                    <li>Segala bentuk minuman/cairan</li>
                    <li>Makanan berbentuk serbuk atau fermentasi</li>
                    <li>Buah yang harus dikupas</li>
                </ul>
            </div>
        </div>

        <div class="flex justify-center">
            <!-- max-w-2xl agar card persyaratan tidak melebar terlalu ekstrem ke samping dan tetap proporsional -->
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-sm w-full max-w-2xl">
                <h3 class="text-lg font-bold text-amber-400 mb-3 text-center md:text-left">Persyaratan Pakaian</h3>
                <ul class="list-disc list-inside text-sm text-gray-300 space-y-2">
                    <li>Berpakaian rapi dan sopan (tidak celana/rok pendek, tidak baju tanpa lengan).</li>
                    <li>Tidak memakai jaket, topi, dan aksesoris berlebihan.</li>
                    <li>Tidak mengenakan pakaian lebih dari 1 lapis.</li>
                </ul>
            </div>
        </div>

        <div class="flex justify-center">
            <!-- max-w-2xl agar card persyaratan tidak melebar terlalu ekstrem ke samping dan tetap proporsional -->
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-sm w-full max-w-2xl">
                <h3 class="text-lg font-bold text-amber-400 mb-3 text-center md:text-left">Persyaratan Lainya</h3>
                <ul class="list-disc list-inside text-sm text-gray-300 space-y-2">
                    <li>Pengunjung bersedia digeledah badan dan barang bawaan.</li>
                    <li>Maksimal 20 menit sejak pengunjung memasuki area keamanan.</li>
                    <li>Seluruh layanan GRATIS (Rp0,-) — tidak dipungut biaya apa pun.</li>
                    <p class="text-xs text-amber-500/80 italic mt-2">*Catatan: Petugas penggeledahan barang berwenang menyeleksi barang yang diperbolehkan masuk dan yang tidak diperbolehkan masuk atas dasar pertimbangan keamanan.</p>
                </ul>
            </div>
        </div>
        <!-- 2. DUA CARD WAKTU DI BAWAHNYA (TAHANAN & NARAPIDANA) -->

    </main>

    <footer class="bg-[#08172c] text-gray-500 text-xs py-6 text-center">&copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.</footer>
</body>
</html>