<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Standar Pelayanan - Rutan Purworejo</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-bg text-gray-100 font-sans min-h-screen flex flex-col">

    <!-- NAVBAR INSTANSI -->
        @include('partials.navbar')


    <!-- KONTEN -->
    <main class="max-w-5xl mx-auto px-4 py-12 flex-1 w-full space-y-12">
        <div>
            <h1 class="text-3xl font-bold text-font-biru">Standar Pelayanan Publik</h1>
            <p class="text-sm text-font-abu mt-1">Komitmen kepastian hukum dan transparansi pelayanan Rutan Kelas IIB Purworejo.</p>
            <div class="w-12 h-1 bg-amber-500 mt-3 rounded"></div>
        </div>

        <!-- Maklumat Pelayanan -->
        <div class="bg-gradient-to-br from-[#0f294a] to-[#12335c] text-white rounded-xl p-8 shadow-md text-center max-w-3xl mx-auto border border-blue-900/50">
            <span class="text-xs font-bold text-amber-400 uppercase tracking-widest block mb-2">Maklumat Pelayanan</span>
            <p class="text-lg font-serif italic leading-relaxed text-gray-100">
                "Dengan ini, kami menyatakan sanggup menyelenggarakan pelayanan sesuai standar pelayanan yang telah ditetapkan dan apabila tidak menepati janji ini, kami siap menerima sanksi sesuai peraturan perundang-undangan yang berlaku."
            </p>
        </div>

        <!-- Prosedur Pengaduan Formal -->
        <div class="bg-[#0f294a] rounded-xl p-6 sm:p-8 border border-blue-900/40 shadow-sm">
            <h3 class="text-lg font-bold text-amber-400 mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                Prosedur Formal Tata Cara Penyampaian Keluhan
            </h3>
            <div class="space-y-4 text-sm text-gray-300 leading-relaxed">
                <p>Bagi masyarakat atau pengguna layanan yang mengalami ketidakpuasan atau menemukan ketidaksesuaian standar pelayanan, laporan keluhan dapat dilayangkan melalui mekanisme birokrasi berikut:</p>
                <ol class="list-decimal list-inside space-y-2 pl-2">
                    <li><strong>Penyusunan Berkas:</strong> Pemohon mengisi formulir pengaduan masyarakat yang tersedia di ruang informasi atau mengunduhnya secara digital.</li>
                    <li><strong>Verifikasi Dokumen:</strong> Menyertakan kartu identitas (KTP) serta bukti pendukung yang valid mengenai keluhan kelalaian petugas.</li>
                    <li><strong>Investigasi Internal:</strong> Tim Subseksi Pengelolaan dan Pengamanan Rutan akan melakukan pemeriksaan berkas dalam jangka waktu maksimal 14 hari kerja.</li>
                    <li><strong>Pemberian Jawaban resmi:</strong> Pihak pelapor akan menerima surat keputusan/klarifikasi resmi tindak lanjut dari Kepala Rutan.</li>
                </ol>
            </div>
        </div>
    </main>

    <footer class="bg-[#08172c] text-gray-500 text-xs py-6 text-center">&copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.</footer>
</body>
</html>