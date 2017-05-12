<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipes = [
            /* start here */
            [
                'name' => NAME,
                'description' => DESCRIPTION,
                'image' => IMAGE,
                'prep_time' => PREP_TIME,
                'cook_time' => COOK_TIME
            ],
            /* end here */
            [
                'name' => NAME,
                'description' => DESCRIPTION,
                'image' => IMAGE,
                'prep_time' => PREP_TIME,
                'cook_time' => COOK_TIME
            ],
            [
                'name' => NAME,
                'description' => DESCRIPTION,
                'image' => IMAGE,
                'prep_time' => PREP_TIME,
                'cook_time' => COOK_TIME
            ],
            # more as needed...
            [
                'name' => NAME,
                'description' => DESCRIPTION,
                'image' => IMAGE,
                'prep_time' => PREP_TIME,
                'cook_time' => COOK_TIME
            ]/* no comma after the last one ofc :P */
        ];

        foreach ($recipes as $recipe) {
            Recipe::create($recipe)->save();
        }
    }
}
