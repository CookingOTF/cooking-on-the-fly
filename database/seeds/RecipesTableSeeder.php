<?php

use Illuminate\Database\Seeder;

use App\Recipe;
use App\Description;

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
                'cook_time' => COOK_TIME,
                'directions' => [
                    step1,
                    step2,
                    step3/*
                    you can add as many as you want, but make
                    sure no comma on the last one of course :P
                    */
                ]
            ],
            /* end here */
            [
                'name' => NAME,
                'description' => DESCRIPTION,
                'image' => IMAGE,
                'prep_time' => PREP_TIME,
                'cook_time' => COOK_TIME,
                'directions' => [
                    step1
                ]
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
                'cook_time' => COOK_TIME,
                [
                    step1
                ]
            ]/* no comma after the last one ofc :P */
        ];

        foreach ($recipes as $recipe) {
            $directions = $recipe['directions'];
            unset($recipe['directions']);

            $ingredients = $recipe['ingredients'];
            unset($recipe['ingredients']);

            $recipe = Recipe::create($recipe);

            foreach ($directions as $step => $content) {
                $recipe->directions()->save(['step_no' => $step, 'content' => $content]);
            }

        }
    }
}
