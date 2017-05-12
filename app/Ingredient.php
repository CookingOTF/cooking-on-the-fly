<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';

    protected $fillable = ['name', 'display_name'];

    protected $primaryKey = 'name';

    public $incrementing = false;

    public $timestamps = false;

    public function recipes()
    {
        return $this->belongsToMany('App\Recipe', 'recipe_ingredients', 'ingredient_name')->withPivot('display_in_recipe');
    }
}
