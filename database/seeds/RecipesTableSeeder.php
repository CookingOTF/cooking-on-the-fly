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
                    'servings' => 4
                ],
                'directions' => [
                    "Place 1 teaspoon of oil in a large pan and heat over medium high heat.Add the broccoli, mushrooms and bell pepper to the pan. Cook for 5-6 minutes or until vegetables are tender.",

                    "Remove the vegetables from the pan; transfer to a plate and cover with foil to keep warm.",

                    "Wipe the pan clean with a paper towel, then heat the remaining tablespoon of oil over high heat.",

                    "Add the chicken to the pan in a single layer and season with salt and pepper to taste.",

                    "Cook for 3-4 minutes per side, or until chicken is browned and cooked through.",

                    "Lower heat to medium, add the garlic and cook for 30 seconds. Add the vegetables back to the pan.",

                    "In a small bowl, whisk together the chicken broth, sugar, soy sauce, sesame oil and cornstarch",

                    "Pour the sauce over the chicken mixture and bring to a simmer. Simmer for 1-2 minutes or until sauce has just thickened.",

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
            ],
            [
                'info' => [
                    'name' => 'Old Fashioned Pancakes',
                    'description' => 'Simple recipe for home made pancakes',
                    'image' => 'pancake.jpg',
                    'prep_time' => '00:05:00',
                    'cook_time' => '00:15:00',
                    'servings' => 8
                ],
                'directions' => [
                    "In a large bowl, sift together the flour, baking powder, salt and sugar. Make a well in the center and pour in the milk, egg and melted butter; mix until smooth.",

                    "Heat a lightly oiled griddle or frying pan over medium high heat. Pour or scoop the batter onto the griddle, using approximately 1/4 cup for each pancake. Brown on both sides and serve hot."
                ],
                'ingredients' => [
                    'flour' => '1 1/2 cups all-purpose flour',
                    'baking powder' => '3 1/2 cups baking powder',
                    'salt' => '1 teaspoon salt',
                    'sugar' => '1 tablespoon sugar',
                    'milk'=> '1 1/4 cups milk',
                    'eggs'=> '1 egg',
                    'butter'=>'3 tbsp melted butter'
                ]
            ],
            [
                'info' => [
                    'name' => 'Mac and Cheese with Chicken and Broccoli',
                    'description' => 'A twist on classic Mac n Cheese',
                    'image' => 'macnbroc.jpg',
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
                    'onion' => '1 chopped small onion',
                    'pasta' => '1 lb macaroni elbows',
                    'broccoli' => '2 1/2 cups broccoli florets',
                    'butter' => '3 tablespoons butter',
                    'flour' => '3 tablespoons all-purpose flour',
                    'chili' => '1/2 teaspoon chili powder',
                    'paprika' => '1 teaspoons paprika',
                    'milk' => '3 cups whole milk',
                    'chicken broth' => '1 cup chicken stock',
                    'cheddar' => '3 cups Cheddar cheese',
                    'mustard' => '1 tablespoon mustard'
                ]
            ],
            [
                'info' => [
                    'name' => 'Steak and Eggs',
                    'description' => 'Some mornings call for a rich indulgence of buttery eggs and sizzling steaks',
                    'image' => 'sande.jpg',
                    'prep_time' => '00:10:00',
                    'cook_time' => '00:10:00',
                    'servings' => 4
                ],
                'directions' => [
                    "Prepare the grill for direct cooking over high heat (450° to 550°F).",

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
            ],

            [
             'info' => [
                    'name' => 'Classic Mashed Potatoes',
                    'description' => 'This is the perfect recipe for old fashioned mashed potatoes. Simple and delicious.',
                    'image' => 'potato.jpg',
                    'prep_time' => '00:15:00',
                    'cook_time' => '00:20:00',
                    'servings' =>'4'
                ],
                'directions' => [
                 "Bring a pot of salted water to a boil. Add potatoes and cook until tender but still firm, about 15 minutes; drain.",

"In a small saucepan heat butter and milk over low heat until butter is melted. Using a potato masher or electric beater, slowly blend milk mixture into potatoes until smooth and creamy. Season with salt and pepper to taste."

                ],
                'ingredients' => [
                    'potato' => '2 lbs potatoes peeled and boiled',
                    'milk'=> '1 cup milk',
                    'butter'=> '2 tablespoons butter'

                ]
            ],


            [
             'info' => [
                    'name' => 'Steamed Broccoli',
                    'description' => 'How to steam broccoli perfectly every time',
                    'image' => 'steamed.jpeg',
                    'prep_time' => '00:05:00',
                    'cook_time' => '00:07:00',
                    'servings' =>'4'
                ],
                'directions' => [
                 "Cut the crowns away from the large stems of the broccoli. Break the crown up into bite-sized florets. Rinse the broccoli florets thoroughly. Peel and discard the thick outer skin of the stems. Slice the stems or cut them into quarters lengthwise.",
                "Place 3/4 to 1 inch of water in a saucepan with a steamer and bring to a boil. (Note that is you don't have a steamer, you can simply put the broccoli directly into an inch of boiling water.",
                "Add the broccoli to the steamer and cover; reduce heat to medium and let cook for 5-6 minutes. The broccoli is done when you can pierce it with a fork. As soon as it is pierce-able, remove from heat, place in serving dish.",


                ],
                'ingredients' => [
                    'broccoli' => '1 bunch of broccoli'

                ]
            ],


             [
             'info' => [
                    'name' => 'Quick and Easy Shrimp Scampi',
                    'description' => 'A delicious and quick way to enjoy shrimp - even on a busy weeknight!',
                    'image' => 'shrimp.jpeg',
                    'prep_time' => '00:05:00',
                    'cook_time' => '00:25:00',
                    'servings' =>'4'
                ],
                'directions' => [
                 "Preheat oven to 350 degrees F (175 degrees C)",
                "Bring a large pot of salted water to a boil, add pasta, and cook until al dente. Drain pasta, and set aside",
                "In a large skillet, melt butter over medium heat. Add most of the garlic, keeping some for later. Coat the garlic completely with butter. Do not let the garlic brown. Add shrimp, and toss to coat. Immediately remove pan from heat; shrimp will not be cooked yet.",
                "Sprinkle the shrimp with breadcrumbs (enough to coat the shrimp), and transfer the entire mixture to a medium casserole dish. Pour wine and the lemon juice over the shrimp. Cover, and bake at 350 degrees F (175 degrees C) for 10 minutes."


                ],
                'ingredients' => [
                    'pasta' => '1 pound linguini pasta',
                    'butter' => '1/4 cup butter',
                    'garlic' => '5 cloves garlic, minced',
                    'shrimp' => '1 pound medium shrimp - peeled and deveined',
                    'bread crumbs' => '1 cup bread crumbs',
                    'wine' => '1/2 cup white wine',
                    'lemon' => '1 lemon, juiced',
                    'oil' => '1/4 cup light olive oil'

                ]
            ],



            [
             'info' => [
                    'name' => 'Banana bread',
                    'description' => 'his banana bread is moist and delicious with loads of banana flavor!',
                    'image' => 'bananabread.jpeg',
                    'prep_time' => '00:15:00',
                    'cook_time' => '01:05:00',
                    'servings' =>'12'
                ],
                'directions' => [
                 "Preheat oven to 350 degrees F (175 degrees C). Lightly grease a 9x5 inch loaf pan.",
                "In a large bowl, combine flour, baking soda and salt. In a separate bowl, cream together butter and brown sugar. Stir in eggs and mashed bananas until well blended. Stir banana mixture into flour mixture; stir just to moisten. Pour batter into prepared loaf pan.",
                "Bake in preheated oven for 60 to 65 minutes, until a toothpick inserted into center of the loaf comes out clean. Let bread cool in pan for 10 minutes, then turn out onto a wire rack."


                ],
                'ingredients' => [
                    'flour' => '2 cups all-purpose flour',
                    'baking soda' => '1 teaspoon baking soda',
                    'salt' => '1/4 teaspoon salt',
                    'butter' => '1/2 cup butter',
                    'brown sugar' => '3/4 cup brown sugar',
                    'eggs' => '2 eggs, beaten',
                    'banana' => '2 1/3 cups mashed overripe bananas'


                ]
            ],


            [
             'info' => [
                    'name' => 'Meatloaf',
                    'description' => 'This is a very easy and no fail recipe for meatloaf',
                    'image' => 'loaf.jpeg',
                    'prep_time' => '00:10:00',
                    'cook_time' => '01:00:00',
                    'servings' =>'8'
                ],
                'directions' => [
                 "Preheat oven to 350 degrees F (175 degrees C). Lightly grease a 9x5 inch loaf pan.",
                "In a large bowl, combine the beef, egg, onion, milk and bread OR cracker crumbs. Season with salt and pepper to taste and place in a lightly greased 5x9 inch loaf pan, OR form into a loaf and place in a lightly greased 9x13 inch baking dish.",
                "n a separate small bowl, combine the brown sugar, mustard and ketchup. Mix well and pour over the meatloaf",
                "Bake at 350 degrees F (175 degrees C) for 1 hour"


                ],
                'ingredients' => [
                    'beef' => '1 1/2 pounds ground beef',
                    'eggs' => '1 egg',
                    'onion' => '1 onion, chopped',
                    'milk' => '1 cup milk',
                    'bread crumbs' => '1 cup dried bread crumbs',
                    'brown sugar' => '2 tablespoons brown sugar',
                    'mustard' => '2 tablespoons prepared mustard',
                    'ketchup' => '1/3 cup ketchup'



                ]
            ],


            [
             'info' => [
                    'name' => 'Baked Honey Mustard Chicken',
                    'description' => 'A quick and easy to prepare, and the kids love it too!',
                    'image' => 'honey.jpg',
                    'prep_time' => '00:15:00',
                    'cook_time' => '00:45:00',
                    'servings' =>'6'
                ],
                'directions' => [
                 "Preheat oven to 350 degrees F (175 degrees C)",
                "Sprinkle chicken breasts with salt and pepper to taste, and place in a lightly greased 9x13 inch baking dish. In a small bowl, combine the honey, mustard, basil, paprika, and parsley. Mix well. Pour 1/2 of this mixture over the chicken, and brush to cover.",
                "Bake in the preheated oven for 30 minutes. Turn chicken pieces over and brush with the remaining 1/2 of the honey mustard mixture. Bake for an additional 10 to 15 minutes, or until chicken is no longer pink and juices run clear. Let cool 10 minutes before serving."

                ],
                'ingredients' => [
                    'chicken' => '6 skinless, boneless chicken breast halves',
                    'honey' => '1/2 cup honey',
                    'mustard' => 'mustard',
                    'paprika' => 'paprika'
       

                ]
            ],



            [
             'info' => [
                    'name' => 'Quick and Easy Chicken Noodle Soup',
                    'description' => "When you don't have time to make your soup totally from scratch, this is a very easy, very good substitute",
                    'image' => 'soup.jpeg',
                    'prep_time' => '00:10:00',
                    'cook_time' => '00:20:00',
                    'servings' =>'6'
                ],
                'directions' => [
                "In a large pot over medium heat, melt butter. Cook onion and celery in butter until just tender, 5 minutes. Pour in chicken and vegetable broths and stir in chicken, noodles, carrots, basil, oregano, salt and pepper. Bring to a boil, then reduce heat and simmer 20 minutes before serving."

                ],
                'ingredients' => [
                    'butter' => '1 tablespoon butter',
                    'onion' => '1/2 cup chopped onion',
                    'celery' => 'mustard',
                    'chicken broth' => '4 (14.5 ounce) cans chicken broth',
                    'chicken' => '1/2 pound chopped cooked chicken breast',
                    'pasta' => '1 1/2 cups egg noodles',
                    'carrot' => '1 cup sliced carrots'
       

                ]
            ],



            [
             'info' => [
                    'name' => 'Oven-Fried Pork Chops',
                    'description' => 'This is a quick, simple, and above all, a cheap way to make pork chops',
                    'image' => 'chops.jpeg',
                    'prep_time' => '00:10:00',
                    'cook_time' => '00:20:00',
                    'servings' =>'4'
                ],
                'directions' => [
                 "Preheat oven to 425 degrees F (220 degrees C). Pour butter into a 9x13 inch baking pan.",
                "Stir together egg, milk and pepper. Dip pork chops in egg mixture, coat with stuffing mix and place in pan.",
                "Bake in preheated oven for 10 minutes. Turn chops and bake for another 10 minutes, or until no pink remains in the meat and juices run clear."

                ],
                'ingredients' => [
                    'pork chops' => '4 pork chops, trimmed',
                    'butter' => '2 tablespoons butter, melted',
                    'egg' => '1 egg',
                    'milk' => '2 tablespoons milk',
                    'bread crumbs' => '1 cup herb-seasoned dry bread stuffing mix',
       

                ]
            ],



              [
             'info' => [
                    'name' => 'Garlic Broiled Chicken',
                    'description' => 'This very easy dish works with any cut of chicken, skin on or off...even with whole split chickens',
                    'image' => 'garlic.jpeg',
                    'prep_time' => '00:10:00',
                    'cook_time' => '00:20:00',
                    'servings' =>'6'
                ],
                'directions' => [
                 "Preheat oven to 350 degrees F (175 degrees C)",
                "In a microwave safe bowl, mix the butter, garlic, soy sauce, pepper, and parsley. Cook 2 minutes on High in the microwave, or until butter is melted.",
                "Bake in the preheated oven for 30 minutes. Turn chicken pieces over and brush with the remaining 1/2 of the honey mustard mixture. Bake for an additional 10 to 15 minutes, or until chicken is no longer pink and juices run clear. Let cool 10 minutes before serving."

                ],
                'ingredients' => [
                    'butter' => '1/2 cup butter',
                    'garlic' => '3 tablespoons minced garlic',
                    'soy' => '3 tablespoons soy sauce',
                    'chicken' => 'chicken thighs'
       

                ]
            ],

                [
             'info' => [
                    'name' => 'Sirloin Steak with Garlic Butter',
                    'description' => 'The butter makes this steak melt in your mouth wonderfuls',
                    'image' => 'steak.jpeg',
                    'prep_time' => '00:10:00',
                    'cook_time' => '00:20:00',
                    'servings' =>'8'
                ],
                'directions' => [
                 "In a small saucepan, melt butter over medium-low heat with garlic powder and minced garlic. Set aside.",
                "Sprinkle both sides of each steak with salt and pepper",
                "Grill steaks 4 to 5 minutes per side, or to desired doneness. When done, transfer to warmed plates. Brush tops liberally with garlic butter, and allow to rest for 2 to 3 minutes before serving."

                ],
                'ingredients' => [
                    'butter' => '1/2 cup butter',
                    'garlic' => '3 tablespoons minced garlic',
                    'steak' => '4 pounds beef top sirloin steaks'

                ]
            ],



                [
             'info' => [
                    'name' => 'Easy Asparagus',
                    'description' => 'Asparagus cooked right in the frying pan, drizzled with an onion-wine glaze and parmesan cheese',
                    'image' => 'asp.jpeg',
                    'prep_time' => '00:10:00',
                    'cook_time' => '00:10:00',
                    'servings' =>'2'
                ],
                'directions' => [
                 "Heat the olive oil in a skillet over medium-high heat. Mix in onion and garlic, and season with salt and  pepper. Cook and stir until tender. Place asparagus in the skillet, and cook 8 minutes, turning occasionally to coat with seasonings. Sprinkle wine into the skillet, and scrape up any browned bits.",
                "Transfer asparagus to a shallow dish. Drizzle with remaining mixture in skillet, and dust evenly with Parmesan cheese and crushed whole wheat crackers."

                ],
                'ingredients' => [
                    'oil' => 'olive oil',
                    'onion' => '1/4 cup sliced purple onion',
                    'asparagus' => '10 spears fresh asparagus',
                    'parmesan' => '1 tablespoon Parmesan cheese',
                    'garlic' => 'garlic ',
                    'bread crumbs' => '1 tablespoon crushed whole wheat crackers'


                ]
            ],



             [
             'info' => [
                    'name' => 'Home-made Biscuits',
                    'description' => 'This three-ingredient recipe gets biscuits on your table in a quick and easy manner for when you need biscuits now!',
                    'image' => 'bisc.jpeg',
                    'prep_time' => '00:10:00',
                    'cook_time' => '00:25:00',
                    'servings' =>'12'
                ],
                'directions' => [
                 "Combine and mix ingredients together. Pour out on floured waxed paper. Pat the dough out with your hands until dough is not sticky (add a little flour if necessary). Fold double. Cut biscuits with a biscuit cutter.",
                "Bake on a cookie sheet at 425 degrees F (220 degrees C) for 20-25 minutes."

                ],
                'ingredients' => [
                    'flour' => '2 1/4 cups self-rising flour',
                    'oil' => '3/4 cup shortening',
                    'milk' => '1 cup milk'


                ]
            ],


            [
             'info' => [
                    'name' => 'Tangy Broccoli',
                    'description' =>'Cheesy broccoli with a kick!',
                    'image' => 'tang.jpeg',
                    'prep_time' => '00:10:00',
                    'cook_time' => '00:10:00',
                    'servings' =>'4'
                ],
                'directions' => [
                 "Steam broccoli until tender-crisp.",
                "Toss broccoli with mustard, then melt the cheese over the broccoli in a microwave for 1 minute on HIGH. Stir and serve."

                ],
                'ingredients' => [
                    'broccoli' => '1 large head broccoli, cut into florets',
                    'mustard' => '2 tablespoons prepared Dijon-style mustard',
                    'cheddar' => '4 ounces cheddar'


                ]
            ],


            [
             'info' => [
                    'name' => 'Salsa Chicken',
                    'description' =>'A household favorite. You can use mild, medium or hot salsa depending on your taste.',
                    'image' => 'salsa.jpeg',
                    'prep_time' => '00:05:00',
                    'cook_time' => '00:15:00',
                    'servings' =>'6'
                ],
                'directions' => [
                 "Preheat the oven to 350 degrees F (175 degrees C). Grease a 9 inch square baking dish.",
                "In a large pot, combine the milk and chicken stock. Bring to a boil over medium-high heat. When it is at a rolling boil, gradually whisk in the cornmeal, making sure there are no lumps. Reduce heat to low and simmer, stirring constantly until thick, about 5 minutes. Remove from the heat and stir in the Parmesan cheese.",
                "Pour the polenta into the prepared baking dish, and spread spaghetti sauce over the top.",
                "Bake for 10 minutes in the preheated oven, or until sauce is bubbling."

                ],
                'ingredients' => [
                    'parmesan' => '1 cup Parmesan cheese',
                    'chicken broth' => '2 cups chicken stock',
                    'milk' => '2 cups milk',
                    'salsa' => 'Mild Salsa'


                ]
            ],


            [
             'info' => [
                    'name' => 'Polenta with Tomato Sauce',
                    'description' =>'A quick baked polenta topped with red sauce.',
                    'image' => 'polenta.jpeg',
                    'prep_time' => '00:05:00',
                    'cook_time' => '00:15:00',
                    'servings' =>'6'
                ],
                'directions' => [
                 "Preheat the oven to 350 degrees F (175 degrees C). Grease a 9 inch square baking dish.",
                "In a large pot, combine the milk and chicken stock. Bring to a boil over medium-high heat. When it is at a rolling boil, gradually whisk in the cornmeal, making sure there are no lumps. Reduce heat to low and simmer, stirring constantly until thick, about 5 minutes. Remove from the heat and stir in the Parmesan cheese.",
                "Pour the polenta into the prepared baking dish, and spread spaghetti sauce over the top.",
                "Bake for 10 minutes in the preheated oven, or until sauce is bubbling."

                ],
                'ingredients' => [
                    'parmesan' => '1 cup Parmesan cheese',
                    'chicken broth' => '2 cups chicken stock',
                    'milk' => '2 cups milk',
                    'tomato sauce' => '2 cups spaghetti sauce, or your favorite recipe'


                ]
            ],


            [
             'info' => [
                    'name' => 'Broccoli Pie',
                    'description' =>'Good served both warm and cold',
                    'image' => 'brocpie.jpeg',
                    'prep_time' => '00:15:00',
                    'cook_time' => '00:35:00',
                    'servings' =>'6'
                ],
                'directions' => [
                 "Preheat oven to 350 degrees F (175 degrees C). Grease a 2 quart casserole dish",
                "Combine broccoli, onions and cheese in prepared dish.",
                "In a small bowl whisk together baking mix, egg, milk, salt and pepper. Pour over broccoli mixture.",
                "Bake in preheated oven for 35 minutes, or until lightly browned."

                ],
                'ingredients' => [
                    'broccoli' => '2 (10 ounce) packages chopped frozen broccoli, thawed',
                    'onion' => '1/2 cup diced onion',
                    'cheddar' => '2 cups shredded Cheddar cheese',
                    'pancake mix' => '1/2 cup baking mix',
                    'eggs' => '1 egg',
                    'milk' => '1 cup milk'


                ]
            ],


            [
             'info' => [
                    'name' => 'Fried Broccoli',
                    'description' =>'Quick and easy household favorite',
                    'image' => 'fried.jpeg',
                    'prep_time' => '00:05:00',
                    'cook_time' => '00:05:00',
                    'servings' =>'4'
                ],
                'directions' => [
                 "Rinse and pat dry the broccoli.",
                "Heat the olive oil in a large skillet over medium heat, add crushed red pepper and heat 1 minute. Cook and stir the broccoli in the skillet until it begins to get crispy, 5 to 7 minutes. Season with salt to serve."

                ],
                'ingredients' => [
                    'broccoli' => '1 (16 ounce) package frozen broccoli, thawed',
                    'olive oil' => '1 tablespoon olive oil'

                ]
            ],


             [
             'info' => [
                    'name' => 'Broccoli Pasta Salad',
                    'description' =>'A quick and tasty pasta salad that can be served warm or cold.',
                    'image' => 'brocpasta.jpeg',
                    'prep_time' => '00:15:00',
                    'cook_time' => '00:20:00',
                    'servings' =>'6'
                ],
                'directions' => [
                 "Bring a large pot of lightly salted water to a boil; cook the linguine at a boil until tender yet firm to the bite, about 11 minutes; drain and return to pot.",
                "Place a steamer insert into a saucepan and fill with water to just below the bottom of the steamer. Bring water to a boil. Add broccoli, cover, and steam until tender, 3 to 5 minutes.",
                "Heat olive oil in a small saucepan over medium heat; cook and stir garlic and red pepper flakes until garlic is fragrant, 1 to 3 minutes. Add garlic mixture and broccoli to linguine; gently toss to coat. Add Romano cheese, parsley, black pepper, and salt; toss to combine."

                ],
                'ingredients' => [
                    'pasta' => '1 (8 ounce) package linguine pasta',
                    'broccoli' => '1 (12 ounce) bag broccoli florets, cut into bite-size pieces',
                    'olive oil' => '1/4 cup olive oil',
                    'garlic' => '4 teaspoons minced garlic',
                    'romano' => '1/2 cup finely shredded Romano cheese',



                ]
            ],



             [
             'info' => [
                    'name' => 'Pasta, Broccoli and Chicken',
                    'description' =>'A mixture of pasta, broccoli, pesto, tomatoes and cheese that is practically a meal in itself, especially with the cooked chicken.',
                    'image' => 'chickpasta.jpeg',
                    'prep_time' => '00:15:00',
                    'cook_time' => '00:15:00',
                    'servings' =>'6'
                ],
                'directions' => [
                 "In a large pot with boiling salted water cook rigatoni pasta until al dente. Drain.",
                "Meanwhile, blanch broccoli florets in a medium size saucepan, remove with slotted spoon. In same pan saute the minced garlic and pesto sauce in the olive oil for 2 minutes. Add the chopped tomatoes and set aside.",
                "In a large bowl toss cooked pasta with blanched broccoli, cooked chicken, and garlic/tomato mixture. Add grated Parmesan cheese, salt, and ground black pepper and mix well. Serve warm."

                ],
                'ingredients' => [
                    'pasta' => '12 ounces rigatoni pasta',
                    'broccoli' => '1 bag broccoli florets, cut into bite-size pieces',
                    'olive oil' => '1/4 cup olive oil',
                    'garlic' => '1 tablespoon minced garlic',
                    'pesto' => '2 tablespoons pesto',
                    'tomato' => '1 cup chopped tomatoes',
                    'parmesan' => '3/4 cup grated Parmesan cheese',
                    'chicken' => '1 pound boneless chicken breast halves, cooked and chopped',
                    'tomato' => '1 cup chopped tomatoes'

                ]
            ],


             [
             'info' => [
                    'name' => 'Alfredo Sauce',
                    'description' =>'a quick, cheap, and easy Alfredo sauce combination',
                    'image' => 'alfredo.jpeg',
                    'prep_time' => '00:05:00',
                    'cook_time' => '00:05:00',
                    'servings' =>'4'
                ],
                'directions' => [
                 "Melt butter in a medium, non-stick saucepan over medium heat. Add cream cheese and garlic powder, stirring with wire whisk until smooth. Add milk, a little at a time, whisking to smooth out lumps. Stir in Parmesan and pepper. Remove from heat when sauce reaches desired consistency. Sauce will thicken rapidly, thin with milk if cooked too long. Toss with hot pasta to serve."

                ],
                'ingredients' => [
                    'butter' => '1/2 cup butter',
                    'cream cheese' => '1 (8 ounce) package cream cheese',
                    'garlic' => '2 teaspoons garlic powder',
                    'milk' => '2 cups milk',
                    'pesto' => '2 tablespoons pesto',
                    'tomato' => '1 cup chopped tomatoes',
                    'parmesan' => '6 ounces grated Parmesan cheese'
                ]
            ],


             [
             'info' => [
                    'name' => 'Quiche',
                    'description' =>'This is an easy mix-it-up-in-one-bowl-and-cook recipe',
                    'image' => 'quiche.jpeg',
                    'prep_time' => '00:10:00',
                    'cook_time' => '00:50:00',
                    'servings' =>'8'
                ],
                'directions' => [
                 "Preheat oven to 375 degrees F (190 degrees C). Lightly grease a 10 inch quiche dish.",
                 "In a large bowl, beat together milk, eggs, baking mix, butter and parmesan cheese. Batter will be lumpy. Stir in broccoli, ham and Cheddar cheese. Pour into prepared quiche dish.",
                 "Bake in preheated oven for 50 minutes, until eggs are set and top is golden brown."

                ],
                'ingredients' => [
                    'milk' => '2 cups milk',
                    'eggs' => '4 eggs',
                    'pancake mix' => '3/4 cup biscuit baking mix',
                    'butter' => '1/4 cup butter, softened',
                    'parmesan' => '1 cup grated Parmesan cheese',
                    'broccoli' => '1 (10 ounce) package chopped frozen broccoli, thawed and drained',
                    'ham' => '1 cup cubed cooked ham',
                    'cheddar' => '8 ounces shredded Cheddar cheese'
                ]
            ],

            [
             'info' => [
                    'name' => 'Roasted Broccoli',
                    'description' => 'Easy roasted broccoli',
                    'image' => 'roast.jpeg',
                    'prep_time' => '00:10:00',
                    'cook_time' => '00:20:00',
                    'servings' =>'4'
                ],
                'directions' => [
                 "Preheat oven to 400 degrees F (200 degrees C).",
                "Cut broccoli florets from the stalk. Peel the stalk and slice into 1/4-inch slices. Mix florets and stem pieces with olive oil in a bowl and transfer to a baking sheet; season with salt and pepper.",
                "Roast in the preheated oven until broccoli is tender and lightly browned, about 18 minutes.",


                ],
                'ingredients' => [
                    'broccoli' => '14 ounces broccoli',
                    'olive oil'=>'1 tablespoon olive oil'

                ]
            ],

            [
             'info' => [
                    'name' => 'Baked Italian Chicken Dinner',
                    'description' => "It's simple to make, and the ingredients are easy to find!",
                    'image' => 'italian.jpeg',
                    'prep_time' => '00:15:00',
                    'cook_time' => '00:45:00',
                    'servings' =>'4'
                ],
                'directions' => [
                 "Preheat oven to 400 degrees F (200 degrees C).",
                "Spread chicken pieces, broccoli, and potatoes into the prepared baking dish, respectively. Drizzle melted butter over ingredients in the dish and season with the Italian dressing mix.",
                "Bake in preheated oven until the chicken is cooked through and potatoes are tender, 45 to 60 minutes."

                ],
                'ingredients' => [
                    'broccoli' => '14 ounces broccoli',
                    'chicken'=>'1 pound skinless, boneless chicken breast, cut into cubes',
                    'potato'=>'4 potatoes, diced',
                    'butter'=>'1/4 cup butter, melted',
                    'italian seasoning'=>'1 (.7 ounce) package Italian dressing mix',

                ]
            ],

            [
             'info' => [
                    'name' => 'Baked Tilapia',
                    'description' => "This easy recipe for tilapia only takes a few minutes to prepare, uses few ingredients, and is flavorful.",
                    'image' => 'tila.jpeg',
                    'prep_time' => '00:05:00',
                    'cook_time' => '00:30:00',
                    'servings' =>'4'
                ],
                'directions' => [
                 "Preheat the oven to 375 degrees F (190 degrees F). Lightly grease a 9x13-inch baking dish.",
                "Place tilapia fillets in the bottom of the baking dish and season with seafood seasoning. Melt butter with garlic in a small bowl in the microwave, about 30 seconds on medium; pour over fish. Top each fillet with a slice or two of lemon. Arrange the frozen mixed vegetables around the fish, and season lightly with salt and pepper. Cover the dish with aluminum foil.",
                "Bake in preheated oven until the fish is cooked through and veggies are tender, 30 minutes."

                ],
                'ingredients' => [
                    'broccoli' => '14 ounces broccoli',
                    'tilapia'=>'4 (4 ounce) fillets tilapia',
                    'potato'=>'4 potatoes, diced',
                    'butter'=>'2 teaspoons butter, melted',
                    'garlic'=>'1 clove garlic, minced',
                    'lemon'=>'1 lemon, sliced',
                    'cauliflower'=>'1 (16 ounce) package frozen cauliflower with broccoli and red pepper',
                ]
            ],

            [
             'info' => [
                    'name' => 'Tomato and Broccoli Soup',
                    'description' => "This soup is delicious!",
                    'image' => 'tomatosoup.jpeg',
                    'prep_time' => '00:20:00',
                    'cook_time' => '00:40:00',
                    'servings' =>'6'
                ],
                'directions' => [
                 "Heat olive oil in a stockpot over medium heat. Cook and stir onion in hot oil until softened, about 5 minutes.",
                "Stir garlic through the onion; cook and stir until garlic is fragrant and slightly soft, another 1 to 2 minutes",
                "Place broccoli, diced tomatoes, and chicken broth into the stockpot. Reduce heat to medium-low, bring the mixture to a simmer, and cook until the broccoli is completely softened, 30 to 40 minutes.",
                "Stir milk into the soup and return to a simmer.",
                "Pour the soup into a blender, filling the pitcher no more than halfway. Hold the lid of the blender firmly in place and carefully start the blender, using a few quick pulses to get the soup moving before leaving it on to puree. Puree in batches until smooth and pour into a serving dish. Season with salt and black pepper to serve."

                ],
                'ingredients' => [
                    'broccoli' => '1 pound broccoli crowns, coarsely chopped',
                    'tomato'=>'2 (14.5 ounce) cans diced tomatoes',
                    'onion'=>'1 large onion, chopped',
                    'milk'=>'1/2 cup low-fat milk',
                    'garlic'=>'1 clove garlic, minced',
                    'chicken broth'=>'1 (15 ounce) can chicken broth',
                    'cauliflower'=>'1 (16 ounce) package frozen cauliflower with broccoli and red pepper',
                ]
            ],

             [
             'info' => [
                    'name' => 'Creamed Spinach',
                    'description' => "This soup is delicious!",
                    'image' => 'creamed.jpeg',
                    'prep_time' => '00:15:00',
                    'cook_time' => '00:20:00',
                    'servings' =>'6'
                ],
                'directions' => [
                 "Heat olive oil in a stockpot over medium heat. Cook and stir onion in hot oil until softened, about 5 minutes.",
                "Stir garlic through the onion; cook and stir until garlic is fragrant and slightly soft, another 1 to 2 minutes",
                "Place broccoli, diced tomatoes, and chicken broth into the stockpot. Reduce heat to medium-low, bring the mixture to a simmer, and cook until the broccoli is completely softened, 30 to 40 minutes.",
                "Stir milk into the soup and return to a simmer.",
                "Pour the soup into a blender, filling the pitcher no more than halfway. Hold the lid of the blender firmly in place and carefully start the blender, using a few quick pulses to get the soup moving before leaving it on to puree. Puree in batches until smooth and pour into a serving dish. Season with salt and black pepper to serve."

                ],
         'ingredients' => [
                    'spinach' => '2 (16 ounce) bags fresh spinach',
                    'shallot'=>'2 tablespoons minced shallot',
                    'cream'=>'3/4 cup heavy whipping cream',
                    'parmesan'=>'2 tablespoons finely shredded Parmesan',
                    'lemon'=>'1 teaspoon freshly grated lemon zest',
                    'butter'=>'1 tablespoon butter'
                ]
            ],

             [
             'info' => [
                    'name' => 'Grilled Zucchini',
                    'description' => "Great summer vegetable to go along side your burgers.",
                    'image' => 'zucc.jpeg',
                    'prep_time' => '00:10:00',
                    'cook_time' => '00:10:00',
                    'servings' =>'4'
                ],
                'directions' => [
                 "Preheat grill for medium heat and lightly oil the grate.",
                "Drizzle zucchini slices on both sides with olive oil and season with grill seasoning.",
            
                "Grill zucchinis on preheated grill until tender, 3 to 4 minutes per side."

                ],
                    'ingredients' => [
                    'zucchini' => '3 zucchinis, sliced 1/4-inch thick, lengthwise',
                    'olive oil'=>'tablespoon olive oil'

                ]
            ],

             [
             'info' => [
                    'name' => 'Steak Sandwich',
                    'description' => "Freezing the steak the day before makes it easy to cut into very thin slices.",
                    'image' => 'sandy.jpeg',
                    'prep_time' => '00:10:00',
                    'cook_time' => '00:15:00',
                    'servings' =>'1'
                ],
                'directions' => [
                 "Melt 1 tablespoon of butter in a large skillet over medium heat. Add the onion; cook and stir until tender. Push onion to the side of the pan, and add the mushrooms. Cook and stir until softened, then add the bell pepper and cook just until tender, about 3 minutes. Remove from the pan with a slotted spoon, and set aside.",
                "Add the remaining butter to the skillet. No need to clean the pan, just let it heat up a little bit. Place the steak in the skillet along with the pickled peppers. Season with salt and pepper. The steak cooks really fast, just a couple of minutes. Once the steak is mostly browned, return the onion and pepper to the pan. Cook until heated through.",
                "Turn off the heat, and place the slices of cheese over the top of the pile so they can melt. Scoop the whole pile into the awaiting bread, making sure to pour some of the juices onto that wonderful sandwich."

                ],
                    'ingredients' => [
                    'butter' => '2 tablespoons butter',
                    'onion'=>'1/4 medium onion, sliced',
                    'mushroom'=>'4 large fresh mushrooms, sliced',
                    'bell pepper'=>'1/4 green bell pepper, sliced into long strips',
                    'steak'=>'1 (1/2 pound) well-marbled beef steak of any type, sliced as thinly as possible',
                    'cheddar'=>'2 slices sharp Cheddar cheese',
                    'bread'=>'1/3 French baguette, cut in half lengthwise'

                ]
            ],


             [
             'info' => [
                    'name' => 'Spicy Roasted Potatoes',
                    'description' => "Slight twist to an old favorite. Chili powder gives the potatoes and onions in this recipe some zing",
                    'image' => 'spicyt.jpeg',
                    'prep_time' => '00:15:00',
                    'cook_time' => '00:40:00',
                    'servings' =>'4'
                ],
                'directions' => [
                 "Preheat the oven to 450 degrees F (220 degrees C)",
                "Arrange the potatoes and onions in a greased 9x13 inch baking dish so that they are evenly distributed. Season with garlic powder, salt and chili powder. Drizzle with olive oil. Stir to coat potatoes and onions with oil and spices.",
                "Bake for 35 to 40 minutes in the preheated oven, until potatoes are fork tender and slightly crispy. Stir every 10 minutes. When done, sprinkle with cheese. Wait about 5 minutes for the cheese to melt before serving.."

                ],
                    'ingredients' => [
                    'potato' => '5 medium red potatoes, diced with peel',
                    'onion'=>'1/4 medium onion, sliced',
                    'garlic'=>'garlic powder',
                    'chili powder'=>'2 teaspoons chili powder',
                    'cheddar'=>'1 cup shredded Cheddar cheese'

                ]
            ],

            [
             'info' => [
                    'name' => ' Simple Broccoli and Cheese',
                    'description' => "Slight twist to an old favorite. Chili powder gives the potatoes and onions in this recipe some zing",
                    'image' => 'simple.jpeg',
                    'prep_time' => '00:15:00',
                    'cook_time' => '00:40:00',
                    'servings' =>'4'
                ],
                'directions' => [
                 "Preheat the oven to 450 degrees F (220 degrees C)",
                "Arrange the potatoes and onions in a greased 9x13 inch baking dish so that they are evenly distributed. Season with garlic powder, salt and chili powder. Drizzle with olive oil. Stir to coat potatoes and onions with oil and spices.",
                "Bake for 35 to 40 minutes in the preheated oven, until potatoes are fork tender and slightly crispy. Stir every 10 minutes. When done, sprinkle with cheese. Wait about 5 minutes for the cheese to melt before serving.."

                ],
                    'ingredients' => [
                    'broccoli' => '1 (10 ounce) package frozen broccoli florets, thawed',
                    'cheddar' => '1/2 cup shredded Cheddar cheese',
                    'butter'=>'3 tablespoons butter, melted'


                ]
            ]







            /* no comm/* no co/* no comm/* no comma after the last one ofc :P */
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
