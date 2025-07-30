<?php

namespace App\Services;

use App\Models\News;

class NewsService
{
    public function getAllNews($limit = null)
    {
        $query = News::query()->orderBy('created_at', 'desc');

        if ($limit) {
            $query->take($limit);
        }

        return $query->get();
    }


    public function getNewsBySlug($slug)
    {
        return News::where('slug', $slug)->firstOrFail();
    }

    public function getLatestNews($limit = 3)
    {
        return News::latest()->take($limit)->get();
    }
}
