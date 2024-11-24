<?php

namespace App\Services;

use App\Models\Temperature;

class OpenMeteoTemp
{
    public function __invoke()
    {
        $lat = '53.2194';
        $lon = '6.5665';
        $temp = WeatherService::getTemperatureFromOpenMeteo($lat, $lon);
        Temperature::create([
            'latitude' => $lat,
            'longitude' => $lon,
            'temperature' => $temp,
            'source' => 'OpenMeteo'
        ]);
    }
}
