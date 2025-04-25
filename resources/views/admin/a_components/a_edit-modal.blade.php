<!-- Edit Modal Component -->
<div id="edit-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
    <div class="bg-white rounded-xl max-w-3xl mx-auto mt-20 shadow-lg overflow-hidden">
        <div class="bg-[#294B29] text-white p-4">
            <h3 id="edit-modal-title" class="font-semibold text-lg">Edit Artikel</h3>
        </div>
        
        <form id="edit-form" method="POST" enctype="multipart/form-data" class="p-6">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label for="edit-title" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                    <input type="text" name="title" id="edit-title" class="w-full p-2 border border-gray-300 rounded-md bg-green-50" required>
                </div>
                
                <div>
                    <label for="edit-author" class="block text-sm font-medium text-gray-700 mb-1">Dibuat Oleh</label>
                    <input type="text" name="author" id="edit-author" class="w-full p-2 border border-gray-300 rounded-md bg-green-50" required>
                </div>
                
                <div>
                    <label for="edit-category" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                    <select name="category" id="edit-category" class="w-full p-2 border border-gray-300 rounded-md bg-green-50" required>
                        <option value="">Pilih Kategori</option>
                        <option value="Pertanian">Pertanian</option>
                        <option value="Perkebunan">Perkebunan</option>
                    </select>
                </div>
                
                <div>
                    <label for="edit-image" class="block text-sm font-medium text-gray-700 mb-1">Gambar</label>
                    <div id="image-preview" class="mb-2 hidden">
                        <img id="current-image" src="/placeholder.svg" alt="Preview" class="h-32 object-cover rounded">
                    </div>
                    <input type="file" name="image" id="edit-image" class="w-full p-2 border border-gray-300 rounded-md bg-green-50">
                    <p class="text-xs text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengubah gambar</p>
                </div>
                
                <div>
                    <label for="edit-content" class="block text-sm font-medium text-gray-700 mb-1">Isi</label>
                    <textarea name="content" id="edit-content" rows="6" class="w-full p-2 border border-gray-300 rounded-md bg-green-50" required></textarea>
                </div>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" onclick="closeEditModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Batal</button>
                <button type="submit" class="px-4 py-2 bg-[#294B29] text-white rounded-md">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
