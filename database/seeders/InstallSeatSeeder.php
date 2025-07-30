<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstallSeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('install_seats')->insert([
            [
                'name_ar' => 'طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)',
                'name_en' => 'How to install the seat suitable for your child (from birth to 12 months)',
                'duration' => '00:00',
                'image' => 'site/images/install_seats/video-img.png',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_ar' => 'طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)',
                'name_en' => 'How to install the seat suitable for your child (from birth to 12 months)',
                'duration' => '00:00',
                'image' => 'site/images/install_seats/video-img.png',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_ar' => 'طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)',
                'name_en' => 'How to install the seat suitable for your child (from birth to 12 months)',
                'duration' => '00:00',
                'image' => 'site/images/install_seats/video-img.png',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_ar' => 'طريقة تركيب المقعد المناسبة لطفلك (من يوم إلى 12 شهر)',
                'name_en' => 'How to install the seat suitable for your child (from birth to 12 months)',
                'duration' => '00:00',
                'image' => 'site/images/install_seats/video-img.png',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
