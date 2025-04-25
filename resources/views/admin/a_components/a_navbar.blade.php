<!-- navbar.blade.php -->
<div class="flex justify-between items-center">
    <h2 class="text-3xl font-bold">
        @if (Request::is('admin/a_dashboard'))
            Beranda
        @elseif (Request::is('petugas/p_datadinas'))
            Akun Terdaftar
        @elseif (Request::is('admin/articles/index'))
            Data Pertanian
        @elseif (Request::is('petugas/p_subsidi'))
            Subsidi
        @elseif (Request::is('petugas/p_update-harga'))
            Profil
        @else
            SIMAPAN
        @endif
    </h2>
    <div class="flex items-center space-x-4">
        <input type="text" placeholder="Cari disini" class="px-4 py-2 rounded-full border border-gray-300 focus:outline-none" />
        <span>🔔</span>
        <span>✉️</span>
        <div class="flex items-center space-x-2">
            <img src="" alt="user" class="rounded-full w-10 h-10">
            <div>
                <p class="text-sm font-bold">Lekok Indah Lia</p>
                <p class="text-xs text-gray-600">Admin</p>
            </div>
        </div>
    </div>
</div>
