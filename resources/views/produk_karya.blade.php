<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk Karya WBP - Rutan Purworejo</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- 💡 Alpine.js CDN Cadangan agar fitur pop-up dan form langsung aktif -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-bg text-gray-100 font-sans min-h-screen flex flex-col" x-data="{ bukaPesan: false, nama: '', hp: '', produkDipilih: [] }">

    <!-- NAVBAR INSTANSI -->
    @include('partials.navbar')
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden flex items-center justify-center">
        <img src="{{ asset('img/rutan2.jpeg') }}" alt="Background Rutan" class="w-full h-full object-cover opacity-10 filter grayscale">
    </div>

    <!-- KONTEN UTAMA -->
    <main class="max-w-6xl mx-auto px-4 py-12 flex-1 w-full space-y-10 relative z-10">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-font-biru">Produk Karya WBP</h1>
            <p class="text-sm text-font-abu mt-1">Hasil karya produktif dan kreatif dari Warga Binaan Pemasyarakatan (WBP) Rutan Kelas IIB Purworejo.</p>
            <div class="w-12 h-1 bg-amber-500 mx-auto mt-3 rounded"></div>
        </div>

        @php
            // Daftar 7 nama produk & file gambar sesuai data milikmu
            $daftarProduk = [
                ['nama' => 'GEBLEK KHAS PURWOREJO', 'foto' => '1.png'],
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

        <!-- BUTTON LAYANAN PESAN (DI BAWAH GALLERY) -->
        <div class="text-center pt-4">
            <button @click="bukaPesan = true" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold px-8 py-3 rounded-xl shadow-lg transition duration-200 inline-flex items-center gap-2 text-sm md:text-base relative z-20 cursor-pointer min-h-[45px]">
                🛒 Pesan Produk Karya WBP
            </button>
        </div>
    </main>

    <!-- ======================================================= -->
    <!-- POP-UP MODAL FORM PEMESANAN (RESPONSIVE HP & LAPTOP) -->
    <!-- ======================================================= -->
    <div x-show="bukaPesan" 
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/70 overflow-y-auto"
         style="display: none;"
         x-transition>
        
        <!-- Box Pop-up -->
        <div class="bg-[#0a1e36] border border-blue-900/60 rounded-2xl w-full max-w-lg max-h-[90vh] flex flex-col shadow-2xl overflow-hidden"
             @click.away="bukaPesan = false">
            
            <!-- Header Pop-up -->
            <div class="p-4 border-b border-blue-900/40 flex justify-between items-center bg-blue-950">
                <h2 class="text-md font-bold text-amber-400">Form Pemesanan Produk</h2>
                <button @click="bukaPesan = false" class="text-gray-400 hover:text-white text-xl font-bold p-1 focus:outline-none">&times;</button>
            </div>

            <!-- Body Form (Scrollable aman di HP) -->
            <form id="formWA" class="p-5 flex-1 overflow-y-auto space-y-4 text-sm text-gray-200">
                
                <!-- Input Nama -->
                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase mb-1">Nama Pemesan *</label>
                    <input type="text" x-model="nama" required placeholder="Masukkan nama Anda" 
                           class="w-full bg-blue-950/60 border border-blue-900/50 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-amber-500">
                </div>

                <!-- Input No HP -->
                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase mb-1">Nomor HP / WhatsApp *</label>
                    <input type="tel" x-model="hp" required placeholder="Contoh: 081234567xxx" 
                           class="w-full bg-blue-950/60 border border-blue-900/50 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-amber-500">
                </div>

                <!-- Pilihan Produk & Jumlah Multi-Select -->
                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase mb-2 text-amber-400">Pilih Produk & Jumlah *</label>
                    <div class="space-y-2 max-h-48 overflow-y-auto pr-1 border border-blue-900/30 p-2 rounded-lg bg-blue-950/30">
                        @foreach ($daftarProduk as $index => $prod)
                        <div class="flex items-center justify-between p-2 bg-blue-950/50 rounded border border-blue-900/20">
                            <!-- Checkbox Pilihan -->
                            <label class="flex items-center space-x-2 cursor-pointer flex-1">
                                <input type="checkbox" value="{{ $prod['nama'] }}" x-model="produkDipilih" 
                                       class="rounded text-amber-500 focus:ring-amber-500 bg-blue-950 border-blue-800">
                                <span class="text-xs font-medium">{{ $prod['nama'] }}</span>
                            </label>
                            
                            <!-- Input Jumlah (Hanya aktif kalau produk dicentang) -->
                            <div class="flex items-center space-x-1" x-show="produkDipilih.includes('{{ $prod['nama'] }}')">
                                <span class="text-[10px] text-gray-400">Qty:</span>
                                <input type="number" id="qty-{{ $index }}" value="1" min="1" 
                                       class="w-14 bg-blue-900 border border-blue-700 rounded px-1.5 py-0.5 text-center text-xs font-bold text-white focus:outline-none">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Tombol Submit Kirim -->
                <div class="pt-2">
                    <button type="button" @click="kirimKeWhatsApp(nama, hp, produkDipilih)"
                            class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2.5 rounded-lg transition duration-200 flex items-center justify-center gap-2 relative z-30 cursor-pointer">
                        💬 Kirim via WhatsApp
                    </button>
                </div>
            </form>
        </div>
    </div>

        @include('partials.footer')

    <!-- ======================================================= -->
    <!-- SCRIPT PROSES DATA JADI TEXT WHATSAPP -->
    <!-- ======================================================= -->
    <script>
        function kirimKeWhatsApp(nama, hp, produkDipilih) {
            
            if (!nama || !hp) {
                alert("Harap isi Nama dan Nomor HP terlebih dahulu!");
                return;
            }
            if (!produkDipilih || produkDipilih.length === 0) {
                alert("Silakan pilih minimal 1 produk yang ingin dipesan!");
                return;
            }

            // 💡 Ganti nomor di bawah ini dengan nomor WA official Rutan Purworejo
            const noTujuan = "62882006897303"; 

            let listBelanjaan = "";
            const listProdukPHP = @json($daftarProduk);
            
            produkDipilih.forEach((item) => {
                const idx = listProdukPHP.findIndex(p => p.nama === item);
                let qty = 1;
                if (idx !== -1) {
                    const inputQty = document.getElementById(`qty-${idx}`);
                    if (inputQty) qty = inputQty.value;
                }
                listBelanjaan += `• ${item} (Jumlah: ${qty})\n`;
            });

            const teksPesan = `Halo, Admin Toko Rutan Purworejo.\n\nSaya ingin memesan produk karya WBP dengan rincian:\n\n*Nama:* ${nama}\n*No HP:* ${hp}\n\n*Daftar Pesanan:*\n${listBelanjaan}\nMohon informasi selanjutnya mengenai ketersediaan produk dan total harganya. Terima kasih!`;

            const urlWA = `https://wa.me/${noTujuan}?text=${encodeURIComponent(teksPesan)}`;
            
            // Buka tab baru ke WhatsApp API
            window.open(urlWA, '_blank');
        }
    </script>
        
</body>
</html>