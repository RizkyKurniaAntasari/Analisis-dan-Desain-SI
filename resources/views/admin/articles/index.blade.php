<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIMAPAN Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#CBDAA9] font-poppins">
    <div class="flex min-h-screen">
      <!-- Sidebar -->
      @include('admin.a_components.a_sidebar')
    <main class="flex-1 p-6 space-y-6">  
    <div class="container mx-auto">
        <!-- Header -->
        @include('admin.a_components.a_navbar')
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-[#294B29]">Manajemen Artikel</h1>
            <button onclick="openCreateModal('article')" 
                    class="bg-[#294B29] text-white px-4 py-2 rounded-md flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Tambah Artikel
            </button>
        </div>

        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
        @endif

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-[#294B29] text-white">
                        <tr>
                            <th class="px-6 py-3 text-left">Judul</th>
                            <th class="px-6 py-3 text-left">Kategori</th>
                            <th class="px-6 py-3 text-left">Tanggal Publikasi</th>
                            <th class="px-6 py-3 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($articles as $article)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $article->title }}</td>
                            <td class="px-6 py-4">{{ $article->category }}</td>
                            <td class="px-6 py-4">
                                {{ $article->published_at ? $article->published_at->format('d M Y') : 'Belum dipublikasi' }}
                            </td>
                            <td class="px-6 py-4 flex space-x-2">
                                <a href="{{ route('admin.articles.edit', $article->id) }}" 
                                   class="text-blue-600 hover:text-blue-800">
                                    Edit
                                </a>
                                <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" 
                                            onclick="confirmDelete('{{ $article->title }}', this.form)"
                                            class="text-red-600 hover:text-red-800">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                                Tidak ada artikel ditemukan
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="px-6 py-4">
                {{ $articles->links() }}
            </div>
        </div>
    </div>
</div>

<!-- Create Modal -->
<div id="create-modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
    <div class="relative top-20 mx-auto p-5 border w-1/2 shadow-lg rounded-md bg-white">
        <div class="flex justify-between items-center mb-4">
            <h3 id="create-modal-title" class="text-lg font-medium"></h3>
            <button onclick="closeCreateModal()" class="text-gray-400 hover:text-gray-500">
                &times;
            </button>
        </div>
        <form id="create-form" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Form fields will be loaded here -->
            <div class="mt-4">
                <button type="submit" class="bg-[#294B29] text-white px-4 py-2 rounded-md">
                    Simpan
                </button>
                <button type="button" onclick="closeCreateModal()" 
                        class="ml-2 bg-gray-500 text-white px-4 py-2 rounded-md">
                    Batal
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="delete-modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
    <div class="relative top-20 mx-auto p-5 border w-1/3 shadow-lg rounded-md bg-white">
        <h3 class="text-lg font-medium mb-2">Konfirmasi Hapus</h3>
        <p id="delete-confirmation-text">Apakah Anda yakin ingin menghapus artikel ini?</p>
        <div class="mt-4">
            <form id="delete-form" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md">
                    Ya, Hapus
                </button>
                <button type="button" onclick="closeDeleteModal()" 
                        class="ml-2 bg-gray-500 text-white px-4 py-2 rounded-md">
                    Batal
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    // Create Modal Functions
    function openCreateModal(type) {
        const form = document.getElementById('create-form');
        form.action = '{{ route("admin.articles.store") }}';
        document.getElementById('create-modal-title').innerText = 'Tambah Artikel';
        
        // Clear previous content
        const formContent = form.querySelector('.form-content');
        if (formContent) formContent.remove();
        
        // Add appropriate fields based on type
        const contentDiv = document.createElement('div');
        contentDiv.className = 'form-content';
        
        if (type === 'article') {
            contentDiv.innerHTML = `
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Judul</label>
                    <input type="text" name="title" required 
                           class="w-full px-3 py-2 border rounded-md">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Kategori</label>
                    <select name="category" class="w-full px-3 py-2 border rounded-md">
                        <option value="Subsidi">Subsidi</option>
                        <option value="Pembaruan">Pembaruan</option>
                        <option value="Cuaca">Cuaca</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Konten</label>
                    <textarea name="content" rows="5" 
                              class="w-full px-3 py-2 border rounded-md"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Gambar</label>
                    <input type="file" name="image" 
                           class="w-full px-3 py-2 border rounded-md">
                </div>
            `;
        }
        
        form.insertBefore(contentDiv, form.lastElementChild);
        document.getElementById('create-modal').classList.remove('hidden');
    }

    function closeCreateModal() {
        document.getElementById('create-modal').classList.add('hidden');
    }

    // Delete Modal Functions
    function confirmDelete(title, form) {
        document.getElementById('delete-confirmation-text').innerText = 
            `Apakah Anda yakin ingin menghapus artikel "${title}"?`;
        document.getElementById('delete-form').action = form.action;
        document.getElementById('delete-modal').classList.remove('hidden');
    }

    function closeDeleteModal() {
        document.getElementById('delete-modal').classList.add('hidden');
    }
</script>
</div>
</main>
</body>
</html>
