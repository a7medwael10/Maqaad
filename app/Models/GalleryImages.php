<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImages extends Model
{
    protected $table = 'gallery_images';

    protected $fillable = [
        'gallery_id',
        'image',
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class, 'gallery_id');
    }

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
