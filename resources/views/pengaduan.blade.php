<!-- resources/views/pengaduan.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan Pengaduan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-[#DBE7C9] font-poppins">
    <x-navbar/>
    <div class=" bg-[#DBE7C9] p-10 rounded min-h-screen items-center justify-center">
        <h1 class="text-center text-2xl font-bold text-green-900 mb-8">PESAN PENGADUAN</h1>

        <form action="" method="POST" class="space-y-6">
            @csrf

            <div class="grid grid-cols-4 gap-4 items-center">
                <label for="nama" class="pl-36 font-bold text-green-900 col-span-1">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Anda"
                       class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none">
            </div>

            <div class="grid grid-cols-4 gap-4 items-center">
                <label for="alamat" class="pl-36 font-bold text-green-900 col-span-1">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Alamat Anda"
                       class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none">
            </div>

            <div class="grid grid-cols-4 gap-4 items-center">
                <label for="email" class="pl-36 font-bold text-green-900 col-span-1">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Alamat E-mail"
                       class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none">
            </div>

            <div class="grid grid-cols-4 gap-4 items-start">
                <label for="pesan" class="pl-36 font-bold text-green-900 col-span-1">Isi Pesan</label>
                <textarea id="pesan" name="pesan" rows="6" placeholder="Pesan"
                          class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none resize-none"></textarea>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit"
                        class="bg-green-900 text-white px-6 py-2 rounded hover:bg-green-800 transition">
                    KIRIM
                </button>
            </div>
        </form>
    </div>
    <x-footer/>
</body>
</html>