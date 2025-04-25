<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'category' => 'nullable|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'content' => 'required|string',
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = Str::random(20) . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('article_images', $filename, 'public');
        $validated['image'] = $path;
    }

    // Create excerpt from content (first 150 characters)
    $validated['excerpt'] = Str::limit(strip_tags($request->content), 150);
    
    // Set published_at to current time
    $validated['published_at'] = now();

    // Create article
    Article::create($validated);

    return redirect()->route('admin.articles.index')
        ->with('success', 'Artikel berhasil ditambahkan');
}
    public function index(Request $request)
    {
        $query = Article::query();
        
        // Filter by announcement type
        if ($request->has('jenis_pengumuman')) {
            $query->whereIn('category', $request->jenis_pengumuman);
        }
        
        // Filter by time period
        if ($request->has('waktu_publish')) {
            $this->applyTimePeriodFilter($query, $request->waktu_publish);
        }
        
        $articles = $query->latest('published_at')->paginate(10);
        
        return view('article', [
            'articles' => $articles,
            'categories' => $this->getCategories()
        ]);
    }

    protected function applyTimePeriodFilter($query, $timePeriod)
    {
        switch ($timePeriod) {
            case '1_minggu':
                $query->where('published_at', '>=', now()->subWeek());
                break;
            case '1_bulan':
                $query->where('published_at', '>=', now()->subMonth());
                break;
            case '3_bulan':
                $query->where('published_at', '>=', now()->subMonths(3));
                break;
        }
    }

    protected function getCategories()
    {
        return [
            'Subsidi',
            'Pembaruan',
            'Cuaca',
            'Lainnya'
        ];
    }
}