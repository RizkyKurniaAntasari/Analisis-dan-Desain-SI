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
    @include('admin.a_components.a_sidebar')

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
      @include('admin.a_components.a_navbar')
      
    </div>
    </main>
  </div>
</body>
</html>