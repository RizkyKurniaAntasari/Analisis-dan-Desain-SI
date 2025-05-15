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

    <main class="p-6 bg-[#CBDAA9] flex-1">
        {{-- Navbar --}}
        <div class="flex justify-between items-center mb-6">
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

            <div class="flex items-center space-x-6">
                {{-- Pencarian --}}
                <div class="relative">
                    <input type="text" placeholder="Cari artikel..." class="rounded-full px-4 py-2 w-64 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#648B36]">
                    <svg class="absolute right-3 top-2.5 w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 10a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

                {{-- Profil --}}
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
        <div class="border-b-8 border-[#1B3219] my-0">
            <nav class="flex space-x-4">
                <button onclick="switchTab('artikel')" class="text-white bg-[#1B3219] px-4 py-2 rounded-t-lg font-bold" id="tab-artikel">Artikel</button>
                <button onclick="switchTab('pengumuman')" class="text-[#1B3219] px-4 py-2 font-bold rounded-t-lg hover:underline" id="tab-pengumuman">Pengumuman</button>
                <button onclick="switchTab('penyuluhan')" class="text-[#1B3219] px-4 py-2 font-bold rounded-t-lg hover:underline" id="tab-penyuluhan">Penyuluhan</button>
            </nav>
        </div>

        {{-- Konten Artikel --}}
        <div id="content-artikel" class="bg-white border border-[#1B3219] rounded-sm p-4 space-y-3 shadow px-10">
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
                        <button title="Edit">
                            <img src="{{ asset('icon/edit.png') }}" alt="Edit" class="w-5 h-5">
                        </button>
                        <button title="Hapus">
                            <img src="{{ asset('icon/hapus.png') }}" alt="Hapus" class="w-5 h-5">
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Konten Pengumuman --}}
        <div id="content-pengumuman" class="bg-white border border-[#1B3219] rounded-sm p-4 space-y-3 shadow px-10 hidden">
            @php
                $pengumuman = [
                    ['tanggal' => '23 Maret 2025', 'judul' => 'Pengumuman: Hasil Seleksi Berkas Pengajuan Subsidi Bantuan Pertanian'],
                    ['tanggal' => '20 Maret 2025', 'judul' => 'Pengumuman: Pemeliharaan Sistem Simapan untuk Peningkatan Layanan dan Keamanan Data'],
                    ['tanggal' => '19 Maret 2025', 'judul' => 'Pengumuman: Update Data Harga Komoditas Kopi, Padi, dan Sayuran'],
                    ['tanggal' => '17 Maret 2025', 'judul' => 'Pengumuman: Peringatan Hujan Lebat dan Risiko Banjir'],
                    ['tanggal' => '17 Maret 2025', 'judul' => 'Pengumuman: Pendaftaran Workshop “Pembuatan Pupuk Organik Mandiri” Telah Dibuka!'],
                    ['tanggal' => '17 Maret 2025', 'judul' => 'Pengumuman: Pendaftaran Pelatihan “Teknologi Smart Farming” Telah Dibuka!'],
                    ['tanggal' => '16 Maret 2025', 'judul' => 'Pengumuman: Pemeliharaan Sistem Simapan untuk Peningkatan Layanan dan Keamanan Data'],
                    ['tanggal' => '14 Maret 2025', 'judul' => 'Pengumuman: Update Data Harga Komoditas Kopi, Padi, dan Sayuran'],
                ];
            @endphp


            @foreach ($pengumuman as $item)
                <div class="border-b border-gray-200 pb-2 flex justify-between items-start">
                    <div>
                        <p class="text-sm text-gray-500">{{ $item['tanggal'] }}</p>
                        <p class="font-semibold text-[#1B3219]">{{ $item['judul'] }}</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <button title="Edit">
                            <img src="{{ asset('icon/edit.png') }}" alt="Edit" class="w-5 h-5">
                        </button>
                        <button title="Hapus">
                            <img src="{{ asset('icon/hapus.png') }}" alt="Hapus" class="w-5 h-5">
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Konten Penyuluhan --}}
        <div id="content-penyuluhan" class="bg-white border border-[#1B3219] rounded-sm p-4 space-y-3 shadow px-10 hidden">
            @php
                $penyuluhan = [
                    ['tanggal' => '23 Maret 2025', 'judul' => 'Cara Mengatasi Serangan Tungau pada Tanaman Tomat dan Paprika'],
                    ['tanggal' => '20 Maret 2025', 'judul' => 'Strategi Pencegahan Penyakit Layu Bakteri pada Tanaman Cabai'],
                    ['tanggal' => '19 Maret 2025', 'judul' => 'Deteksi Dini Serangan Hama pada Tanaman Padi dan Solusinya'],
                    ['tanggal' => '17 Maret 2025', 'judul' => 'Strategi Meningkatkan Hasil Panen Sayuran dengan Teknik Organik'],
                    ['tanggal' => '17 Maret 2025', 'judul' => 'Optimasi Pola Tanam untuk Meningkatkan Produktivitas Padi'],
                    ['tanggal' => '17 Maret 2025', 'judul' => 'Manajemen Penyakit Tanaman Kopi: Dari Pencegahan hingga Penanganan'],
                    ['tanggal' => '11 Maret 2025', 'judul' => 'Deteksi Dini Serangan Hama pada Tanaman Padi dan Solusinya'],
                    ['tanggal' => '09 Maret 2025', 'judul' => 'Strategi Meningkatkan Hasil Panen Sayuran dengan Teknik Organik'],
                ];
            @endphp


            @foreach ($penyuluhan as $item)
                <div class="border-b border-gray-200 pb-2 flex justify-between items-start">
                    <div>
                        <p class="text-sm text-gray-500">{{ $item['tanggal'] }}</p>
                        <p class="font-semibold text-[#1B3219]">{{ $item['judul'] }}</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <button title="Edit">
                            <img src="{{ asset('icon/edit.png') }}" alt="Edit" class="w-5 h-5">
                        </button>
                        <button title="Hapus">
                            <img src="{{ asset('icon/hapus.png') }}" alt="Hapus" class="w-5 h-5">
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

    <script>
        // Set default tab when page loads
        document.addEventListener('DOMContentLoaded', function() {
            switchTab('artikel');
        });

        function switchTab(tabName) {
            // Hide all content
            document.getElementById('content-artikel').classList.add('hidden');
            document.getElementById('content-pengumuman').classList.add('hidden');
            document.getElementById('content-penyuluhan').classList.add('hidden');

            // Reset all tab styles
            document.getElementById('tab-artikel').classList.remove('text-white', 'bg-[#1B3219]');
            document.getElementById('tab-pengumuman').classList.remove('text-white', 'bg-[#1B3219]');
            document.getElementById('tab-penyuluhan').classList.remove('text-white', 'bg-[#1B3219]');

            // Add default text color to all tabs
            document.getElementById('tab-artikel').classList.add('text-[#1B3219]');
            document.getElementById('tab-pengumuman').classList.add('text-[#1B3219]');
            document.getElementById('tab-penyuluhan').classList.add('text-[#1B3219]');

            // Show selected content
            document.getElementById('content-' + tabName).classList.remove('hidden');

            // Style selected tab
            document.getElementById('tab-' + tabName).classList.remove('text-[#1B3219]');
            document.getElementById('tab-' + tabName).classList.add('text-white', 'bg-[#1B3219]');
        }
    </script>
</body>
</html>
