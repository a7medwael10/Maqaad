<?php

namespace Database\Seeders;

use App\Models\Seat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seats = [
            [
                'name_ar' => 'مقعد الأطفال الرضع',
                'name_en' => 'Infant Car Seat',
                'age_from' => 0,
                'age_to' => 1,
                'weight' => 13,
                'weight_type' => 'min',
                'height' => 75,
                'image' => 'site/images/seats/Baby 1.png',
                'is_active' => true,
            ],
            [
                'name_ar' => 'مقعد الأطفال الرضع',
                'name_en' => 'Infant Car Seat',
                'age_from' => 0,
                'age_to' => 1,
                'weight' => 13,
                'weight_type' => 'min',
                'height' => 75,
                'image' => 'site/images/seats/Baby 1.png',
                'is_active' => true,
            ],
            [
                'name_ar' => 'مقعد الأطفال الرضع',
                'name_en' => 'Infant Car Seat',
                'age_from' => 0,
                'age_to' => 1,
                'weight' => 13,
                'weight_type' => 'max',
                'height' => 75,
                'image' => 'site/images/seats/Baby 1.png',
                'is_active' => true,
            ],
            [
                'name_ar' => 'مقعد الأطفال الرضع',
                'name_en' => 'Infant Car Seat',
                'age_from' => 0,
                'age_to' => 1,
                'weight' => 13,
                'weight_type' => 'max',
                'height' => 75,
                'image' => 'site/images/seats/Baby 1.png',
                'is_active' => true,
            ],
        ];

        foreach ($seats as $seat) {
            Seat::create($seat);
        }
    }
}
