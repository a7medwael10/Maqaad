<?php

namespace App\Models;

use App\Traits\Slugable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class News extends Model
{
    use Slugable;

    protected $fillable = [
        'slug',
        'title_ar',
        'title_en',
        'content_ar',
        'content_en',
        'image',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'date',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function getTitleAttribute()
    {
        return App::getLocale() === 'ar' ? $this->attributes['title_ar'] : $this->attributes['title_en'];
    }

    public function getContentAttribute()
    {
        return App::getLocale() === 'ar' ? $this->attributes['content_ar'] : $this->attributes['content_en'];
    }

    public function getPublishedAtAttribute($value)
    {
        if (!$value) {
            return null;
        }

        $date = Carbon::parse($value);
        $locale = App::getLocale(); // 'ar' or 'en'
        $date->locale($locale);

        return $date->translatedFormat('d M Y'); // مثلا: 24 يوليو 2025 أو 24 Jul 2025
    }

}
