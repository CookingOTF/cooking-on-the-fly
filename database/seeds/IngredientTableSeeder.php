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
            Ingredient::create(['name' => 'garlic', 'display_name' => 'Garlic']),
            Ingredient::create(['name' => 'onion', 'display_name' => 'Onion']),
            Ingredient::create(['name' => 'tomato', 'display_name' => 'Tomato']),
            Ingredient::create(['name' => 'potato', 'display_name' => 'Potato']),
            Ingredient::create(['name' => 'lettuce', 'display_name' => 'Salad Greens']),
            Ingredient::create(['name' => 'olives', 'display_name' => 'Olives']),
            Ingredient::create(['name' => 'carrot', 'display_name' => 'Carrot']),
            Ingredient::create(['name' => 'basil', 'display_name' => 'Basil']),
            Ingredient::create(['name' => 'parsley', 'display_name' => 'Parsley']),
            Ingredient::create(['name' => 'rosemary', 'display_name' => 'Rosemary']),
            Ingredient::create(['name' => 'cucumber', 'display_name' => 'Cucumber']),
            Ingredient::create(['name' => 'bell pepper', 'display_name' => 'Bell Pepper']),
            Ingredient::create(['name' => 'spinach', 'display_name' => 'Spinach']),
            Ingredient::create(['name' => 'broccoli', 'display_name' => 'Broccoli']),
            Ingredient::create(['name' => 'zucchini', 'display_name' => 'Zucchini']),
            Ingredient::create(['name' => 'cabbage', 'display_name' => 'Cabbage']),
            Ingredient::create(['name' => 'cauliflower', 'display_name' => 'Cauliflower']),
            Ingredient::create(['name' => 'avocado', 'display_name' => 'Avocado']),
            Ingredient::create(['name' => 'asparagus', 'display_name' => 'Asparagus']),
            Ingredient::create(['name' => 'celery', 'display_name' => 'Celery']),
            Ingredient::create(['name' => 'sweet potato', 'display_name' => 'Sweet Potato']),
            Ingredient::create(['name' => 'kale', 'display_name' => 'Kale']),
            Ingredient::create(['name' => 'corn', 'display_name' => 'Corn']),
            Ingredient::create(['name' => 'broccoli', 'display_name' => 'Broccoli']),
            Ingredient::create(['name' => 'green beans', 'display_name' => 'Green Beans']),
            Ingredient::create(['name' => 'squash', 'display_name' => 'Squash']),
            Ingredient::create(['name' => 'mushroom', 'display_name' => 'Mushroom']),
            Ingredient::create(['name' => 'mixed', 'display_name' => 'Mixed Vegetable']),
            Ingredient::create(['name' => 'asparagus', 'display_name' => 'Asparagus']),
            Ingredient::create(['name' => 'ginger', 'display_name' => 'Ginger']),
        ];

        foreach ($ingredients as $ingredient) {
            $ingredient->save();
        }
    }
}
