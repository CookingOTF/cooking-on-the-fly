<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';

    protected $fillable = [
        'name',
        'description',
        'image',
        'prep_time',
        'cook_time'
    ];

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'recipe_ingredients')->withPivot('display_in_recipe');
    }

    public function directions()
    {
        return $this->hasMany('App\Directions');
    }

    protected function hoursToSeconds($time)
    {
        $parts = [];
        preg_match('~(?<hours>\d+)(?::(?<minutes>[0-5]\d)(?::(?<seconds>[0-5]\d))?)?~', $time, $parts)
            or preg_match('~(?:(?<hours>\d+) hours,?\s*)?(?:(?<minutes>[0-5]\d) minutes,?\s*)?(?:(?<seconds>[0-5]\d))?\.?~', $time, $parts);
        extract($parts);

        return $seconds + (60 * $minutes) + (3600 * $hours);
    }

    protected function secondsToHours($time)
    {
        if (($hours = floor($value / 3600)) > 0) {
            $time .= "$hours hours, ";
            $value -= $hours * 3600;
        }
        if (($minutes = floor($value / 60)) > 0) {
            $time .= "$minutes minutes, ";
            $value -= $minutes * 60;
        }
        if (($seconds = $value) > 0) {
            $time .= "$seconds seconds, ";
        }
        $time = substr($time, 0, -2) . '.';

        return $time;
    }

    public function setCookTimeAttribute($value)
    {
        if (is_string($value)) {
            $this->attributes['cook_time'] = hoursToSeconds($value);
        }
    }

    public function setPrepTimeAttribute($value)
    {
        if (is_string($value)) {
            $this->attributes['prep_time'] = hoursToSeconds($value);
        }
    }

    public function getCookTimeAttribute($value)
    {
        return $this->secondsToHours($value);
    }

    public function getPrepTimeAttribute($value)
    {
        return $this->secondsToHours($value);
    }
}
