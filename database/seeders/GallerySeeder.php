<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\GalleryImages;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = [
            [
                'title_ar' => 'مشاركة مَقعد في فعالية ( السلامة المرورية ) المقامة فى جامعة المجمعة للتوعية بأهمية استخدام مَقعد الطفل بالسيارة .',
                'title_en' => 'Maqaad participation in the Road Safety event at Majmaah University.',
                'images' => [
                    'site/images/galleries/video-img.png',
                    'site/images/galleries/video-img.png',
                    'site/images/galleries/video-img.png',
                ]
            ],
            [
                'title_ar' => 'مشاركة مقعد في معرض السلامة المرورية بتنظيم أرامكو – نوفمبر 2024',
                'title_en' => 'Maqaad in Aramco Road Safety Expo – Nov 2024',
                'images' => [
                    'site/images/galleries/video-img.png',
                    'site/images/galleries/video-img.png',
                    'site/images/galleries/video-img.png',
                ]
            ],
            [
                'title_ar' => 'مشاركة مقعد في الملتقى السادس للسلامة المرورية – ديسمبر 2023',
                'title_en' => 'Maqaad at 6th Road Safety Forum – Dec 2023',
                'images' => [
                    'site/images/galleries/video-img.png',
                    'site/images/galleries/video-img.png',
                ]
            ],
            [
                'title_ar' => 'مشاركة مقعد في فعالية القيادة الآمنة بجامعة تبوك – نوفمبر 2023، ضمن برنامج توعوي يهدف إلى تعزيز أهمية استخدام مقعد الطفل في المركبات.',
                'title_en' => 'Maqaad at Safe Driving Event – University of Tabuk – Nov 2023',
                'images' => [
                    'site/images/galleries/video-img.png',
                    'site/images/galleries/video-img.png',
                    'site/images/galleries/video-img.png',
                ]
            ],
            [
                'title_ar' => 'مع كل ولادة، مقعد أمان.. رسالة حياة من مَقعد الوقفية',
                'title_en' => 'With every birth, a safety seat… Maqaad Waqf’s life message',
                'images' => [
                    'site/images/galleries/video-img.png',
                    'site/images/galleries/video-img.png',
                    'site/images/galleries/video-img.png',
                    'site/images/galleries/video-img.png',
                    'site/images/galleries/video-img.png',
                    'site/images/galleries/video-img.png',
                ]
            ],
            [
                'title_ar' => 'مشاركة مقعد في أسبوع سلامة الركاب الأطفال بالتعاون مع شركة نجم – سبتمبر 2023.',
                'title_en' => 'Maqaad in Child Passenger Safety Week with Najm – Sep 2023',
                'images' => [
                    'site/images/galleries/video-img.png',
                ]
            ],
        ];

        foreach ($galleries as $galleryData) {
            $gallery = Gallery::create([
                'title_ar' => $galleryData['title_ar'],
                'title_en' => $galleryData['title_en'],
            ]);

            foreach ($galleryData['images'] as $image) {
                GalleryImages::create([
                    'gallery_id' => $gallery->id,
                    'image' => $image,
                ]);
            }
        }
    }
}
