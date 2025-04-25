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

    <!-- Main Content -->
    <main class="flex-1 p-6 space-y-6">
      <!-- Header -->
      @include('admin.a_components.a_navbar')

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

            <!-- Artikel Section -->
      <div class="bg-[#294B29] text-white rounded-xl p-4 shadow">
        <div class="flex space-x-6 mb-4 text-sm">
            <button class="underline font-semibold">Artikel</button>
            <button>Pengumuman</button>
            <button>Penyuluhan</button>
        </div>

        {{-- Check if variables exist --}}
        @isset($latestArticles)
            @if($latestArticles->count() > 0)
                <ul class="space-y-2 text-sm">
                    @foreach($latestArticles as $article)
                        <li>
                            {{ $article->published_at->format('d M Y') }} - {{ $article->title }}
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="py-4 text-center">Tidak ada artikel terbaru</p>
            @endif
        @else
            <p class="py-4 text-center">Data artikel tidak tersedia</p>
        @endisset

        <a href="{{ route('admin.articles.index') }}" class="mt-4 inline-block bg-[#50623A] px-4 py-2 rounded-full text-sm">
            Lihat semua artikel
        </a>
      </div>
    </main>
  </div>
</body>
</html>
