<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Harga</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .tab-button {
            transition: all 0.3s ease;
        }
        .tab-button:hover {
            background-color: #2F5B2F;
            color: white;
        }
        .tab-active {
            background-color: #1C3D1C;
            color: white;
            border-radius: 0.375rem 0.375rem 0 0;
            border: 1px solid #1C3D1C;
            border-bottom: 0;
        }
    </style>
</head>
<body class="bg-[#CBDAA9] font-poppins">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('petugas.p_components.p_sidebar')

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Navbar -->
            @include('petugas.p_components.p_navbar')

            <div class="p-6 bg-[#CBDAA9] min-h-screen font-poppins relative">
                <!-- Tabs -->
                <div class="flex space-x-4 mb-0">
                    <button onclick="changeTab('kopi')" id="tab-kopi" 
                        class="tab-button tab-active px-4 py-2 font-semibold">
                        Kopi
                    </button>
                    <button onclick="changeTab('sayuran')" id="tab-sayuran" 
                        class="tab-button text-black px-4 py-2 font-semibold">
                        Sayuran
                    </button>
                    <button onclick="changeTab('lada')" id="tab-lada" 
                        class="tab-button text-black px-4 py-2 font-semibold">
                        Lada
                    </button>
                </div>

                <!-- Konten Tab Kopi -->
                <div id="content-kopi" class="tab-content">
                    <div class="border border-[#1C3D1C] rounded-b-md overflow-hidden -mt-px">
                        <table class="w-full bg-white text-sm text-left text-black">
                            <thead class="bg-[#1C3D1C] text-white">
                                <tr>
                                    <th class="px-6 py-3">Hari</th>
                                    <th class="px-6 py-3">Tanggal</th>
                                    <th class="px-6 py-3">Harga (Kg)</th>
                                    <th class="px-6 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-300">
                                @php
                                    $days = ['Kamis', 'Rabu', 'Selasa', 'Senin', 'Minggu', 'Sabtu', 'Jumat', 'Kamis', 'Rabu', 'Selasa'];
                                    $dates = [
                                        '03-04-2025', '02-04-2025', '01-04-2025', '31-03-2025', '30-03-2025',
                                        '29-03-2025', '28-03-2025', '27-03-2025', '26-03-2025', '25-03-2025'
                                    ];
                                    $kopiPrices = [64000, 63500, 63000, 62500, 62000, 61500, 61000, 60500, 60000, 59500];
                                @endphp

                                @foreach($days as $index => $day)
                                <tr>
                                    <td class="px-6 py-4">{{ $day }}</td>
                                    <td class="px-6 py-4">{{ $dates[$index] }}</td>
                                    <td class="px-6 py-4">Rp {{ number_format($kopiPrices[$index], 0, ',', '.') }}</td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-[#1C3D1C] flex items-center space-x-1 font-semibold">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                                                <path d="M5 19h14v2H5zM18.7 6.3l-1-1c-.4-.4-1-.4-1.4 0l-1.8 1.8 2.4 2.4 1.8-1.8c.4-.4.4-1 0-1.4zM16.6 9.4l-2.4-2.4L6 15v2.4h2.4l8.2-8.2z"/>
                                            </svg>
                                            <span>Edit</span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Konten Tab Sayuran -->
                <div id="content-sayuran" class="tab-content hidden">
                    <div class="border border-[#1C3D1C] rounded-b-md overflow-hidden -mt-px">
                        <table class="w-full bg-white text-sm text-left text-black">
                            <thead class="bg-[#1C3D1C] text-white">
                                <tr>
                                    <th class="px-6 py-3">Hari</th>
                                    <th class="px-6 py-3">Tanggal</th>
                                    <th class="px-6 py-3">Harga (Kg)</th>
                                    <th class="px-6 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-300">
                                @php
                                    $sayuranPrices = [15000, 14500, 14000, 13500, 13000, 12500, 12000, 11500, 11000, 10500];
                                @endphp

                                @foreach($days as $index => $day)
                                <tr>
                                    <td class="px-6 py-4">{{ $day }}</td>
                                    <td class="px-6 py-4">{{ $dates[$index] }}</td>
                                    <td class="px-6 py-4">Rp {{ number_format($sayuranPrices[$index], 0, ',', '.') }}</td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-[#1C3D1C] flex items-center space-x-1 font-semibold">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                                                <path d="M5 19h14v2H5zM18.7 6.3l-1-1c-.4-.4-1-.4-1.4 0l-1.8 1.8 2.4 2.4 1.8-1.8c.4-.4.4-1 0-1.4zM16.6 9.4l-2.4-2.4L6 15v2.4h2.4l8.2-8.2z"/>
                                            </svg>
                                            <span>Edit</span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Konten Tab Lada -->
                <div id="content-lada" class="tab-content hidden">
                    <div class="border border-[#1C3D1C] rounded-b-md overflow-hidden -mt-px">
                        <table class="w-full bg-white text-sm text-left text-black">
                            <thead class="bg-[#1C3D1C] text-white">
                                <tr>
                                    <th class="px-6 py-3">Hari</th>
                                    <th class="px-6 py-3">Tanggal</th>
                                    <th class="px-6 py-3">Harga (Kg)</th>
                                    <th class="px-6 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-300">
                                @php
                                    $ladaPrices = [85000, 84500, 84000, 83500, 83000, 82500, 82000, 81500, 81000, 80500];
                                @endphp

                                @foreach($days as $index => $day)
                                <tr>
                                    <td class="px-6 py-4">{{ $day }}</td>
                                    <td class="px-6 py-4">{{ $dates[$index] }}</td>
                                    <td class="px-6 py-4">Rp {{ number_format($ladaPrices[$index], 0, ',', '.') }}</td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-[#1C3D1C] flex items-center space-x-1 font-semibold">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                                                <path d="M5 19h14v2H5zM18.7 6.3l-1-1c-.4-.4-1-.4-1.4 0l-1.8 1.8 2.4 2.4 1.8-1.8c.4-.4.4-1 0-1.4zM16.6 9.4l-2.4-2.4L6 15v2.4h2.4l8.2-8.2z"/>
                                            </svg>
                                            <span>Edit</span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tombol Tambah (+) -->
                <a href="{{ route('tambah-harga') }}" 
                   class="fixed bottom-6 right-6 bg-[#1C3D1C] text-white p-4 rounded-full shadow-lg hover:bg-[#2F5B2F] transform hover:scale-110 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#1C3D1C] focus:ring-offset-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path d="M19 13H13V19H11V13H5V11H11V5H13V11H19V13Z"/>
                    </svg>
                </a>
            </div>
        </main>
    </div>

    <script>
        function changeTab(tabName) {
            // Sembunyikan semua konten tab
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });
            
            // Tampilkan konten tab yang dipilih
            document.getElementById(`content-${tabName}`).classList.remove('hidden');
            
            // Reset semua style tab
            document.querySelectorAll('.tab-button').forEach(tab => {
                tab.classList.remove('tab-active');
                tab.classList.add('text-black');
            });
            
            // Style untuk tab aktif
            const activeTab = document.getElementById(`tab-${tabName}`);
            activeTab.classList.add('tab-active');
            activeTab.classList.remove('text-black');
        }

        // Set tab Kopi sebagai default saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            changeTab('kopi');
        });
    </script>
</body>
</html>
            