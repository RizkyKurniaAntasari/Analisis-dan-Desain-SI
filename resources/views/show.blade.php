@extends('layouts.app')

@section('content')
<div class="bg-green-50 min-h-screen">
    <!-- Header with navigation -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="SIMAPAN" class="h-12">
                <div class="ml-2">
                    <h1 class="text-green-600 font-bold text-lg">SIMAPAN</h1>
                    <p class="text-gray-600 text-xs">SISTEM INFORMASI MANAJEMEN PERTANIAN KABUPATEN LAMPUNG BARAT</p>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <a href="#" class="text-gray-600"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-youtube"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
    </header>

    <!-- Navigation Menu -->
    <nav class="bg-green-600 text-white">
        <div class="container mx-auto px-4">
            <ul class="flex">
                <li><a href="#" class="block px-4 py-2 hover:bg-green-700">BERANDA</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-green-700">PROFIL</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-green-700">STATISTIK</a></li>
                <li><a href="#" class="block px-4 py-2 bg-green-700">ARTIKEL</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-green-700">PENGUMUMAN</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-green-700">PENYULUHAN</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-green-700">PENGADUAN</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-green-700">SUBSIDI</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-6">
        <div class="bg-white rounded-lg shadow p-6">
            <!-- Back button -->
            <a href="{{ route('articles.index') }}" class="inline-flex items-center text-gray-600 mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali
            </a>

            <!-- Article Title -->
            <h1 class="text-2xl font-bold text-green-800 mb-2">{{ $article->title }}</h1>
            
            <!-- Author and Date -->
            <p class="text-gray-600 mb-6">Oleh: {{ $article->author }} • {{ $article->published_at->format('d M Y') }}</p>
            
            <!-- Featured Image -->
            <div class="mb-6">
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full max-h-96 object-cover rounded">
            </div>
            
            <!-- Article Content -->
            <div class="prose max-w-none">
                {!! $article->content !!}
            </div>
            
            <!-- Tags -->
            @if($article->category)
            <div class="mt-6 pt-4 border-t">
                <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">
                    {{ $article->category }}
                </span>
            </div>
            @endif
            
            <!-- Related Articles -->
            @if(count($relatedArticles) > 0)
            <div class="mt-8 pt-6 border-t">
                <h3 class="text-xl font-bold mb-4">Artikel Terkait</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach($relatedArticles as $related)
                    <div class="border rounded overflow-hidden">
                        <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}" class="w-full h-40 object-cover">
                        <div class="p-3">
                            <p class="text-sm text-gray-500">{{ $related->published_at->format('d M Y') }}</p>
                            <h4 class="font-semibold">
                                <a href="{{ route('articles.show', $related->id) }}" class="hover:text-green-600">
                                    {{ Str::limit($related->title, 60) }}
                                </a>
                            </h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
