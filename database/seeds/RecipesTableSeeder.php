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
                    'name' => 'Peanut Butter and Jelly Sandwich',
                    'description' => "An easy, classic lunch favorite",
                    'image' => 'pbj.png',
                    'prep_time' => '00:05:00'
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
                    "Place 2 slices of bread on flat surface. Dispense peanut butter with a buttter knife and spread it evenly on one of the 2 bread slices. Repeat this step with jelly on the other slice of bread. Place the 2 slices together so that the sides with peanut butter and jelly are facing each other. Your sandwich is ready to eat!"
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
                    'peanut butter' => '1 tablespoon peanut butter',
                    'jelly' => '1 tablespoon jelly',
                    'sliced bread' => '2 sliced bread'
                ]
            ],
            /*
            |========================================================
            |                     ##  END  ##
            |========================================================
            |
            | That's it! Now just make as many copies as you need!
            |
            | (Preferably copy the one below, though, unless you
            | want these massive comment blocks on all of them...)
            |
            */
            [
                'info' => [
                    'name' => 'Lasagna',
                    'description' => "An easy delicous recipe for an italian favorite",
                    'image' => 'lasagna.jpg',
                    'prep_time' => '00:20:00',
                    'cook_time' => '01:10:00'
                    ],
                'directions' => [
                    "Stir the ricotta cheese, mozzarella cheese, 1/2 cup Parmesan cheese and eggs in a medium bowl and set it aside. In a 3-quart saucepan over medium-high heat, cook the beef until it's well browned, stirring often to break up the meat. Pour off any fat. Stir the sauce in the saucepan. Spoon 1 cup meat mixture in each of two 2-quart shallow baking dishes. Top each with 2 lasagna noodles and about 1 1/4 cups cheese mixture. Repeat the layers. Top with the remaining 2 lasagna noodles, remaining meat mixture and the Parmesan cheese. Bake at 400°F. for 30 minutes or it's until hot and bubbling. Let stand for 10 minutes."
                ],
                'ingredients' => [
                    'ricotta' => '3 cups ricotta cheese',
                    'mozzarella' => '12 oz shredded mozzarella cheese ',
                    'parmesan' => '3/4 cup grated parmesan',
                    'ground beef'=> ' 1 lb ground beef',
                    'tomato sauce'=> '1 jar (45 oz) Italian tomato sauce',
                    'lasagna'=> '12 lasagna noodles (cooked and drained)'


                ]
            ],
            # more as needed...
            [
                'info' => [
                    'name' => 'Asian Chicken Strifry',
                    'description' => 'Chicken cooked with colorful veggies and tossed in a flavorful garlic sauce',
                    'image' => 'stirfry.png',
                    'prep_time' => '00:20:00',
                    'cook_time' => '00:13:00',
                    'servings' =>'4'
                ],
                'directions' => [
                    "Place 1 teaspoon of oil in a large pan and heat over medium high heat.Add the broccoli, mushrooms and bell pepper to the pan. Cook for 5-6 minutes or until vegetables are tender.",

"Remove the vegetables from the pan; transfer to a plate and cover with foil to keep warm.",
"Wipe the pan clean with a paper towel, then heat the remaining tablespoon of oil over high heat.",
"Add the chicken to the pan in a single layer and season with salt and pepper to taste.
Cook for 3-4 minutes per side, or until chicken is browned and cooked through.",
"Lower heat to medium, add the garlic and cook for 30 seconds. Add the vegetables back to the pan.",
"In a small bowl, whisk together the chicken broth, sugar, soy sauce, sesame oil and cornstarch,
Pour the sauce over the chicken mixture and bring to a simmer. Simmer for 1-2 minutes or until sauce has just thickened.",
"Serve immediately, with steamed rice if desired."
                ],
                'ingredients' => [
                    'oil' => '1 teaspoon vegetable oil',
                    'broccoli' => '1 cup broccoli florets',
                    'mushrooms' => '1 cup sliced mushrooms',
                    'bell pepper' => '1 sliced bell pepper',
                    'chicken' => '1 lb chicken breast ',
                    'garlic'=> '4 cloves minced garlic',
                    'chicken broth'=>' 3/4 cup chicken broth',
                    'sugar'=> '1 1/2 teaspons sugar',
                    'soy'=>'1 tablespoon soy sauce',
                    'sesame oil' => '1 teaspoon sesame oil',
                    'cornstarch' => '2 teapsoons cornstarch'

                ],


    [
                'info' => [
                    'name' => 'Old Fashioned Pancakes',
                    'description' => 'Simple recipe for home made pancakes',
                    'image' => 'pancake.jpg',
                    'prep_time' => '00:05:00',
                    'cook_time' => '00:15:00',
                    'servings' =>'8'
                ],
                'directions' => [
                    "In a large bowl, sift together the flour, baking powder, salt and sugar. Make a well in the center and pour in the milk, egg and melted butter; mix until smooth.",

"Heat a lightly oiled griddle or frying pan over medium high heat. Pour or scoop the batter onto the griddle, using approximately 1/4 cup for each pancake. Brown on both sides and serve hot."
                ],
                'ingredients' => [
                    'flour' => '1 1/2 cups all-purpose flour',
                    'baking powder' => '3 1/2 cups baking powder',
                    'mushrooms' => ' 1 cup sliced mushrooms',
                    'salt' => '1 teaspoon salt',
                    'sugar' => '1 tablespoon sugar',
                    'milk'=> '1 1/4 cups milk',
                    'chicken broth'=>'3/4 cup chicken broth',
                    'eggs'=> '1 egg',
                    'butter'=>'3 tbsp melted butter'

                ]
            ],

                [
                            'info' => [
                    'name' => 'Mac and Cheese with Chicken and Broccoli',
                    'description' => 'A twist on classic Mac n Cheese',
                    'image' => 'mac.jpg',
                    'prep_time' => '00:10:00',
                    'cook_time' => '00:25:00',
                    'servings' =>'6'
                ],
                'directions' => [
                    "Place a pot of water on to boil for macaroni.",
                    "Heat a medium pan over medium to medium high heat. Add extra-virgin olive oil and chicken and season with salt and pepper. Saute a couple of minutes then add onion and cook another 5 to 7 minutes until onions are tender and chicken is cooked through. Turn off heat and reserve.",
                    "To boiling pasta water, add pasta and salt to season the cooking water. Cook 5 minutes, then add broccoli and cook 3 minutes more or until pasta is cooked to al dente and florets are just tender.",
                    "While pasta cooks, heat a medium sauce pot over medium heat. Add butter and melt, then add flour, cayenne and paprika and whisk together over heat until roux bubbles then cook a minute more. Whisk in milk and stock and raise heat a little to bring sauce to a quick boil. Simmer sauce to thicken about 5 minutes.",
                    "Drain macaroni or pasta and broccoli florets. Add back to pot and add chicken to the pasta and broccoli.",
                    "Add cheese to milk sauce and stir to melt it in, about a minute or so. Stir in mustard and season sauce with salt and pepper. Pour sauce over chicken and broccoli and cooked pasta and stir to combine. Adjust seasonings, transfer to a large serving platter and serve."
                ],

                'ingredients' => [
                    'oil' => '2 tablespoon extra-virgin olive oil',
                    'chicken' => '1 lb chopped chicken breast',
                    'onion'=> '1 chopped small onion',
                    'pasta'=>'1 lb macaroni elbows',
                    'broccoli'=>'2 1/2 cups broccoli florets'
                    'butter'=> '3 tablespoons butter',
                    'flour'=> '3 tablespoons all-purpose flour',
                    'chili'=> '1/2 teaspoon chili powder',
                    'paprika'=> '1 teaspoons paprika',
                    'milk'=>'3 cups whole milk',
                    'chicken broth'=> '1 cup chicken stock',
                    'cheddar'=> '3 cups Cheddar cheese',
                    'mustard'=> '1 tablespoon mustard'


                ]
            ],



            [
             'info' => [
                    'name' => 'Steak and Eggs',
                    'description' => 'Some mornings call for a rich indulgence of buttery eggs and sizzling steaks',
                    'image' => 'sande.jpg',
                    'prep_time' => '00:10:00',
                    'cook_time' => '00:10:00',
                    'servings' =>'4'
                ],
                'directions' => [
                 "Prepare the grill for direct cooking over high heat
                 (450° to 550°F).",

"Lightly brush the steaks on both sides with oil and season evenly with salt, pepper, and the paprika. Allow the steaks to stand at room temperature for 15 to 30 minutes before grilling.",
"Brush the cooking grates clean. Grill the steaks over direct high heat, with the lid closed as much as possible, until cooked to your desired doneness, 6 to 8 minutes for medium rare, turning once or twice (if flare-ups occur, move the steaks temporarily over indirect heat). When you turn the steaks, place a 12-inch cast-iron skillet on the cooking grate to preheat. Remove the steaks from the grill and let rest for 3 to 5 minutes. Lower the temperature of the grill to medium heat (350° to 450°F).",
"Coat the skillet with the butter. Crack the eggs into the skillet and season them with salt and pepper. Cook over direct medium heat, with the lid closed as much as possible, until cooked as desired, 4 to 6 minutes for partially runny yolks. Transfer to plates and serve right away with the steak."
                ],
                'ingredients' => [
                    'steak' => '2 New York strip steaks (10-12 oz)',
                    'oil' => '1 tablespoon extra-virgin olive oil',
                    'salt' => 'salt (to taste)',
                    'pepper' => 'ground black pepper (to taste)',
                    'milk'=> '1 1/4 cups milk',
                    'paprika'=>'3/4 teaspoon paprika',
                    'butter'=> '2 tablespoons butter',
                    'eggs'=>'8 eggs'

                ]
            ]/* no comma after the last one ofc :P */
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
                $newRecipe->directions()->create([
                    'step_no' => ++$index, /* incrementing the index so that the steps start at 1 */
                    'content' => $content
                ]);
            }

            foreach ($recipe['ingredients'] as $name => $displayInRecipe) {
                $newRecipe->ingredients()->attach($name, [
                    'display_in_recipe' => $displayInRecipe
                ]);
            }
        }
    }
}
