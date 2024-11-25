<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Repo

A simple weather app with the following requirements

Design an application that:
- Monitors the temperature of a city using two APIs (OpenWeatherMap + ...?)
- Pollable by time interval
- Keeps record of the temperature
- Is visible to user

## How to run & install

`npm install && npm run build`

`composer install`

`php artisan migrate` and say yes to build new sqlite file

`php artisan db:seed` to seed default test data

Finally run it `composer run dev`

Go to `http://localhost:8000/weather/groningen`
To see some temperatures

## Pollable cities

Every city has a schedule property, that uses CRON syntax
You can update this value to change the polling interval for the city
