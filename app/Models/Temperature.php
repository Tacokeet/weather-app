<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    protected $table = 'temperatures';

    protected $fillable = [
        'latitude',
        'longitude',
        'temperature',
        'source'
    ];

    protected const SOURCES = [
        'OpenWeatherMap',
        'OpenMeteo'
    ];

    public static function getTemperatures(int $limit = 10): array
    {
        $query = null;
        foreach (self::SOURCES as $source) {
            if ($query === null) {
                $query = self::where('source', $source)->orderBy('created_at', 'desc')->take($limit);
            } else {
                $query->union(self::where('source', $source)->orderBy('created_at', 'desc')->take($limit)->getQuery());
            }
        }
        $results = $query->get();
        $response = [];
        foreach (self::SOURCES as $source) {
            $response[$source] = $results->where('source', $source)->values();
        }
        return $response;
    }

}
