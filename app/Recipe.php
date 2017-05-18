<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Recipe extends Model
{
    public static function getSearchResults($q)
    {
        $recipes = Recipe::select('id', 'name', 'description', 'image')
            ->with('ingredients')
            ->get()
            ->all();

        $onhand = $borrow = [];

        // Here's where the real action starts!
        foreach ($recipes as $index => $recipe) {
            $ingredients = $recipe
                ->ingredients()
                ->lists('name', 'display_name')
                ->all();

            $lacking = array_diff($ingredients, $q);
            ksort($lacking);

            if (empty($lacking)) { /* Do you have all the ingredients you need? */
                $onhand[] = $recipe;
            } elseif ( /* What if you borrowed a little this or that from a neighbor? */
                sizeof($lacking) <= 2 /* Don't try to borrow too many things at once */
                and !array_diff($lacking, Ingredient::BORROWABLE) /* Also, don't ask for anything crazy */
            ) {
                $borrow[implode(' and ', array_keys($lacking))] = $recipe; /* Each recipe in the array will be indexed by a string denoting the ingredients lacked */

                $borrow[] = $recipe;
            } else {
                $recipe->lacking = array_keys($lacking);
                $goShopping[] = $recipe;
            }
        }

        return ['recipes' => $onhand, 'borrow' => $borrow, 'goShopping' => $goShopping];
    }

    public static function getCard($id)
    {
        $recipe = self::select(
            'name',
            'description',
            'image',
            'servings',
            'prep_time',
            'cook_time'
        )->where('id', $id)
        ->first();

        $recipe->directions = Directions::select('content')
            ->where('recipe_id', $id)
            ->orderBy('step_no')
            ->lists('content')->all();

        $recipe->ingredients = DB::table('recipe_ingredients')
            ->select('display_in_recipe')
            ->where('recipe_id', $id)
            ->lists('display_in_recipe');

        dd($recipe);

        return $recipe;
    }

    protected $table = 'recipes';

    protected $fillable = [
        'name',
        'description',
        'image',
        'prep_time',
        'cook_time'
    ];

    protected $appends = [
        'total_time'
    ];

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'recipe_ingredients', 'recipe_id', 'ingredient_name')->withPivot('display_in_recipe');
    }

    public function directions()
    {
        return $this->hasMany('App\Directions');
    }

    protected function hoursToSeconds($time)
    {
        if (is_string($time)) {
            $parts = [];
            if (!preg_match('~(?<h>\d+)(?:\s*:\s*(?<m>[0-5]\d)(?:\s*:\s*(?<s>[0-5]\d))?)?~', $time, $parts)) {
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
        if ($value < 1) {
            return NULL;
        } else {
            return $this->secondsToHours($value);
        }
    }

    public function getPrepTimeAttribute($value)
    {
        if ($value < 0) {
            return NULL;
        } elseif ($value === 0) {
            return 'Instant.';
        } else {
            return $this->secondsToHours($value);
        }
    }

    public function getTotalTimeAttribute()
    {
        if (!$this->attributes['cook_time'] and !$this->attributes['prep_time']) {
            return NULL;
        }

        $totalTime = $this->attributes['cook_time'] + $this->attributes['prep_time'];

        if ($totalTime < 0) {
            return 'You\'ll somehow finish before you started.';
        } else {
            return $this->secondsToHours($totalTime);
        }
    }
}
