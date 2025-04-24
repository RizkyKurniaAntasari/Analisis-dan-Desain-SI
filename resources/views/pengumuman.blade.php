<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengumuman Seleksi Berkas</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-green-50 items-center justify-center font-poppins">
    {{-- <x-navbar/>
  <div class="bg-white shadow-md rounded-xl p-8 w-full border border-green-200">
    <h1 class="text-xl font-bold text-green-800 text-center">Pengumuman: Hasil Seleksi Berkas</h1>
    <h2 class="text-lg font-semibold text-green-900 text-center">Pengajuan Subsidi Bantuan Pertanian</h2>
    <p class="text-sm text-gray-600 text-center mt-1 italic">Oleh: Samuel Ananta Sinulingga</p>

    <p class="mt-6 text-gray-700 leading-relaxed">
      Sehubungan dengan telah selesainya proses seleksi administrasi pengajuan Subsidi Bantuan Pertanian, 
      dengan ini Dinas Pertanian Kabupaten Lampung Barat mengumumkan daftar penerima yang telah lolos tahap seleksi berkas.
    </p>

    <div class="mt-6">
      <h3 class="font-bold text-black">DAFTAR PENERIMA SUBSIDI</h3>
      <p class="text-gray-700 mt-1">
        Daftar penerima yang dinyatakan LOLOS seleksi administrasi dapat diakses melalui: <br>
        <a href="#" class="text-blue-600 underline">bit.ly/PenerimaSubsidiPertanian2025</a> <br>
        📍 Kantor Dinas Pertanian Kabupaten Lampung Barat
      </p>
    </div>

    <div class="mt-6">
      <h3 class="font-bold text-black uppercase">Ketentuan dan Tahapan Selanjutnya</h3>
      <ol class="list-decimal list-inside text-gray-700 mt-2 space-y-1">
        <li>Penerima bantuan wajib melakukan verifikasi ulang di kantor Dinas Pertanian sesuai jadwal yang telah ditentukan.</li>
        <li>Bantuan akan disalurkan secara bertahap sesuai dengan mekanisme yang telah ditetapkan oleh pemerintah daerah.</li>
        <li>Jika terdapat pertanyaan lebih lanjut, peserta dapat menghubungi pihak terkait melalui kontak resmi Dinas Pertanian.</li>
      </ol>
      <p class="mt-2 text-gray-700">
        📍 Dinas Pertanian Kabupaten Lampung Barat <br>
        📞 081234567890 <br>
        ✉️ dinaspertanianlambar@gmail.com
      </p>
    </div>

    <div class="mt-6 text-gray-700">
      <p>Demikian pengumuman ini disampaikan untuk menjadi perhatian. Kami berharap program ini dapat memberikan manfaat bagi para petani dalam meningkatkan hasil produksi dan kesejahteraan pertanian di Kabupaten Lampung Barat.</p>
      <p class="mt-2">Ditetapkan di: Lampung Barat <br>Pada tanggal: 03 April 2025</p>
    </div>

    <p class="mt-6">Tertanda, <br> Kepala Dinas Pertanian Kabupaten Lampung Barat</p>
  </div> --}}
  <x-navbar/>

<div class="bg-[#2f472d] min-h-screen px-4 py-8">
    <div class="container mx-auto flex gap-6">
        <!-- Sidebar Filter -->
        <aside class="w-1/4 bg-[#1f3020] text-white rounded-xl p-4 space-y-6">
            <div>
                <h2 class="font-bold text-lg mb-2">FILTER</h2>
                <div>
                    <p class="font-semibold">JENIS PENGUMUMAN</p>
                    <ul class="space-y-1 mt-1">
                        <li><input type="checkbox" class="mr-2">Subsidii</li>
                        <li><input type="checkbox" class="mr-2">Pembaruan</li>
                        <li><input type="checkbox" class="mr-2">Cuaca</li>
                        <li><input type="checkbox" class="mr-2">Lainnya</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <p class="font-semibold">WAKTU PUBLISH</p>
                    <ul class="space-y-1 mt-1">
                        <li><input type="checkbox" class="mr-2">1 minggu terakhir</li>
                        <li><input type="checkbox" class="mr-2" checked>1 bulan terakhir</li>
                        <li><input type="checkbox" class="mr-2">3 bulan terakhir</li>
                    </ul>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        {{-- <main class="w-3/4 bg-white rounded-xl p-6 space-y-6">
            @foreach($announcements as $announcement)
                <div class="flex items-start gap-4 border-b pb-4">
                    <img src="{{ $announcement->image }}" alt="icon" class="w-14 h-14 rounded-md object-cover">
                    <div>
                        <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($announcement->date)->translatedFormat('d M Y') }}</p>
                        <p class="font-semibold text-gray-800">{{ $announcement->title }}</p>
                    </div>
                </div>
            @endforeach

            <!-- Pagination -->
            <div class="flex justify-between items-center pt-4">
                <button class="bg-[#2f472d] text-white px-4 py-2 rounded">Kembali</button>
                <div class="flex gap-2 text-sm">
                    <button class="bg-white border px-3 py-1 rounded">1</button>
                    <button class="bg-white border px-3 py-1 rounded">2</button>
                    <span>...</span>
                    <button class="bg-white border px-3 py-1 rounded">5</button>
                    <button class="bg-[#2f472d] text-white px-4 py-2 rounded">Berikutnya</button>
                </div>
            </div>
        </main> --}}
    </div>
</div>

<x-footer/>

</body>
</html>


