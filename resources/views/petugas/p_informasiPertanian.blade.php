<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pertanian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-[#CBDAA9] font-poppins min-h-screen">

    {{-- Sidebar --}}
    @include('petugas.p_components.p_sidebar')

    <main class="p-6 bg-[#CBDAA9] flex-1 space-y-6">
        {{-- Navbar --}}
        <div class="flex justify-between items-center">
        <h2 class="text-3xl font-bold">
            @if (Request::is('petugas/p_dashboard'))
                BERANDA
            @elseif (Request::is('petugas/p_datadinas'))
                DATA DINAS
            @elseif (Request::is('petugas/p_pengaduan'))
                PENGADUAN
            @elseif (Request::is('petugas/p_subsidi'))
                SUBSIDI
            @elseif (Request::is('petugas/p_update-harga'))
                UPDATE HARGA
            @elseif (Request::is('petugas/p_informasiPertanian'))
                INFORMASI PERTANIAN
            @elseif (Request::is('petugas/p_pengaturan'))
                PENGATURAN
            @else
                SIMAPAN
            @endif
        </h2>

        {{-- Pencarian --}}
        <div class="flex justify-between items-center mb-4">
            <div class="relative">
                <input type="text" placeholder="Cari artikel..." class="rounded-full px-4 py-2 w-64 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#648B36]">
                <svg class="absolute right-3 top-2.5 w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 10a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        {{-- <input type="text" placeholder="Cari disini" class="px-4 py-2 rounded-full border border-gray-300 focus:outline-none flex mx-auto" /> --}}
        <div class="flex items-center space-x-4">
            <div class="flex items-center space-x-2">
                <img src="https://i.pravatar.cc/40" alt="user" class="rounded-full w-10 h-10">
                <div>
                    <p class="text-sm font-bold">Nadya Arsa</p>
                    <p class="text-xs text-gray-600">Petugas</p>
                </div>
            </div>
        </div>
        </div>

<br>
        {{-- Tab Navigasi --}}
        <div class="border-b-8 border-[#1B3219] mb-0">
            <nav class="flex space-x-4">
                <button class="text-white bg-[#1B3219] px-4 py-2 rounded-t-lg font-semibold">Artikel</button>
                <button class="text-[#1B3219] px-4 py-2 font-semibold hover:underline">Pengumuman</button>
                <button class="text-[#1B3219] px-4 py-2 font-semibold hover:underline">Penyuluhan</button>
            </nav>
        </div>

        {{-- Kotak Artikel --}}
        <div class="bg-white border border-[#1B3219] rounded-sm p-4 space-y-3 shadow">
            @php
                $articles = [
                    ['tanggal' => '23 Maret 2025', 'judul' => 'Tren Kopi Spesialti: Meningkatnya Minat Konsumen terhadap Kopi Berkualitas Tinggi'],
                    ['tanggal' => '17 Maret 2025', 'judul' => 'Permintaan Kopi Organik Meningkat: Peluang bagi Petani untuk Beralih ke Pertanian Berkelanjutan'],
                    ['tanggal' => '16 Maret 2025', 'judul' => 'Pasar Sayuran Hidroponik: Meningkatnya Minat Konsumen terhadap Produk Sehat'],
                    ['tanggal' => '15 Maret 2025', 'judul' => 'Sosialisasi Metode Fermentasi Kopi untuk Meningkatkan Kualitas Biji Kopi Petani'],
                    ['tanggal' => '14 Maret 2025', 'judul' => 'Pasar Sayuran Hidroponik: Meningkatnya Minat Konsumen terhadap Produk Sehat'],
                    ['tanggal' => '13 Maret 2025', 'judul' => 'Permintaan Kopi Organik Meningkat: Peluang bagi Petani untuk Beralih ke Pertanian Berkelanjutan'],
                    ['tanggal' => '10 Maret 2025', 'judul' => 'Sosialisasi Metode Fermentasi Kopi untuk Meningkatkan Kualitas Biji Kopi Petani'],
                    ['tanggal' => '07 Maret 2025', 'judul' => 'Tren Kopi Spesialti: Meningkatnya Minat Konsumen terhadap Kopi Berkualitas Tinggi'],
                ];
            @endphp

            @foreach ($articles as $article)
                <div class="border-b border-gray-200 pb-2 flex justify-between items-start">
                    <div>
                        <p class="text-sm text-gray-500">{{ $article['tanggal'] }}</p>
                        <p class="font-semibold text-[#1B3219]">{{ $article['judul'] }}</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <button class="text-[#1B3219] hover:text-green-700" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a1 1 0 001 1h11a2 2 0 002-2v-5M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z" />
                            </svg>
                        </button>
                        <button class="text-red-600 hover:text-red-800" title="Hapus">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4a1 1 0 011 1v1H9V4a1 1 0 011-1z" />
                            </svg>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Tombol Tambah --}}
        <div class="flex justify-end mt-6">
            <button class="bg-[#1B3219] text-white rounded-full p-3 shadow-lg hover:bg-green-800" title="Tambah Artikel">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </button>
        </div>
    </main>
</body>
</html>
