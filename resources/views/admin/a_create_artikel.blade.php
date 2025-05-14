<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Tambah Artikel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F0F4EF] p-8 font-sans">
    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-semibold mb-4">Tambah Artikel</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div>
                <label>Judul:</label>
                <input type="text" name="judul" class="w-full p-2 border rounded" required>
            </div>

            <div>
                <label>Penulis:</label>
                <input type="text" name="penulis" class="w-full p-2 border rounded" required>
            </div>

            <div>
                <label>Deskripsi:</label>
                <textarea name="deskripsi" class="w-full p-2 border rounded" rows="5" required></textarea>
            </div>

            <div>
                <label>Gambar:</label>
                <input type="file" name="gambar" class="w-full p-2 border rounded" accept="image/*" required>
            </div>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</body>
</html>