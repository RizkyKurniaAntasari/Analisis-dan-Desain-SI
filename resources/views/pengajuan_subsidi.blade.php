<!-- resources/views/pengaduan.blade.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Subsidi</title>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#DBE7C9] font-poppins">
    @include('components.navbar')
    <div class="bg-[#DBE7C9] p-10 rounded min-h-screen items-center justify-center">
        <h1 class="text-center text-2xl font-bold text-green-900 mb-8">PENGAJUAN SUBSIDI</h1>
        <form action="{{ route('pengajuan_subsidi.store') }}" method="POST" class="space-y-6 px-20" autocomplete="off">
            @csrf

            <!-- NAMA -->
            <div class="flex items-center mb-4">
                <label for="nama" class="font-bold text-green-900 w-32">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Anda" required
                    class="flex-1 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none"
                    value="{{ old('nama') }}">
            </div>
            @error('nama')
                <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
            @enderror

            <!-- ALAMAT -->
            <div class="flex items-center mb-4">
                <label for="alamat" class="font-bold text-green-900 w-32">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Alamat Anda" required
                    class="flex-1 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none"
                    value="{{ old('alamat') }}">
            </div>
            @error('alamat')
                <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
            @enderror

            <!-- NIK -->
            <div class="flex items-center mb-4">
                <label for="nik" class="font-bold text-green-900 w-32">NIK</label>
                <input type="text" id="nik" name="nik" placeholder="Nomor Induk Kependudukan" required
                    class="flex-1 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none"
                    value="{{ old('nik') }}">
            </div>
            @error('nik')
                <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
            @enderror

            <!-- JENIS SUBSIDI -->
            <div class="flex items-center mb-4">
                <label for="jenis_subsidi" class="font-bold text-green-900 w-32">Jenis Subsidi</label>
                <select id="jenis_subsidi" name="jenis_subsidi"
                    class="flex-1 p-3 rounded bg-[#294B29] opacity-50 text-white appearance-none focus:outline-none">
                    <option value="" disabled selected>Pilih Jenis Subsidi</option>
                    <option value="pupuk">Pupuk</option>
                    <option value="benih">Benih</option>
                    <option value="pestisida">Pestisida</option>
                </select>
            </div>
            @error('jenis_subsidi')
                <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
            @enderror

            <div id="pupuk_fields" class="space-y-4 hidden">
                <!-- Jenis Pupuk -->
                <div class="flex items-center mb-4">
                    <label for="jenis_pupuk" class="font-bold text-green-900 w-32">Jenis Pupuk</label>
                    <select id="jenis_pupuk" name="jenis_pupuk"
                        class="flex-1 p-3 rounded bg-[#294B29] opacity-50 text-white appearance-none focus:outline-none">
                        <option value="">Pilih Jenis Pupuk</option>
                        <option value="urea">UREA</option>
                        <option value="npk">NPK</option>
                        <option value="za">ZA</option>
                    </select>
                </div>
                @error('jenis_pupuk')
                    <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
                @enderror
                <!-- Volume Pupuk -->
                <div class="flex items-center mb-4">
                    <label for="volume_pupuk" class="font-bold text-green-900 w-32">Volume Pupuk</label>
                    <input type="number" id="volume_pupuk" name="volume_pupuk" placeholder="Masukkan volume (kg/liter)"
                        class="flex-1 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none">
                </div>
                @error('volume_pupuk')
                    <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- TOMBOL KIRIM -->
            <div class="flex justify-center md:justify-end pt-4">
                <button type="submit" class="bg-green-900 text-white px-6 py-2 rounded hover:bg-green-800 transition">
                    KIRIM
                </button>
            </div>
        </form>
    </div>

    @include('components.footer')
    <script>
        // Tampilkan input tambahan saat pilih "pupuk"
        document.getElementById('jenis_subsidi').addEventListener('change', function() {
            const pupukFields = document.getElementById('pupuk_fields');
            if (this.value === 'pupuk') {
                pupukFields.classList.remove('hidden');
            } else {
                pupukFields.classList.add('hidden');
            }
        });

        // Saat form dikirim (biarkan dikirim ke Laravel)
        document.querySelector('form').addEventListener('submit', function() {
            const submitButton = this.querySelector('button[type="submit"]');
            submitButton.disabled = true;
            submitButton.innerText = "Mengirim...";
        });

        // Tampilkan SweetAlert jika ada session success dari backend Laravel
        @if (session('success'))
            Swal.fire({
                title: 'Pengajuan Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#294B29',
                draggable: true

            });
        @endif

        // Toggle notifikasi
        document.getElementById('notificationBtn')?.addEventListener('click', function(e) {
            e.stopPropagation();
            const dropdown = document.getElementById('notificationDropdown');
            dropdown.classList.toggle('hidden');
        });

        document.getElementById('notificationDropdown')?.addEventListener('click', function(e) {
            e.stopPropagation();
        });

        window.addEventListener('click', function() {
            const dropdown = document.getElementById('notificationDropdown');
            dropdown?.classList.add('hidden');
        });
    </script>

</body>

</html>
