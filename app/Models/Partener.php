<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Partener extends Model
{
    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
        'link',
    ];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function getNameAttribute()
    {
        return App::getLocale() === 'ar' ? $this->attributes['name_ar'] : $this->attributes['name_en'];
    }
}
