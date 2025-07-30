<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            PartenersSeeder::class,
            BlogSeeder::class,
            GallerySeeder::class,
            NewsSeeder::class,
            QuestionSeeder::class,
            SeatSeeder::class,
            GallerySeeder::class,
            InstallSeatSeeder::class,
            SliderSeeder::class,
        ]);

    }
}
