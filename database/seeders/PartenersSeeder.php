<?php

namespace Database\Seeders;

use App\Models\Partener;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartenersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            [
                'name_ar' => 'نيوم',
                'name_en' => 'NEOM',
                'image' => 'site/images/partners/success(1).png',
                'link' => '#',
            ],
            [
                'name_ar' => 'نيوم',
                'name_en' => 'NEOM',
                'image' => 'site/images/partners/success(3).png',
                'link' => '#',
            ],
            [
                'name_ar' => 'نيوم',
                'name_en' => 'NEOM',
                'image' => 'site/images/partners/success(4).png',
                'link' => '#',
            ],
            [
                'name_ar' => 'نيوم',
                'name_en' => 'NEOM',
                'image' => 'site/images/partners/success(5).png',
                'link' => '#',
            ],
            [
                'name_ar' => 'نيوم',
                'name_en' => 'NEOM',
                'image' => 'site/images/partners/success(6).png',
                'link' => '#',
            ],
            [
                'name_ar' => 'نيوم',
                'name_en' => 'NEOM',
                'image' => 'site/images/partners/success(7).png',
                'link' => '#',
            ],
            [
                'name_ar' => 'نيوم',
                'name_en' => 'NEOM',
                'image' => 'site/images/partners/success(8).png',
                'link' => '#',
            ],
            [
                'name_ar' => 'نيوم',
                'name_en' => 'NEOM',
                'image' => 'site/images/partners/success(9).png',
                'link' => '#',
            ],
            [
                'name_ar' => 'نيوم',
                'name_en' => 'NEOM',
                'image' => 'site/images/partners/success(10).png',
                'link' => '#',
            ],
            [
                'name_ar' => 'نيوم',
                'name_en' => 'NEOM',
                'image' => 'site/images/partners/success(11).png',
                'link' => '#',
            ],
            [
                'name_ar' => 'نيوم',
                'name_en' => 'NEOM',
                'image' => 'site/images/partners/success(12).png',
                'link' => '#',
            ],
        ];

        foreach ($partners as $partner) {
            Partener::create([
                'name_ar' => $partner['name_ar'],
                'name_en' => $partner['name_en'],
                'image' =>   $partner['image'],
                'link'    => $partner['link'],
            ]);
        }
    }
}
