<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Gallery extends Model
{
    protected $table = 'gallery';

    protected $fillable = [
        'title_ar',
        'title_en',
    ];

    public function getTitleAttribute()
    {
        return App::getLocale() === 'ar' ? $this->attributes['title_ar'] : $this->attributes['title_en'];
    }


    public function images()
    {
        return $this->hasMany(GalleryImages::class, 'gallery_id');
    }
}
