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
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden flex items-center justify-center">
        <img src="{{ asset('img/rutan2.jpeg') }}" alt="Background Rutan" class="w-full h-full object-cover opacity-10 filter grayscale">
    </div>

    <!-- KONTEN -->
    <main class="max-w-5xl mx-auto px-4 py-12 flex-1 w-full space-y-8 relative z-10">
        <div>
            <h1 class="text-3xl font-bold text-font-biru">Standar Pelayanan Publik</h1>
            <p class="text-sm text-font-abu mt-1">Komitmen kepastian hukum dan transparansi pelayanan Rutan Kelas IIB Purworejo.</p>
            <div class="w-12 h-1 bg-amber-500 mt-3 rounded"></div>
        </div>

        <!-- Maklumat Pelayanan -->
        <div class="bg-gradient-to-br from-[#0f294a] to-[#12335c] text-white rounded-xl p-8 shadow-md text-center max-w-3xl mx-auto border border-blue-900/50">
            <span class="text-xs font-bold text-amber-400 uppercase tracking-widest block mb-2">Maklumat Pelayanan</span>
            <p class="text-lg font-serif italic leading-relaxed text-gray-100">
                "Kami Seluruh Pegawai Rumah Tahanan Negara Kelas Iib Purworej0 Dengan Ini Menyatakan Sanggup Dan Siap Menyelenggarakan Pelayanan Sesuai Dengan Standar Pelayanan Yang Ditetapkan.
Apabila Kami Tidak Menepati Janji, Maka Kami Siap Menerima Sanksi Sesuai Ketentuan Perundang-Undangan Yang Berlaku."
            </p>
        </div>

        <!-- CARD FOTO / DOKUMENTASI STANDAR PELAYANAN -->
        <div class="bg-gradient-to-br from-[#0f294a] to-[#12335c] text-white rounded-xl p-6 shadow-md max-w-3xl mx-auto border border-blue-900/50">
            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest mb-4 text-center md:text-center">Dokumentasi Banner Maklumat</h3>
            
            <!-- Menggunakan pembungkus tunggal agar foto memanjang penuh mengikuti lebar card -->
            <div class="bg-blue-950/40 rounded-lg p-3 border border-blue-900/30 space-y-3">
                <!-- 💡 Pastikan nama file gambar disesuaikan dengan yang kamu simpan di folder public, misal: maklumat_pelayanan.jpg -->
                <img src="{{ asset('img/mak.jpeg') }}" 
                     alt="Banner Maklumat Pelayanan Rutan Purworejo" 
                     class="rounded-md w-full h-auto object-contain border border-blue-900/100 shadow-inner" 
                     onerror="this.src='https://placehold.co/1000x600/0a1e36/ffffff?text=Banner+Maklumat+Pelayanan'">
                
                <p class="text-xs text-center text-gray-300 font-medium tracking-wide">
                    Infografis Resmi Maklumat Pelayanan Rutan Kelas IIB Purworejo
                </p>
            </div>
        </div>

    </main>

    <footer class="bg-[#08172c] text-gray-500 text-xs py-6 text-center">&copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.</footer>
</body>
</html>