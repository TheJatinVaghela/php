<?php

namespace Database\Seeders;

use App\Models\uploader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UploaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        uploader::create([
            'name'=>fake()->name(),
            'email'=>fake()->unique()->email(),
            'password'=>fake()->password(),

        ]);
    }
}
