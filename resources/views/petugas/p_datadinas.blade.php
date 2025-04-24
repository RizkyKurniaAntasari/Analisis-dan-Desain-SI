<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Dinas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#CBDAA9] font-poppins flex min-h-screen">

    {{-- Sidebar --}}
    @include('petugas.p_components.p_sidebar')

    {{-- Konten Utama --}}
    <main class="flex-1 p-6 space-y-6">
        {{-- Navbar --}}
        @include('petugas.p_components.p_navbar')

        <!-- Tabs -->
        <div class="flex space-x-4 border-b mb-4">
            <button onclick="showTab('sejarah')" class="tab active-tab">Sejarah</button>
            <button onclick="showTab('visi')" class="tab">Visi dan Misi</button>
            <button onclick="showTab('tugas')" class="tab">Tugas dan Fungsi</button>
            <button onclick="showTab('struktur')" class="tab">Struktur</button>
        </div>

        <!-- Isi Konten -->
        <div id="tab-content" class="bg-white border p-4 rounded-md text-sm leading-relaxed text-justify">
            <p id="sejarah"></p>
        </div>

        <p class="text-xs text-right text-green-600 mt-4">🖊️ Edit</p>

    </main>

    {{-- Script Tab --}}
    <script>
        const tabContent = {
            sejarah: `Sejarah Dinas Pertanian Kabupaten Lampung Barat berawal dari pembentukan Kabupaten Lampung Barat itu sendiri, yang diresmikan pada tanggal 24 September 1991, hasil pemekaran dari Kabupaten Lampung Utara. Sejak saat itu, Dinas Pertanian dibentuk sebagai bagian dari perangkat daerah untuk mengelola dan mengembangkan potensi pertanian yang menjadi tulang punggung perekonomian wilayah ini. <br><br>
                      Dalam perjalanannya, dinas ini mengalami berbagai penyesuaian struktur dan fungsi, menyesuaikan dengan dinamika kebijakan pemerintah dan kebutuhan masyarakat petani. Fokus awal dinas tertuju pada pengembangan tanaman pangan dan perkebunan, namun seiring waktu, peranannya meluas mencakup peningkatan kualitas sumber daya manusia petani, penerapan teknologi pertanian, dan pengelolaan sumber daya alam yang berkelanjutan. Program-program inovatif seperti Kartu Petani Berjaya (KPB) kemudian diimplementasikan, menandai upaya dinas dalam memodernisasi sektor pertanian dan meningkatkan kesejahteraan petani di Kabupaten Lampung Barat.`,
            visi: `<strong>VISI</strong><br>
                  Terwujudnya sektor pertanian yang tangguh, berkelanjutan, dan berdaya saing, yang mendukung kesejahteraan petani dan ketahanan pangan di Kabupaten Lampung Barat.<br>

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
                    <img src="/img/struktur_organisasi.png" class="m-auto">
            `
        };

        function showTab(tabKey) {
            const content = document.getElementById('tab-content');
            content.innerHTML = `<p>${tabContent[tabKey]}</p>`;

            document.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active-tab');
            });
            event.target.classList.add('active-tab');
        }

        // Tambahkan style untuk tab
        const style = document.createElement('style');
        style.innerHTML = `
      .tab { padding: 8px 16px; font-weight: 600; border-bottom: 2px solid transparent; }
      .active-tab { border-color: #15803d; color: #15803d; }
    `;
        document.head.appendChild(style);
        showTab('sejarah');
    </script>

</body>

</html>
