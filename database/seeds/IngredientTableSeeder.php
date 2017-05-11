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
            Ingredient::create(['name' => 'garlic', 'display_name' => 'Garlic', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'onion', 'display_name' => 'Onion', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'tomato', 'display_name' => 'Tomato', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'potato', 'display_name' => 'Potato', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'lettuce', 'display_name' => 'Salad Greens','category' => 'vegetable']),
            Ingredient::create(['name' => 'olives', 'display_name' => 'Olives', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'carrot', 'display_name' => 'Carrot', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'basil', 'display_name' => 'Basil', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'parsley', 'display_name' => 'Parsley', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'rosemary', 'display_name' => 'Rosemary', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'cucumber', 'display_name' => 'Cucumber','category' => 'vegetable']),
            Ingredient::create(['name' => 'bell pepper', 'display_name' => 'Bell Pepper', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'spinach', 'display_name' => 'Spinach', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'broccoli', 'display_name' => 'Broccoli', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'zucchini', 'display_name' => 'Zucchini', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'cabbage', 'display_name' => 'Cabbage', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'cauliflower', 'display_name' => 'Cauliflower', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'avocado', 'display_name' => 'Avocado', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'asparagus', 'display_name' => 'Asparagus', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'celery', 'display_name' => 'Celery', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'sweet potato', 'display_name' => 'Sweet Potato', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'kale', 'display_name' => 'Kale', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'corn', 'display_name' => 'Corn', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'green beans', 'display_name' => 'Green Beans', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'squash', 'display_name' => 'Squash', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'mushroom', 'display_name' => 'Mushroom', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'mixed', 'display_name' => 'Mixed Vegetable', 'category' => 'vegetable' ]),
            Ingredient::create(['name' => 'asparagus', 'display_name' => 'Asparagus', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'ginger', 'display_name' => 'Ginger', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'lemon', 'display_name' => 'Lemon', 'category' => 'fruit']),
            Ingredient::create(['name' => 'banana', 'display_name' => 'Banana', 'category' => 'fruit']),
            Ingredient::create(['name' => 'apple', 'display_name' => 'Apple', 'category' => 'fruit']),
            Ingredient::create(['name' => 'coconut', 'display_name' => 'Coconut', 'category' => 'fruit']),
            Ingredient::create(['name' => 'mango', 'display_name' => 'Mango', 'category' => 'fruit'])

        ];

        foreach ($ingredients as $ingredient) {
            $ingredient->save();
        }
    }
}
