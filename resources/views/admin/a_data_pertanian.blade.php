<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIMAPAN Dashboard - Data Pertanian</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#CBDAA9] font-poppins">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    @include('admin.a_components.a_sidebar')

    <!-- Main Content -->
    <main class="flex-1 p-6 space-y-6">
      <!-- Header -->
      @include('admin.a_components.a_navbar')
      
      <!-- Agricultural Data Management Tabs -->
      <div class="mt-6">
        <div class="flex border-b">
          <button id="tab-artikel" class="px-4 py-2 bg-white text-black font-semibold rounded-t-lg border-t border-l border-r">
            Artikel
          </button>
          <button id="tab-pengumuman" class="px-4 py-2 bg-[#294B29] text-white font-semibold rounded-t-lg border-t border-l border-r ml-1">
            Pengumuman
          </button>
          <button id="tab-penyuluhan" class="px-4 py-2 bg-[#294B29] text-white font-semibold rounded-t-lg border-t border-l border-r ml-1">
            Penyuluhan
          </button>
        </div>

        <!-- Articles Tab Content -->
        <div id="content-artikel" class="bg-[#E8F0D5] border border-gray-300 rounded-b-lg rounded-tr-lg p-4">
          <div class="flex justify-end mb-4">
            <button id="edit-mode-artikel" class="flex items-center text-sm text-gray-600 hover:text-gray-800">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
              Edit Mode
            </button>
          </div>
          
          <table class="w-full border-collapse">
            <thead class="bg-[#CBDAA9]">
              <tr>
                <th class="py-2 px-4 text-left border border-gray-300">Artikel</th>
                <th class="py-2 px-4 text-center border border-gray-300 w-24">Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- This section will be populated from the database -->
              @foreach($articles ?? [] as $article)
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300">
                  <div>
                    <h3 class="font-semibold">{{ $article->title ?? 'Tren Kopi Spesialti: Meningkatnya Minat Konsumen terhadap Kopi Berkualitas Tinggi' }}</h3>
                    <p class="text-xs text-gray-600">{{ $article->created_at ? date('d F Y', strtotime($article->created_at)) : '20 Maret 2025' }}</p>
                  </div>
                </td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800 edit-btn" data-id="{{ $article->id ?? '1' }}">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn" data-id="{{ $article->id ?? '1' }}">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              @endforeach

              <!-- Sample data if no database records -->
              @if(empty($articles))
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300">
                  <div>
                    <h3 class="font-semibold">Tren Kopi Spesialti: Meningkatnya Minat Konsumen terhadap Kopi Berkualitas Tinggi</h3>
                    <p class="text-xs text-gray-600">20 Maret 2025</p>
                  </div>
                </td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800 edit-btn" data-id="1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn" data-id="1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300">
                  <div>
                    <h3 class="font-semibold">Peran Artificial Intelligence (AI) dalam Memprediksi Hama dan Penyakit pada Tanaman Sayuran</h3>
                    <p class="text-xs text-gray-600">18 Maret 2025</p>
                  </div>
                </td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800 edit-btn" data-id="2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn" data-id="2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300">
                  <div>
                    <h3 class="font-semibold">Penerapan Teknologi Drone dalam Pertanian Padi: Solusi untuk Efisiensi dan Produktivitas</h3>
                    <p class="text-xs text-gray-600">15 Maret 2025</p>
                  </div>
                </td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800 edit-btn" data-id="3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn" data-id="3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              @endif
            </tbody>
          </table>

          <!-- Add Article Button -->
          <div class="flex justify-end mt-4">
            <button id="add-article-btn" class="bg-[#294B29] text-white p-2 rounded-full hover:bg-[#1A3A1A] transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Announcements Tab Content -->
        <div id="content-pengumuman" class="hidden bg-[#E8F0D5] border border-gray-300 rounded-b-lg rounded-tr-lg p-4">
          <div class="flex justify-end mb-4">
            <button id="edit-mode-pengumuman" class="flex items-center text-sm text-gray-600 hover:text-gray-800">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
              Edit Mode
            </button>
          </div>
          
          <table class="w-full border-collapse">
            <thead class="bg-[#CBDAA9]">
              <tr>
                <th class="py-2 px-4 text-left border border-gray-300">Pengumuman</th>
                <th class="py-2 px-4 text-center border border-gray-300 w-24">Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- This section will be populated from the database -->
              @foreach($announcements ?? [] as $announcement)
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300">
                  <div>
                    <h3 class="font-semibold">{{ $announcement->title ?? 'Pengumuman: Hasil Seleksi Berkas Pengajuan Subsidi Bantuan Pertanian' }}</h3>
                    <p class="text-xs text-gray-600">{{ $announcement->created_at ? date('d F Y', strtotime($announcement->created_at)) : '25 Maret 2025' }}</p>
                  </div>
                </td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800 edit-btn" data-id="{{ $announcement->id ?? '1' }}">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn" data-id="{{ $announcement->id ?? '1' }}">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              @endforeach

              <!-- Sample data if no database records -->
              @if(empty($announcements))
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300">
                  <div>
                    <h3 class="font-semibold">Pengumuman: Hasil Seleksi Berkas Pengajuan Subsidi Bantuan Pertanian</h3>
                    <p class="text-xs text-gray-600">25 Maret 2025</p>
                  </div>
                </td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800 edit-btn" data-id="1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn" data-id="1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300">
                  <div>
                    <h3 class="font-semibold">Pengumuman: Pemeliharaan Sistem Simopan untuk Peningkatan Layanan dan Keamanan Data</h3>
                    <p class="text-xs text-gray-600">23 Maret 2025</p>
                  </div>
                </td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800 edit-btn" data-id="2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn" data-id="2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300">
                  <div>
                    <h3 class="font-semibold">Pengumuman: Update Data Harga Komoditas Kopi, Padi, dan Sayuran</h3>
                    <p class="text-xs text-gray-600">20 Maret 2025</p>
                  </div>
                </td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800 edit-btn" data-id="3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn" data-id="3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              @endif
            </tbody>
          </table>

          <!-- Add Announcement Button -->
          <div class="flex justify-end mt-4">
            <button id="add-announcement-btn" class="bg-[#294B29] text-white p-2 rounded-full hover:bg-[#1A3A1A] transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Extension Tab Content -->
        <div id="content-penyuluhan" class="hidden bg-[#E8F0D5] border border-gray-300 rounded-b-lg rounded-tr-lg p-4">
          <div class="flex justify-end mb-4">
            <button id="edit-mode-penyuluhan" class="flex items-center text-sm text-gray-600 hover:text-gray-800">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
              Edit Mode
            </button>
          </div>
          
          <table class="w-full border-collapse">
            <thead class="bg-[#CBDAA9]">
              <tr>
                <th class="py-2 px-4 text-left border border-gray-300">Penyuluhan</th>
                <th class="py-2 px-4 text-center border border-gray-300 w-24">Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- This section will be populated from the database -->
              @foreach($extensions ?? [] as $extension)
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300">
                  <div>
                    <h3 class="font-semibold">{{ $extension->title ?? 'Cara Mengatasi Serangan Tungau pada Tanaman Tomat dan Paprika' }}</h3>
                    <p class="text-xs text-gray-600">{{ $extension->created_at ? date('d F Y', strtotime($extension->created_at)) : '22 Maret 2025' }}</p>
                  </div>
                </td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800 edit-btn" data-id="{{ $extension->id ?? '1' }}">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn" data-id="{{ $extension->id ?? '1' }}">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              @endforeach

              <!-- Sample data if no database records -->
              @if(empty($extensions))
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300">
                  <div>
                    <h3 class="font-semibold">Cara Mengatasi Serangan Tungau pada Tanaman Tomat dan Paprika</h3>
                    <p class="text-xs text-gray-600">22 Maret 2025</p>
                  </div>
                </td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800 edit-btn" data-id="1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn" data-id="1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300">
                  <div>
                    <h3 class="font-semibold">Strategi Pencegahan Penyakit Layu Bakteri pada Tanaman Cabai</h3>
                    <p class="text-xs text-gray-600">20 Maret 2025</p>
                  </div>
                </td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800 edit-btn" data-id="2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn" data-id="2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="bg-[#E8F0D5] hover:bg-[#D9E7C4]">
                <td class="py-2 px-4 border border-gray-300">
                  <div>
                    <h3 class="font-semibold">Kontrol Efektif Serangan Hama pada Tanaman Padi dan Kedelai</h3>
                    <p class="text-xs text-gray-600">17 Maret 2025</p>
                  </div>
                </td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <div class="flex justify-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800 edit-btn" data-id="3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 delete-btn" data-id="3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              @endif
            </tbody>
          </table>

          <!-- Add Extension Button -->
          <div class="flex justify-end mt-4">
            <button id="add-extension-btn" class="bg-[#294B29] text-white p-2 rounded-full hover:bg-[#1A3A1A] transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Edit Article Form -->
        <div id="edit-article-form" class="hidden mt-4 bg-[#E8F0D5] border border-gray-300 rounded-lg p-6">
          <h3 class="text-lg font-semibold bg-[#294B29] text-white py-2 px-4 rounded-t-lg -mt-6 -mx-6 mb-4">Edit Artikel</h3>
          <form id="article-form" class="space-y-4">
            <input type="hidden" id="article-id" name="id">
            <div class="grid grid-cols-[100px_1fr] items-center">
              <label for="judul-artikel" class="text-sm font-medium">Judul Artikel</label>
              <input type="text" id="judul-artikel" name="title" placeholder="Masukkan judul artikel" class="w-full p-2 border border-gray-300 rounded bg-[#CBDAA9] focus:outline-none focus:ring-2 focus:ring-[#294B29]">
            </div>
            <div class="grid grid-cols-[100px_1fr] items-center">
              <label for="ditulis-oleh" class="text-sm font-medium">Ditulis Oleh</label>
              <input type="text" id="ditulis-oleh" name="author" placeholder="Nama penulis" class="w-full p-2 border border-gray-300 rounded bg-[#CBDAA9] focus:outline-none focus:ring-2 focus:ring-[#294B29]">
            </div>
            <div class="grid grid-cols-[100px_1fr] items-start">
              <label for="isi-artikel" class="text-sm font-medium">Isi Artikel</label>
              <textarea id="isi-artikel" name="content" rows="6" placeholder="Tulis artikel" class="w-full p-2 border border-gray-300 rounded bg-[#CBDAA9] focus:outline-none focus:ring-2 focus:ring-[#294B29]"></textarea>
            </div>
            <div class="flex justify-end space-x-2 mt-6">
              <button type="button" id="cancel-edit-article" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition-colors">Kembali</button>
              <button type="submit" class="px-4 py-2 bg-[#294B29] text-white rounded hover:bg-[#1A3A1A] transition-colors">Simpan</button>
            </div>
          </form>
        </div>

        <!-- Add Article Form -->
        <div id="add-article-form" class="hidden mt-4 bg-[#E8F0D5] border border-gray-300 rounded-lg p-6">
          <h3 class="text-lg font-semibold bg-[#294B29] text-white py-2 px-4 rounded-t-lg -mt-6 -mx-6 mb-4">Tambah Artikel</h3>
          <form id="new-article-form" class="space-y-4">
            <div class="grid grid-cols-[100px_1fr] items-center">
              <label for="new-judul-artikel" class="text-sm font-medium">Judul Artikel</label>
              <input type="text" id="new-judul-artikel" name="title" placeholder="Masukkan judul artikel" class="w-full p-2 border border-gray-300 rounded bg-[#CBDAA9] focus:outline-none focus:ring-2 focus:ring-[#294B29]">
            </div>
            <div class="grid grid-cols-[100px_1fr] items-center">
              <label for="new-ditulis-oleh" class="text-sm font-medium">Ditulis Oleh</label>
              <input type="text" id="new-ditulis-oleh" name="author" placeholder="Nama penulis" class="w-full p-2 border border-gray-300 rounded bg-[#CBDAA9] focus:outline-none focus:ring-2 focus:ring-[#294B29]">
            </div>
            <div class="grid grid-cols-[100px_1fr] items-start">
              <label for="new-isi-artikel" class="text-sm font-medium">Isi Artikel</label>
              <textarea id="new-isi-artikel" name="content" rows="6" placeholder="Tulis artikel" class="w-full p-2 border border-gray-300 rounded bg-[#CBDAA9] focus:outline-none focus:ring-2 focus:ring-[#294B29]"></textarea>
            </div>
            <div class="flex justify-end space-x-2 mt-6">
              <button type="button" id="cancel-add-article" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition-colors">Kembali</button>
              <button type="submit" class="px-4 py-2 bg-[#294B29] text-white rounded hover:bg-[#1A3A1A] transition-colors">Tambah</button>
            </div>
          </form>
        </div>

        <!-- Delete Confirmation Modal -->
        <div id="delete-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
          <div class="bg-[#294B29] text-white p-6 rounded-lg shadow-lg max-w-sm w-full">
            <h3 class="text-lg font-semibold mb-4">Apakah Anda yakin ingin menghapus artikel ini?</h3>
            <div class="flex justify-center space-x-4">
              <button id="cancel-delete" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition-colors">Kembali</button>
              <button id="confirm-delete" class="px-4 py-2 bg-white text-[#294B29] rounded hover:bg-gray-100 transition-colors">Hapus</button>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script>
    // Tab switching functionality
    document.getElementById('tab-artikel').addEventListener('click', function() {
      document.getElementById('tab-artikel').classList.add('bg-white', 'text-black');
      document.getElementById('tab-artikel').classList.remove('bg-[#294B29]', 'text-white');
      document.getElementById('tab-pengumuman').classList.add('bg-[#294B29]', 'text-white');
      document.getElementById('tab-pengumuman').classList.remove('bg-white', 'text-black');
      document.getElementById('tab-penyuluhan').classList.add('bg-[#294B29]', 'text-white');
      document.getElementById('tab-penyuluhan').classList.remove('bg-white', 'text-black');
      document.getElementById('content-artikel').classList.remove('hidden');
      document.getElementById('content-pengumuman').classList.add('hidden');
      document.getElementById('content-penyuluhan').classList.add('hidden');
      document.getElementById('edit-article-form').classList.add('hidden');
      document.getElementById('add-article-form').classList.add('hidden');
    });

    document.getElementById('tab-pengumuman').addEventListener('click', function() {
      document.getElementById('tab-pengumuman').classList.add('bg-white', 'text-black');
      document.getElementById('tab-pengumuman').classList.remove('bg-[#294B29]', 'text-white');
      document.getElementById('tab-artikel').classList.add('bg-[#294B29]', 'text-white');
      document.getElementById('tab-artikel').classList.remove('bg-white', 'text-black');
      document.getElementById('tab-penyuluhan').classList.add('bg-[#294B29]', 'text-white');
      document.getElementById('tab-penyuluhan').classList.remove('bg-white', 'text-black');
      document.getElementById('content-pengumuman').classList.remove('hidden');
      document.getElementById('content-artikel').classList.add('hidden');
      document.getElementById('content-penyuluhan').classList.add('hidden');
      document.getElementById('edit-article-form').classList.add('hidden');
      document.getElementById('add-article-form').classList.add('hidden');
    });

    document.getElementById('tab-penyuluhan').addEventListener('click', function() {
      document.getElementById('tab-penyuluhan').classList.add('bg-white', 'text-black');
      document.getElementById('tab-penyuluhan').classList.remove('bg-[#294B29]', 'text-white');
      document.getElementById('tab-artikel').classList.add('bg-[#294B29]', 'text-white');
      document.getElementById('tab-artikel').classList.remove('bg-white', 'text-black');
      document.getElementById('tab-pengumuman').classList.add('bg-[#294B29]', 'text-white');
      document.getElementById('tab-pengumuman').classList.remove('bg-white', 'text-black');
      document.getElementById('content-penyuluhan').classList.remove('hidden');
      document.getElementById('content-artikel').classList.add('hidden');
      document.getElementById('content-pengumuman').classList.add('hidden');
      document.getElementById('edit-article-form').classList.add('hidden');
      document.getElementById('add-article-form').classList.add('hidden');
    });

    // Edit buttons functionality
    const editButtons = document.querySelectorAll('.edit-btn');
    editButtons.forEach(button => {
      button.addEventListener('click', function() {
        const id = this.getAttribute('data-id');
        // Here you would fetch the article data from the server based on the ID
        // For demonstration, we'll just show the form with some placeholder data
        document.getElementById('article-id').value = id;
        
        // Determine which tab is active and show the appropriate edit form
        if (!document.getElementById('content-artikel').classList.contains('hidden')) {
          document.getElementById('judul-artikel').value = "Tren Kopi Spesialti: Meningkatnya Minat Konsumen terhadap Kopi Berkualitas Tinggi";
          document.getElementById('ditulis-oleh').value = "Risky Kurnia Antisari";
          document.getElementById('isi-artikel').value = "Dalam beberapa tahun terakhir, industri kopi mengalami perubahan signifikan dengan meningkatnya minat konsumen terhadap kopi spesialti. Kopi spesialti bukan sekadar minuman berkafein biasa, tetapi adalah pengalaman rasa yang unik, diproduksi dengan metode pemrosesan yang cermat, dan kualitas penyeduhan yang presisi.";
          document.getElementById('edit-article-form').classList.remove('hidden');
        } else if (!document.getElementById('content-pengumuman').classList.contains('hidden')) {
          document.getElementById('judul-artikel').value = "Pengumuman: Hasil Seleksi Berkas Pengajuan Subsidi Bantuan Pertanian";
          document.getElementById('ditulis-oleh').value = "Admin SIMAPAN";
          document.getElementById('isi-artikel').value = "Diberitahukan kepada seluruh petani yang telah mengajukan subsidi bantuan pertanian bahwa hasil seleksi berkas telah diumumkan. Silakan cek status pengajuan Anda melalui akun SIMAPAN atau hubungi kantor dinas pertanian terdekat.";
          document.getElementById('edit-article-form').classList.remove('hidden');
        } else if (!document.getElementById('content-penyuluhan').classList.contains('hidden')) {
          document.getElementById('judul-artikel').value = "Cara Mengatasi Serangan Tungau pada Tanaman Tomat dan Paprika";
          document.getElementById('ditulis-oleh').value = "Tim Penyuluh SIMAPAN";
          document.getElementById('isi-artikel').value = "Tungau adalah hama kecil yang sering menyerang tanaman tomat dan paprika. Artikel ini membahas cara mengidentifikasi serangan tungau dan metode pengendalian yang efektif menggunakan pendekatan pengendalian hama terpadu (PHT).";
          document.getElementById('edit-article-form').classList.remove('hidden');
        }
      });
    });

    // Add buttons functionality
    document.getElementById('add-article-btn').addEventListener('click', function() {
      document.getElementById('add-article-form').classList.remove('hidden');
    });

    document.getElementById('add-announcement-btn').addEventListener('click', function() {
      document.getElementById('add-article-form').classList.remove('hidden');
      document.querySelector('#add-article-form h3').textContent = 'Tambah Pengumuman';
    });

    document.getElementById('add-extension-btn').addEventListener('click', function() {
      document.getElementById('add-article-form').classList.remove('hidden');
      document.querySelector('#add-article-form h3').textContent = 'Tambah Penyuluhan';
    });

    // Cancel buttons
    document.getElementById('cancel-edit-article').addEventListener('click', function() {
      document.getElementById('edit-article-form').classList.add('hidden');
    });

    document.getElementById('cancel-add-article').addEventListener('click', function() {
      document.getElementById('add-article-form').classList.add('hidden');
    });

    // Delete confirmation modal
    const deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(button => {
      button.addEventListener('click', function() {
        const id = this.getAttribute('data-id');
        // Store the ID to be deleted
        document.getElementById('delete-modal').setAttribute('data-delete-id', id);
        document.getElementById('delete-modal').classList.remove('hidden');
      });
    });

    document.getElementById('cancel-delete').addEventListener('click', function() {
      document.getElementById('delete-modal').classList.add('hidden');
    });

    document.getElementById('confirm-delete').addEventListener('click', function() {
      const id = document.getElementById('delete-modal').getAttribute('data-delete-id');
      // Here you would add the code to delete the item with the given ID
      
      // For demonstration purposes, let's just hide the modal
      document.getElementById('delete-modal').classList.add('hidden');
      
      // You might want to refresh the page or update the table after successful deletion
      alert('Item with ID ' + id + ' has been deleted.');
    });

    // Form submissions
    document.getElementById('article-form').addEventListener('submit', function(e) {
      e.preventDefault();
      const id = document.getElementById('article-id').value;
      const title = document.getElementById('judul-artikel').value;
      const author = document.getElementById('ditulis-oleh').value;
      const content = document.getElementById('isi-artikel').value;
      
      // Here you would add the code to submit the form data to the server
      // For demonstration purposes, let's just hide the form and show an alert
      document.getElementById('edit-article-form').classList.add('hidden');
      alert('Article with ID ' + id + ' has been updated.');
    });

    document.getElementById('new-article-form').addEventListener('submit', function(e) {
      e.preventDefault();
      const title = document.getElementById('new-judul-artikel').value;
      const author = document.getElementById('new-ditulis-oleh').value;
      const content = document.getElementById('new-isi-artikel').value;
      
      // Here you would add the code to submit the form data to the server
      // For demonstration purposes, let's just hide the form and show an alert
      document.getElementById('add-article-form').classList.add('hidden');
      
      // Determine which tab is active to know what type of content was added
      let contentType = 'Article';
      if (!document.getElementById('content-pengumuman').classList.contains('hidden')) {
        contentType = 'Announcement';
      } else if (!document.getElementById('content-penyuluhan').classList.contains('hidden')) {
        contentType = 'Extension';
      }
      
      alert(contentType + ' has been added successfully.');
    });
  </script>
</body>
</html>
