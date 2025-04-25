<!-- Delete Confirmation Modal Component -->
<div id="delete-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
    <div class="bg-white rounded-xl max-w-md mx-auto mt-32 shadow-lg overflow-hidden">
        <div class="bg-red-600 text-white p-4">
            <h3 id="delete-modal-title" class="font-semibold text-lg">Hapus Artikel</h3>
        </div>
        
        <div class="p-6">
            <p id="delete-confirmation-text" class="mb-2">Apakah Anda yakin ingin menghapus artikel ini?</p>
            <p class="text-gray-700 font-semibold" id="delete-content-title"></p>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" onclick="closeDeleteModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Batal</button>
                <form id="delete-form" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
