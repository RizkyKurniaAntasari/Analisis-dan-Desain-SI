<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Pengumuman</title>
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
                        <span class="font-bold text-lg">JENIS PENGUMUMAN</span>
                    </button>
                    <div id="jenisArtikel" class="space-y-1 ml-2">
                        <label class="block"><input type="checkbox" class="mr-2">Subsidi</label>
                        <label class="block"><input type="checkbox" class="mr-2">Pembaruan</label>
                        <label class="block"><input type="checkbox" class="mr-2">Cuaca</label>
                        <label class="block"><input type="checkbox" class="mr-2">Lainnya</label>
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
                <img src="{{ asset('img/pengumuman1.png') }}" class="rounded w-28 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">23 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        <!-- Link ke halaman artikel dengan parameter id -->

                        {{-- 
                            DIPERLUKAN DATA DIPERLUKAN DATA DIPERLUKAN DATA DIPERLUKAN DATA
                            DIPERLUKAN DATA DIPERLUKAN DATA DIPERLUKAN DATA DIPERLUKAN DATA 
                        --}}

                        <a href="{{ route('artikel.show', ['id' => 1]) }}">Pengumuman: Hasil Seleksi Berkas Pengajuan Subsidi Bantuan Pertanian</a>
                    </p>
                </div>
            </div>

            <!-- Artikel 2 -->
            <div class="flex space-x-4 border-b border-[#294B29] pb-3">
                <img src="{{ asset('img/pengumuman2.png') }}" class="rounded w-28 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">20 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Pengumuman: Pemeliharaan Sistem Simapan untuk Peningkatan Layanan dan Keamanan Data
                    </p>
                </div>
            </div>

            <!-- Artikel 3 -->
            <div class="flex space-x-4 border-b border-[#294B29] pb-3">
                <img src="{{ asset('img/pengumuman3.png') }}" class="rounded w-28 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">19 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Pengumuman: Peringatan Hujan Lebat dan Risiko Banjir
                    </p>
                </div>
            </div>

            <!-- Artikel 4 -->
            <div class="flex space-x-4 border-b border-[#294B29] pb-3">
                <img src="{{ asset('img/pengumuman4.png') }}" class="rounded w-28 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">17 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Pengumuman: Pendaftaran Workshop "Pembuatan Pupuk Organik Mandiri" Telah Dibuka!
                    </p>
                </div>
            </div>

            <!-- Artikel 5 -->
            <div class="flex space-x-4 border-b border-[#294B29] pb-3">
                <img src="{{ asset('img/pengumuman5.png') }}" class="rounded w-28 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">15 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Pengumuman: Pendaftaran Pelatihan "Teknologi Smart Farming" Telah Dibuka!
                    </p>
                </div>
            </div>

            <!-- Artikel 6 -->
            <div class="flex space-x-4 border-b border-[#294B29] pb-3">
                <img src="{{ asset('img/pengumuman6.png') }}" class="rounded w-28 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">13 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Pengumuman: Distribusi Bantuan Benih Unggul akan Dimulai Minggu Ini 
                    </p>
                </div>
            </div>

            <!-- Artikel 7 -->
            <div class="flex space-x-4 border-b border-[#294B29] pb-3">
                <img src="{{ asset('img/pengumuman7.png') }}" class="rounded w-28 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">10 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Urban Farming di Lahan Sempit: Solusi Ketahanan Pangan Keluarga Perkotaan
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