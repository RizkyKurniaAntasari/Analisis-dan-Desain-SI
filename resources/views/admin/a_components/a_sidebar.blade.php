<aside class="w-52 bg-gradient-to-b from-[#294B29] to-[#39731B] text-white py-6 rounded-r-3xl">
    <div class="flex items-center justify-center mb-8">
        <img src="{{ asset('img/logo-simapan.png') }}" class="h-10" alt="Logo">
    </div>
    <nav class="space-y-2">
        <a href="{{ url('admin/a_dashboard') }}"
           class="flex items-center px-4 py-3 rounded-l-full ml-3
                  {{ Request::is('admin/a_dashboard') ? 'bg-[#CBDAA9] text-black font-bold' : 'hover:bg-[#417B3B] text-white' }}">
            <span class="mr-3">🏠</span>
            <span>BERANDA</span>
        </a>
        <a href="{{ url('#') }}"
           class="flex items-center px-4 py-3 rounded-l-full ml-3
                  {{ Request::is('#') ? 'bg-[#CBDAA9] text-black font-bold' : 'hover:bg-[#417B3B] text-white' }}">
            <span class="mr-3">📝</span>
            <span>AKUN TERDAFTAR</span>
        </a>
        <a href="{{ route('admin.articles.index') }}"
           class="flex items-center px-4 py-3 rounded-l-full ml-3
                  {{ Request::is('admin/articles/index*') ? 'bg-[#CBDAA9] text-black font-bold' : 'hover:bg-[#417B3B] text-white' }}">
            <span class="mr-3">💰</span>
            <span>DATA PERTANIAN</span>
        </a>
        <a href="{{ url('#') }}"
           class="flex items-center px-4 py-3 rounded-l-full ml-3
                  {{ Request::is('#') ? 'bg-[#CBDAA9] text-black font-bold' : 'hover:bg-[#417B3B] text-white' }}">
            <span class="mr-3">📊</span>
            <span>PROFIL</span>
        </a>
    </nav>

    <button class="text-red-400 flex items-center mt-24 ml-7">
        <span>[>]</span><span>Keluar</span>
    </button>
</aside>
