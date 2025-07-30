<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Seat extends Model
{
    protected $fillable = [
        'name_ar',
        'name_en',
        'age_from',
        'age_to',
        'weight',
        'weight_type',
        'height',
        'image',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getNameAttribute()
    {
        return App::getLocale() === 'ar' ? $this->attributes['name_ar'] : $this->attributes['name_en'];
    }

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function getAgeRangeAttribute()
    {
        $from = $this->age_from;
        $to = $this->age_to;

        $locale = App::getLocale();
        $birthText = $locale === 'ar' ? 'الولادة' : 'Birth';
        $toText = $locale === 'ar' ? 'إلى' : 'to';
        $yearText = $locale === 'ar' ? 'سنة' : 'year';

        $fromText = $from == 0 ? $birthText : "$from $yearText";

        if ($to === null) {
            $toTextFinal = $locale === 'ar' ? 'وأكثر' : 'and up';
        } else {
            $toTextFinal = "$to $yearText";
        }

        return "$fromText $toText $toTextFinal";
    }

    public function getWeightTextAttribute()
    {
        if ($this->weight === null || $this->weight_type === null) {
            return null;
        }

        $locale = App::getLocale();
        $kg = $locale === 'ar' ? 'كجم' : 'kg';

        if ($this->weight_type === 'min') {
            return $locale === 'ar'
                ? "أكثر من {$this->weight} $kg"
                : "More than {$this->weight} $kg";
        }

        if ($this->weight_type === 'max') {
            return $locale === 'ar'
                ? "حتى {$this->weight} $kg"
                : "Up to {$this->weight} $kg";
        }

        return null;
    }


}
