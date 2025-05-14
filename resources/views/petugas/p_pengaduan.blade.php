<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas Pengaduan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
</head>
<body class="flex bg-[#CBDAA9] font-poppins min-h-screen">

    {{-- Sidebar --}}
    @include('petugas.p_components.p_sidebar')
    
    {{-- Konten Pengaduan --}}
    <main class="p-6 bg-[#CBDAA9] flex-1 space-y-6">
        {{-- Navbar --}}
        @include('petugas.p_components.p_navbar')

        {{-- Notifikasi sukses --}}
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="overflow-x-auto">
                <table id="data_pengaduan" class="min-w-full bg-white rounded-lg">
                    <thead class="bg-[#fff] text-[#294B29]">
                        <tr class="border-b-2 border-black">
                            <th class="p-3 text-center">Nama</th>
                            <th class="p-3 text-center">Alamat</th>
                            <th class="p-3 text-center">Email</th>
                            <th class="p-3 text-center">Isi Pesan</th>
                            <th class="p-3 text-center">Tanggal</th>
                            <th class="p-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 divide-y divide-gray-200">
                        @forelse ($data_pengaduan as $data)
                            <tr class="hover:bg-green-50">
                                <td class="p-3 text-center">{{ $data->nama }}</td>
                                <td class="p-3 text-center">{{ $data->alamat }}</td>
                                <td class="p-3 text-center">{{ $data->email }}</td>
                                <td class="p-3 text-left max-w-xs truncate">{{ $data->isi_pesan }}</td>
                                <td class="p-3 text-center">
                                    {{ \Carbon\Carbon::parse($data->created_at)->format('d-m-Y H:i') }}
                                </td>
                                <td class="p-3 text-center">
                                    <button class="bg-[#39741A] text-white px-4 py-1 rounded-md hover:bg-green-800">
                                        Lihat Selengkapnya
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center p-4 text-gray-500">Belum ada data pengaduan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>

<script>
    $(document).ready(function () {
        $('#data_pengaduan').DataTable({
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
            columns: [
                { defaultContent: "" }, // kolom 1
                { defaultContent: "" }, // kolom 2
                { defaultContent: "" }, // kolom 3
                { defaultContent: "" }, // kolom 4
                { defaultContent: "" }, // kolom 5
                { defaultContent: "" }  // kolom 6
            ]
        });
    });
</script>

</body>
</html>
