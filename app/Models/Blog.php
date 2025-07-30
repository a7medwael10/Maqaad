<?php

namespace App\Models;

use App\Traits\Slugable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Blog extends Model
{    use Slugable;

    protected $fillable = [
        'slug',
        'title_ar',
        'title_en',
        'content_ar',
        'content_en',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function getTitleAttribute()
    {
        return App::getLocale() === 'ar' ? $this->attributes['title_ar'] : $this->attributes['title_en'];
    }

    public function getContentAttribute()
    {
        return App::getLocale() === 'ar' ? $this->attributes['content_ar'] : $this->attributes['content_en'];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getPublishedAtAttribute($value)
    {
        if (!$value) {
            return null;
        }

        $date = Carbon::parse($value);
        $locale = App::getLocale();
        $date->locale($locale);

        return $date->translatedFormat('d M Y');
    }
}
