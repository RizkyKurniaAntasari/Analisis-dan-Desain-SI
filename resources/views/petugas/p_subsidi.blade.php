<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <script>
        let table = new DataTable('#subsidi');
    </script>
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
                SUBSIDI
            </h1>

            <div class="overflow-x-auto">
                <table id="subsidi" class="min-w-full bg-white border rounded-lg display">
                    <thead class="bg-[#f0f9eb] text-green-700">
                        <tr>
                            <th class="p-3 text-left">Username</th>
                            <th class="p-3 text-left">Jenis Subsidi</th>
                            <th class="p-3 text-left">Tanggal</th>
                            <th class="p-3 text-left">Status</th>
                            <th class="p-3 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 divide-y divide-gray-200">
                        @foreach ($subsidi as $item)
                            <tr>
                                <td class="p-3">
                                    <div class="flex items-center gap-2">
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode($item->nama) }}"
                                            class="w-6 h-6 rounded-full" />
                                        <span>{{ $item->nama }}</span>
                                    </div>
                                </td>
                                <td class="p-3">{{ $item->jenis_subsidi }}</td>
                                <td class="p-3">{{ $item->created_at }}</td>
                                <td class="p-3">
                                    @if ($item->status == 'pending')
                                        <span
                                            class="inline-flex items-center px-3 py-1 text-sm bg-yellow-100 text-yellow-700 rounded-full">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 8v4m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
                                            </svg>
                                            pending
                                        </span>
                                    @elseif ($item->status == 'ditolak')
                                        <span
                                            class="inline-flex items-center px-3 py-1 text-sm bg-red-100 text-red-700 rounded-full">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                            ditolak
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center px-3 py-1 text-sm bg-green-100 text-green-700 rounded-full">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                            disetujui
                                        </span>
                                    @endif
                                </td>
                                <td class="p-3">
                                    <button
                                        class="bg-green-700 text-white px-4 py-1 rounded-full hover:bg-green-800">periksa</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>

    <script>
        $(document).ready(function() {
            $('#subsidi').DataTable({
                language: {
                    search: "Cari:",
                    lengthMenu: "Tampilkan _MENU_ entri",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    paginate: {
                        first: "Pertama",
                        last: "Terakhir",
                        next: "Berikutnya",
                        previous: "Sebelumnya"
                    },
                    emptyTable: "Tidak ada data tersedia",
                },
                responsive: true,
                autoWidth: false,
            });
        });
    </script>
</body>

</html>
