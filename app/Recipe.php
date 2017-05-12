<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'recipe_ingredients')->withPivot('display_in_recipe');
    }

    public function directions()
    {
        return $this->hasMany('App\Directions');
    }
}
