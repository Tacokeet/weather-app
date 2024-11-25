<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('cities')->insert(
            [
                [
                    'name' => 'groningen',
                    'latitude' => '53.2194',
                    'longitude' => '6.5665',
                    'schedule' => '* * * * *', // Default : will update when api can update
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ],
        );
    }
}
