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
            $nextRun1 = $cron->getNextRunDate();
            $nextRun2 = $cron->getNextRunDate($nextRun1);

            $interval = $nextRun1->diff($nextRun2);
            $apiInterval = new \DateInterval('PT15M'); // OpenMeteo updates every 15 minutes

            if (isDateIntervalSmaller($interval, $apiInterval)) {
                $cron->setExpression('*/15 * * * *');
            }

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
