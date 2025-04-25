<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>SIMAPAN - Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleContent(id, button) {
            const content = document.getElementById(id);
            const icon = button.querySelector(".icon");

            content.classList.toggle("hidden");

            // Ubah ikon
            if (content.classList.contains("hidden")) {
                icon.textContent = ">"; // Panah ke kanan
            } else {
                icon.textContent = "⌄"; // Panah ke bawah
            }
        }
    </script>
</head>

<body class="bg-[#294B29] font-sans">
    <x-navbar />
    {{-- CONTENT --}}
    <div class="max-w-3xl mx-auto space-y-4">
        <!-- SEJARAH -->
        <div class="bg-[#294B29] text-white rounded shadow">
            <button onclick="toggleContent('sejarah', this)"
                class="w-full text-left px-6 py-4 font-bold flex items-center gap-2">
                <span class="icon">›</span> SEJARAH ORGANISASI
            </button>
            <div id="sejarah" class="bg-green-100 text-green-900 px-6 py-4 hidden text-justify">
                <p>
                    Sejarah Dinas Pertanian Kabupaten Lampung Barat berawal dari pembentukan Kabupaten Lampung Barat itu
                    sendiri, yang diresmikan pada tanggal 24 September 1991, hasil pemekaran dari Kabupaten Lampung
                    Utara. Sejak saat itu, Dinas Pertanian dibentuk sebagai bagian dari perangkat daerah untuk mengelola
                    dan mengembangkan potensi pertanian yang menjadi tulang punggung perekonomian wilayah ini.
                </p>

                <p class="mt-2">
                    Dalam perjalanannya, dinas ini mengalami berbagai penyesuaian struktur dan fungsi, menyesuaikan
                    dengan dinamika kebijakan pemerintah dan kebutuhan masyarakat petani. Fokus awal dinas tertuju pada
                    pengembangan tanaman pangan dan perkebunan, namun seiring waktu, peranannya meluas mencakup
                    peningkatan kualitas sumber daya manusia petani, penerapan teknologi pertanian, dan pengelolaan
                    sumber daya alam yang berkelanjutan. Program-program inovatif seperti Kartu Petani Berjaya (KPB)
                    kemudian diimplementasikan, menandai upaya dinas dalam memodernisasi sektor pertanian dan
                    meningkatkan kesejahteraan petani di Kabupaten Lampung Barat.
                </p>
            </div>
        </div>

        <!-- VISI -->
        <div class="bg-[#294B29] text-white rounded shadow">
            <button onclick="toggleContent('visi', this)"
                class="w-full text-left px-6 py-4 font-bold flex items-center gap-2">
                <span class="icon">›</span> VISI DAN MISI ORGANISASI
            </button>
            <div id="visi" class="bg-green-100 text-green-900 px-6 py-4 hidden text-justify">
                <p class="font-bold">
                    VISI
                </p>
                Terwujudnya sektor pertanian yang tangguh, berkelanjutan, dan berdaya saing, yang mendukung
                kesejahteraan petani dan ketahanan pangan di Kabupaten Lampung Barat.
                <p class="mt-4 font-bold">MISI</p>
                <ul>
                    <li>1. Meningkatkan produksi dan produktivitas tanaman pangan, hortikultura, dan perkebunan.</li>
                    <li>2. Meningkatkan kualitas sumber daya manusia petani melalui penyuluhan dan pelatihan.</li>
                    <li>3. Menerapkan teknologi pertanian yang inovatif dan ramah lingkungan.</li>
                    <li>4. Memperkuat kelembagaan petani dan akses terhadap sumber daya pertanian.</li>
                    <li>5. Meningkatkan nilai tambah produk pertanian dan akses pasar.</li>
                    <li>6. Meningkatkan ketahanan pangan di tingkat kabupaten.</li>
                    <li>7. Mewujudkan pertanian yang berkelanjutan.</li>
                </ul>
            </div>
        </div>

        <!-- TUGAS -->
        <div class="bg-[#294B29] text-white rounded shadow">
            <button onclick="toggleContent('tugas', this)"
                class="w-full text-left px-6 py-4 font-bold flex items-center gap-2">
                <span class="icon">›</span> TUGAS DAN FUNGSI ORGANISASI
            </button>
            <div id="tugas" class="bg-green-100 text-green-900 px-6 py-4 hidden text-justify">
                <p>
                    Dasar Hukum pembentukan Dinas Tanaman Pangan dan Hortikultura Kabupaten Lampung Barat adalah
                    Peraturan Daerah Kabupaten Lampung Barat Nomor 4 Tahun 2023 tentang Perubahan Kedua Atas Peraturan
                    Daerah Kabupaten Lampung Barat Nomor 8 Tahun 2016 Tentang Pembentukan Dan Susunan Perangkat Daerah.
                </p>
                <p class="mt-4">
                    Berdasarkan Peraturan Bupati Lampung Barat Nomor 24 Tahun 2023 tentang Kedudukan, Susunan
                    Organisasi, Tugas dan Fungsi Serta Tata Kerja Perangkat Daerah, Dinas Tanaman Pangan dan
                    Hortikultura Kabupaten Lampung Barat mempunyai tugas Membantu Bupati dalam melaksanakan urusan
                    pemerintahan di bidang tanaman pangan dan hortikultura yang menjadi kewenangan Daerah dan tugas
                    pembantuan yang diberikan kepada daerah.
                </p>
                <p class="mt-4">
                    Dalam melaksanakan tugas tersebut, Dinas Tanaman Pangan Dan Hortikultura menyelenggarakan fungsi :
                <ul>
                    <li>1. Perumusan kebijakan di bidang Tanaman Pangan dan Hortikultura</li>
                    <li>2. Pelaksanaan kebijakan di bidang Tanaman Pangan dan Hortikultura</li>
                    <li>3. Pelaksanaan, evaluasi dan pelaporan bidang Tanaman Pangan dan Hortikultura</li>
                    <li>4. Pelaksanaan administrasi dinas di bidang Tanaman Pangan dan Hortikultura</li>
                    <li>5. Pelaksanaan fungsi lain yang di berikan oleh pimpinan sesuai dengan tugas dan fungsinya</li>
                </ul>
                </p>
            </div>
        </div>

        <!-- Struktur Organisasi -->
        <div class="bg-[#294B29] text-white rounded shadow">
            <button onclick="toggleContent('struktur', this)"
                class="w-full text-left px-6 py-4 font-bold flex items-center gap-2">
                <span class="icon">›</span> STRUKTUR ORGANISASI
            </button>
            <div id="struktur" class="bg-green-100 text-green-900 px-6 py-4 hidden text-justify">
                <P>
                    Dalam melaksanakan tugas dan kewajiban Dinas dipimpin oleh Kepala Dinas yang dalam pelaksanaan
                    tugasnya dibantu oleh pejabat struktural dan pejabat fungsional sebagaimana terdapat dalam struktur
                    organisasi di bawah ini:
                </P>

                <img class="ml-10" src="\img\struktur_organisasi.png" alt="">
            </div>
        </div>
    </div>

    {{-- FOOTER  --}}
    <footer class="bg-[#294B29] text-white px-6 py-6 mt-8">
        <div class="flex flex-col md:flex-row justify-between text-sm">
            <div class="mb-4 md:mb-0">
                <img src="\img\logo-simapan.png" class="w-32 mb-2" alt="SIMAPAN Logo">
                <p>Sistem Informasi Manajemen Pertanian Kabupaten Lampung Barat</p>
                <p class="mt-2 text-xs">© Copyright 2025. Kelompok Lincari - Jurusan Ilmu Komputer, Universitas Lampung
                </p>
            </div>
            <div>
                <p>Kantor Dinas Pertanian Kab. Lambar</p>
                <p>Jl. Raden Intan, Way Mengaku, Komp. Perkantoran Pemkab Lampung Barat, Liwa, Lampung, 34842</p>
                <p>📞 Telp: 1234-5678-910</p>
                <p>📱 WhatsApp: 0812-3456-7890</p>
                <p>📧 Email: dinaspertanianlambar@gmail.com</p>
            </div>
        </div>
    </footer>


</body>

</html>