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
@section('content')
<main class="flex-1 p-6 space-y-6">
    <!-- Header -->
    @include('admin.a_components.a_navbar')

    <!-- Cards -->
    <div class="grid grid-cols-4 gap-4">
    <div class="bg-[#294B29] text-white p-4 rounded-xl shadow">Pengaduan <p class="text-2xl font-bold">24</p></div>
    <div class="bg-[#1E5800] text-white p-4 rounded-xl shadow">Subsidi <p class="text-2xl font-bold">12</p></div>
    <div class="bg-[#39731B] text-white p-4 rounded-xl shadow">Artikel Ditambahkan <p class="text-2xl font-bold">75</p></div>
    <div class="bg-[#35860B] text-white p-4 rounded-xl shadow">Data Ditambahkan <p class="text-2xl font-bold">35</p></div>
    </div>
<div class="p-4">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">DATA PERTANIAN</h2>
        <div class="flex items-center">
            <span class="mr-2">Lekak Indah Lia</span>
            <img src="{{ asset('images/admin-avatar.jpg') }}" alt="Admin" class="w-10 h-10 rounded-full">
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-sm p-4">
        <div class="mb-4 border-b">
            <ul class="flex">
                <li class="mr-4 pb-2 border-b-2 border-green-700 font-semibold">
                    <a href="#" class="text-green-800">Artikel</a>
                </li>
                <li class="mr-4 pb-2">
                    <a href="#" class="text-gray-600">Pengumuman</a>
                </li>
                <li class="mr-4 pb-2">
                    <a href="#" class="text-gray-600">Penyuluhan</a>
                </li>
            </ul>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full">
                <tbody>
                    <tr class="border-b">
                        <td class="py-3 px-2 w-24 text-gray-500 text-sm">{{ $article->published_at->format('d M Y') }}</td>
                        <td class="py-3">
                            <span class="text-green-800">{{ $article->title }}</span>
                        </td>
                        <td class="py-3 px-2 w-20 text-right">
                            <div class="flex justify-end">
                                <a href="{{ route('admin.articles.edit', $article->id) }}" class="text-gray-600 hover:text-green-600 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-600 hover:text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
            <div class="bg-green-700 text-white p-6 rounded-lg max-w-md">
                <h3 class="text-lg font-semibold mb-4">Apakah Anda yakin ingin menghapus artikel ini?</h3>
                
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('admin.articles.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Kembali</a>
                    
                    <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</body>
@endsection
