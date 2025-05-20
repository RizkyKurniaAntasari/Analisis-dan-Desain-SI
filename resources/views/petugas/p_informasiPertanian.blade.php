<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pertanian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-[#CBDAA9] font-poppins min-h-screen">

    {{-- Sidebar --}}
    @include('petugas.p_components.p_sidebar')

    <main class="p-6 bg-[#CBDAA9] flex-1">
        {{-- Navbar --}}
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold">
                @if (Request::is('petugas/p_dashboard'))
                    BERANDA
                @elseif (Request::is('petugas/p_datadinas'))
                    DATA DINAS
                @elseif (Request::is('petugas/p_pengaduan'))
                    PENGADUAN
                @elseif (Request::is('petugas/p_subsidi'))
                    SUBSIDI
                @elseif (Request::is('petugas/p_update-harga'))
                    UPDATE HARGA
                @elseif (Request::is('petugas/p_informasiPertanian'))
                    INFORMASI PERTANIAN
                @elseif (Request::is('petugas/p_pengaturan'))
                    PENGATURAN
                @else
                    SIMAPAN
                @endif
            </h2>

            <div class="flex items-center space-x-6">
                {{-- Pencarian --}}
                <div class="relative">
                    <input type="text" placeholder="Cari artikel..."
                        class="rounded-full px-4 py-2 w-64 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#648B36]">
                    <svg class="absolute right-3 top-2.5 w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M17 10a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

                {{-- Profil --}}
                <div class="flex items-center space-x-2">
                    <img src="https://i.pravatar.cc/40" alt="user" class="rounded-full w-10 h-10">
                    <div>
                        <p class="text-sm font-bold">Nadya Arsa</p>
                        <p class="text-xs text-gray-600">Petugas</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tab Navigasi --}}
        <div class="border-b-8 border-[#1B3219] my-0">
            <nav class="flex space-x-4">
                <button onclick="switchTab('artikel')"
                    class="tab-button bg-[#1B3219] text-white px-4 py-2 rounded-t-lg font-bold"
                    id="tab-artikel">Artikel</button>
                <button onclick="switchTab('pengumuman')"
                    class="tab-button text-[#1B3219] px-4 py-2 font-bold rounded-t-lg hover:underline"
                    id="tab-pengumuman">Pengumuman</button>
                <button onclick="switchTab('penyuluhan')"
                    class="tab-button text-[#1B3219] px-4 py-2 font-bold rounded-t-lg hover:underline"
                    id="tab-penyuluhan">Penyuluhan</button>
            </nav>
        </div>

        {{-- Menampilkan daftar semua artikel dari database --}}

        <div id="content-artikel" class="bg-white border border-[#1B3219] rounded-sm p-4 space-y-2 shadow px-10">
            @foreach ($artikels as $artikel)
                <div class="border-b border-gray-200 pb-2 flex justify-between items-start">
                    {{-- Informasi artikel --}}
                    <div>
                        {{-- Tanggal publikasi --}}
                        <p class="text-sm text-gray-500">
                            {{ \Carbon\Carbon::parse($artikel->created_at)->translatedFormat('d F Y') }}
                        </p>

                        {{-- Judul artikel --}}
                        <p class="font-semibold text-[#294B29]">
                            <a href="{{ route('artikel.show', ['id' => $artikel->id]) }}">
                                {{ $artikel->judul }}
                            </a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>


        {{-- Konten Pengumuman --}}
        <div id="content-pengumuman"
            class="tab-content bg-white border border-[#1B3219] rounded-sm p-4 space-y-2 shadow px-10 hidden">
            @php
                $pengumuman = [
                    [
                        'tanggal' => '23 Maret 2025',
                        'judul' => 'Pengumuman: Hasil Seleksi Berkas Pengajuan Subsidi Bantuan Pertanian',
                    ],
                    [
                        'tanggal' => '20 Maret 2025',
                        'judul' =>
                            'Pengumuman: Pemeliharaan Sistem Simapan untuk Peningkatan Layanan dan Keamanan Data',
                    ],
                ];
            @endphp
            @foreach ($pengumuman as $item)
                <div class="border-b border-gray-200 pb-2 flex justify-between items-start">
                    <div>
                        <p class="text-sm text-gray-500">{{ $item['tanggal'] }}</p>
                        <p class="font-semibold text-[#1B3219]">{{ $item['judul'] }}</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <button title="Edit">
                            <img src="{{ asset('icon/edit.png') }}" alt="Edit" class="w-5 h-5">
                        </button>
                        <button title="Hapus">
                            <img src="{{ asset('icon/hapus.png') }}" alt="Hapus" class="w-5 h-5">
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Konten Penyuluhan --}}
        <div id="content-penyuluhan"
            class="tab-content bg-white border border-[#1B3219] rounded-sm p-4 space-y-2 shadow px-10 hidden">
            @php
                $penyuluhan = [
                    ['tanggal' => '23 Maret 2025', 'judul' => 'Cara Mengatasi Serangan Tungau pada Tanaman Tomat'],
                    ['tanggal' => '20 Maret 2025', 'judul' => 'Strategi Pencegahan Penyakit Layu Bakteri pada Cabai'],
                ];
            @endphp
            @foreach ($penyuluhan as $item)
                <div class="border-b border-gray-200 pb-2 flex justify-between items-start">
                    <div>
                        <p class="text-sm text-gray-500">{{ $item['tanggal'] }}</p>
                        <p class="font-semibold text-[#1B3219]">{{ $item['judul'] }}</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <button title="Edit">
                            <img src="{{ asset('icon/edit.png') }}" alt="Edit" class="w-5 h-5">
                        </button>
                        <button title="Hapus">
                            <img src="{{ asset('icon/hapus.png') }}" alt="Hapus" class="w-5 h-5">
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    {{-- JavaScript untuk Switching Tab --}}
    <script>
        function switchTab(tabName) {
            const tabs = ['artikel', 'pengumuman', 'penyuluhan'];
            tabs.forEach(tab => {
                document.getElementById(`content-${tab}`).classList.add('hidden');
                document.getElementById(`tab-${tab}`).classList.remove('bg-[#1B3219]', 'text-white');
                document.getElementById(`tab-${tab}`).classList.add('text-[#1B3219]');
            });

            document.getElementById(`content-${tabName}`).classList.remove('hidden');
            document.getElementById(`tab-${tabName}`).classList.add('bg-[#1B3219]', 'text-white');
            document.getElementById(`tab-${tabName}`).classList.remove('text-[#1B3219]');
        }
    </script>
</body>

</html>
