<!-- Header Atas -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<header class="bg-[#D6E6C5] px-6 py-3 flex items-center justify-between font-poppins">
    <!-- Kiri: Logo + Nama -->
    <div class="flex items-center space-x-4">
        <!-- Logo (bisa diganti gambar) -->
        <img src="/img/logo-simapan.png" class="w-36 object-contain" />
        <div class="text-base font-bold border-l-2 border-[#143D1E] text-gray-700">
            <p class="pl-4">Sistem Informasi Manajemen Pertanian<br />Kabupaten Lampung Barat</p>
        </div>
    </div>

    <!-- Kanan: Sosmed + Search + Button -->
    <div class="flex items-center space-x-4">
        <!-- Ikon sosmed -->
        <div class="flex space-x-4 text-[#143D1E] text-xl">
            {{-- <a href="https://instagram.com"><img src="\img\ig-rev.png" class="w-10 pt-1"></a>
            <a href="https://x.com"><img src="\img\x-rev.png" class="w-10"></a> --}}
            <img src="{{ asset('icon/instagram.png') }}" class="w-6">
            <img src="{{ asset('icon/facebook.png') }}" class="w-6">
            <img src="{{ asset('icon/youtube.png') }}" class="w-8">
            <img src="{{ asset('icon/x.png') }}" class="w-6">
            <img src="{{ asset('icon/tiktok.png') }}" class="w-6">
            
        </div>

        <!-- Search -->
        <div class="relative">
            <input type="text" placeholder="Cari disini"
                class="pl-8 pr-3 py-1.5 border rounded-full text-sm outline-none focus:ring-2 focus:ring-green-700" />
            <span class="absolute left-2 top-1.5 text-gray-400">
                <i class="fas fa-search"></i>
            </span>
        </div>

        <!-- Sign In -->
        <button class="bg-[#143D1E] text-white px-4 py-1.5 rounded-full text-sm hover:bg-green-900">
            <a href="{{ route('login') }}">Sign in</a>
        </button>
    </div>
</header>

<!-- Navbar Menu -->
<nav class="bg-[#143D1E] text-white px-6 py-4 font-poppins">
    <ul class="flex space-x-6 text-sm font-medium justify-center">
        <li><a href="dashboard" class="hover:text-yellow-400 m-5">BERANDA</a></li>
        <li><a href="{{ route('profile') }}" class=" m-5 hover:text-yellow-400">PROFIL</a></li>
        <li><a href="statistik" class="  m-5 hover:text-yellow-400">STATISTIK</a></li>
        <li><a href="#" class="  m-5 hover:text-yellow-400">ARTIKEL</a></li>
        <li><a href="pengumuman" class="hover:text-yellow-400">PENGUMUMAN</a></li>
        <li><a href="#" class="  m-5 hover:text-yellow-400">PENYULUHAN</a></li>
        <li><a href="pengaduan" class=" m-5 hover:text-yellow-400">PENGADUAN</a></li>
        <li><a href="pengajuan_subsidi" class=" m-5 hover:text-yellow-400">SUBSIDI</a></li>
        {{-- <li><a href="#" class="hover:text-yellow-400">KOMUNITAS</a></li> --}}
    </ul>
</nav>
