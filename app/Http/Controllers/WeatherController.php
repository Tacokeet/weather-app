<?php

namespace App\Http\Controllers;

use App\Models\Temperature;
use App\Services\WeatherService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $city = 'Groningen';
        // $state = '';
        // $country = 'NL';
        // $limit = 1;

        // $geoUrl = "http://api.openweathermap.org/geo/1.0/direct?q={$city},{$state},{$country}&limit={$limit}&appid={$apiKey}";

        // $geoResponse = Http::withOptions(['verify' => false])->get($geoUrl);
        // $location = $geoResponse->json();

        // if (!empty($location)) {
        //     $lat = $location[0]['lat'];
        //     $lon = $location[0]['lon'];
        // }


        // $url = "https://api.openweathermap.org/data/2.5/weather?q={$city},{$country}&appid={$apiKey}&units=metric";
        // $response = Http::withOptions(['verify' => false])->get($url);
        // dump($response['main']['temp']);

        // $response = Http::withOptions(['verify' => false])->get('https://api.openweathermap.org/data/2.5/weather', [
        //     'q' => 'Groningen,NL',
        //     'appid' => 'e20285dd109c6d856b6ef34a8a42f5a8',
        //     'units' => 'metric'
        // ]);

        // Groningen lat and lon
        $lat = 53.2194;
        $lon = 6.5665;

        // OpenWeatherMap API / Current state with every 10 min update
        // $response = Http::withOptions(['verify' => false])->get('https://api.openweathermap.org/data/2.5/weather', [
        //     'lat' => $lat,
        //     'lon' => $lon,
        //     'appid' => env('OPENWEATHER_API_KEY'),
        //     'units' => 'metric'
        // ]);


        // Open-Meteo API / Current conditions are based on 15-minutely weather model data
        // $response = Http::withOptions(['verify' => false])->get('https://api.open-meteo.com/v1/forecast', [
        //     'latitude' => $lat,
        //     'longitude' => $lon,
        //     'current' => 'temperature_2m',
        // ]);



        return view('weather.index', ['sources' => Temperature::getTemperatures()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
