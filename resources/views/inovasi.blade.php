<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inovasi - Rutan Purworejo</title>
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
    <main class="max-w-6xl mx-auto px-4 py-12 flex-1 w-full space-y-10">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-font-biru">Inovasi Rutan Purworejo</h1>
            <p class="text-sm text-font-abu mt-1">Daftar terobosan dan inovasi pelayanan publik digital yang diselenggarakan oleh Rutan Kelas IIB Purworejo.</p>
            <div class="w-12 h-1 bg-amber-500 mx-auto mt-3 rounded"></div>
        </div>

        @php
            // 💡 DAFTAR NAMA INOVASI & NAMA FILENYA DI SINI
            // Kamu tinggal ganti isi teks di bawah ini sesuai nama file asli fotomu di public/images/inovasi/
            $daftarInovasi = [
                ['nama' => 'E TROLING KAM (PETUGAS KEAMANAN PATROLI LINGKUNGAN RUTAN PURWOREJO)', 'foto' => '1.jpeg'],
                ['nama' => 'PALUGADA (PEMILIHAN LANGSUNG PEGAWAI TELADAN)', 'foto' => '2.jpeg'],
                ['nama' => 'SIPASDU (SIAP LEPAS RINDU)', 'foto' => '3.jpeg'],
                ['nama' => 'SIPASRATIH (SIAP PASUKAN MERAH PUTIH)', 'foto' => '4.jpeg'],
                ['nama' => 'TAKON ROSI (TANYA KONSULTASI PROSES INTEGRASI)', 'foto' => '5.jpeg'],
                ['nama' => 'NASI LAUK TRASI (LAYANAN INFORMASI UNTUK KEPASTIAN EKSPIRASI, REMISI & INTEGRASI)', 'foto' => '6.jpeg'],
                ['nama' => 'PAMAN RAMAH (PENGANTARAN AMAN GRATIS SAMPAI RUMAH)', 'foto' => '7.jpeg'],
                ['nama' => 'LAUK KETAN (LAYANAN UNTUK KELOMPOK RENTAN)', 'foto' => '8.jpeg'],
                ['nama' => 'GADIS JELITA (TENAGA MEDIS JEMPUT TANGANI DAN LAYANI)', 'foto' => '9.jpeg'],
                ['nama' => 'BAKSO BABAT (BAKTI SOSIAL BAGI MASYARAKAT)', 'foto' => '10.jpeg'],
                ['nama' => 'SABER BAKAT (SABTU BERKAH BERBAGI DENGAN MASYARAKAT)', 'foto' => '11.jpeg'],
                ['nama' => 'RUNOS (RUTAN NOTIFIKASI SISTEM)', 'foto' => '12.jpeg'],
            ];
        @endphp

        <!-- GRID GALLERY 12 FOTO OLEH ARRAY -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            
            @foreach ($daftarInovasi as $inovasi)
            <div class="bg-[#0f294a] rounded-xl p-4 border border-blue-900/40 shadow-md group hover:border-amber-500/40 transition duration-300">
                <div class="overflow-hidden rounded-lg bg-blue-950 flex items-center justify-center aspect-square">
                    <!-- Otomatis memanggil folder public/images/inovasi/ diikuti nama file dari array -->
                    <img src="{{ asset('img/ino/' . $inovasi['foto']) }}" 
                         alt="{{ $inovasi['nama'] }}" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                         onerror="this.src='https://placehold.co/500x500/0a1e36/ffffff?text=Belum+Ada+Poster'">
                </div>
                <h3 class="text-sm font-bold text-center text-gray-200 mt-3 group-hover:text-amber-400 transition">
                    {{ $inovasi['nama'] }}
                </h3>
            </div>
            @endforeach

        </div>
    </main>

        @include('partials.footer')
</body>
</html>