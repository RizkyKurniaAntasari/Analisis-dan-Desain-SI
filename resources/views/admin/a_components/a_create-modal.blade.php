<!-- Update your form fields to match the database structure -->
<form id="create-form" action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
    @csrf
    <div class="grid grid-cols-1 gap-4">
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul*</label>
            <input type="text" name="title" id="title" class="w-full p-2 border border-gray-300 rounded-md bg-green-50" 
                   value="{{ old('title') }}" required>
            @error('title')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <div>
            <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Penulis*</label>
            <input type="text" name="author" id="author" class="w-full p-2 border border-gray-300 rounded-md bg-green-50" 
                   value="{{ old('author') }}" required>
            @error('author')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <div>
            <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
            <select name="category" id="category" class="w-full p-2 border border-gray-300 rounded-md bg-green-50">
                <option value="">Pilih Kategori</option>
                <option value="Pertanian" {{ old('category') == 'Pertanian' ? 'selected' : '' }}>Pertanian</option>
                <option value="Perkebunan" {{ old('category') == 'Perkebunan' ? 'selected' : '' }}>Perkebunan</option>
                <option value="Subsidi" {{ old('category') == 'Subsidi' ? 'selected' : '' }}>Subsidi</option>
            </select>
            @error('category')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <div>
            <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Gambar*</label>
            <input type="file" name="image" id="image" class="w-full p-2 border border-gray-300 rounded-md bg-green-50" required>
            @error('image')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        
        <div>
            <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Konten*</label>
            <textarea name="content" id="content" rows="6" class="w-full p-2 border border-gray-300 rounded-md bg-green-50" required>{{ old('content') }}</textarea>
            @error('content')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>
    
    <div class="mt-6 flex justify-end space-x-3">
        <button type="button" onclick="closeCreateModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Batal</button>
        <button type="submit" class="px-4 py-2 bg-[#294B29] text-white rounded-md">Simpan</button>
    </div>
</form>