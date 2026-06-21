<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan Kunjungan - Rutan Purworejo</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 font-sans min-h-screen flex flex-col">

    <!-- NAVBAR (Tetap Sama) -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold text-xs shadow-sm">PAS</div>
                    <div>
                        <span class="font-bold text-sm sm:text-base text-blue-900 block leading-tight">RUTAN PURWOREJO</span>
                        <span class="text-[10px] sm:text-xs text-gray-500 block">Kementerian Imigrasi dan Pemasyarakatan</span>
                    </div>
                </div>
                
                <div class="flex items-center gap-5">
                    <a href="{{ url('/') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Beranda</a>
                    <a href="{{ url('/profil') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Profil</a>
                    <a href="{{ url('/kunjungan') }}" class="text-xs sm:text-sm font-semibold text-blue-900 border-b-2 border-blue-900 pb-1">Layanan Kunjungan</a>
                    <a href="{{ url('/standar-pelayanan') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Standar Pelayanan</a>
                    <a href="{{ url('/informasi-wbp') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Informasi WBP</a>
                    <a href="{{ url('/layanan-pengaduan') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Layanan Pengaduan</a>
                    <a href="{{ url('/berita') }}" class="text-xs sm:text-sm font-medium text-gray-600 hover:text-blue-900 transition">Berita</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- KONTEN LAYANAN KUNJUNGAN -->
    <main class="max-w-5xl mx-auto px-4 py-12 flex-1 w-full space-y-12">
        <div>
            <h1 class="text-3xl font-bold text-gray-950 mb-2">Informasi & Jadwal Kunjungan</h1>
            <div class="w-16 h-1 bg-amber-500 mb-6 rounded"></div>
        </div>

        <!-- Jadwal Tabel -->
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <h3 class="text-lg font-bold mb-4 text-blue-900">Jadwal Operasional Kunjungan</h3>
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 font-semibold">
                        <th class="p-3 border">Hari</th>
                        <th class="p-3 border">Waktu (WIB)</th>
                        <th class="p-3 border">Kategori WBP</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    <tr>
                        <td class="p-3 border font-medium">Senin & Rabu</td>
                        <td class="p-3 border">08:30 - 11:30</td>
                        <td class="p-3 border">Tindak Pidana Umum</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="p-3 border font-medium">Selasa & Kamis</td>
                        <td class="p-3 border">08:30 - 11:30</td>
                        <td class="p-3 border">Kasus Narkotika / Khusus</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Persyaratan -->
        <div class="bg-white rounded-xl p-6 border border-gray-200">
            <h3 class="text-lg font-bold mb-3 text-blue-900">Persyaratan Dokumen Pengunjung</h3>
            <ul class="space-y-2 text-sm text-gray-600 list-disc list-inside">
                <li>Membawa Kartu Tanda Penduduk (KTP) asli atau Kartu Keluarga (KK).</li>
                <li>Membawa Surat Izin Kunjungan dari pihak penahan (Kejaksaan/Pengadilan) jika status WBP masih tahanan.</li>
                <li>Berpakaian sopan dan mematuhi protokol pemeriksaan fisik petugas rutan.</li>
            </ul>
        </div>
    </main>

    <footer class="bg-gray-900 text-gray-400 text-xs py-6 mt-12">
        <div class="text-center">&copy; {{ date('Y') }} Rumah Tahanan Negara Kelas IIB Purworejo.</div>
    </footer>
</body>
</html>