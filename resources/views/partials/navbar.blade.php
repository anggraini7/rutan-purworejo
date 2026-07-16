<nav class="bg-instansi-dark text-white border-b border-blue-900/40 relative z-50">
    <!-- Menggunakan 'w-full' menggantikan 'max-w-7xl' dan menaikkan padding pinggirnya -->
    <div class="w-full px-6 sm:px-12 py-3 flex items-center justify-between">
        
        <!-- LOGO & TEKS (Kiri) -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-10 h-10 object-contain">
            <img src="{{ asset('img/logo2.png') }}" alt="Logo" class="w-10 h-10 object-contain">
            <div>
                <h1 class="font-bold text-xs uppercase tracking-wider leading-tight">Rutan Kelas IIB purworejo</h1>
                <p class="text-[10px] text-gray-400 leading-none">Kementerian Imigrasi dan Pemasyarakatan</p>
            </div>
        </div>

        <!-- MENU NAVBAR UNTUK LAPTOP (Otomatis Sembunyi di HP dengan 'hidden md:flex') -->
        <div class="hidden md:flex items-center space-x-6 text-sm font-medium">
            <a href="{{ url('/') }}"class="{{ request()->is('beranda*') ? 'text-amber-400 font-bold' : 'text-gray-300 hover:text-amber-400' }} transition">Beranda</a>
            <a href="{{ url('/profil') }}"class="{{ request()->is('profil*') ? 'text-amber-400 font-bold' : 'text-gray-300 hover:text-amber-400' }} transition">Profil</a>
            <a href="{{ url('/berita') }}"class="{{ request()->is('berita*') ? 'text-amber-400 font-bold' : 'text-gray-300 hover:text-amber-400' }} transition">Berita</a>
            <a href="{{ url('/informasi-wbp') }}"class="{{ request()->is('informasi-wbp') ? 'text-amber-400 font-bold' : 'text-gray-300 hover:text-amber-400' }} transition">Program Pembinaan </a>
            <a href="{{ url('/standar-pelayanan') }}"class="{{ request()->is('standar-pelayanan*') ? 'text-amber-400 font-bold' : 'text-gray-300 hover:text-amber-400' }} transition">layanan</a>
            <a href="{{ url('/publikasi') }}"class="{{ request()->is('publikasi*') ? 'text-amber-400 font-bold' : 'text-gray-300 hover:text-amber-400' }} transition">Publikasi</a>
            <a href="{{ url('/') }}"class="{{ request()->is('*') ? 'text-amber-400 font-bold' : 'text-gray-300 hover:text-amber-400' }} transition">Produk Karya WBP</a>
            <a href="{{ url('/') }}"class="{{ request()->is('*') ? 'text-amber-400 font-bold' : 'text-gray-300 hover:text-amber-400' }} transition">Inovasi</a>

            <!-- DROPDOWN LAYANAN UNTUK LAPTOP -->
            <div class="relative">
                <button id="desktop-dropdown-btn" class="{{ request()->is('kunjungan*') || request()->is('layanan-pengaduan*') ? 'text-amber-400 font-bold' : 'text-gray-300 hover:text-amber-400' }} flex items-center gap-1 transition focus:outline-none">
                    Layanan
                    <svg class="w-4 h-4 transition-transform duration-200" id="desktop-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <!-- Menu yang keluar ke bawah -->
                <div id="desktop-dropdown-menu" class="absolute right-0 mt-2 w-48 bg-[#0a1e36] border border-blue-900/40 rounded-lg shadow-xl py-2 hidden z-50">
                    <a href="{{ url('/kunjungan') }}" class="block px-4 py-2 text-xs text-gray-300 hover:bg-blue-950 hover:text-amber-400 transition {{ request()->is('kunjungan*') ? 'text-amber-400 font-bold bg-blue-950/50' : '' }}">Layanan Kunjungan</a>
                    <a href="{{ url('/layanan-pengaduan') }}" class="block px-4 py-2 text-xs text-gray-300 hover:bg-blue-950 hover:text-amber-400 transition {{ request()->is('layanan-pengaduan*') ? 'text-amber-400 font-bold bg-blue-950/50' : '' }}">Layanan Pengaduan</a>
                    <a href="{{ url('/layanan-integrasi') }}" class="block px-4 py-2 text-xs text-gray-300 hover:bg-blue-950 hover:text-amber-400 transition{{ request()->is('layanan-integrasi*') ? 'text-amber-400 font-bold bg-blue-950/50' : '' }}">Layanan Integrasi</a>
                </div>
            </div>
        </div>

        <!-- TOMBOL HAMBURGER UNTUK HP (Otomatis Sembunyi di Laptop dengan 'md:hidden') -->
        <div class="md:hidden">
            <button id="hamburger-btn" class="p-2 text-gray-400 hover:text-white focus:outline-none">
                <!-- Icon Garis Tiga -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>

