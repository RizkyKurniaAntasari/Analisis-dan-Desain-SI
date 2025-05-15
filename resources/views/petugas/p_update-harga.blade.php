<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Harga</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
    <button class="bg-[#1C3D1C] text-white px-4 py-2 rounded-t-md font-semibold border border-[#1C3D1C] border-b-0">Kopi</button>
    <button class="text-black px-4 py-2 font-semibold">Sayuran</button>
    <button class="text-black px-4 py-2 font-semibold">Lada</button>
</div>

<!-- Tabel Harga -->
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
            <tr>
                <td class="px-6 py-4">Kamis</td>
                <td class="px-6 py-4">03-04-2025</td>
                <td class="px-6 py-4">Rp 64.000</td>
                <td class="px-6 py-4 text-right">
                    <button class="text-[#1C3D1C] flex items-center space-x-1 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                            <path d="M5 19h14v2H5zM18.7 6.3l-1-1c-.4-.4-1-.4-1.4 0l-1.8 1.8 2.4 2.4 1.8-1.8c.4-.4.4-1 0-1.4zM16.6 9.4l-2.4-2.4L6 15v2.4h2.4l8.2-8.2z"/>
                        </svg>
                        <span>Edit</span>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>


    <!-- Tombol Tambah (+) -->
    <a href="{{ route('tambah-harga') }}" class="fixed bottom-6 right-6 bg-[#1C3D1C] text-white p-4 rounded-full shadow hover:bg-[#163216]">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
            <path d="M19 13H13V19H11V13H5V11H11V5H13V11H19V13Z"/>
        </svg>
</a>
</div>


            