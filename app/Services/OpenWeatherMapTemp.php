<?php

namespace App\Services;

use App\Models\City;
use App\Models\Temperature;
use Cron\CronExpression;
use Illuminate\Support\Facades\Log;

class OpenWeatherMapTemp
{
    public function __invoke()
    {
        $cities = City::all();
        foreach ($cities as $city) {
            $cron = new CronExpression($city->schedule);
            $nextRun1 = $cron->getNextRunDate();
            $nextRun2 = $cron->getNextRunDate($nextRun1);

            $interval = $nextRun1->diff($nextRun2);
            $apiInterval = new \DateInterval('PT10M'); // OpenWeatherMap updates every 10 minutes

            if (isDateIntervalSmaller($interval, $apiInterval)) {
                $cron->setExpression('*/10 * * * *');
            }

            if (!$cron->isDue()) {
                Log::info('[OpenWeatherMap] Skipping ' . $city->name . ' for now');
                continue;
            }

            Log::info('Updating temperature for ' . $city->name . ' from OpenWeatherMap');

            $temp = WeatherService::getTemperatureFromOpenWeatherMap($city->latitude, $city->longitude);
            Temperature::create([
                'city_id' => $city->id,
                'latitude' => $city->lat,
                'longitude' => $city->lon,
                'temperature' => $temp,
                'source' => 'OpenWeatherMap'
            ]);

        }
    }
}
