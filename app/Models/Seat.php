<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Builder;

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
        return $this['name_' . app()->getLocale()];
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

    public function scopeFilter(Builder $query, Request $request): Builder
    {
        $query->when($request->filled('name'), function ($query) use ($request) {
            $query->where(function ($q) use ($request) {
                $q->where('name_ar', 'like', '%' . $request->name . '%')
                    ->orWhere('name_en', 'like', '%' . $request->name . '%');
            });
        });

        $query->when($request->filled('seat_name'), function ($query) use ($request) {
            $query->where(function ($q) use ($request) {
                $q->where('name_ar', 'like', '%' . $request->seat_name . '%')
                    ->orWhere('name_en', 'like', '%' . $request->seat_name . '%');
            });
        });

        $query->when($request->filled('height'), function ($query) use ($request) {
            $query->where('height', $request->height);
        });

        $query->when($request->filled('weight'), function ($query) use ($request) {
            $query->where('weight', $request->weight);
        });

        $query->when($request->filled('birth_date'), function ($query) use ($request) {
            $age = Carbon::parse($request->birth_date)->age;
            $query->where('age_from', '<=', $age)
                ->where(function ($q) use ($age) {
                    $q->whereNull('age_to')->orWhere('age_to', '>=', $age);
                });
        });

        return $query;
    }
}
