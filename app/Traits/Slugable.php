<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Slugable
{
    public static function bootSlugable()
    {
        static::saving(function ($model) {
            if (empty($model->slug)) {
                $title = $model->title_en ?? $model->title_ar ?? 'item';

                $originalSlug = Str::slug($title);
                $slug = $originalSlug;
                $counter = 1;

                while ($model->newQuery()->where('slug', $slug)->exists()) {
                    $slug = $originalSlug . '-' . $counter++;
                }

                $model->slug = $slug;
            }
        });
    }
}
