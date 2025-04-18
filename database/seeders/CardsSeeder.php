<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            // Create a card with title and description
            Card::create([
                'title' => 'title' . $i,           // title1, title2, title3, ..., title100
                'subtitle' => 'subtitle' . $i,           // title1, title2, title3, ..., title100
                'youtubelinks' => 'youtubelinks' . $i,           // title1, title2, title3, ..., title100
                'description' => 'description' . $i,  // description1, description2, description3, ..., description100
                'content' => 'content' . $i,
                'image' => 'image' . $i,
                'video' => 'video' . $i,
            ]);
        }
    }
}
