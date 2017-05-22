<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public const BORROWABLE = [
        'eggs',
        'milk',
        'sugar',
        'flour',
        'butter',
        'olive oil'
    ];

    public static function byCategory()
    {
        foreach (self::all() as $ingredient) {
            $categorized[$ingredient->category][] = $ingredient;
        }
        return $categorized;
    }

    protected $table = 'ingredients';

    protected $fillable = ['name', 'display_name'];

    protected $primaryKey = 'name';

    public $incrementing = false;

    public $timestamps = false;

    public function recipes()
    {
        return $this->belongsToMany('App\Recipe', 'recipe_ingredients', 'ingredient_name', 'recipe_id')->withPivot('display_in_recipe');
    }
}
