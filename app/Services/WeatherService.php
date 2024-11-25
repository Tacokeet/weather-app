<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    public static function getTemperatureFromOpenWeatherMap(string $lat, string $lon)
    {
        $response = Http::withOptions(['verify' => false])->get('https://api.openweathermap.org/data/2.5/weather', [
            'lat' => $lat,
            'lon' => $lon,
            'appid' => env('OPENWEATHER_API_KEY'),
            'units' => 'metric'
        ]);

        if ($response->failed()) {
            throw new \Exception('Failed to fetch temperature from OpenWeatherMap');
        }

        return $response['main']['temp'];
    }

    public static function getTemperatureFromOpenMeteo(string $lat, string $lon)
    {
        $response = Http::withOptions(['verify' => false])->get('https://api.open-meteo.com/v1/forecast', [
            'latitude' => $lat,
            'longitude' => $lon,
            'current' => 'temperature_2m',
        ]);

        if ($response->failed()) {
            throw new \Exception('Failed to fetch temperature from OpenMeteo');
        }

        return $response['current']['temperature_2m'];
    }
}
