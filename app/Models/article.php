<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'image',
        'author',
        'category',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')
                    ->where('published_at', '<=', now())
                    ->orderBy('published_at', 'desc');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->where('category', $category);
        });

        $query->when($filters['time_period'] ?? false, function ($query, $period) {
            if ($period === 'week') {
                return $query->where('published_at', '>=', now()->subWeek());
            } elseif ($period === 'month') {
                return $query->where('published_at', '>=', now()->subMonth());
            } elseif ($period === 'three_months') {
                return $query->where('published_at', '>=', now()->subMonths(3));
            }
        });
    }

    public function getRelatedArticles($limit = 3)
    {
        return self::published()
            ->where('id', '!=', $this->id)
            ->where('category', $this->category)
            ->limit($limit)
            ->get();
    }
}
