<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil - Rutan Purworejo</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-bg text-gray-100 font-sans min-h-screen flex flex-col">

        @include('partials.navbar')


    <main class="max-w-5xl mx-auto px-4 py-12 flex-1 w-full space-y-12">
        <div>
            <h1 class="text-3xl font-bold text-font-biru">Profil Instansi</h1>
            <p class="text-sm text-font-abu mt-1">Sejarah, visi, misi, dan struktur organisasi Rutan Kelas IIB Purworejo.</p>
            <div class="w-12 h-1 bg-amber-500 mt-3 rounded"></div>
        </div>

        <div class="bg-[#0f294a] rounded-xl p-6 sm:p-8 border border-blue-900/40 shadow-sm space-y-6">
            <div>
                <h3 class="text-lg font-bold text-amber-400 mb-2">Sejarah Singkat</h3>
                <p class="text-sm text-gray-300 leading-relaxed">Rumah Tahanan Negara Kelas IIB Purworejo merupakan Unit Pelaksana Teknis di bawah Direktorat Jenderal Pemasyarakatan, Kementerian Imigrasi dan Pemasyarakatan Republik Indonesia. Bangunan ini merupakan peninggalan masa Kolonial Belanda dengan luas tanah 3.418 m² dan luas bangunan 1.732 m². Sejak lahirnya Sistem Pemasyarakatan pada tahun 1964, fasilitas ini bertransformasi menjadi Lembaga Pemasyarakatan Purworejo, kemudian berdasarkan perubahan kebijakan kelembagaan pada tahun 1985 resmi berubah status menjadi Rumah Tahanan Negara Kelas IIB Purworejo dan tetap berlaku hingga saat ini.Dari aspek sarana dan prasarana, Rutan Kelas IIB Purworejo memiliki 4 (empat) blok hunian, yaitu Blok A, B, C, dan D, dengan total 26 (dua puluh enam) kamar hunian berkapasitas 122 orang. Seiring dengan berkembangnya pelaksanaan tugas dan fungsi pemasyarakatan, kondisi hunian saat ini telah mengalami overkapasitas.Lahirnya Undang-Undang Nomor 22 Tahun 2022 tentang Pemasyarakatan membawa transformasi fundamental bagi Rutan Kelas IIB Purworejo dalam menjalankan tanggung jawab strategisnya. Berdasarkan Pasal 4 Undang-Undang tersebut, Rutan tidak lagi hanya menjalankan fungsi pelayanan tahanan selama proses peradilan, tetapi juga menyelenggarakan fungsi pemasyarakatan secara utuh dan terpadu yang meliputi pelayanan, pembinaan, pembimbingan kemasyarakatan, perawatan, pengamanan, dan pengamatan sebagai upaya mewujudkan reintegrasi sosial bagi warga binaan. Perluasan fungsi tersebut turut menjadi salah satu faktor yang menyebabkan kondisi hunian Rutan Kelas IIB Purworejo mengalami overkapasitas.
                </p>
            </div>

            <div class="border-t border-blue-900/50 pt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-bold text-amber-400 mb-2">Visi</h3>
                    <p class="text-sm text-gray-300 leading-relaxed">
                        “Mewujudkan Rutan yang mengedepankan pelayanan prima serta memberikan pembinaan dan perlindungan bagi Warga Binaan Rumah Tahanan Negara Kelas IIB Purworejo.”
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-amber-400 mb-2">Misi</h3>
                    <ul class="list-disc list-inside text-sm text-gray-300 space-y-1">
                        <li>Memberikan Pelayanan terbaik bagi Warga Binaan Pemasyarakatan Rumah Tahanan Negara Kelas IIB Purworejo secara bersih tanpa adanya korupsi kolusi nepotisme atau pungutan liar serta menjunjung tinggi keadilan dan HAM.</li>
                        <li>Melakukan Pembinaan terhadap Warga Binaan Pemasyarakatan Rumah Tahanan Negara Kelas IIB Purworejo dengan cara mengembangkan keahlian dasar yang dimiliki dan Berlandaskan keimanan kepada Tuhan YME.</li>
                        <li>Memberikan perlindungan dan mengayomi Warga Binaan Pemasyarakatan Rumah Tahanan Negara Kelas IIB Purworejo agar mereka merasa aman dan nyaman dalam melaksanakan pembinaan.</li>
                        <li>Memenuhi Hak-Hak Warga Binaan Pemasyarakatan Rumah Tahanan Negara Kelas IIB Purworejo.</li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="space-y-8 pt-4">
            <div class="text-center">
                <h2 class="text-2xl font-bold text-font-biru">Profil Penjabat</h2>
                <p class="text-xs text-font-abu mt-1">Susunan pejabat struktural di lingkungan Rutan Kelas IIB Purworejo</p>
                <div class="w-10 h-0.5 bg-amber-500 mx-auto mt-2 rounded"></div>
            </div>

            <div class="flex justify-center">
                <div class="bg-[#0f294a] rounded-xl p-6 border-2 border-amber-500/40 shadow-xl text-center w-72 space-y-4 transform hover:scale-105 transition duration-200">
                    <div class="w-28 h-28 bg-blue-950 rounded-full mx-auto border-2 border-amber-400 flex items-center justify-center overflow-hidden shadow-inner">
                        <img src="{{ asset('img/kepala.jpeg') }}" alt="Foto Kepala Rutan" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-bold text-sm text-white tracking-wide">David Saptoaji Putra, A.Md.IP., S.H., M.H.</h4>
                        <p class="text-[11px] font-semibold text-amber-400 uppercase tracking-wider mt-0.5">KEPALA RUTAN KELAS IIB PURWOREJO</p>
                        <p class="text-[10px] text-gray-400 mt-1">NIP. 198705072006041001</p>
                    </div>
                </div>
            </div>

            <div class="hidden md:block w-0.5 h-6 bg-blue-900/60 mx-auto"></div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto">
                
                <div class="bg-[#0f294a] rounded-xl p-6 border-2 border-amber-500/40 shadow-xl text-center w-72 space-y-4 transform hover:scale-105 transition duration-200">
                    <div class="w-28 h-28 bg-blue-950 rounded-full mx-auto border-2 border-amber-400 flex items-center justify-center overflow-hidden shadow-inner">
                        <img src="{{ asset('img/dwi.jpeg') }}" alt="Foto Kepala Rutan" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-bold text-xs text-white">Dwi Prastyo Utomo, S.H., M.M.</h4>
                        <p class="text-[10px] font-medium text-amber-400 uppercase tracking-wider mt-0.5">KEPALA SUBSEKSI PENGELOLAAN RUTAN</p>
                        <p class="text-[9px] text-gray-400 mt-0.5">NIP. 199107082009121002</p>
                    </div>
                </div>

                <div class="bg-[#0f294a] rounded-xl p-6 border-2 border-amber-500/40 shadow-xl text-center w-72 space-y-4 transform hover:scale-105 transition duration-200">
                    <div class="w-28 h-28 bg-blue-950 rounded-full mx-auto border-2 border-amber-400 flex items-center justify-center overflow-hidden shadow-inner">
                        <img src="{{ asset('img/awkila.jpeg') }}" alt="Foto Kepala Rutan" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-bold text-xs text-white">Akwila Amadea Pitaka, S.Tr.Pas., M.M.</h4>
                        <p class="text-[10px] font-medium text-amber-400 uppercase tracking-wider mt-0.5">KEPALA SUBSEKSI PELAYANAN TAHANAN RUTAN</p>
                        <p class="text-[9px] text-gray-400 mt-0.5">NIP. 199307292018081001</p>
                    </div>
                </div>

                <div class="bg-[#0f294a] rounded-xl p-6 border-2 border-amber-500/40 shadow-xl text-center w-72 space-y-4 transform hover:scale-105 transition duration-200">
                    <div class="w-28 h-28 bg-blue-950 rounded-full mx-auto border-2 border-amber-400 flex items-center justify-center overflow-hidden shadow-inner">
                        <img src="{{ asset('img/nanda.jpeg') }}" alt="Foto Kepala Rutan" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-bold text-xs text-white">Nanda Aditya Sudarmono, S.H.</h4>
                        <p class="text-[10px] font-medium text-amber-400 uppercase tracking-wider mt-0.5">KEPALA KESATUAN PENGAMANAN RUTAN</p>
                        <p class="text-[9px] text-gray-400 mt-0.5">NIP. 199005082009121003</p>
                    </div>
    
                </div>

            </div>
        </section>
    </main>

    <footer class="bg-footer text-gray-500 text-xs py-6 text-center border-t border-blue-900/40">&copy; {{ date('Y') }} Rutan Kelas IIB Purworejo.</footer>
</body>
</html>