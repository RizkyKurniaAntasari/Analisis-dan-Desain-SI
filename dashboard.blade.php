<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SIMAPAN - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-green-100 font-sans">
    <!-- Header Atas -->
    <header class="bg-[#D6E6C5] px-6 py-3 flex items-center justify-between">
        <!-- Kiri: Logo + Nama -->
        <div class="flex items-center space-x-4">
            <!-- Logo (bisa diganti gambar) -->
            <img src="\img\logo-simapan.png" class="w-36 object-contain" />
            <div class="text-base font-bold border-l-2 border-[#143D1E] text-gray-700">
                <p class="pl-4">Sistem Informasi Manajemen Pertanian<br />Kabupaten Lampung Barat</p>
            </div>
        </div>

        <!-- Kanan: Sosmed + Search + Button -->
        <div class="flex items-center space-x-4">
            <!-- Ikon sosmed -->
            <div class="flex space-x-2 text-[#143D1E] text-xl">
                <a href="https://instagram.com"><img src="\img\ig-rev.png" class="w-10 pt-1"></a>
                <a href="https://x.com"><img src="\img\x-rev.png" class="w-10"></a>

            </div>
            <!-- Search -->
            <div class="relative">
                <input type="text" placeholder="⌕ Cari disini"
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
    <nav class="bg-[#143D1E] text-white px-6 py-2">
        <ul class="flex space-x-6 text-sm font-medium justify-center">
            <li><a href="#" class="text-yellow-400">BERANDA</a></li>
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

        <!-- Hero Section -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-4 p-6 bg-white">
        <!-- Gambar kiri -->
        <div class="md:col-span-1">
            <img src="\img\left.jpg" alt="Tanaman" class="rounded-md w-full h-full object-cover">
        </div>

        <!-- Tengah -->
        <div class="md:col-span-1 relative">
            <img src="\img\tengah.jpg" alt="" class="rounded-md w-full h-64 object-cover">
            <div class="absolute bottom-0 bg-black bg-opacity-60 text-white p-4 w-full">
                <h2 class="text-lg font-semibold">Tren Kopi Spesialti: Meningkatnya Minat Konsumen terhadap Kopi
                    Berkualitas Tinggi</h2>
                <p class="text-sm mt-1">23 Maret 2025</p>
            </div>
        </div>

        <!-- Gambar kanan -->
        <div class="md:col-span-1">
            <img src="\img\cabai.jpeg" alt="cabai.jpeg" class="rounded-md w-full h-full object-cover">
        </div>
    </section>

        <!-- Artikel + Statistik -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-6 px-6 py-6 bg-green-200">
        <!-- Artikel -->
        <div class="bg-green-800 text-white p-6 rounded-md">
            <h3 class="font-bold text-lg mb-2">PERAN ARTIFICIAL INTELLIGENCE (AI)</h3>
            <p class="text-sm">DALAM MEMPREDIKSI HAMA DAN PENYAKIT PADA TANAMAN SAYURAN</p>
            <p class="mt-4 text-xs">23 Maret 2025</p>
        </div>

        <!-- Statistik -->
        <div class="bg-white rounded-md p-6">
            <h3 class="text-green-800 font-bold mb-2">Statistik Harga Kopi Lampung</h3>
            <p class="text-xs text-gray-500 mb-4">Last Update: 30-03-2025</p>
            <div class="w-full h-32 bg-green-100 rounded-md flex items-center justify-center">
                <!-- Chart bisa disisipkan nanti pakai JS -->
                <span class="text-green-700 text-2xl font-bold">64K</span>
            </div>
        </div>
    </section>
    
</body>
</html>
