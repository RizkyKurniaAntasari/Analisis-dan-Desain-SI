<aside class="w-52 bg-gradient-to-b from-[#294B29] to-[#39731B] text-white py-6 rounded-r-3xl">
    <div class="flex items-center justify-center mb-8">
        <img src="{{ asset('img/logo-simapan.png') }}" class="h-10" alt="Logo">
    </div>
    <nav class="space-y-2">
        <a href="{{ url('admin') }}"
            class="flex items-center px-4 py-3 rounded-l-full ml-3
          {{ Request::is('petugas/p_dashboard') ? 'bg-[#CBDAA9] text-black font-bold' : 'hover:bg-[#417B3B] text-white' }}">
            <span class="mr-3">
                <img src="{{ Request::is('petugas/p_dashboard') ? asset('icon/beranda_hitam.png') : asset('icon/beranda_admin_putih.png') }}" class="w-5">
            </span>
            <span>BERANDA</span>
        </a>

        {{-- belom di benerin pengaduannya --}}
        <a href="{{ url('admin/a_akun_terdaftar') }}"
        class="flex items-center px-4 py-3 rounded-l-full ml-3
               {{ Request::is('petugas/p_pengaduan*') ? 'bg-[#CBDAA9] text-black font-bold' : 'hover:bg-[#417B3B] text-white' }}">
         <span class="mr-3">
             <img src="{{ asset(Request::is('petugas/p_pengaduan*') ? 'icon/pengaduan_hitam.png' : 'icon/pengaduan_putih.png') }}" class="w-5">
         </span>
         <span>AKUN TERDAFTAR</span>
     </a>
     
     <a href="{{ url('petugas/p_subsidi') }}"
        class="flex items-center px-4 py-3 rounded-l-full ml-3
               {{ Request::is('petugas/p_subsidi*') ? 'bg-[#CBDAA9] text-black font-bold' : 'hover:bg-[#417B3B] text-white' }}">
         <span class="mr-3">
             <img src="{{ asset(Request::is('petugas/p_subsidi*') ? 'icon/subsidi_hitam.png' : 'icon/subsidi_putih.png') }}" class="w-5">
         </span>
         <span>DATA PERTANIAN</span>
     </a>
     
     <a href="{{ url('petugas/p_datadinas') }}"
        class="flex items-center px-4 py-3 rounded-l-full ml-3
               {{ Request::is('petugas/p_datadinas') ? 'bg-[#CBDAA9] text-black font-bold' : 'hover:bg-[#417B3B] text-white' }}">
         <span class="mr-3">
             <img src="{{ asset(Request::is('petugas/p_datadinas') ? 'icon/data_dinas_hitam.png' : 'icon/data_dinas_putih.png') }}" class="w-5">
         </span>
         <span>PROFIL</span>
     </a>
    
    </nav>
    <button class="text-white flex items-center absolute bottom-0 left-0 ml-5 mb-10">
        <span><img src="{{ asset(Request::is('petugas/p_pengaturan*') ? 'icon/keluar_admin.png' : 'icon/keluar_admin.png') }}" class="w-5"></span><span class="ml-2">KELUAR</span>
    </button>
</aside>
