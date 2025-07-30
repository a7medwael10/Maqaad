<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstallSeat extends Model
{
    protected $fillable = [
        'name_ar',
        'name_en',
        'duration',
        'image',
        'link',
    ];

    public function getNameAttribute()
    {
        return APP()->getLocale() === 'ar' ? $this->attributes['name_ar'] : $this->attributes['name_en'];
    }

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->attributes['image']);
    }


}
