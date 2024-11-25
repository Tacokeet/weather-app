<?php

use App\Services\OpenMeteoTemp;
use App\Services\OpenWeatherMapTemp;
use App\Services\WeatherService;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schedule;

// Artisan::command('inspire', function () {
//     $this->comment(Inspiring::quote());
// })->purpose('Display an inspiring quote')->daily();


Schedule::call(new OpenWeatherMapTemp)->everyMinute();
Schedule::call(new OpenMeteoTemp)->everyMinute();
