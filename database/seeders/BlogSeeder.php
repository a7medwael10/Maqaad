<?php

namespace Database\Seeders;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [];

        for ($i = 1; $i <= 9; $i++) {
            $titleAr = 'استخدام مقاعد الأمان للأطفال';
            $titleEn = 'Using Child Safety Seats';
            $contentAr = 'يشترط استخدام مقاعد أمان مخصصة للأطفال منذ الولادة وحتى سن 4 سنوات حيث توفر المقاعد المواجهة للخلف حماية أكبر لرأس الطفل...';
            $contentEn = 'It is required to use safety seats for children from birth up to the age of 4 years. Rear-facing seats offer greater protection for the child\'s head...';

            $blogs[] = [
                'slug' => Str::slug($titleEn) . '-' . $i,
                'title_ar' => $titleAr,
                'title_en' => $titleEn,
                'content_ar' => $contentAr,
                'content_en' => $contentEn,
                'is_published' => true,
                'published_at' => Carbon::create(2025, 3, 20),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        Blog::insert($blogs);
    }
}
