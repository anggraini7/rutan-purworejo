<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan Kunjungan - Rutan Purworejo</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0a1d37] text-gray-100 font-sans min-h-screen flex flex-col">

    <!-- NAVBAR INSTANSI -->
        @include('partials.navbar')


    <!-- KONTEN -->
    <main class="max-w-5xl mx-auto px-4 py-12 flex-1 w-full space-y-12">
        <div>
            <h1 class="text-3xl font-bold text-white">Layanan Kunjungan</h1>
            <p class="text-sm text-gray-400 mt-1">Informasi tata cara, berkas wajib, serta jadwal kunjungan keluarga tatap muka.</p>
            <div class="w-12 h-1 bg-amber-500 mt-3 rounded"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-sm">
                <h3 class="text-lg font-bold text-amber-400 mb-3">Persyaratan Kunjungan</h3>
                <ul class="list-disc list-inside text-sm text-gray-300 space-y-2">
                    <li>Membawa KTP asli / Kartu Keluarga pengunjung.</li>
                    <li>Merupakan keluarga inti dari Tahanan/WBP yang bersangkutan.</li>
                    <li>Berpakaian sopan, rapi, dan mematuhi protokol keamanan fisik petugas pemeriksaan.</li>
                </ul>
            </div>

            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-sm">
                <h3 class="text-lg font-bold text-amber-400 mb-3">Jadwal Operasional</h3>
                <div class="text-sm text-gray-300 space-y-2">
                    <p><strong>Senin - Kamis:</strong> 08.30 WIB s/d 11.30 WIB</p>
                    <p><strong>Sabtu:</strong> 08.30 WIB s/d 11.00 WIB</p>
                    <p class="text-xs text-amber-500/80 italic mt-2">*Hari Jumat, Minggu, dan Libur Nasional layanan kunjungan ditiadakan.</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#08172c] text-gray-500 text-xs py-6 text-center">&copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.</footer>
</body>
</html>