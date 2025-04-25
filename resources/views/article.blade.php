<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengajuan Subsidi</title>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
@include('components.navbar')
<body class="bg-[#DBE7C9] font-poppins">
<div class="bg-[#2f472d] min-h-screen px-4 py-8">
    <div class="container mx-auto px-4 py-6 flex">
        <!-- Sidebar Filter -->
        <aside class="w-1/4 bg-[#1f3020] text-white rounded-xl p-4 space-y-6">
            <div>
                <h2 class="font-bold text-lg mb-2">FILTER</h2>
                <form id="filterForm" method="GET" action="{{ route('admin.articles.index') }}">
                    <div>
                        <p class="font-semibold">JENIS PENGUMUMAN</p>
                        <ul class="space-y-1 mt-1">
                            @foreach($categories as $category)
                            <li>
                                <label class="flex items-center">
                                    <input type="checkbox" name="jenis_pengumuman[]" value="{{ $category }}" 
                                        class="mr-2" 
                                        {{ in_array($category, request('jenis_pengumuman', [])) ? 'checked' : '' }}>
                                    {{ $category }}
                                </label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mt-4">
                        <p class="font-semibold">WAKTU PUBLISH</p>
                        <ul class="space-y-1 mt-1">
                            <li>
                                <label class="flex items-center">
                                    <input type="radio" name="waktu_publish" value="1_minggu" class="mr-2"
                                        {{ request('waktu_publish') == '1_minggu' ? 'checked' : '' }}>
                                    1 minggu terakhir
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center">
                                    <input type="radio" name="waktu_publish" value="1_bulan" class="mr-2"
                                        {{ request('waktu_publish') == '1_bulan' ? 'checked' : '' }}>
                                    1 bulan terakhir
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center">
                                    <input type="radio" name="waktu_publish" value="3_bulan" class="mr-2"
                                        {{ request('waktu_publish') == '3_bulan' ? 'checked' : '' }}>
                                    3 bulan terakhir
                                </label>
                            </li>
                        </ul>
                    </div>
                    <button type="submit" class="mt-4 bg-green-600 text-white px-4 py-2 rounded-md">
                        Terapkan Filter
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1">
            <div class="bg-white rounded-lg shadow">
                <!-- Articles List -->
                @forelse($articles as $article)
                <div class="border-b border-gray-200 p-4 flex">
                    <div class="w-1/4 pr-4">
                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" 
                             class="w-full h-auto object-cover rounded">
                    </div>
                    <div class="w-3/4">
                        <div class="text-gray-500 text-sm mb-1">
                            {{ $article->published_at ? $article->published_at->format('M d, Y') : 'Belum dipublikasi' }}
                        </div>
                        <h3 class="font-bold text-lg text-green-800 mb-2">
                            <a href="{{ route('articles.show', $article->id) }}" class="hover:underline">
                                {{ $article->title }}
                            </a>
                        </h3>
                        <p class="text-gray-600 text-sm">
                            {{ Str::limit($article->excerpt, 150) }}
                        </p>
                    </div>
                </div>
                @empty
                <div class="p-4 text-center text-gray-500">
                    Tidak ada artikel yang ditemukan.
                </div>
                @endforelse

                <!-- Pagination -->
                <div class="p-4">
                    {{ $articles->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@include('components.footer')

<script>
    // Auto-submit form when filters change
    document.querySelectorAll('#filterForm input').forEach(input => {
        input.addEventListener('change', function() {
            document.getElementById('filterForm').submit();
        });
    });
</script>