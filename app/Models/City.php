<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    protected $fillable = [
        'latitude',
        'longitude',
        'name',
        'schedule' // CRON style
    ];

    public function temperatures()
    {
        return $this->hasMany(Temperature::class);
    }

    public static function getCityTemperatures(string $cityName): array
    {
        $city = self::where('name', $cityName)->first();
        if ($city === null) {
            return [];
        }


        return [
            'city' => $city->name,
            'temperatures' => Temperature::getTemperatures(10, $city->id)
        ];
    }

}
