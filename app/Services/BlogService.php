<?php

namespace App\Services;

use App\Models\Blog;

class BlogService
{

    public function getAllBlogs($limit= null)
    {
        $query = Blog::query();

        if ($limit) {
            $query->take($limit);
        }

        return $query->get();
    }

    public function getBlogBySlug($slug)
    {
        return Blog::where('slug', $slug)->firstOrFail();
    }

    public function getLatestBlogs($limit = 10)
    {
        return Blog::latest()->take($limit)->get();
    }
}
