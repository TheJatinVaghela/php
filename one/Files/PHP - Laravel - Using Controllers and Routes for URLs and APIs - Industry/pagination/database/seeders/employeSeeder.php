<?php

namespace Database\Seeders;

use App\Models\employe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class employeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 20; $i++) {
            employe::create([
                'e_name'=>fake()->name(),
                'e_mail'=>fake()->unique()->email(),
                'e_password'=>fake()->password()
            ]);
        }
    }
}
