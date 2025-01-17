<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'yoga',
                'slug' => 'yoga',
                'status' => 'active',
            ],
            [
                'name' => 'strength',
                'slug' => 'strength',
                'status' => 'active',
            ],
            [
                'name' => 'pilates',
                'slug' => 'pilates',
                'status' => 'active',
            ],
            [
                'name' => 'cardio',
                'slug' => 'cardio',
                'status' => 'active',
            ]
        ]);
    }
}
