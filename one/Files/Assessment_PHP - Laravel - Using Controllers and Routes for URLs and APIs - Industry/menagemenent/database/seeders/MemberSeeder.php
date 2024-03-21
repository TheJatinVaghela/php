<?php

namespace Database\Seeders;

use App\Models\member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        member::create([
            'name' => 'admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'faltNumber' => '101',
            'faltBlock' => 'A',
            'religion' => 'Hindu',
            'password' => Hash::make('password'),
        ]);
    }
}
