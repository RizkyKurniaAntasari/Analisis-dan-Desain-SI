<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>SIMAPAN - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-[#DBE7C9] font-poppins">

    @include('components.navbar')
    <section class="grid grid-cols-1 md:grid-cols-3 gap-4 p-6 bg-[#DBE7C9]">
        <img src="{{ asset('icon/beranda_sayur.png') }}" alt=""
            class="rounded-md hover:scale-105 transition w-full h-full object-cover" />

        <div class="relative rounded-md overflow-hidden hover:scale-105 transition">
            <a href="{{ route('artikel.show', ['id' => 1]) }}"><img src="{{ asset('icon/beranda_kopi.png') }}" alt="" class="w-full h-full object-cover"></a>
            <div class="absolute bottom-0 left-0 right-0 bg-black/60 text-white p-4">
                <h2 class="text-lg font-bold">Tren Kopi Spesialti: Meningkatnya Minat Konsumen terhadap Kopi Berkualitas
                    Tinggi</h2>
                <p class="text-xs mt-1">24 Maret 2025</p>
            </div>
        </div>

        <img src="{{ asset('img/cabai.jpeg') }}" alt=""
            class="rounded-md hover:scale-105 transition w-full h-full object-cover" />
    </section>


    <!-- Artikel + Statistik -->
    <section class="grid md:grid-cols-[3fr_2fr] bg-[#294B29] text-white px-20 py-8">
        <div class="flex flex-col mr-4">
            <div class="md:w-full flex-wrap">

                <div class="inline-grid grid-cols-2 gap-4 mb-5">
                    <div class="grid=row">
                        <h3 class="text-3xl font-bold">
                            PERAN ARTIFICIAL <br> INTELLIGENCE (AI) <br> DALAM MEMPREDIKSI <br> HAMA DAN PENYAKIT <br> PADA TANAMAN <br> SAYURAN
                        </h3>
                        <p class="text-xs my-2 opacity-60">23 Maret 2025</p>
                    </div>
                    <img src="{{ asset('icon/beranda_sayur_artikel.png') }}" alt="AI" class="w-full rounded-md object-cover" />
                </div>
                <p class="text-base text-justify">
                    Lampung barat - Dalam dunia pertanian modern, keberlanjutan produksi sayuran sering kali menghadapi
                    tantangan besar akibat serangan hama dan penyakit. Jika tidak ditangani dengan baik, serangan ini
                    dapat menyebabkan penurunan hasil panen yang signifikan dan berdampak pada ketahanan pangan serta
                    ekonomi petani. Namun, dengan kemajuan Artificial Intelligence (AI), kini petani dapat memanfaatkan
                    teknologi untuk memprediksi dan mengendalikan hama serta penyakit secara lebih cepat dan akurat.
                </p>
                <br>
                <p class="text-base text-justify">
                    AI bekerja dengan cara mengumpulkan dan menganalisis data dari berbagai sumber, seperti citra satelit,
                    sensor cuaca, foto tanaman, dan data historis tentang serangan hama atau penyakit.
                </p>
                <button
                    class="bg-[#39731B] text-[#DBE7C9] rounded-full px-4 py-2 mt-4 font-semibold text-sm hover:bg-[#14491F] ">Selengkapnya</button>
            </div>
        </div>

        <div class="space-y-4 mx-4">
            <div class="bg-white text-[#294B29] p-6 rounded-md">
                <h4 class="text-sm font-semibold">Statistik Harga Kopi Lampung</h4>
                <p class="text-xs text-gray-500">Last Update: 30-03-2025</p>
                <div class="w-full">
                    <canvas id="priceChartKopi"></canvas>
                </div>
            </div>

            <div class="bg-white text-[#294B29] p-6 rounded-md">
                <h4 class="text-sm font-semibold">Statistik Harga Lada</h4>
                <p class="text-xs text-gray-500">Last Update: 30-03-2025</p>
                <div class="w-full">
                    <canvas id="priceChartLada"></canvas>
                </div>
            </div>

            <button class="bg-[#39731B] text-[#DBE7C9]  px-4 py-2 font-semibold rounded-full text-sm mt-4 hover:bg-[#14491F] transition">
                <a href="{{ route('statistik') }}">Lihat semua statistik</a>
            </button>
        </div>
    </section>


    <!-- Tabs dan Artikel -->
    <section class="bg-[#F3FBEF] px-20 py-8">
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
        <div class="mt-8 flex justify-left">
            <button
                class="bg-[#39731B] px-4 py-3 rounded-full text-sm font-semibold hover:bg-[#14491F] transition text-[#DBE7C9]">
                <a href="{{ route('users.artikel') }}">Lihat semua artikel</a>
            </button>
        </div>
    </section>
    
    @include('components.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to create price charts
            function createPriceChart(canvasId, thisWeekData, lastWeekData, minY, maxY, stepSize) {
                const ctx = document.getElementById(canvasId).getContext('2d');
                return new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
                        datasets: [{
                                label: 'Minggu Ini',
                                data: thisWeekData,
                                borderColor: '#2c5324',
                                backgroundColor: 'rgba(44, 83, 36, 0.1)',
                                borderWidth: 2,
                                tension: 0.4
                            },
                            {
                                label: 'Minggu Lalu',
                                data: lastWeekData,
                                borderColor: '#8ba663',
                                backgroundColor: 'rgba(139, 166, 99, 0.1)',
                                borderWidth: 2,
                                borderDash: [5, 5],
                                tension: 0.4
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: false,
                                min: minY,
                                max: maxY,
                                ticks: {
                                    stepSize: stepSize
                                },
                                title: {
                                    display: true,
                                    text: 'Rp (ribu)'
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }
                });
            }

            // Data untuk Kopi
            const chartKopi = createPriceChart(
                'priceChartKopi',
                [85.0, 86.0, 87.0, 88.0, 89.0, 88.0, 87.0], // Minggu Ini
                [83.0, 84.0, 85.0, 86.0, 87.0, 86.0, 85.0], // Minggu Lalu
                82, 90, 2
            );

            // Data untuk Lada (contoh data, sesuaikan jika sudah punya data asli)
            const chartLada = createPriceChart(
                'priceChartLada',
                [75.0, 76.5, 77.0, 78.0, 77.5, 76.0, 75.0], // Minggu Ini
                [73.0, 74.0, 75.0, 76.0, 75.5, 74.5, 74.0], // Minggu Lalu
                72, 80, 2
            );
        });
    </script>

</body>
</html>