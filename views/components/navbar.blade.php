<!-- Header Atas -->
<header class="bg-[#D6E6C5] px-6 py-3 flex items-center justify-between">
    <!-- Kiri: Logo + Nama -->
    <div class="flex items-center space-x-4">
        <!-- Logo (bisa diganti gambar) -->
        <img src="icon/logo_simapan_lengkap.png" class="w-36 object-contain" />
<!--         <div class="text-base font-bold border-l-2 border-[#143D1E] text-gray-700">
            <p class="pl-4">Sistem Informasi Manajemen Pertanian<br />Kabupaten Lampung Barat</p>
        </div> -->
    </div>

    <!-- Kanan: Sosmed + Search + Button -->
    <div class="flex items-center space-x-4">
        <!-- Ikon sosmed -->
        <div class="flex space-x-2 text-[#143D1E] text-xl">
            <a href="https://instagram.com"><img src="icon/instagram.png" class="w-10 pt-1"></a>
            <a href="https://x.com"><img src="icon/x.png" class="w-10"></a>

        </div>

<!--         <!-- Search -->
        <div class="relative">
            <input type="text" placeholder="⌕ Cari disini"
                class="pl-8 pr-3 py-1.5 border rounded-full text-sm outline-none focus:ring-2 focus:ring-green-700" />
            <span class="absolute left-2 top-1.5 text-gray-400">
                <i class="fas fa-search"></i>
            </span>
        </div> -->

        <!-- Sign In -->
        <button class="bg-[#143D1E] text-white px-4 py-1.5 rounded-full text-sm hover:bg-green-900">
            <a href="{{ route('login') }}">Sign in</a>
        </button>
    </div>
</header>

<!-- Navbar Menu -->
<nav class="bg-[#143D1E] text-white px-6 py-2">
    <ul class="flex space-x-6 text-sm font-medium justify-center">
        <li><a href="dashboard" class="hover:text-yellow-400">BERANDA</a></li>
        <li><a href="{{ route('profile') }}" class="hover:text-yellow-400">PROFIL</a></li>
        <li><a href="#" class="hover:text-yellow-400">STATISTIK</a></li>
        <li><a href="#" class="hover:text-yellow-400">ARTIKEL</a></li>
        <li><a href="#" class="hover:text-yellow-400">PENGUMUMAN</a></li>
        <li><a href="#" class="hover:text-yellow-400">PENYULUHAN</a></li>
        <li><a href="#" class="hover:text-yellow-400">PENGADUAN</a></li>
        <li><a href="#" class="hover:text-yellow-400">SUBSIDI</a></li>
        <li><a href="#" class="hover:text-yellow-400">KOMUNITAS</a></li>
    </ul>
</nav>
