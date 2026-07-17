<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan Integrasi - Rutan Purworejo</title>
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
            <h1 class="text-3xl font-bold text-font-biru">Layanan Integrasi WBP</h1>
            <p class="text-sm text-font-abu mt-1">Informasi program reintegrasi sosial bagi Warga Binaan Pemasyarakatan (PB, CB, CMB, dan Asimilasi).</p>
            <div class="w-12 h-1 bg-amber-500 mt-3 rounded"></div>
        </div>

        <!-- CARD PERSYARATAN DI TENGAH -->
        <div class="flex justify-center">
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-sm w-full max-w-3xl">
                <h3 class="text-lg font-bold text-amber-400 mb-3 text-center md:text-left">PERSYARATAN USULAN CB / PB / CMB:</h3>
                <ul class="list-disc list-inside text-sm text-gray-300 space-y-2">
                    <li>Mengisi blanko surat Jaminan bermaterai 10.000 sebanyak 1 lembar</li>
                    <li>Mengisi blanko Surat Pernyataan Tidak Dipungut Biaya dalam pengurusan CB/PB/CMB bermaterai 10.000 sebanyak 1 lembar</li>
                    <li>Surat keterangan dari Kepala Desa yang menyatakan bahwa tidak keberatan apabila …………………… (tulis nama narapidana) mendapat bebas bersyarat/cuti bersyarat.</li>
                    <li>Fotocopy Kartu Keluarga Penjamin 1 lembar</li>
                    <li>Fotocopy KTP Penjamin 1 lembar</li>
                    <li>Menyerahkan materai 10.000 sebanyak 3 lembar untuk surat pernyataan narapidana yang akan diusulkan.</li>
                </ul>
            </div>
        </div>

        <!-- DIUBAH: HANYA 2 CARD DAN SEBELAHAN -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- CARD SEBELAH KIRI: WA TAKON ROSI -->
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-md flex flex-col justify-between">
                <div>
                    <span class="bg-emerald-500/10 text-emerald-400 text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded inline-block mb-3 border border-emerald-500/20">Hotline Chat</span>
                    <h3 class="text-lg font-bold text-white mb-2">Wa Takon Rosi</h3>
                    <p class="text-xs text-gray-300 leading-relaxed mb-6">
                        Tanya Konsultasi Proses Integrasi Layanan khusus pemanfaatan teknologi digital melalui aplikasi WhatsApp, untuk memudahkan pelayanan program integrasi kepada keluarga (masyarakat); tanya/konsultasi, pengiriman, dan penerimaan dokumen persyaratan.
                    </p>
                </div>
                <!-- Tombol WhatsApp Resmi -->
                <a href="https://wa.me/085187656263" target="_blank" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs py-3 px-4 rounded-lg text-center transition tracking-wide shadow-md shadow-emerald-900/20">
                    Hubungi WhatsApp
                </a>
            </div>

            <!-- CARD SEBELAH KANAN: DOKUMEN / FILE PDF -->
            <div class="bg-[#0f294a] rounded-xl p-6 border border-blue-900/40 shadow-md flex flex-col justify-between">
                <div>
                    <span class="bg-amber-500/10 text-amber-400 text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded inline-block mb-3 border border-amber-500/20">Unduh Formulir</span>
                    <h3 class="text-lg font-bold text-white mb-3">Download Blanko Persyaratan</h3>
                    
                    <!-- List 3 File PDF -->
                    <div class="space-y-3 mb-4">
                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300 truncate pr-2">1. Surat Jaminan Kesanggupan Keluarga.pdf</span>
                            <a href="{{ asset('pdf/Surat Jaminan Kesanggupan Keluarga.pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>
                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300 truncate pr-2">2. Surat Pernyataan Tidak Dipungut Biaya.pdf</span>
                            <a href="{{ asset('pdf/Surat Pernyataan Tidak Dipungut Biaya.pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>
                        <div class="flex items-center justify-between p-2.5 bg-blue-950/40 border border-blue-900/20 rounded-lg">
                            <span class="text-xs text-gray-300 truncate pr-2">3. Surat Keterangan dari Kepala Desa.pdf</span>
                            <a href="{{ asset('pdf/ Surat Keterangan dr Lurah Kepala Desa.pdf') }}" download class="text-[11px] font-bold text-amber-400 hover:underline shrink-0">Download</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer class="bg-[#08172c] text-gray-500 text-xs py-6 text-center">&copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.</footer>
</body>
</html>