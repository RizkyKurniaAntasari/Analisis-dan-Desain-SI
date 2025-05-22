<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Artikel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#294B29] font-poppins">

    <!-- NAVBAR -->
    @include('components.navbar')

    <!-- MAIN CONTENT -->
    <div class="flex px-6 py-8 space-x-8">

        <!-- FILTER -->
        <aside class="w-64 bg-[#294B29] text-white rounded-lg p-4 text-sm space-y-6">
            <div>
            <div class="flex items-center gap-x-2 mb-2">
                    <span><img src="{{ asset('icon/filter.png') }}" alt="Filter" class="w-5 h-5"></span> 
                    <span class=" text-2xl font-bold">FILTER</span>
                </div>

                <!-- Jenis Artikel -->
                <div>
                    <button onclick="toggleContent('jenisArtikel')"
                        class="flex items-center gap-x-2 w-full mb-2">
                        <span class="icon">▼</span> 
                        <span class="font-bold text-lg">JENIS ARTIKEL</span>
                    </button>
                    <div id="jenisArtikel" class="space-y-1 ml-2">
                        <label class="block"><input type="checkbox" class="mr-2">Pertanian</label>
                        <label class="block"><input type="checkbox" class="mr-2">Perkebunan</label>
                    </div>
                </div>

                <!-- Waktu Publish -->
                <div>
                    <button onclick="toggleContent('waktuPublish')"
                        class="flex items-center gap-x-2 w-full mt-4 mb-2">
                        <span class="icon">▼</span>
                        <span class="font-bold text-lg">WAKTU PUBLISH</span>
                    </button>
                    <div id="waktuPublish" class="space-y-1 ml-2">
                        <label class="block"><input type="checkbox" class="mr-2">1 minggu terakhir</label>
                        <label class="block"><input type="checkbox" class="mr-2" checked>1 bulan terakhir</label>
                        <label class="block"><input type="checkbox" class="mr-2">3 bulan terakhir</label>
                    </div>
                </div>
            </div>
        </aside>

        <!-- ARTIKEL -->
        <main class="flex-1 bg-[#DBE7C9] rounded-lg p-4 space-y-4">

        <!-- Artikel 1 -->
        <div class="flex space-x-4 border-b border-[#294B29] pb-3">
            <img src="{{ asset('img/artikel1.png') }}" class="rounded w-28 h-20 object-cover" />
            <div>
                <p class="text-xs text-gray-500">23 Maret 2025</p>
                <p class="font-semibold text-sm text-gray-800">
                    Tren Kopi Spesialti: Meningkatnya Minat Konsumen terhadap Kopi Berkualitas Tinggi
                </p>
            </div>
        </div>

        <!-- Artikel 2 -->
        <div class="flex space-x-4 border-b border-[#294B29] pb-3">
            <img src="{{ asset('img/artikel2.png') }}" class="rounded w-28 h-20 object-cover" />
            <div>
                <p class="text-xs text-gray-500">20 Maret 2025</p>
                <p class="font-semibold text-sm text-gray-800">
                    Peran Artificial Intelligence (AI) dalam Memprediksi Hama dan Penyakit pada Tanaman Sayuran
                </p>
            </div>
        </div>

        <!-- Artikel 3 -->
        <div class="flex space-x-4 border-b border-[#294B29] pb-3">
            <img src="{{ asset('img/artikel3.png') }}" class="rounded w-28 h-20 object-cover" />
            <div>
                <p class="text-xs text-gray-500">19 Maret 2025</p>
                <p class="font-semibold text-sm text-gray-800">
                    Penerapan Teknologi Drone dalam Pertanian Padi: Solusi untuk Efisiensi dan Produktivitas
                </p>
            </div>
        </div>

        <!-- Artikel 4 -->
        <div class="flex space-x-4 border-b border-[#294B29] pb-3">
            <img src="{{ asset('img/artikel4.png') }}" class="rounded w-28 h-20 object-cover" />
            <div>
                <p class="text-xs text-gray-500">17 Maret 2025</p>
                <p class="font-semibold text-sm text-gray-800">
                    Permintaan Kopi Organik Meningkat: Peluang bagi Petani untuk Beralih ke Pertanian Berkelanjutan
                </p>
            </div>
        </div>

        <!-- Artikel 5 -->
        <div class="flex space-x-4 border-b border-[#294B29] pb-3">
            <img src="{{ asset('img/artikel5.png') }}" class="rounded w-28 h-20 object-cover" />
            <div>
                <p class="text-xs text-gray-500">17 Maret 2025</p>
                <p class="font-semibold text-sm text-gray-800">
                    Sistem Intensifikasi Padi (SRI): Solusi Hemat Air untuk Produksi Maksimal
                </p>
            </div>
        </div>

        <!-- Artikel 6 -->
        <div class="flex space-x-4 border-b border-[#294B29] pb-3">
            <img src="{{ asset('img/artikel6.png') }}" class="rounded w-28 h-20 object-cover" />
            <div>
                <p class="text-xs text-gray-500">17 Maret 2025</p>
                <p class="font-semibold text-sm text-gray-800">
                    Pasar Sayuran Hidroponik: Meningkatnya Minat Konsumen terhadap Produk Sehat
                </p>
            </div>
        </div>

        <!-- Artikel 7 -->
        <div class="flex space-x-4 border-b border-[#294B29] pb-3">
            <img src="{{ asset('img/artikel7.png') }}" class="rounded w-28 h-20 object-cover" />
            <div>
                <p class="text-xs text-gray-500">17 Maret 2025</p>
                <p class="font-semibold text-sm text-gray-800">
                    Pupuk Organik dari Limbah Dapur: Cara Sederhana Mendukung Pertanian Berkelanjutan
                </p>
            </div>
        </div>

        </main>

    </div>

    <!-- FOOTER -->
    @include('components.footer')

    <!-- SCRIPT UNTUK FILTER TOGGLE -->
    <script>
        function toggleContent(id) {
            const element = document.getElementById(id);
            if (element.style.display === "none") {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        }
    </script>

</body>

</html>
