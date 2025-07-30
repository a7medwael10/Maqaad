<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [];

        for ($i = 1; $i <= 8; $i++) {
            $titleAr = 'سلامة الطفل في السيارة';
            $titleEn = 'Child safety in the car';
            $contentAr = 'من أهم حقوق الطفل هو المحافظة على سلامته في السيارة، فعند توقُّع قدوم طفل جديد يجب تعلُّم طريقة تركيب مقعد خاص به';
            $contentEn = 'One of the most important child rights is safety in the car. When expecting a new baby, it’s crucial to learn how to install a proper car seat.';
            $image = 'site/images/news/news1.png';

            $items[] = [
                'slug' => Str::slug($titleEn) . '-' . $i,
                'title_ar' => $titleAr,
                'title_en' => $titleEn,
                'content_ar' => $contentAr,
                'content_en' => $contentEn,
                'image' => $image,
                'is_published' => true,
                'published_at' => Carbon::create(2025, 3, 20),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        \DB::table('news')->insert($items);
    }
}
