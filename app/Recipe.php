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
        if (is_string($time)) {
            $parts = [];
            if (!preg_match('~(?<h>\d+)(?::(?<m>[0-5]\d)(?::(?<s>[0-5]\d))?)?~', $time, $parts)) {
                if (!preg_match('~(?=.*(?:h|m|sec))(?:(?<h>\d+)\s*hours?,?\s*)?(?:(?<m>[0-5]\d)\s*minutes?,?\s*)?(?:(?<s>[0-5]\d)\s*seconds?)?~', $time, $parts)) {
                    return false;
                }
            } else {
                extract($parts);

                return $s + (60 * $m) + (3600 * $h);
            }
        } else {
            return $time;
        }
    }

    protected function secondsToHours($value)
    {
        $time = '';
        if (($hours = floor($value / 3600)) > 0) {
            $time .= "$hours hour" . ($hours > 1 ? 's' : '' ) . ', ';
            $value -= $hours * 3600;
        }
        if (($minutes = floor($value / 60)) > 0) {
            $time .= "$minutes minute" . ($minutes > 1 ? 's' : '' ) . ', ';
            $value -= $minutes * 60;
        }
        if (($seconds = $value) > 0) {
            $time .= "$seconds second" . ($seconds > 1 ? 's' : '' ) . ', ';
        }
        $time = substr($time, 0, -2);

        return $time;
    }

    public function setCookTimeAttribute($value)
    {
        $this->attributes['cook_time'] = $this->hoursToSeconds($value);
    }

    public function setPrepTimeAttribute($value)
    {
        $this->attributes['prep_time'] = $this->hoursToSeconds($value);
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
