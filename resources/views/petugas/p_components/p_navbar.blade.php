<!-- navbar.blade.php -->
<div class="flex justify-between items-center">
  <h2 class="text-3xl font-bold">
      @if (Request::is('petugas/p_dashboard'))
          Beranda
      @elseif (Request::is('petugas/p_datadinas'))
          Data Dinas
      @elseif (Request::is('petugas/p_pengaduan'))
          Pengaduan
      @elseif (Request::is('petugas/p_subsidi'))
          Subsidi
      @elseif (Request::is('petugas/p_update-harga'))
          Update Harga
      @elseif (Request::is('petugas/p_informasi-pertanian'))
          Informasi Pertanian
      @elseif (Request::is('petugas/p_pengaturan'))
          Pengaturan
      @else
          SIMAPAN
      @endif
  </h2>
  <div class="flex items-center space-x-4">
      <input type="text" placeholder="Cari disini" class="px-4 py-2 rounded-full border border-gray-300 focus:outline-none" />
      <span>🔔</span>
      <span>✉️</span>
      <div class="flex items-center space-x-2">
          <img src="https://i.pravatar.cc/40" alt="user" class="rounded-full w-10 h-10">
          <div>
              <p class="text-sm font-bold">Nadya Arsa</p>
              <p class="text-xs text-gray-600">Petugas</p>
          </div>
      </div>
  </div>
</div>
