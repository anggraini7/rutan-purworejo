<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk Karya WBP - Rutan Purworejo</title>
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
    <main class="max-w-6xl mx-auto px-4 py-12 flex-1 w-full space-y-10 relative z-10">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-font-biru">Produk Karya WBP</h1>
            <p class="text-sm text-font-abu mt-1">Hasil karya produktif dan kreatif dari Warga Binaan Pemasyarakatan (WBP) Rutan Kelas IIB Purworejo.</p>
            <div class="w-12 h-1 bg-amber-500 mx-auto mt-3 rounded"></div>
        </div>

        @php
            // 💡 DAFTAR NAMA PRODUK & FILENYA DI SINI (Total 7 item sesuai request)
            // Kamu tinggal sesuaikan nama produk dan nama file aslinya di folder public/img/produk/
            $daftarProduk = [
                ['nama' => 'GEBLEK KHAS PURWOREJO ', 'foto' => '1.png'],
                ['nama' => 'KERIPIK SINGKONG', 'foto' => '2.png'],
                ['nama' => 'KERIPIK PISANG LUMER', 'foto' => '3.png'],
                ['nama' => 'LELE SIAP MASAK', 'foto' => '4.png'],
                ['nama' => 'TEMPAT HANTARAN', 'foto' => '5.png'],
                ['nama' => 'KOTAK TEMPAK TISU', 'foto' => '6.png'],
                ['nama' => 'KERANJANG CUCI BAJU', 'foto' => '7.png'],
            ];
        @endphp

        <!-- GRID GALLERY 7 FOTO OLEH ARRAY -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            
            @foreach ($daftarProduk as $produk)
            <div class="bg-[#0f294a] rounded-xl p-4 border border-blue-900/40 shadow-md group hover:border-amber-500/40 transition duration-300">
                <div class="overflow-hidden rounded-lg bg-blue-950 flex items-center justify-center aspect-square">
                    <!-- Otomatis memanggil folder public/img/produk/ diikuti nama file dari array -->
                    <img src="{{ asset('img/wbp/' . $produk['foto']) }}" 
                         alt="{{ $produk['nama'] }}" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                         onerror="this.src='https://placehold.co/500x500/0a1e36/ffffff?text=Foto+Produk'">
                </div>
                <h3 class="text-sm font-bold text-center text-gray-200 mt-3 group-hover:text-amber-400 transition">
                    {{ $produk['nama'] }}
                </h3>
            </div>
            @endforeach

        </div>
    </main>

    <footer class="bg-[#08172c] text-gray-500 text-xs py-6 text-center">&copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.</footer>
</body>
</html>