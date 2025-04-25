<!-- navbar.blade.php -->
<div class="flex justify-between items-center">
  <h2 class="text-3xl font-bold">
      @if (Request::is('petugas/p_dashboard'))
          BERANDA
      @elseif (Request::is('petugas/p_datadinas'))
          DATA DINAS
      @elseif (Request::is('petugas/p_pengaduan'))
          PENGADUAN
      @elseif (Request::is('petugas/p_subsidi'))
          SUBSIDI
      @elseif (Request::is('petugas/p_update-harga'))
          UPDATE HARGA
      @elseif (Request::is('petugas/p_informasi-pertanian'))
          INFORMASI PERTANIAN
      @elseif (Request::is('petugas/p_pengaturan'))
          PENGATURAN
      @else
          SIMAPAN
      @endif
  </h2>
  {{-- <input type="text" placeholder="Cari disini" class="px-4 py-2 rounded-full border border-gray-300 focus:outline-none flex mx-auto" /> --}}
  <div class="flex items-center space-x-4">
      <div class="flex items-center space-x-2">
          <img src="https://i.pravatar.cc/40" alt="user" class="rounded-full w-10 h-10">
          <div>
              <p class="text-sm font-bold">Nadya Arsa</p>
              <p class="text-xs text-gray-600">Petugas</p>
          </div>
      </div>
  </div>
</div>