<!-- ======================================================= -->
<!-- SIDEBAR MENU UNTUK HP (Otomatis Geser Keluar/Masuk) -->
<!-- ======================================================= -->
<div id="sidebar-menu" class="fixed inset-y-0 right-0 w-64 bg-[#0a1e36] text-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out md:hidden">
    <!-- Tombol Close (X) di dalam Sidebar -->
    <div class="flex justify-end p-4">
        <button id="close-btn" class="p-2 text-gray-400 hover:text-white focus:outline-none">
            <!-- Icon Silang (X) -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <!-- Menu Link di dalam Sidebar -->
    <div class="flex flex-col space-y-4 px-6 py-4 text-base font-semibold">
        <a href="{{ url('/') }}"class="{{ request()->is('beranda*') ? 'text-amber-400 font-bold' : 'text-gray-300 hover:text-amber-400' }} transition">Beranda</a>
        <a href="{{ url('/profil') }}"class="{{ request()->is('profil*') ? 'text-amber-400 font-bold' : 'text-gray-300 hover:text-amber-400' }} transition">Profil</a>
        <a href="{{ url('/berita') }}"class="{{ request()->is('berita*') ? 'text-amber-400 font-bold' : 'text-gray-300 hover:text-amber-400' }} transition">Berita</a>
        <a href="{{ url('/informasi-wbp') }}"class="{{ request()->is('informasi-wbp') ? 'text-amber-400 font-bold' : 'text-gray-300 hover:text-amber-400' }} transition">Program Pembinaan</a>
        <a href="{{ url('/standar-pelayanan') }}"class="{{ request()->is('standar-pelayanan*') ? 'text-amber-400 font-bold' : 'text-gray-300 hover:text-amber-400' }} transition">Standar Pelayanan</a>
        
        <!-- DROPDOWN LAYANAN UNTUK HP -->
        <div class="w-full">
            <button id="mobile-dropdown-btn" class="w-full text-left {{ request()->is('kunjungan*') || request()->is('layanan-pengaduan*') ? 'text-amber-400 font-bold' : 'text-gray-300 hover:text-amber-400' }} flex items-center justify-between transition focus:outline-none">
                Layanan
                <svg class="w-5 h-5 transition-transform duration-200" id="mobile-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="mobile-dropdown-menu" class="mt-2 pl-4 flex flex-col space-y-3 border-l border-gray-700 hidden">
                <a href="{{ url('/kunjungan') }}" class="text-sm text-gray-400 hover:text-amber-400 transition {{ request()->is('kunjungan*') ? 'text-amber-400 font-bold' : '' }}">Layanan Kunjungan</a>
                <a href="{{ url('/layanan-pengaduan') }}" class="text-sm text-gray-400 hover:text-amber-400 transition {{ request()->is('layanan-pengaduan*') ? 'text-amber-400 font-bold' : '' }}">Layanan Pengaduan</a>
            </div>
        </div>
    </div>
</div>

<!-- Lapisan Background Hitam Transparan saat Sidebar Kebuka (Overlay) -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden"></div>

<!-- ======================================================= -->
<!-- JAVASCRIPT UNTUK AKSI BUKA/TUTUP -->
<!-- ======================================================= -->
<script>
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const closeBtn = document.getElementById('close-btn');
    const sidebarMenu = document.getElementById('sidebar-menu');
    const sidebarOverlay = document.getElementById('sidebar-overlay');

    // Fungsi Buka Sidebar
    hamburgerBtn.addEventListener('click', () => {
        sidebarMenu.classList.remove('translate-x-full');
        sidebarOverlay.classList.remove('hidden');
    });

    // Fungsi Tutup Sidebar
    function closeSidebar() {
        sidebarMenu.classList.add('translate-x-full');
        sidebarOverlay.classList.add('hidden');
    }

    closeBtn.addEventListener('click', closeSidebar);
    sidebarOverlay.addEventListener('click', closeSidebar);

    // =======================================================
    // LOGIKA DROPDOWN LAYANAN (LAPTOP & HP)
    // =======================================================
    const desktopDropdownBtn = document.getElementById('desktop-dropdown-btn');
    const desktopDropdownMenu = document.getElementById('desktop-dropdown-menu');
    const desktopArrow = document.getElementById('desktop-arrow');

    const mobileDropdownBtn = document.getElementById('mobile-dropdown-btn');
    const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
    const mobileArrow = document.getElementById('mobile-arrow');

    // Toggle Dropdown Laptop
    desktopDropdownBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        desktopDropdownMenu.classList.toggle('hidden');
        desktopArrow.classList.toggle('rotate-180');
    });

    // Toggle Dropdown HP
    mobileDropdownBtn.addEventListener('click', () => {
        mobileDropdownMenu.classList.toggle('hidden');
        mobileArrow.classList.toggle('rotate-180');
    });

    // Tutup dropdown laptop otomatis kalau klik di luar menu
    document.addEventListener('click', () => {
        if (!desktopDropdownMenu.classList.contains('hidden')) {
            desktopDropdownMenu.classList.add('hidden');
            desktopArrow.classList.remove('rotate-180');
        }
    });
</script>