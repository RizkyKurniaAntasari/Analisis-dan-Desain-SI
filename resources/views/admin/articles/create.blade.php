@extends('admin.layouts.app')

@section('content')
<div class="p-4">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">DATA PERTANIAN</h2>
        <div class="flex items-center">
            <span class="mr-2">Lekak Indah Lia</span>
            <img src="{{ asset('images/admin-avatar.jpg') }}" alt="Admin" class="w-10 h-10 rounded-full">
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-sm p-4">
        <div class="bg-green-700 text-white p-3 rounded-t-lg">
            <h3 class="font-semibold">Tambah Artikel</h3>
        </div>

        <div class="p-4 border border-green-200 rounded-b-lg bg-green-50">
            <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Artikel</label>
                    <input type="text" name="title" id="title" class="w-full p-2 border border-gray-300 rounded-md bg-green-100" value="{{ old('title') }}" required>
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Dibuat Oleh</label>
                    <input type="text" name="author" id="author" class="w-full p-2 border border-gray-300 rounded-md bg-green-100" value="{{ old('author') }}" required>
                    @error('author')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                    <select name="category" id="category" class="w-full p-2 border border-gray-300 rounded-md bg-green-100" required>
                        <option value="">Pilih Kategori</option>
                        <option value="Pertanian" {{ old('category') == 'Pertanian' ? 'selected' : '' }}>Pertanian</option>
                        <option value="Perkebunan" {{ old('category') == 'Perkebunan' ? 'selected' : '' }}>Perkebunan</option>
                    </select>
                    @error('category')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Gambar</label>
                    <input type="file" name="image" id="image" class="w-full p-2 border border-gray-300 rounded-md bg-green-100">
                    @error('image')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Isi Artikel</label>
                    <textarea name="content" id="content" rows="8" class="w-full p-2 border border-gray-300 rounded-md bg-green-100" required>{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end space-x-2">
                    <a href="{{ route('admin.articles.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Kembali</a>
                    <button type="submit" class="px-4 py-2 bg-green-700 text-white rounded-md">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
