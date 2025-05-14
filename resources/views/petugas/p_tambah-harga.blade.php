<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Harga</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#CBDAA9] font-poppins">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('petugas.p_components.p_sidebar')

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Navbar -->
            @include('petugas.p_components.p_navbar')

            <!-- Form Container -->
            <div class="w-full max-w-6xl mx-auto mt-10 relative">
                <!-- Tab Header -->
                <div class="bg-[#1C3D1C] inline-block px-4 py-2 rounded-t-md text-white font-semibold">
                    Tambah Harga Kopi
                </div>

                <!-- Form Container -->
                <div class="border border-[#1C3D1C] bg-[#CBDAA9] p-6 rounded-b-md">
                    <form id="formHarga" action="#" method="POST" class="space-y-8">
                        <div class="flex items-center space-x-4 mt-4 pl-20">
                            <label for="harga" class="w-24 font-semibold text-[#1C3D1C] text-center">Harga</label>
                            <input type="number" name="harga" id="harga" placeholder="Ketik disini..."
                                class="bg-[#79966C] text-white placeholder-white w-full max-w-3xl px-6 py-2 rounded shadow focus:outline-none text-left" required>
                        </div>
                    </form>
                </div>

                <!-- Tombol Simpan di luar form -->
                <div class="flex justify-end space-x-4 mt-80">
                    <a href="{{ url('petugas/p_update-harga') }}" 
                        class="bg-gray-500 text-white px-6 py-2 rounded shadow hover:bg-gray-600">
                        Kembali
                    </a>
                    <button type="submit" form="formHarga"
                        class="bg-[#1C3D1C] text-white px-6 py-2 rounded shadow hover:bg-[#163216]">
                        Simpan
                    </button>
                </div>
            </div>
        </main>
    </div>
</body>
</html>