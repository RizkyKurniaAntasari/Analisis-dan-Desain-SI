<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengajuan Subsidi Bantuan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#DBE7C9]">
    <x-header/>
    <div class="bg-[#DBE7C9] p-10 rounded min-h-screen relative">
        <div class="absolute top-0 right-0 mt-4 mr-4">
            <div class="relative">
                <button id="notificationBtn" class="text-green-600 hover:text-green-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </button>
                <div id="notificationDropdown" class="hidden absolute right-0 mt-2 w-80 bg-white rounded-md shadow-lg z-50">
                    <div class="p-4 border-b">
                        <h3 class="font-bold text-gray-800">Notifikasi</h3>
                    </div>
                    <div class="max-h-64 overflow-y-auto">
                        <div class="p-3 border-b hover:bg-gray-50">
                            <p class="text-sm font-medium text-gray-800">Pengajuan Subsidi Pupuk</p>
                            <p class="text-xs text-gray-600">Pengajuan Anda telah disetujui. Silahkan ambil di kantor desa.</p>
                            <p class="text-xs text-gray-500 mt-1">2 jam yang lalu</p>
                        </div>
                        <div class="p-3 border-b hover:bg-gray-50">
                            <p class="text-sm font-medium text-gray-800">Pengajuan Subsidi Benih</p>
                            <p class="text-xs text-gray-600">Pengajuan Anda sedang dalam proses verifikasi.</p>
                            <p class="text-xs text-gray-500 mt-1">1 hari yang lalu</p>
                        </div>
                        <div class="p-3 hover:bg-gray-50">
                            <p class="text-sm font-medium text-gray-800">Pengajuan Subsidi Pestisida</p>
                            <p class="text-xs text-gray-600">Pengajuan Anda telah ditolak. Silahkan hubungi kantor desa.</p>
                            <p class="text-xs text-gray-500 mt-1">3 hari yang lalu</p>
                        </div>
                    </div>
                    <div class="p-2 text-center border-t">
                        <a href="#" class="text-sm text-green-600 hover:text-green-800">Lihat Semua Notifikasi</a>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-center text-2xl font-bold text-green-900 mb-8">PENGAJUAN SUBSIDI BANTUAN</h1>
        
        <form action="" method="POST" class="max-w-4xl mx-auto space-y-4" enctype="multipart/form-data">
            @csrf
            
            <div class="grid grid-cols-5 gap-4 items-center">
                <label for="nama" class="font-semibold text-green-900 col-span-1">Nama</label>
                <div class="col-span-4">
                    <input type="text" id="nama" name="nama" placeholder="-" 
                        class="w-full p-3 rounded bg-[#8DA47E]/70 text-white placeholder-white focus:outline-none">
                </div>
            </div>
            
            <div class="grid grid-cols-5 gap-4 items-center">
                <label for="alamat" class="font-semibold text-green-900 col-span-1">Alamat</label>
                <div class="col-span-4">
                    <input type="text" id="alamat" name="alamat" placeholder="-" 
                        class="w-full p-3 rounded bg-[#8DA47E]/70 text-white placeholder-white focus:outline-none">
                </div>
            </div>
            
            <div class="grid grid-cols-5 gap-4 items-center">
                <label for="nik" class="font-semibold text-green-900 col-span-1">NIK</label>
                <div class="col-span-4">
                    <input type="text" id="nik" name="nik" placeholder="-" 
                        class="w-full p-3 rounded bg-[#8DA47E]/70 text-white placeholder-white focus:outline-none">
                </div>
            </div>
            
            <div class="grid grid-cols-5 gap-4 items-center">
                <label for="ktp" class="font-semibold text-green-900 col-span-1">KTP</label>
                <div class="col-span-4">
                    <input type="file" id="ktp" name="ktp" placeholder="contoh.pdf" 
                        class="w-full p-3 rounded bg-[#8DA47E]/70 text-white placeholder-white focus:outline-none">
                </div>
            </div>
            
            <div class="grid grid-cols-5 gap-4 items-center">
                <label for="jenis_subsidi" class="font-semibold text-green-900 col-span-1">Jenis Subsidi</label>
                <div class="col-span-4 relative">
                    <select id="jenis_subsidi" name="jenis_subsidi" placeholder=""
                        class="w-full p-3 rounded bg-[#8DA47E]/70 text-white appearance-none focus:outline-none">
                        <option value="">Pilih Jenis Subsidi</option>
                        <option value="pupuk">Pupuk</option>
                        <option value="benih">Benih</option>
                        <option value="pestisida">Pestisida</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
            </div>
            
            <div id="pupuk_fields" class="space-y-4 hidden">
                <div class="grid grid-cols-5 gap-4 items-center">
                    <label for="jenis_pupuk" class="font-semibold text-green-900 col-span-1">Jenis Pupuk</label>
                    <div class="col-span-4 relative">
                        <select id="jenis_pupuk" name="jenis_pupuk" 
                            class="w-full p-3 rounded bg-[#8DA47E]/70 text-white appearance-none focus:outline-none">
                            <option value="">Pilih Jenis Pupuk</option>
                            <option value="urea">UREA</option>
                            <option value="npk">NPK</option>
                            <option value="za">ZA</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-5 gap-4 items-center">
                    <label for="volume_pupuk" class="font-semibold text-green-900 col-span-1">Volume Pupuk</label>
                    <div class="col-span-4 relative">
                    <input type="number" id="Volume_Pupuk" name="Volume_Pupuk" placeholder="Masukkan volume (kg/liter)"
                    class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex justify-end pt-4">
                <button type="submit" class="bg-green-900 text-white px-6 py-2 rounded hover:bg-green-800 transition">
                    KIRIM
                </button>
            </div>
        </form>
        
        <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
            <div class="bg-[#F5F5DC] p-8 rounded-lg text-center max-w-md">
                <div class="flex justify-center mb-4">
                    <div class="bg-green-500 rounded-full p-2">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                </div>
                <h2 class="text-xl font-bold text-gray-800 mb-2">Pengajuan Anda Berhasil Dikirim!</h2>
            </div>
        </div>
    </div>
    
    <x-footer/>
    
    <script>
        document.getElementById('jenis_subsidi').addEventListener('change', function() {
            const pupukFields = document.getElementById('pupuk_fields');
            if (this.value === 'pupuk') {
                pupukFields.classList.remove('hidden');
            } else {
                pupukFields.classList.add('hidden');
            }
        });
        
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            document.getElementById('successModal').classList.remove('hidden');
        });
        
        // Close modal when clicking anywhere on the page
        document.addEventListener('click', function(e) {
            const modal = document.getElementById('successModal');
            if (!modal.classList.contains('hidden')) {
                modal.classList.add('hidden');
            }
        });
        
        document.getElementById('notificationBtn').addEventListener('click', function(e) {
            e.stopPropagation();
            const dropdown = document.getElementById('notificationDropdown');
            dropdown.classList.toggle('hidden');
        });
        
        document.getElementById('notificationDropdown').addEventListener('click', function(e) {
            e.stopPropagation();
        });
        
        window.addEventListener('click', function() {
            const dropdown = document.getElementById('notificationDropdown');
            dropdown.classList.add('hidden');
        });
    </script>
</body>
</html>