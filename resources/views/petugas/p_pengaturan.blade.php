<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-[#CBDAA9] font-poppins text-black">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('petugas.p_components.p_sidebar')

        <!-- Main Content -->
        <!-- Ganti bagian ini di dalam <main> -->
        <main class="flex-1 p-6 space-y-6">
            <!-- Navbar -->
            @include('petugas.p_components.p_navbar')

            <!-- Konten Profil Akun -->
            <div class="bg-white rounded-lg shadow p-6 w-full">
 

                <!-- FOTO PROFIL -->
                <div class="mb-6">
                    <h2 class="text-lg font-semibold text-[#294B29] mb-2">Foto Profil Akun</h2>
                    <div class="flex items-center justify-between bg-[#DAE8C0] rounded-md border border-[#C7D7A3] p-3">
                        <span class="text-sm text-gray-800">profilPetugas.png</span>
                        <button class="bg-[#294B29] hover:bg-green-900 text-white text-sm px-4 py-1 rounded transition">
                            Ganti foto
                        </button>
                    </div>
                </div>

                <!-- NAMA AKUN -->
                <div class="mb-6">
                    <h2 class="text-lg font-semibold text-[#294B29] mb-2">Nama Akun</h2>
                    <div class="flex items-center justify-between bg-[#DAE8C0] rounded-md border border-[#C7D7A3] p-3">
                        <span class="text-sm text-gray-800">Nadya Arsa</span>
                        <button class="bg-[#294B29] hover:bg-green-900 text-white text-sm px-4 py-1 rounded transition">
                            Ganti nama
                        </button>
                    </div>
                </div>
            </div>
        </main>


</body>

</html>
