<?php

namespace App\Services;

use App\Models\Gallery;

class GalleryService
{
    public function getAllGalleries($limit = null)
    {
        $query = Gallery::with('images')
            ->orderBy('created_at', 'desc');

        if ($limit) {
            $query->take($limit);
        }

        return $query->get();
    }
}
