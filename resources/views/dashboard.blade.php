{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 11 Custom Dashboard - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  </head>
<body>
    
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
        <div class="row">
            <div class="col-md-11">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="https://www.itsolutionstuff.com/assets/images/logo-it-2.png" alt="BootstrapBrain Logo" width="300">
                </a>          
            </div>
            <div class="col-md-1">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
      
    </header>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">

        @session('success')
            <div class="alert alert-success" role="alert"> 
              {{ $value }}
            </div>
        @endsession

        <h1 class="display-5 fw-bold">Hi, {{ auth()->user()->name }}</h1>
        <p class="col-md-8 fs-4">Welcome to dashboard.<br/>Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Dashboard</button>
      </div>
    </div>

  </div>
</main>

</body>
</html> --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>SIMAPAN - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"></head>
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>

<body class="bg-green-100 font-poppins">

    <x-navbar />

    <!-- Hero Section -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-4 p-6 bg-[#DBE7C9]">
        <!-- Gambar kiri -->
        <div class="md:col-span-1 overflow-hidden transition-transform hover:scale-105 ease-in-out duration-300">
            <img src="\img\left.jpg" alt="Tanaman" class="rounded-md w-full h-full object-cover">
        </div>

        <!-- Tengah -->
        <div
            class="md:col-span-1 overflow-hidden relative transition-transform hover:scale-105 ease-in-out duration-300">
            <img src="\img\tengah.jpg" alt="" class="rounded-md w-full h-64 object-cover">
            <div class="absolute bottom-0 bg-black bg-opacity-60 text-white p-4 w-full">
                <h2 class="text-lg font-semibold">Tren Kopi Spesialti: Meningkatnya Minat Konsumen terhadap Kopi
                    Berkualitas Tinggi</h2>
                <p class="text-sm mt-1">23 Maret 2025</p>
            </div>
        </div>

        <!-- Gambar kanan -->
        <div class="md:col-span-1 overflow-hidden transition-transform hover:scale-105 ease-in-out duration-300">
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

    <section class="bg-[#F3FBEF] px-6 py-8">
        <!-- Tabs -->
        <div class="flex space-x-4 mb-6 text-sm font-semibold">
            <button class="bg-[#143D1E] text-white px-4 py-2 rounded-full">Artikel</button>
            <button class="text-[#143D1E] px-4 py-2">Pengumuman</button>
            <button class="text-[#143D1E] px-4 py-2">Penyuluhan</button>
        </div>

        <!-- Content Grid -->
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Kolom Kiri -->
            <div class="space-y-4">
                <div>
                    <p class="text-xs text-[#A3A3A3] mb-1">23 Maret 2025</p>
                    <p class="text-[#143D1E] font-semibold border-b border-[#CFCFCF] pb-2">
                        Tren Kopi Spesialti: Meningkatnya Minat Konsumen terhadap Kopi Berkualitas Tinggi
                    </p>
                </div>
                <div>
                    <p class="text-xs text-[#A3A3A3] mb-1">20 Maret 2025</p>
                    <p class="text-[#143D1E] font-semibold border-b border-[#CFCFCF] pb-2">
                        Peran Artificial Intelligence (AI) dalam Memprediksi Hama dan Penyakit pada Tanaman Sayuran
                    </p>
                </div>
                <div>
                    <p class="text-xs text-[#A3A3A3] mb-1">19 Maret 2025</p>
                    <p class="text-[#143D1E] font-semibold border-b border-[#CFCFCF] pb-2">
                        Penerapan Teknologi Drone dalam Pertanian Padi: Solusi untuk Efisiensi dan Produktivitas
                    </p>
                </div>
                <div>
                    <p class="text-xs text-[#A3A3A3] mb-1">17 Maret 2025</p>
                    <p class="text-[#143D1E] font-semibold border-b border-[#CFCFCF] pb-2">
                        Permintaan Kopi Organik Meningkat: Peluang bagi Petani untuk Beralih ke Pertanian Berkelanjutan
                    </p>
                </div>
                <div>
                    <p class="text-xs text-[#A3A3A3] mb-1">17 Maret 2025</p>
                    <p class="text-[#143D1E] font-semibold border-b border-[#CFCFCF] pb-2">
                        Sistem Intensifikasi Padi (SRI): Solusi Hemat Air untuk Produksi Maksimal
                    </p>
                </div>
                <div>
                    <p class="text-xs text-[#A3A3A3] mb-1">17 Maret 2025</p>
                    <p class="text-[#143D1E] font-semibold border-b border-[#CFCFCF] pb-2">
                        Pasar Sayuran Hidroponik: Meningkatnya Minat Konsumen terhadap Produk Sehat
                    </p>
                </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="space-y-4">
                <div>
                    <p class="text-xs text-[#A3A3A3] mb-1">17 Maret 2025</p>
                    <p class="text-[#143D1E] font-semibold border-b border-[#CFCFCF] pb-2">
                        Pupuk Organik dari Limbah Dapur: Cara Sederhana Mendukung Pertanian Berkelanjutan
                    </p>
                </div>
                <div>
                    <p class="text-xs text-[#A3A3A3] mb-1">17 Maret 2025</p>
                    <p class="text-[#143D1E] font-semibold border-b border-[#CFCFCF] pb-2">
                        Pelatihan Teknik Budidaya Kopi Organik bagi Petani di Kecamatan Sumber Jaya
                    </p>
                </div>
                <div>
                    <p class="text-xs text-[#A3A3A3] mb-1">17 Maret 2025</p>
                    <p class="text-[#143D1E] font-semibold border-b border-[#CFCFCF] pb-2">
                        Sosialisasi Metode Fermentasi Kopi untuk Meningkatkan Kualitas Biji Kopi Petani
                    </p>
                </div>
                <div>
                    <p class="text-xs text-[#A3A3A3] mb-1">17 Maret 2025</p>
                    <p class="text-[#143D1E] font-semibold border-b border-[#CFCFCF] pb-2">
                        Permintaan Kopi Organik Meningkat: Peluang bagi Petani untuk Beralih ke Pertanian Berkelanjutan
                    </p>
                </div>
                <div>
                    <p class="text-xs text-[#A3A3A3] mb-1">17 Maret 2025</p>
                    <p class="text-[#143D1E] font-semibold border-b border-[#CFCFCF] pb-2">
                        Sistem Intensifikasi Padi (SRI): Solusi Hemat Air untuk Produksi Maksimal
                    </p>
                </div>
                <div>
                    <p class="text-xs text-[#A3A3A3] mb-1">17 Maret 2025</p>
                    <p class="text-[#143D1E] font-semibold border-b border-[#CFCFCF] pb-2">
                        Pasar Sayuran Hidroponik: Meningkatnya Minat Konsumen terhadap Produk Sehat
                    </p>
                </div>
            </div>
        </div>

        <!-- Tombol Lihat Semua -->
        <div class="mt-8 flex justify-center">
            <button
                class="bg-[#1D592D] text-white px-6 py-3 rounded-full text-sm font-semibold hover:bg-[#14491F] transition">
                Lihat semua artikel
            </button>
        </div>
    </section>

   <x-footer/>
</body>
</html>