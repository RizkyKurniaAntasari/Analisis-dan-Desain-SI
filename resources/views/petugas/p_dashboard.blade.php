<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIMAPAN Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#CBDAA9] font-poppins">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    @include('petugas.p_components.p_sidebar')

    {{-- <aside class="w-52 bg-gradient-to-b from-[#294B29] to-[#39731B] text-white py-6 rounded-r-3xl">
        <div class="flex items-center justify-center mb-8">
          <img src="..\img\logo-simapan.png" class="h-10" alt="Logo">
        </div>
        <nav class="space-y-2">
      
          <!-- Menu Aktif -->
          <a href="#" class="flex  items-center font-bold text-black bg-[#CBDAA9] px-4 py-3 rounded-l-full ml-3">
            <span class="mr-3">🏠</span>
            <span>BERANDA</span>
          </a>
      
          <!-- Menu Lain -->
          <a href="#" class="flex items-center px-4 py-3 hover:bg-[#417B3B] rounded-l-full ml-3">
            <span class="mr-3">📝</span>
            <span>PENGADUAN</span>
          </a>
          <a href="#" class="flex items-center px-4 py-3 hover:bg-[#417B3B] rounded-l-full ml-3">
            <span class="mr-3">💰</span>
            <span>SUBSIDI</span>
          </a>
          <a href="p_datadinas" class="flex items-center px-4 py-3 hover:bg-[#417B3B] rounded-l-full ml-3">
            <span class="mr-3">📊</span>
            <span>DATA DINAS</span>
          </a>
          <a href="#" class="flex items-center px-4 py-3 hover:bg-[#417B3B] rounded-l-full ml-3">
            <span class="mr-3">🔄</span>
            <span>UPDATE HARGA</span>
          </a>
          <a href="#" class="flex items-center px-4 py-3 hover:bg-[#417B3B] rounded-l-full ml-3">
            <span class="mr-3">📚</span>
            <span>INFORMASI 
                <br>PERTANIAN</span>
          </a>
          <a href="#" class="flex items-center px-4 py-3 hover:bg-[#417B3B] rounded-l-full ml-3">
            <span class="mr-3">⚙️</span>
            <span>PENGATURAN</span>
          </a>
        </nav>
        <button class="text-red-400 flex items-center mt-24 ml-7">
            <span>[>]</span><span>Keluar</span>
          </button>
      </aside>
       --}}

    <!-- Main Content -->
    <main class="flex-1 p-6 space-y-6">
      <!-- Header -->
      @include('petugas.p_components.p_navbar')

      <!-- Cards -->
      <div class="grid grid-cols-4 gap-4">
        <div class="bg-[#294B29] text-white p-4 rounded-xl shadow">Pengaduan <p class="text-2xl font-bold">24</p></div>
        <div class="bg-[#1E5800] text-white p-4 rounded-xl shadow">Subsidi <p class="text-2xl font-bold">12</p></div>
        <div class="bg-[#39731B] text-white p-4 rounded-xl shadow">Artikel Ditambahkan <p class="text-2xl font-bold">75</p></div>
        <div class="bg-[#35860B] text-white p-4 rounded-xl shadow">Data Ditambahkan <p class="text-2xl font-bold">35</p></div>
      </div>

      <!-- Grafik dan Persentase -->
      <div class="grid grid-cols-2 gap-6">
        <div class="bg-white rounded-xl p-4 shadow">
          <h3 class="font-semibold mb-2">Harga Komoditas Pertanian</h3>
          <div class="h-32 bg-green-100 rounded-lg flex items-center justify-center text-green-600">
            (Grafik Placeholder)
          </div>
        </div>

        <div class="bg-white rounded-xl p-4 shadow">
          <h3 class="font-semibold mb-2">Persentase Jenis Petani (2024)</h3>
          <div class="h-32 bg-green-100 rounded-lg flex items-center justify-center text-green-600">
            (Donat Chart Placeholder)
          </div>
        </div>
      </div>

      <!-- Artikel -->
      <div class="bg-[#294B29] text-white rounded-xl p-4 shadow">
        <div class="flex space-x-6 mb-4 text-sm">
          <button class="underline font-semibold">Artikel</button>
          <button>Pengumuman</button>
          <button>Penyuluhan</button>
        </div>
        <ul class="space-y-2 text-sm">
          <li>23 Maret 2025 - Tren Kopi Spesialti: Meningkatnya Minat Konsumen terhadap Kopi Berkualitas Tinggi</li>
          <li>20 Maret 2025 - Peran Artificial Intelligence (AI) dalam Memprediksi Hama dan Penyakit pada Tanaman Sayuran</li>
          <li>19 Maret 2025 - Penerapan Teknologi Drone dalam Pertanian Padi: Solusi untuk Efisiensi dan Produktivitas</li>
          <li>17 Maret 2025 - Permintaan Kopi Organik Meningkat: Peluang bagi Petani untuk Beralih ke Pertanian Berkelanjutan</li>
        </ul>
        <button class="mt-4 bg-[#50623A] px-4 py-2 rounded-full text-sm">Lihat semua artikel</button>
      </div>
    </main>
  </div>
</body>
</html>