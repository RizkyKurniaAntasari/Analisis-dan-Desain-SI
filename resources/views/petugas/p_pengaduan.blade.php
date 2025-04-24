<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="flex bg-[#CBDAA9] font-poppins min-h-screen">

    {{-- Sidebar --}}
    @include('petugas.p_components.p_sidebar')
    
    {{-- Konten Pengaduan --}}
    <main class="p-6 bg-[#CBDAA9] flex-1 space-y-6">
        {{-- Navbar --}}
        @include('petugas.p_components.p_navbar')
        <div class="bg-white rounded-lg shadow-md p-6">
            <h1 class="text-2xl font-bold mb-4 flex items-center text-green-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 17v-2a4 4 0 00-4-4H5a2 2 0 010-4h14a2 2 0 010 4h-.1a4 4 0 00-3.9 4v2M12 3v4m0 4h.01" />
                </svg>
                PENGADUAN
            </h1>

            @php
                $pengaduan = [
                    (object) [
                        'username' => 'linasari',
                        'pesan' => 'Saya ingin menanyakan subsidi pupuk',
                        'email' => 'linasari@gmail.com',
                        'tanggal' => '2025-03-26',
                    ],
                    (object) [
                        'username' => 'indah',
                        'pesan' => 'Loading halaman sangat lama',
                        'email' => 'indah56@gmail.com',
                        'tanggal' => '2025-03-25',
                    ],
                    (object) [
                        'username' => 'arsa',
                        'pesan' => 'Saya tidak bisa masuk halaman login',
                        'email' => 'arsa@gmail.com',
                        'tanggal' => '2025-03-24',
                    ],
                    (object) [
                        'username' => 'riskur',
                        'pesan' => 'Website menampilkan error 500',
                        'email' => 'riskur@gmail.com',
                        'tanggal' => '2025-03-22',
                    ],
                    (object) [
                        'username' => 'yallyialia',
                        'pesan' => 'Saya tidak bisa mengubah password',
                        'email' => 'yallyialia@gmail.com',
                        'tanggal' => '2025-03-20',
                    ],
                    (object) [
                        'username' => 'sam',
                        'pesan' => 'Grafik produksi pertanian tidak muncul',
                        'email' => 'sam@gmail.com',
                        'tanggal' => '2025-03-15',
                    ],
                    (object) [
                        'username' => 'jefri nichol',
                        'pesan' => 'Antarmuka website terlalu kompleks',
                        'email' => 'jefri24@gmail.com',
                        'tanggal' => '2025-03-14',
                    ],
                ];
            @endphp

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border rounded-lg">
                    <thead class="bg-[#f0f9eb] text-green-700">
                        <tr>
                            <th class="p-3 text-left">Username</th>
                            <th class="p-3 text-left">Pesan</th>
                            <th class="p-3 text-left">Email</th>
                            <th class="p-3 text-left">Tanggal</th>
                            <th class="p-3"></th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 divide-y divide-gray-200">
                        @foreach ($pengaduan as $data)
                            <tr>
                                <td class="p-3 flex items-center gap-2">
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($data->username) }}"
                                        class="w-6 h-6 rounded-full" />
                                    {{ $data->username }}
                                </td>
                                <td class="p-3 truncate max-w-xs">{{ $data->pesan }}</td>
                                <td class="p-3">{{ $data->email }}</td>
                                <td class="p-3">{{ $data->tanggal }}</td>
                                <td class="p-3">
                                    <button
                                        class="bg-green-700 text-white px-4 py-1 rounded-full hover:bg-green-800">lihat</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>


</body>

</html>
