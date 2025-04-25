<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Announcement;
use App\Models\Guidance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    /**
     * Display a listing of articles.
     */
    public function indexArticles()
    {
        $articles = Article::orderBy('published_at', 'desc')->get();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Display a listing of announcements.
     */
    public function indexAnnouncements()
    {
        $announcements = Announcement::orderBy('published_at', 'desc')->get();
        return view('admin.announcements.index', compact('announcements'));
    }

    /**
     * Display a listing of guidance content.
     */
    public function indexGuidance()
    {
        $guidanceItems = Guidance::orderBy('published_at', 'desc')->get();
        return view('admin.guidance.index', compact('guidanceItems'));
    }

    /**
     * Get content data for editing.
     */
    public function getEditData($type, $id)
    {
        switch ($type) {
            case 'article':
                $content = Article::findOrFail($id);
                break;
            case 'announcement':
                $content = Announcement::findOrFail($id);
                break;
            case 'guidance':
                $content = Guidance::findOrFail($id);
                break;
            default:
                return response()->json(['error' => 'Invalid content type'], 400);
        }

        return response()->json($content);
    }

    /**
     * Store a newly created article.
     */
    public function storeArticle(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $article = new Article();
        $article->title = $validated['title'];
        $article->author = $validated['author'];
        $article->content = $validated['content'];
        $article->category = $validated['category'];
        $article->excerpt = Str::limit(strip_tags($validated['content']), 200);
        $article->published_at = now();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('articles', 'public');
            $article->image = $path;
        } else {
            // Default image if none provided
            $article->image = 'articles/default.jpg';
        }

        $article->save();

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil ditambahkan');
    }

    /**
     * Store a newly created announcement.
     */
    public function storeAnnouncement(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $announcement = new Announcement();
        $announcement->title = $validated['title'];
        $announcement->author = $validated['author'];
        $announcement->content = $validated['content'];
        $announcement->category = $validated['category'];
        $announcement->excerpt = Str::limit(strip_tags($validated['content']), 200);
        $announcement->published_at = now();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('announcements', 'public');
            $announcement->image = $path;
        }

        $announcement->save();

        return redirect()->route('admin.announcements.index')->with('success', 'Pengumuman berhasil ditambahkan');
    }

    /**
     * Store a newly created guidance content.
     */
    public function storeGuidance(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $guidance = new Guidance();
        $guidance->title = $validated['title'];
        $guidance->author = $validated['author'];
        $guidance->content = $validated['content'];
        $guidance->category = $validated['category'];
        $guidance->excerpt = Str::limit(strip_tags($validated['content']), 200);
        $guidance->published_at = now();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('guidance', 'public');
            $guidance->image = $path;
        }

        $guidance->save();

        return redirect()->route('admin.guidance.index')->with('success', 'Penyuluhan berhasil ditambahkan');
    }

    /**
     * Update the specified article.
     */
    public function updateArticle(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $article = Article::findOrFail($id);
        $article->title = $validated['title'];
        $article->author = $validated['author'];
        $article->content = $validated['content'];
        $article->category = $validated['category'];
        $article->excerpt = Str::limit(strip_tags($validated['content']), 200);

        if ($request->hasFile('image')) {
            // Delete old image if it exists and is not the default
            if ($article->image && $article->image != 'articles/default.jpg') {
                Storage::disk('public')->delete($article->image);
            }
            
            $path = $request->file('image')->store('articles', 'public');
            $article->image = $path;
        }

        $article->save();

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diperbarui');
    }

    /**
     * Update the specified announcement.
     */
    public function updateAnnouncement(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $announcement = Announcement::findOrFail($id);
        $announcement->title = $validated['title'];
        $announcement->author = $validated['author'];
        $announcement->content = $validated['content'];
        $announcement->category = $validated['category'];
        $announcement->excerpt = Str::limit(strip_tags($validated['content']), 200);

        if ($request->hasFile('image')) {
            if ($announcement->image) {
                Storage::disk('public')->delete($announcement->image);
            }
            
            $path = $request->file('image')->store('announcements', 'public');
            $announcement->image = $path;
        }

        $announcement->save();

        return redirect()->route('admin.announcements.index')->with('success', 'Pengumuman berhasil diperbarui');
    }

    /**
     * Update the specified guidance content.
     */
    public function updateGuidance(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $guidance = Guidance::findOrFail($id);
        $guidance->title = $validated['title'];
        $guidance->author = $validated['author'];
        $guidance->content = $validated['content'];
        $guidance->category = $validated['category'];
        $guidance->excerpt = Str::limit(strip_tags($validated['content']), 200);

        if ($request->hasFile('image')) {
            if ($guidance->image) {
                Storage::disk('public')->delete($guidance->image);
            }
            
            $path = $request->file('image')->store('guidance', 'public');
            $guidance->image = $path;
        }

        $guidance->save();

        return redirect()->route('admin.guidance.index')->with('success', 'Penyuluhan berhasil diperbarui');
    }

    /**
     * Remove the specified article.
     */
    public function destroyArticle($id)
    {
        $article = Article::findOrFail($id);
        
        // Delete image if it exists and is not the default
        if ($article->image && $article->image != 'articles/default.jpg') {
            Storage::disk('public')->delete($article->image);
        }
        
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dihapus');
    }

    /**
     * Remove the specified announcement.
     */
    public function destroyAnnouncement($id)
    {
        $announcement = Announcement::findOrFail($id);
        
        if ($announcement->image) {
            Storage::disk('public')->delete($announcement->image);
        }
        
        $announcement->delete();

        return redirect()->route('admin.announcements.index')->with('success', 'Pengumuman berhasil dihapus');
    }

    /**
     * Remove the specified guidance content.
     */
    public function destroyGuidance($id)
    {
        $guidance = Guidance::findOrFail($id);
        
        if ($guidance->image) {
            Storage::disk('public')->delete($guidance->image);
        }
        
        $guidance->delete();

        return redirect()->route('admin.guidance.index')->with('success', 'Penyuluhan berhasil dihapus');
    }
}
