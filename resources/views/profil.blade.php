<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil - Rutan Purworejo</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0a1d37] text-gray-100 font-sans min-h-screen flex flex-col">

    <nav class="bg-[#0f294a] shadow-md border-b border-blue-900/50 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-10 h-10 object-contain">
                    <span class="font-bold text-sm sm:text-base text-white block">RUTAN PURWOREJO</span>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ url('/') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Beranda</a>
                    <a href="{{ url('/profil') }}" class="text-xs sm:text-sm font-semibold text-amber-400 border-b-2 border-amber-400 pb-1">Profil</a>
                    <a href="{{ url('/kunjungan') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Layanan Kunjungan</a>
                    <a href="{{ url('/standar-pelayanan') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Standar Pelayanan</a>
                    <a href="{{ url('/informasi-wbp') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Informasi WBP</a>
                    <a href="{{ url('/layanan-pengaduan') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Layanan Pengaduan</a>
                    <a href="{{ url('/berita') }}" class="text-xs sm:text-sm font-medium text-gray-300 hover:text-amber-400 transition">Berita</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-4 py-12 flex-1 w-full space-y-12">
        <div>
            <h1 class="text-3xl font-bold text-white">Profil Instansi</h1>
            <p class="text-sm text-gray-400 mt-1">Sejarah, visi, misi, dan struktur organisasi Rutan Kelas IIB Purworejo.</p>
            <div class="w-12 h-1 bg-amber-500 mt-3 rounded"></div>
        </div>

        <div class="bg-[#0f294a] rounded-xl p-6 sm:p-8 border border-blue-900/40 shadow-sm space-y-6">
            <div>
                <h3 class="text-lg font-bold text-amber-400 mb-2">Sejarah Singkat</h3>
                <p class="text-sm text-gray-300 leading-relaxed">
                    Rumah Tahanan Negara (Rutan) Kelas IIB Purworejo merupakan unit pelaksana teknis di bawah Kementerian Imigrasi dan Pemasyarakatan yang bertugas melakukan perawatan terhadap tahanan dan warga binaan. Berdiri kokoh sebagai bagian dari penegakan hukum yang humanis di wilayah Purworejo.
                </p>
            </div>

            <div class="border-t border-blue-900/50 pt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-bold text-amber-400 mb-2">Visi</h3>
                    <p class="text-sm text-gray-300 leading-relaxed">
                        Mewujudkan sistem pemasyarakatan yang berkeadilan, transparan, dan profesional dalam membentuk warga binaan yang mandiri dan produktif.
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-amber-400 mb-2">Misi</h3>
                    <ul class="list-disc list-inside text-sm text-gray-300 space-y-1">
                        <li>Melaksanakan pelayanan tahanan dengan prima.</li>
                        <li>Menyelenggarakan pembinaan narapidana yang solutif.</li>
                        <li>Menjaga keamanan dan ketertiban lingkungan rutan.</li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="space-y-8 pt-4">
            <div class="text-center">
                <h2 class="text-2xl font-bold text-white">Struktur Organisasi</h2>
                <p class="text-xs text-gray-400 mt-1">Susunan pejabat struktural di lingkungan Rutan Kelas IIB Purworejo</p>
                <div class="w-10 h-0.5 bg-amber-500 mx-auto mt-2 rounded"></div>
            </div>

            <div class="flex justify-center">
                <div class="bg-[#0f294a] rounded-xl p-5 border-2 border-amber-500/40 shadow-xl text-center w-64 space-y-3 transform hover:scale-105 transition duration-200">
                    <div class="w-20 h-20 bg-blue-950 rounded-full mx-auto border-2 border-amber-400 flex items-center justify-center text-gray-400 overflow-hidden">
                        <svg class="w-10 h-10 text-gray-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm text-white tracking-wide">Nama Kepala Rutan</h4>
                        <p class="text-[11px] font-semibold text-amber-400 uppercase tracking-wider mt-0.5">Kepala Rutan</p>
                        <p class="text-[10px] text-gray-400 mt-1">NIP. 198XXXXXXXXXXXXXXX</p>
                    </div>
                </div>
            </div>

            <div class="hidden md:block w-0.5 h-6 bg-blue-900/60 mx-auto"></div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto">
                
                <div class="bg-[#0f294a] rounded-xl p-5 border border-blue-900/50 shadow-md text-center space-y-3 hover:border-blue-800 transition">
                    <div class="w-16 h-16 bg-blue-950 rounded-full mx-auto border border-blue-800 flex items-center justify-center text-gray-400 overflow-hidden">
                        <svg class="w-8 h-8 text-gray-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-xs text-white">Nama Pejabat 1</h4>
                        <p class="text-[10px] font-medium text-amber-400 uppercase tracking-wider mt-0.5">Ka. Subseksi Pengelolaan</p>
                        <p class="text-[9px] text-gray-400 mt-0.5">NIP. 198XXXXXXXXXXXXXXX</p>
                    </div>
                </div>

                <div class="bg-[#0f294a] rounded-xl p-5 border border-blue-900/50 shadow-md text-center space-y-3 hover:border-blue-800 transition">
                    <div class="w-16 h-16 bg-blue-950 rounded-full mx-auto border border-blue-800 flex items-center justify-center text-gray-400 overflow-hidden">
                        <svg class="w-8 h-8 text-gray-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-xs text-white">Nama Pejabat 2</h4>
                        <p class="text-[10px] font-medium text-amber-400 uppercase tracking-wider mt-0.5">Ka. KPR (Kesatuan Pengamanan)</p>
                        <p class="text-[9px] text-gray-400 mt-0.5">NIP. 198XXXXXXXXXXXXXXX</p>
                    </div>
                </div>

                <div class="bg-[#0f294a] rounded-xl p-5 border border-blue-900/50 shadow-md text-center space-y-3 hover:border-blue-800 transition sm:col-span-2 lg:col-span-1">
                    <div class="w-16 h-16 bg-blue-950 rounded-full mx-auto border border-blue-800 flex items-center justify-center text-gray-400 overflow-hidden">
                        <svg class="w-8 h-8 text-gray-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-xs text-white">Nama Pejabat 3</h4>
                        <p class="text-[10px] font-medium text-amber-400 uppercase tracking-wider mt-0.5">Ka. Subseksi Pelayanan Tahanan</p>
                        <p class="text-[9px] text-gray-400 mt-0.5">NIP. 198XXXXXXXXXXXXXXX</p>
                    </div>
    
                </div>

            </div>
        </section>
    </main>

    <footer class="bg-[#08172c] text-gray-500 text-xs py-6 text-center border-t border-blue-900/40">&copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.</footer>
</body>
</html>