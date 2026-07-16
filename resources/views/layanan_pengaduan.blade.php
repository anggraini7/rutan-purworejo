<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan Pengaduan - Rutan Purworejo</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-bg text-gray-100 font-sans min-h-screen flex flex-col">

    <!-- NAVBAR INSTANSI -->
    @include('partials.navbar')

    <!-- KONTEN -->
    <main class="max-w-4xl mx-auto px-4 py-12 flex-1 w-full space-y-12">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-font-biru">Layanan Pengaduan & Survey</h1>
            <p class="text-sm text-font-abu mt-1">Rutan Purworejo menyediakan layanan pengaduan bagi masyarakat, pengunjung, maupun keluarga Warga Binaan yang ingin menyampaikan keluhan, masukan, atau laporan terkait pelayanan di Rutan Purworejo.</p>
            <div class="w-12 h-1 bg-amber-500 mx-auto mt-3 rounded"></div>
        </div>

        <!-- MEMBUAT CARD DI TENGAH DAN AGAK LEBAR -->
        <div class="flex justify-center pt-4">
            <!-- Menggunakan max-w-3xl agar lebih lebar, dan border blue-900/40 untuk mengganti warna merah -->
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-md flex flex-col justify-between w-full max-w-3xl">
                <div>
                    <!-- Badge warna diganti dari merah ke amber/emas agar lebih serasi dengan tema web -->
                    <span class="bg-amber-500/10 text-amber-400 text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded inline-block mb-3 border border-amber-500/20">Anti-Korupsi</span>
                    <h3 class="text-lg font-bold text-white mb-2">Hotline Pengaduan </h3>
                    <p class="text-xs text-gray-300 leading-relaxed mb-6">
                        Setiap pengaduan akan ditindaklanjuti sesuai dengan ketentuan yang berlaku. Mohon menyampaikan pengaduan dengan data yang jelas dan bertanggung jawab.
                    </p>
                </div>

                <!-- TOMBOL DIBUAT SAMPINGAN & WARNA BAGUS (TIDAK MERAH) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Tombol WhatsApp: Menggunakan aksen hijau WA yang soft atau amber -->
                    <a href="https://wa.me/085187656263" target="_blank" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs py-3 px-4 rounded-lg text-center transition tracking-wide shadow-md shadow-emerald-900/20">
                        Laporkan Lewat WhatsApp
                    </a>
                    <!-- Tombol Web Lapor: Menggunakan aksen biru terang/amber biar matching dengan tema instansi -->
                    <a href="https://www.lapor.go.id/instansi/kementerian-imigrasi-dan-pemasyarakatan-ri" target="_blank" class="bg-amber-500 hover:bg-amber-600 text-gray-950 font-bold text-xs py-3 px-4 rounded-lg text-center transition tracking-wide shadow-md shadow-amber-500/10">
                        Laporkan Lewat Web
                    </a>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#08172c] text-gray-500 text-xs py-6 text-center">&copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.</footer>
</body>
</html>