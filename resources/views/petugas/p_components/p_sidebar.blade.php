<aside class="w-52 bg-gradient-to-b from-[#294B29] to-[#39731B] text-white py-6 rounded-r-3xl">
    <div class="flex items-center justify-center mb-8">
        <img src="{{ asset('img/logo-simapan.png') }}" class="h-10" alt="Logo">
    </div>
    <nav class="space-y-2">
        <a href="{{ url('petugas/p_dashboard') }}"
            class="flex items-center px-4 py-3 rounded-l-full ml-3
          {{ Request::is('petugas/p_dashboard') ? 'bg-[#CBDAA9] text-black font-bold' : 'hover:bg-[#417B3B] text-white' }}">
            <span class="mr-3">
                <img src="{{ Request::is('petugas/p_dashboard') ? asset('icon/beranda_hitam.png') : asset('icon/beranda_admin_putih.png') }}"
                    class="w-5">
            </span>
            <span>BERANDA</span>
        </a>

        {{-- belom di benerin pengaduannya --}}
        <a href="{{ url('petugas/p_pengaduan') }}"
            class="flex items-center px-4 py-3 rounded-l-full ml-3
               {{ Request::is('petugas/p_pengaduan*') ? 'bg-[#CBDAA9] text-black font-bold' : 'hover:bg-[#417B3B] text-white' }}">
            <span class="mr-3">
                <img src="{{ asset(Request::is('petugas/p_pengaduan*') ? 'icon/pengaduan_hitam.png' : 'icon/pengaduan_putih.png') }}"
                    class="w-5">
            </span>
            <span>PENGADUAN</span>
        </a>

        <a href="{{ url('petugas/p_subsidi') }}"
            class="flex items-center px-4 py-3 rounded-l-full ml-3
               {{ Request::is('petugas/p_subsidi*') ? 'bg-[#CBDAA9] text-black font-bold' : 'hover:bg-[#417B3B] text-white' }}">
            <span class="mr-3">
                <img src="{{ asset(Request::is('petugas/p_subsidi*') ? 'icon/subsidi_hitam.png' : 'icon/subsidi_putih.png') }}"
                    class="w-5">
            </span>
            <span>SUBSIDI</span>
        </a>

        <a href="{{ url('petugas/p_datadinas') }}"
            class="flex items-center px-4 py-3 rounded-l-full ml-3
               {{ Request::is('petugas/p_datadinas') ? 'bg-[#CBDAA9] text-black font-bold' : 'hover:bg-[#417B3B] text-white' }}">
            <span class="mr-3">
                <img src="{{ asset(Request::is('petugas/p_datadinas') ? 'icon/data_dinas_hitam.png' : 'icon/data_dinas_putih.png') }}"
                    class="w-5">
            </span>
            <span>DATA DINAS</span>
        </a>

        <a href="{{ url('petugas/p_update-harga') }}"
            class="flex items-center px-4 py-3 rounded-l-full ml-3
               {{ Request::is('petugas/p_update-harga*') ? 'bg-[#CBDAA9] text-black font-bold' : 'hover:bg-[#417B3B] text-white' }}">
            <span class="mr-3">
                <img src="{{ asset(Request::is('petugas/p_update-harga*') ? 'icon/update_harga_hitam.png' : 'icon/update_harga_putih.png') }}"
                    class="w-5">
            </span>
            <span>UPDATE HARGA</span>
        </a>

        <a href="{{ url('petugas/p_informasiPertanian') }}"
            class="flex items-center px-4 py-3 rounded-l-full ml-3
               {{ Request::is('petugas/p_informasiPertanian*') ? 'bg-[#CBDAA9] text-black font-bold' : 'hover:bg-[#417B3B] text-white' }}">
            <span class="mr-3">
                <img src="{{ asset(Request::is('petugas/p_informasiPertanian*') ? 'icon/informasi_pertanian_hitam.png' : 'icon/informasi_pertanian_putih.png') }}"
                    class="w-5">
            </span>
            <span>INFORMASI <br>PERTANIAN</span>
        </a>

        <a href="{{ url('petugas/p_pengaturan') }}"
            class="flex items-center px-4 py-3 rounded-l-full ml-3
               {{ Request::is('petugas/p_pengaturan*') ? 'bg-[#CBDAA9] text-black font-bold' : 'hover:bg-[#417B3B] text-white' }}">
            <span class="mr-3">
                <img src="{{ asset(Request::is('petugas/p_pengaturan*') ? 'icon/pengaturan_hitam.png' : 'icon/pengaturan_putih.png') }}"
                    class="w-5">
            </span>
            <span>PENGATURAN</span>
        </a>

    </nav>
    <!-- Logout Form -->
    <form id="logout-form" action="" method="" class="flex items-center ml-10 mt-10">
        @csrf
        <button type="button" id="logout-button" class="flex items-center text-white transition-colors duration-200">
            <img src="{{ asset('icon/keluar_admin.png') }}" class="w-5 mr-2">
            <span>KELUAR</span>
        </button>
    </form>

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Hover Style -->
    <style>
        #logout-button:hover span {
            color: #294B29;
        }
    </style>

    <!-- SweetAlert Confirmation Script -->
    <script>
        document.getElementById('logout-button').addEventListener('click', function() {
            Swal.fire({
                title: 'Konfirmasi Keluar',
                text: "Apakah Anda yakin ingin keluar?",
                imageUrl: '{{ asset('icon/keluar.png') }}', // Ganti ini ke ikonmu (jika mau pakai gambar)
                imageWidth: 80,
                imageHeight: 80,
                imageAlt: 'Ikon Logout',
                showCancelButton: true,
                confirmButtonColor: '#35860B',
                cancelButtonColor: '#35860B',
                confirmButtonText: 'Ya, keluar',
                cancelButtonText: 'Batal',
                customClass: {
                    popup: 'rounded-lg shadow-md'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logout-form').submit();
                }
            })
        });
    </script>

</aside>