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
        return $this['name_' . app()->getLocale()];
    }
}
