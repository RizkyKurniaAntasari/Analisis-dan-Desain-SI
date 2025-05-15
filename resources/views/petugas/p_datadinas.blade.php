<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dinas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-[#CBDAA9] font-poppins min-h-screen">

    {{-- Sidebar --}}
    @include('petugas.p_components.p_sidebar')

    {{-- Konten Utama --}}
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
        <br>

        <!-- Tabs -->
        <div class="border-b-8 border-[#1B3219] my-0">
            <nav class="flex space-x-4">
                <button onclick="showTab('sejarah')" class="text-white bg-[#1B3219] px-4 py-2 rounded-t-lg font-bold" id="tab-sejarah">Sejarah</button>
                <button onclick="showTab('visi')" class="text-[#1B3219] px-4 py-2 font-bold rounded-t-lg hover:underline" id="tab-visi">Visi dan Misi</button>
                <button onclick="showTab('tugas')" class="text-[#1B3219] px-4 py-2 font-bold rounded-t-lg hover:underline" id="tab-tugas">Tugas dan Fungsi</button>
                <button onclick="showTab('struktur')" class="text-[#1B3219] px-4 py-2 font-bold rounded-t-lg hover:underline" id="tab-struktur">Struktur</button>
            </nav>
        </div>

        <!-- Isi Konten -->
        <div id="tab-content" class="bg-white border border-[#1B3219] rounded-sm p-4 space-y-3 shadow px-10">
            <p id="sejarah"></p>
        </div>

        <div class="flex justify-end items-center text-[#1B3219] mt-4 space-x-1 text-base">
            <img src="{{ asset('icon/edit.png') }}" alt="Edit" class="w-5 h-5">
            <span>Edit</span>
        </div>

    </main>

    {{-- Script Tab --}}
    <script>
        const tabContent = {
            sejarah: `Sejarah Dinas Pertanian Kabupaten Lampung Barat berawal dari pembentukan Kabupaten Lampung Barat itu sendiri, yang diresmikan pada tanggal 24 September 1991, hasil pemekaran dari Kabupaten Lampung Utara. Sejak saat itu, Dinas Pertanian dibentuk sebagai bagian dari perangkat daerah untuk mengelola dan mengembangkan potensi pertanian yang menjadi tulang punggung perekonomian wilayah ini. <br><br>
                      Dalam perjalanannya, dinas ini mengalami berbagai penyesuaian struktur dan fungsi, menyesuaikan dengan dinamika kebijakan pemerintah dan kebutuhan masyarakat petani. Fokus awal dinas tertuju pada pengembangan tanaman pangan dan perkebunan, namun seiring waktu, peranannya meluas mencakup peningkatan kualitas sumber daya manusia petani, penerapan teknologi pertanian, dan pengelolaan sumber daya alam yang berkelanjutan. Program-program inovatif seperti Kartu Petani Berjaya (KPB) kemudian diimplementasikan, menandai upaya dinas dalam memodernisasi sektor pertanian dan meningkatkan kesejahteraan petani di Kabupaten Lampung Barat.`,
            visi: `<strong>VISI</strong><br>
                  Terwujudnya sektor pertanian yang tangguh, berkelanjutan, dan berdaya saing, yang mendukung kesejahteraan petani dan ketahanan pangan di Kabupaten Lampung Barat.<br><br>

                  <strong>MISI</strong><br>
                     <ul>
                        <li>1. Meningkatkan produksi dan produktivitas tanaman pangan, hortikultura, dan perkebunan.
                        </li>
                        <li>2. Meningkatkan kualitas sumber daya manusia petani melalui penyuluhan dan pelatihan.</li>
                        <li>3. Menerapkan teknologi pertanian yang inovatif dan ramah lingkungan.</li>
                        <li>4. Memperkuat kelembagaan petani dan akses terhadap sumber daya pertanian.</li>
                        <li>5. Meningkatkan nilai tambah produk pertanian dan akses pasar.</li>
                        <li>6. Meningkatkan ketahanan pangan di tingkat kabupaten.</li>
                        <li>7. Mewujudkan pertanian yang berkelanjutan.</li>
                    </ul>`,
            tugas: `
                    Dasar Hukum pembentukan Dinas Tanaman Pangan dan Hortikultura Kabupaten Lampung Barat adalah Peraturan Daerah Kabupaten Lampung Barat Nomor 4 Tahun 2023 tentang Perubahan Kedua Atas Peraturan Daerah Kabupaten Lampung Barat Nomor 8 Tahun 2016 Tentang Pembentukan Dan Susunan Perangkat Daerah. 
                    <br><br>
                    Berdasarkan Peraturan Bupati Lampung Barat Nomor 24 Tahun 2023 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi Serta Tata Kerja Perangkat Daerah, Dinas Tanaman Pangan dan Hortikultura Kabupaten Lampung Barat mempunyai tugas Membantu Bupati dalam melaksanakan urusan pemerintahan di bidang tanaman pangan dan hortikultura yang menjadi kewenangan Daerah dan tugas pembantuan yang diberikan kepada daerah. 
                    <br><br>
                    <ul>
                        <li>1. Perumusan kebijakan di bidang Tanaman Pangan dan Hortikultura</li>
                        <li>2. Pelaksanaan kebijakan di bidang Tanaman Pangan dan Hortikultura</li>
                        <li>3. Pelaksanaan, evaluasi dan pelaporan bidang Tanaman Pangan dan Hortikultura</li>
                        <li>4. Pelaksanaan administrasi dinas di bidang Tanaman Pangan dan Hortikultura</li>
                        <li>5. Pelaksanaan fungsi lain yang di berikan oleh pimpinan sesuai dengan tugas dan fungsinya
                        </li>
                    </ul>
            `,
            struktur: `Dalam melaksanakan tugas dan kewajiban Dinas dipimpin oleh Kepala Dinas yang dalam pelaksanaan tugasnya dibantu oleh pejabat struktural dan pejabat fungsional sebagaimana terdapat dalam struktur organisasi di bawah ini:
                    <br>
                    <br>
                    <img src="{{ asset('icon/struktur_organisasi.png') }}" class="w-2/3 h-auto mx-auto">
            `
        };

        function showTab(tabName) {
            // Hide all content
            document.getElementById('tab-content').innerHTML = `<p>${tabContent[tabName]}</p>`;

            // Reset all tab styles
            document.getElementById('tab-sejarah').classList.remove('text-white', 'bg-[#1B3219]');
            document.getElementById('tab-visi').classList.remove('text-white', 'bg-[#1B3219]');
            document.getElementById('tab-tugas').classList.remove('text-white', 'bg-[#1B3219]');
            document.getElementById('tab-struktur').classList.remove('text-white', 'bg-[#1B3219]');

            // Add default text color to all tabs
            document.getElementById('tab-sejarah').classList.add('text-[#1B3219]');
            document.getElementById('tab-visi').classList.add('text-[#1B3219]');
            document.getElementById('tab-tugas').classList.add('text-[#1B3219]');
            document.getElementById('tab-struktur').classList.add('text-[#1B3219]');

            // Style selected tab
            document.getElementById('tab-' + tabName).classList.remove('text-[#1B3219]');
            document.getElementById('tab-' + tabName).classList.add('text-white', 'bg-[#1B3219]');
        }

        // Set default tab when page loads
        document.addEventListener('DOMContentLoaded', function() {
            showTab('sejarah');
        });
    </script>

</body>

</html>
