<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class AdminArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Article::query();
        
        // Search functionality
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%")
                  ->orWhere('author', 'like', "%{$search}%");
            });
        }
        
        $articles = $query->orderBy('published_at', 'desc')->paginate(10);
        
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'published_at' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
            $validated['image'] = $imagePath;
        }
        
        // Convert published_at to Carbon instance
        $validated['published_at'] = Carbon::parse($validated['published_at']);
        
        Article::create($validated);
        
        return redirect()->route('admin.articles.index')
            ->with('success', 'Artikel berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'published_at' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            
            // Store new image
            $imagePath = $request->file('image')->store('articles', 'public');
            $validated['image'] = $imagePath;
        }
        
        // Convert published_at to Carbon instance
        $validated['published_at'] = Carbon::parse($validated['published_at']);
        
        $article->update($validated);
        
        return redirect()->route('admin.articles.index')
            ->with('success', 'Artikel berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        // Delete image from storage
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }
        
        $article->delete();
        
        return redirect()->route('admin.articles.index')
            ->with('success', 'Artikel berhasil dihapus');
    }
}
