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
     * values. Copy the arrays as many times
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
            [
                'name' => 'garlic',
                'display_name' => 'Garlic',
                'category' => 'vegetable'
            ],
            [
                'name' => 'onion',
                'display_name' => 'Onion',
                'category' => 'vegetable'
            ],
            [
                'name' => 'tomato sauce',
                'display_name' => 'Tomato Sauce',
                'category' => 'vegetable'
            ],
            [
                'name' => 'tomato paste',
                'display_name' => 'Tomato Paste',
                'category' => 'vegetable'
            ],
            [
                'name' => 'tomato',
                'display_name' => 'Tomato',
                'category' => 'vegetable'
            ],
            [
                'name' => 'potato',
                'display_name' => 'Potato',
                'category' => 'vegetable'
            ],
            [
                'name' => 'lettuce',
                'display_name' => 'Salad Greens',
                'category' => 'vegetable'
            ],
            [
                'name' => 'olives',
                'display_name' => 'Olives',
                'category' => 'vegetable'
            ],
            [
                'name' => 'carrot',
                'display_name' => 'Carrot',
                'category' => 'vegetable'
            ],
            [
                'name' => 'basil',
                'display_name' => 'Basil',
                'category' => 'vegetable'
            ],
            [
                'name' => 'peas',
                'display_name' => 'Peas',
                'category' => 'vegetable'
            ],
            [
                'name' => 'beans',
                'display_name' => 'Beans',
                'category' => 'vegetable'
            ],
            [
                'name' => 'parsley',
                'display_name' => 'Parsley',
                'category' => 'vegetable'
            ],
            [
                'name' => 'rosemary',
                'display_name' => 'Rosemary',
                'category' => 'vegetable'
            ],
            [
                'name' => 'cucumber',
                'display_name' => 'Cucumber',
                'category' => 'vegetable'
            ],
            [
                'name' => 'bell pepper',
                'display_name' => 'Bell Pepper',
                'category' => 'vegetable'
            ],
            [
                'name' => 'spinach',
                'display_name' => 'Spinach',
                'category' => 'vegetable'
            ],
            [
                'name' => 'broccoli',
                'display_name' => 'Broccoli',
                'category' => 'vegetable'
            ],
            [
                'name' => 'scallions',
                'display_name' => 'Scallions',
                'category' => 'vegetable'
            ],
            [
                'name' => 'zucchini',
                'display_name' => 'Zucchini',
                'category' => 'vegetable'
            ],
            [
                'name' => 'cabbage',
                'display_name' => 'Cabbage',
                'category' => 'vegetable'
            ],
            [
                'name' => 'cauliflower',
                'display_name' => 'Cauliflower',
                'category' => 'vegetable'
            ],
            [
                'name' => 'avocado',
                'display_name' => 'Avocado',
                'category' => 'vegetable'
            ],
            [
                'name' => 'asparagus',
                'display_name' => 'Asparagus',
                'category' => 'vegetable'
            ],
            [
                'name' => 'snow peas',
                'display_name' => 'Snow Peas',
                'category' => 'vegetable'
            ],
            [
                'name' => 'celery',
                'display_name' => 'Celery',
                'category' => 'vegetable'
            ],
            [
                'name' => 'jalapeno',
                'display_name' => 'Jalapeno',
                'category' => 'vegetable'
            ],
            [
                'name' => 'sweet potato',
                'display_name' => 'Sweet Potato',
                'category' => 'vegetable'
            ],
            [
                'name' => 'kale',
                'display_name' => 'Kale',
                'category' => 'vegetable'
            ],
            [
                'name' => 'corn',
                'display_name' => 'Corn',
                'category' => 'vegetable'
            ],
            [
                'name' => 'green beans',
                'display_name' => 'Green Beans',
                'category' => 'vegetable'
            ],
            [
                'name' => 'squash',
                'display_name' => 'Squash',
                'category' => 'vegetable'
            ],
            [
                'name' => 'mushroom',
                'display_name' => 'Mushroom',
                'category' => 'vegetable'
            ],
            [
                'name' => 'mixed',
                'display_name' => 'Mixed Vegetable',
                'category' => 'vegetable'
            ],
            [
                'name' => 'ginger',
                'display_name' => 'Ginger',
                'category' => 'vegetable'
            ],
            [
                'name' => 'lemon',
                'display_name' => 'Lemon',
                'category' => 'fruit'
            ],
            [
                'name' => 'banana',
                'display_name' => 'Banana',
                'category' => 'fruit'
            ],
            [
                'name' => 'apple',
                'display_name' => 'Apple',
                'category' => 'fruit'
            ],
            [
                'name' => 'coconut',
                'display_name' => 'Coconut',
                'category' => 'fruit'
            ],
            [
                'name' => 'mango',
                'display_name' => 'Mango',
                'category' => 'fruit'
            ],
            [
                'name' => 'pineapple',
                'display_name' => 'Pineapple',
                'category' => 'fruit'
            ],
            [
                'name' => 'strawberry',
                'display_name' => 'Strawberry',
                'category' => 'fruit'
            ],
            [
                'name' => 'grape',
                'display_name' => 'Grape',
                'category' => 'fruit'
            ],
            [
                'name' => 'blueberry',
                'display_name' => 'Blueberry',
                'category' => 'fruit'
            ],
            [
                'name' => 'peach',
                'display_name' => 'Peach',
                'category' => 'fruit'
            ],
            [
                'name' => 'butter',
                'display_name' => 'Butter',
                'category' => 'dairy'
            ],
            [
                'name' => 'eggs',
                'display_name' => 'Egg',
                'category' => 'dairy'
            ],
            [
                'name' => 'milk',
                'display_name' => 'Milk',
                'category' => 'dairy'
            ],
            [
                'name' => 'cream',
                'display_name' => 'Cream',
                'category' => 'dairy'
            ],
            [
                'name' => 'sour cream',
                'display_name' => 'Sour Cream',
                'category' => 'dairy'
            ],
            [
                'name' => 'parmesan',
                'display_name' => 'Parmesan',
                'category' => 'dairy'
            ],
            [
                'name' => 'cream cheese',
                'display_name' => 'Cream Cheese',
                'category' => 'dairy'
            ],
            [
                'name' => 'mozzarella',
                'display_name' => 'Mozzarella',
                'category' => 'dairy'
            ],
            [
                'name' => 'yogurt',
                'display_name' => 'Yogurt',
                'category' => 'dairy'
            ],
            [
                'name' => 'sliced cheese',
                'display_name' => 'Sliced Cheese',
                'category' => 'dairy'
            ],
            [
                'name' => 'whipped cream',
                'display_name' => 'Whipped Cream',
                'category' => 'dairy'
            ],
            [
                'name' => 'cottage cheese',
                'display_name' => 'Cottage Cheese',
                'category' => 'dairy'
            ],
            [
                'name' => 'ricotta',
                'display_name' => 'Ricotta',
                'category' => 'dairy'
            ],
            [
                'name' => 'ice cream',
                'display_name' => 'Ice Cream',
                'category' => 'dairy'
            ],
            [
                'name' => 'swiss',
                'display_name' => 'Swiss Chese',
                'category' => 'dairy'
            ],
            [
                'name' => 'chicken breast',
                'display_name' => 'Chicken Breast',
                'category' => 'meats'
            ],
            [
                'name' => 'ground beef',
                'display_name' => 'Ground Beef',
                'category' => 'meats'
            ],
            [
                'name' => 'bacon',
                'display_name' => 'Bacon',
                'category' => 'meats'
            ],
            [
                'name' => 'chicken',
                'display_name' => 'Chicken',
                'category' => 'meats'
            ],
            [
                'name' => 'sausage',
                'display_name' => 'Sausage',
                'category' => 'meats'
            ],
            [
                'name' => 'ham',
                'display_name' => 'Ham',
                'category' => 'meats'
            ],
            [
                'name' => 'steak',
                'display_name' => 'Beef Steak',
                'category' => 'meats'
            ],
            [
                'name' => 'hot dog',
                'display_name' => 'Hot Dog',
                'category' => 'meats'
            ],
            [
                'name' => 'pork chops',
                'display_name' => 'Pork Chops',
                'category' => 'meats'
            ],
            [
                'name' => 'chicken leg',
                'display_name' => 'Chicken Leg',
                'category' => 'meats'
            ],
            [
                'name' => 'chicken wing',
                'display_name' => 'Chicken Wing',
                'category' => 'meats'
            ],
            [
                'name' => 'turkey',
                'display_name' => 'Turkey',
                'category' => 'meats'
            ],
            [
                'name' => 'pepperoni',
                'display_name' => 'Pepperoni',
                'category' => 'meats'
            ],
            [
                'name' => 'pork ribs',
                'display_name' => 'Pork Ribs',
                'category' => 'meats'
            ],
            [
                'name' => 'chorizo',
                'display_name' => 'Chorizo',
                'category' => 'meats'
            ],
            [
                'name' => 'duck',
                'display_name' => 'Duck',
                'category' => 'meats'
            ],
            [
                'name' => 'canned tuna',
                'display_name' => 'Canned Tuna',
                'category' => 'meats'
            ],
            [
                'name' => 'salmon',
                'display_name' => 'Canned Tuna',
                'category' => 'meats'
            ],
            [
                'name' => 'fish fillets',
                'display_name' => 'Fish Fillets',
                'category' => 'meats'
            ],
            [
                'name' => 'anchovies',
                'display_name' => 'Anchovies',
                'category' => 'meats'
            ],
            [
                'name' => 'crab',
                'display_name' => 'Crab',
                'category' => 'meats'
            ],
            [
                'name' => 'Lobster',
                'display_name' => 'Lobster',
                'category' => 'meats'
            ],
            [
                'name' => 'scallop',
                'display_name' => 'Scallop',
                'category' => 'meats'
            ],
            [
                'name' => 'halibut',
                'display_name' => 'Halibut',
                'category' => 'meats'
            ],
            [
                'name' => 'flounder',
                'display_name' => 'Flounder',
                'category' => 'meats'
            ],
            [
                'name' => 'tilapia',
                'display_name' => 'Canned Tuna',
                'category' => 'meats'
            ],
            [
                'name' => 'flour',
                'display_name' => 'Flour',
                'category' => 'grains'
            ],
            [
                'name' => 'rice',
                'display_name' => 'Rice',
                'category' => 'grains'
            ],
            [
                'name' => 'pasta',
                'display_name' => 'Pasta',
                'category' => 'grains'
            ],
            [
                'name' => 'baking powder',
                'display_name' => 'baking powder',
                'category' => 'grains'
            ],
            [
                'name' => 'baking soda',
                'display_name' => 'Baking soda',
                'category' => 'grains'
            ],
            [
                'name' => 'lasagna',
                'display_name' => 'Lasagna Noodles',
                'category' => 'grains'
            ],
            [
                'name' => 'bread crumbs',
                'display_name' => 'Bread Crumbs',
                'category' => 'grains'
            ],
            [
                'name' => 'cornstarch',
                'display_name' => 'Cornstarch',
                'category' => 'grains'
            ],
            [
                'name' => 'pizza dough',
                'display_name' => 'Pizza Dough',
                'category' => 'grains'
            ],
            [
                'name' => 'ramen',
                'display_name' => 'Ramen',
                'category' => 'grains'
            ],
            [
                'name' => 'bagel',
                'display_name' => 'Bagel',
                'category' => 'grains'
            ],
            [
                'name' => 'hot dog bun',
                'display_name' => 'Hot Dog Bun',
                'category' => 'grains'
            ],
            [
                'name' => 'tortillas',
                'display_name' => 'Tortillas',
                'category' => 'grains'
            ],
            [
                'name' => 'croutons',
                'display_name' => 'Croutons',
                'category' => 'grains'
            ],
            [
                'name' => 'pancake mix',
                'display_name' => 'Pancake Mix',
                'category' => 'grains'
            ],
            [
                'name' => 'olive oil',
                'display_name' => 'Olive Oil',
                'category' => 'oils'
            ],
            [
                'name' => 'vegetable oil',
                'display_name' => 'Olive Oil',
                'category' => 'oils'
            ],
            [
                'name' => 'peanut oil',
                'display_name' => 'Peanut Oil',
                'category' => 'oils'
            ],
            [
                'name' => 'sesame oil',
                'display_name' => 'Sesame Oil',
                'category' => 'oils'
            ],
            [
                'name' => 'cooking spray',
                'display_name' => 'Cooking Spray',
                'category' => 'oils'
            ],
            [
                'name' => 'oil',
                'display_name' => 'Other Oils',
                'category' => 'oils'
            ],
            [
                'name' => 'honey',
                'display_name' => 'Honey',
                'category' => 'sweeteners'
            ],
            [
                'name' => 'maple',
                'display_name' => 'Maple Syrup',
                'category' => 'sweeteners'
            ],
            [
                'name' => 'brown sugar',
                'display_name' => 'Brown Sugar',
                'category' => 'sweeteners'
            ],
            [
                'name' => 'splenda',
                'display_name' => 'Splenda',
                'category' => 'sweeteners'
            ],
            [
                'name' => 'sugar',
                'display_name' => 'Sugar',
                'category' => 'sweeteners'
            ],
            [
                'name' => 'salt',
                'display_name' => 'Salt',
                'category' => 'seasonings'
            ],
            [
                'name' => 'pepper',
                'display_name' => 'Black Pepper',
                'category' => 'seasonings'
            ],
            [
                'name' => 'peanut butter',
                'display_name' => 'Peanut Butter',
                'category' => 'nuts'
            ],
            [
                'name' => 'peanuts',
                'display_name' => 'Peanuts',
                'category' => 'nuts'
            ],
            [
                'name' => 'almonds',
                'display_name' => 'Almonds',
                'category' => 'nuts'
            ],
            [
                'name' => 'cashews',
                'display_name' => 'Cashews',
                'category' => 'nuts'
            ],
            [
                'name' => 'pecan',
                'display_name' => 'Pecan',
                'category' => 'nuts'
            ],
            [
                'name' => 'ketchup',
                'display_name' => 'Ketchup',
                'category' => 'condiments'
            ],
            [
                'name' => 'jelly',
                'display_name' => 'Jelly',
                'category' => 'condiments'
            ],
            [
                'name' => 'mayonnaise',
                'display_name' => 'Mayonnaise',
                'category' => 'condiments'
            ],
            [
                'name' => 'sriracha',
                'display_name' => 'Sriracha',
                'category' => 'condiments'
            ],
            [
                'name' => 'soy',
                'display_name' => 'Soy Sauce',
                'category' => 'condiments'
            ],
            [
                'name' => 'mustard',
                'display_name' => 'Mustard',
                'category' => 'condiments'
            ],
            [
                'name' => 'vineagar',
                'display_name' => 'Ketchup',
                'category' => 'condiments'
            ],
            [
                'name' => 'chocolate',
                'display_name' => 'Chocolate',
                'category' => 'snacks'
            ],
            [
                'name' => 'marshmellow',
                'display_name' => 'Marshmellow',
                'category' => 'snacks'
            ],
            [
                'name' => 'potato chips',
                'display_name' => 'Potato Chips',
                'category' => 'snacks'
            ],
            [
                'name' => 'chocolate syrup',
                'display_name' => 'Chocolate Syrup',
                'category' => 'snacks'
            ],
            [
                'name' => 'apple juice',
                'display_name' => 'Apple Juice',
                'category' => 'beverages'
            ],
            [
                'name' => 'tea',
                'display_name' => 'Tea',
                'category' => 'beverages'
            ],
            [
                'name' => 'orange juice',
                'display_name' => 'Orange Juice',
                'category' => 'beverages'
            ],
            [
                'name' => 'wine',
                'display_name' => 'Wine',
                'category' => 'beverages'
            ],
            [
                'name' => 'coffee',
                'display_name' => 'Coffee',
                'category' => 'beverages'
            ],
            [
                'name' => 'chicken broth',
                'display_name' => 'Chicken Broth',
                'category' => 'beverages'
            ],
            [
                'name' => 'oregano',
                'display_name' => 'Oregano',
                'category' => 'seasonings'
            ],
            [
                'name' => 'italian seasoning',
                'display_name' => 'Italian Seasoning',
                'category' => 'seasonings'
            ],
            [
                'name' => 'paprika',
                'display_name' => 'Paprika',
                'category' => 'seasonings'
            ],
            [
                'name' => 'chili',
                'display_name' => 'Chili Powder',
                'category' => 'seasonings'
            ],
            [
                'name' => 'taco seasoning',
                'display_name' => 'Taco Seasoning',
                'category' => 'seasonings'
            ],
            [
                'name' => 'vanilla',
                'display_name' => 'Vanilla',
                'category' => 'seasonings'
            ]
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }
    }
}
