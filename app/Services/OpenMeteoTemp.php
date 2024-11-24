<?php

namespace App\Services;

use App\Models\City;
use App\Models\Temperature;
use Cron\CronExpression;
use Illuminate\Support\Facades\Log;

class OpenMeteoTemp
{
    public function __invoke()
    {
        $cities = City::all();
        foreach ($cities as $city) {

            $cron = new CronExpression($city->schedule);

            if (!$cron->isDue()) {
                continue;
            }

            Log::info('Updating temperature for ' . $city->name . ' from OpenMeteo');

            $temp = WeatherService::getTemperatureFromOpenMeteo($city->lat, $city->lon);
            Temperature::create([
                'city_id' => $city->id,
                'latitude' => $city->lat,
                'longitude' => $city->lon,
                'temperature' => $temp,
                'source' => 'OpenMeteo'
            ]);
        }
    }
}
