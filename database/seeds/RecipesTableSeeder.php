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
            /*
            |======================
            |  ##  START HERE  ##
            |======================
            */
            [
                /*
                |====================================================
                | !! INFO !!
                |====================================================
                |
                | Everything that goes in the "recipes" table will
                | be specified here.
                |
                |----------+
                | ~ NAME ~ |
                |----------+
                |
                | The recipe's name. In this case, it is also the
                | name that will be displayed to the user.
                |
                |-----------------+
                | ~ DESCRIPTION ~ |
                |-----------------+
                |
                | A short description of the recipe.
                |
                |-----------+
                | ~ IMAGE ~ |
                |-----------+
                |
                | The !!filename!! of the associated image (not the
                | full path, but including the extension).
                | ex: 'image.png'
                |
                | * Note: This line is optional.
                |
                |-----------------------------+
                | ~ PREP_TIME and COOK_TIME ~ |
                |-----------------------------+
                |
                | Basically what it sounds like.
                |
                |
                | You can use any of the following formats:
                |
                | - An integer consisting of the number of seconds
                |   ex: 4242
                | 
                | - A string in the format:
                |   "$hours : $minutes : $seconds"
                |   ex:
                |       '01:30:15'
                |       '02:45'
                |       '03'
                |       '00:00:01'
                |   (You can leave out some parts and it'll count
                |   them as 0, but it always assumes that the first
                |   number is the hours.)
                |
                | - A string in the format:
                |   "$hours hours, $minutes minutes, $seconds seconds"
                |   ex:
                |       '1 hour, 2 minutes, 3 seconds'
                |       '1 minute, 1 second'
                |       '1 hours, 59 second'
                |       '0 hours, 0 minutes, 1 second'
                |   (You can leave out any of the parts here as long
                |   as you keep the ones that you DO specify in order.)
                |
                */
                'info' => [
                    'name' => 'NAME',
                    'description' => 'DESCRIPTION',
                    'image' => 'IMAGE',/* If you delete this line (the *whole* line, not just the value), it'll use the default image */
                    'prep_time' => 1,
                    'cook_time' => 1
                ],
                /*
                |====================================================
                | !! DIRECTIONS !!
                |====================================================
                |
                | This information goes into the "directions" table.
                |
                |-------------+
                | ~ STEP[*] ~ |
                |-------------+
                |
                | Place as many or as few different steps as you need
                | (in order of course). Their size can range anywhere
                | from paragraphs to short sentences.
                |
                |
                | If you only want there to be 1 block of text and no
                | "Step 1" text over it on the recipe's page, just
                | make sure you only put 1 step here.
                |
                | (If you need me to, I'll help with the conditional
                | logic for that later.)
                |
                */
                'directions' => [
                    'step1',
                    'step2',
                    'step3'/*
                    add as many as you want, just make
                    sure no comma on the last one of course :P
                    */
                ],
                /*
                |====================================================
                | !! INGREDIENTS !!
                |====================================================
                |
                | This information goes into the "recipe_ingredients"
                | table (the one that links the recipes and
                | ingredients tables together).
                |
                |----------+
                | ~ NAME ~ |
                |----------+
                |
                | The ingredient's name in the database.
                | ** Make sure it's EXACTLY the same!
                | ** Make sure you don't put any duplicates!
                |
                |-----------------------+
                | ~ DISPLAY_IN_RECIPE ~ |
                |-----------------------+
                |
                | This is different from the ingredient's display_name
                | in the database. This is how it'll appear in the
                | list of ingredients on the recipe. Here's where you
                | could put something like...
                |
                | "Two cups of sugar"
                | "One stick of butter (melted)"
                | "A million rotten tomatoes"
                | 
                | ...or really whatever you want as long as it's not
                | too long to fit in the database.
                |
                */
                'ingredients' => [
                    'asparagus' => 'DISPLAY_IN_RECIPE',
                    'corn' => 'DISPLAY_IN_RECIPE',
                    'carrot' => 'DISPLAY_IN_RECIPE'/*
                    same as before, no comma on last one :P
                    */
                ]
            ]
            /*
            |========================================================
            |                     ##  END  ##
            |========================================================
            |
            | That's it! Now just make as many copies as you need!
            | (Preferably copy the one below though...)
            |
            |
            */
            // [
            //     'name' => NAME,
            //     'description' => DESCRIPTION,
            //     'image' => IMAGE,
            //     'prep_time' => PREP_TIME,
            //     'cook_time' => COOK_TIME,
            //     'directions' => [
            //         step1
            //     ]
            // ],
            // [
            //     'name' => NAME,
            //     'description' => DESCRIPTION,
            //     'image' => IMAGE,
            //     'prep_time' => PREP_TIME,
            //     'cook_time' => COOK_TIME
            // ],
            // # more as needed...
            // [
            //     'name' => NAME,
            //     'description' => DESCRIPTION,
            //     'image' => IMAGE,
            //     'prep_time' => PREP_TIME,
            //     'cook_time' => COOK_TIME,
            //     [
            //         step1
            //     ]
            // ]/* no comma after the last one ofc :P */
        ];

        /*
        |====================================================
        | ##  I'M SURE YOU ALREADY GUESSED THIS, BUT...  ##
        |====================================================
        |
        | Don't change anything down here plz! :3
        |
        | Well... I mean... unless you can think of a better
        | way to do it... o.o
        |
        */
        foreach ($recipes as $recipe) {
            // first we'll create a new recipe object from the basic info...
            $newRecipe = Recipe::create($recipe['info']);


            foreach ($recipe['directions'] as $index => $content) {
                $recipe->directions()->create([
                    'step_no' => ++$index, /* incrementing the index so that the steps start at 1 */
                    'content' => $content
                ]);
            }

            foreach ($recipe['ingredients'] as $name => $displayInRecipe) {
                $recipe->ingredients()->attach($name, [
                    'display_in_recipe' => $displayInRecipe
                ]);
            }
        }
    }
}
