<?php

use Illuminate\Database\Seeder;
use App\Ingredient;

class IngredientTableSeeder extends Seeder
{
    /**
     * Seed the ingredients table.
     *
     *
     * ================================================================
     * !! HOW TO SEED !!
     * ================================================================
     *
     * Just replace "NAME" and "DISPLAY_NAME" with the appropriate
     * values. Copy the Ingredient::create() function as many times
     * as you need.
     *
     * ---
     *
     * NAME - This is what we'll use to find a recipe in the
     *        database.
     *
     * DISPLAY_NAME - This is what the user will *actually* see when
     *                they view an ingredient in their fridge, for
     *                example.
     *
     * ---
     *
     * Preferably, make "NAME" something, short, simple, lowercase
     * and singular with spaces separating words if you really need
     * to put more than one.
     *
     * (It'll make things a lot easier AND faster for me later on
     * if you do.)
     *
     * "DISPLAY_NAME" can really be whatever you want.
     *
     *
     * ===============================================================
     *
     * @return void
     */
    public function run()
    {
        $ingredients = [
            Ingredient::create(['name' => NAME, 'display_name' => DISPLAY_NAME]),
            Ingredient::create(['name' => NAME, 'display_name' => DISPLAY_NAME]),
            # More as needed...
            Ingredient::create(['name' => NAME, 'display_name' => DISPLAY_NAME])/* No comma on the last one */
        ];

        foreach ($ingredients as $ingredient) {
            $ingredient->save();
        }
    }
}
