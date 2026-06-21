<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Standar Pelayanan - Rutan Purworejo</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 font-sans min-h-screen flex flex-col">

    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold text-xs shadow-sm">PAS</div>
                    <div><span class="font-bold text-sm sm:text-base text-blue-900 block">RUTAN PURWOREJO</span></div>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ url('/') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Beranda</a>
                    <a href="{{ url('/profil') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Profil</a>
                    <a href="{{ url('/kunjungan') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Layanan Kunjungan</a>
                    <a href="{{ url('/standar-pelayanan') }}" class="text-xs sm:text-sm font-semibold text-blue-900 border-b-2 border-blue-900 pb-1">Standar Pelayanan</a>
                    <a href="{{ url('/informasi-wbp') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Informasi WBP</a>
                    <a href="{{ url('/layanan-pengaduan') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Layanan Pengaduan</a>
                    <a href="{{ url('/berita') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Berita</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-4 py-12 flex-1 w-full space-y-12">
        <div>
            <h1 class="text-3xl font-bold text-gray-950">Standar Pelayanan Publik</h1>
            <p class="text-sm text-gray-500 mt-1">Komitmen kepastian hukum dan transparansi pelayanan Rutan Kelas IIB Purworejo.</p>
            <div class="w-12 h-1 bg-amber-500 mt-3 rounded"></div>
        </div>

        <div class="bg-gradient-to-br from-blue-900 to-indigo-950 text-white rounded-xl p-8 shadow-sm text-center max-w-3xl mx-auto border border-blue-800">
            <span class="text-xs font-bold text-amber-400 uppercase tracking-widest block mb-2">Maklumat Pelayanan</span>
            <p class="text-lg font-serif italic leading-relaxed">
                "Dengan ini, kami menyatakan sanggup menyelenggarakan pelayanan sesuai standar pelayanan yang telah ditetapkan dan apabila tidak menepati janji ini, kami siap menerima sanksi sesuai peraturan perundang-undangan yang berlaku."
            </p>
        </div>

        <div class="bg-white rounded-xl p-6 sm:p-8 border border-gray-200">
            <h3 class="text-lg font-bold text-gray-950 mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                Prosedur Formal Tata Cara Penyampaian Keluhan
            </h3>
            <div class="space-y-4 text-sm text-gray-600 leading-relaxed">
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

    <footer class="bg-gray-900 text-gray-500 text-xs py-6 text-center">&copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.</footer>
</body>
</html>