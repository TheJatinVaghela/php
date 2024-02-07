<?php

namespace Database\Seeders;

use App\Models\gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        gallery::create([
            'name'=>fake()->name(),
            'location'=>fake()->unique()->name(),
        ]);
    }
}
