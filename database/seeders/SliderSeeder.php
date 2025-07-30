<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            'site/images/slider/hero-baby.png',
            'site/images/slider/hero-baby.png', // لو عاوز صور مختلفة بدّل المسارات
        ];

        foreach ($images as $image) {
            Slider::create([
                'image' => $image,
            ]);
        }
    }
}
