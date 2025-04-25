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
            <img src="/img/left.jpg" alt="Tanaman" class="rounded-md w-full h-full object-cover">
        </div>

        <!-- Tengah -->
        <div
            class="md:col-span-1 overflow-hidden relative transition-transform hover:scale-105 ease-in-out duration-300">
            <img src="/img/tengah.jpg" alt="" class="rounded-md w-full h-64 object-cover">
            <div class="absolute bottom-0 bg-black bg-opacity-60 text-white p-4 w-full">
                <h2 class="text-lg font-semibold">Tren Kopi Spesialti: Meningkatnya Minat Konsumen terhadap Kopi
                    Berkualitas Tinggi</h2>
                <p class="text-sm mt-1">23 Maret 2025</p>
            </div>
        </div>

        <!-- Gambar kanan -->
        <div class="md:col-span-1 overflow-hidden transition-transform hover:scale-105 ease-in-out duration-300">
            <img src="/img/cabai.jpeg" alt="cabai.jpeg" class="rounded-md w-full h-full object-cover">
        </div>
    </section>

    <!-- Artikel + Statistik -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-6 px-6 py-6 bg-[#294B29]">
        <!-- Artikel -->
        <div class="bg-[#294B29] text-white p-6 rounded-md">
            <h3 class="font-bold text-lg mb-2">PERAN ARTIFICIAL INTELLIGENCE (AI) DALAM MEMPREDIKSI HAMA DAN PENYAKIT PADA TANAMAN SAYURAN</h3>
            <p class="mt-4 text-xs">23 Maret 2025</p>
            <p class="text-justify">Lampung barat - Dalam dunia pertanian modern, keberlanjutan produksi sayuran sering kali menghadapi tantangan besar akibat serangan hama dan penyakit. Jika tidak ditangani dengan baik, serangan ini dapat menyebabkan penurunan hasil panen yang signifikan dan berdampak pada ketahanan pangan  serta ekonomi petani. Namun, dengan kemajuan Artificial Intelligence (AI), kini petani dapat memanfaatkan teknologi untuk memprediksi dan mengendalikan hama serta penyakit secara lebih cepat dan akurat. 
                <br><br>
                AI bekerja dengan cara mengumpulkan dan menganalisis data dari berbagai sumber, seperti citra satelit, sensor cuaca, foto tanaman, dan data historis tentang serangan hama atau penyakit.</p>
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