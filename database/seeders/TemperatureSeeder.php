<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemperatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = DB::table('cities')->get();
        $cityId = $cities->where('name', 'groningen')->first()->id;

        DB::table('temperatures')->insert(
            [
                [
                    'city_id' => $cityId,
                    'temperature' => '10.0',
                    'source' => 'OpenMeteo',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '10.1',
                    'source' => 'OpenWeatherMap',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '9.0',
                    'source' => 'OpenMeteo',
                    'created_at' => now()->addMinutes(15),
                    'updated_at' => now()->addMinutes(15),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '9.1',
                    'source' => 'OpenWeatherMap',
                    'created_at' => now()->addMinutes(10),
                    'updated_at' => now()->addMinutes(10),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '8.0',
                    'source' => 'OpenMeteo',
                    'created_at' => now()->addMinutes(30),
                    'updated_at' => now()->addMinutes(30),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '8.1',
                    'source' => 'OpenWeatherMap',
                    'created_at' => now()->addMinutes(20),
                    'updated_at' => now()->addMinutes(20),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '7.0',
                    'source' => 'OpenMeteo',
                    'created_at' => now()->addMinutes(45),
                    'updated_at' => now()->addMinutes(45),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '7.1',
                    'source' => 'OpenWeatherMap',
                    'created_at' => now()->addMinutes(30),
                    'updated_at' => now()->addMinutes(30),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '6.0',
                    'source' => 'OpenMeteo',
                    'created_at' => now()->addMinutes(60),
                    'updated_at' => now()->addMinutes(60),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '6.1',
                    'source' => 'OpenWeatherMap',
                    'created_at' => now()->addMinutes(40),
                    'updated_at' => now()->addMinutes(40),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '5.0',
                    'source' => 'OpenMeteo',
                    'created_at' => now()->addMinutes(75),
                    'updated_at' => now()->addMinutes(75),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '5.1',
                    'source' => 'OpenWeatherMap',
                    'created_at' => now()->addMinutes(50),
                    'updated_at' => now()->addMinutes(50),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '4.0',
                    'source' => 'OpenMeteo',
                    'created_at' => now()->addMinutes(90),
                    'updated_at' => now()->addMinutes(90),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '4.1',
                    'source' => 'OpenWeatherMap',
                    'created_at' => now()->addMinutes(60),
                    'updated_at' => now()->addMinutes(60),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '3.0',
                    'source' => 'OpenMeteo',
                    'created_at' => now()->addMinutes(105),
                    'updated_at' => now()->addMinutes(105),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '3.1',
                    'source' => 'OpenWeatherMap',
                    'created_at' => now()->addMinutes(70),
                    'updated_at' => now()->addMinutes(70),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '2.0',
                    'source' => 'OpenMeteo',
                    'created_at' => now()->addMinutes(120),
                    'updated_at' => now()->addMinutes(120),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '2.1',
                    'source' => 'OpenWeatherMap',
                    'created_at' => now()->addMinutes(80),
                    'updated_at' => now()->addMinutes(80),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '1.0',
                    'source' => 'OpenMeteo',
                    'created_at' => now()->addMinutes(135),
                    'updated_at' => now()->addMinutes(135),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '1.1',
                    'source' => 'OpenWeatherMap',
                    'created_at' => now()->addMinutes(90),
                    'updated_at' => now()->addMinutes(90),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '0.5',
                    'source' => 'OpenMeteo',
                    'created_at' => now()->addMinutes(150),
                    'updated_at' => now()->addMinutes(150),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '0.6',
                    'source' => 'OpenWeatherMap',
                    'created_at' => now()->addMinutes(100),
                    'updated_at' => now()->addMinutes(100),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '0.0',
                    'source' => 'OpenMeteo',
                    'created_at' => now()->addMinutes(165),
                    'updated_at' => now()->addMinutes(165),
                ],
                [
                    'city_id' => $cityId,
                    'temperature' => '0.1',
                    'source' => 'OpenWeatherMap',
                    'created_at' => now()->addMinutes(110),
                    'updated_at' => now()->addMinutes(110),
                ],
            ],
        );
    }
}
