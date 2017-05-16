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
            Ingredient::create(['name' => 'tomato sauce', 'display_name' => 'Tomato Sauce', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'tomato paste', 'display_name' => 'Tomato Paste', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'tomato', 'display_name' => 'Tomato', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'potato', 'display_name' => 'Potato', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'lettuce', 'display_name' => 'Salad Greens','category' => 'vegetable']),
            Ingredient::create(['name' => 'olives', 'display_name' => 'Olives', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'carrot', 'display_name' => 'Carrot', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'basil', 'display_name' => 'Basil', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'peas', 'display_name' => 'Peas', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'beans', 'display_name' => 'Beans', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'parsley', 'display_name' => 'Parsley', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'rosemary', 'display_name' => 'Rosemary', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'cucumber', 'display_name' => 'Cucumber','category' => 'vegetable']),
            Ingredient::create(['name' => 'bell pepper', 'display_name' => 'Bell Pepper', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'spinach', 'display_name' => 'Spinach', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'broccoli', 'display_name' => 'Broccoli', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'scallions', 'display_name' => 'Scallions', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'zucchini', 'display_name' => 'Zucchini', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'cabbage', 'display_name' => 'Cabbage', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'cauliflower', 'display_name' => 'Cauliflower', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'avocado', 'display_name' => 'Avocado', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'asparagus', 'display_name' => 'Asparagus', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'snow peas', 'display_name' => 'Snow Peas', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'celery', 'display_name' => 'Celery', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'jalapeno', 'display_name' => 'Jalapeno', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'sweet potato', 'display_name' => 'Sweet Potato', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'kale', 'display_name' => 'Kale', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'corn', 'display_name' => 'Corn', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'green beans', 'display_name' => 'Green Beans', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'squash', 'display_name' => 'Squash', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'mushroom', 'display_name' => 'Mushroom', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'mixed', 'display_name' => 'Mixed Vegetable', 'category' => 'vegetable']),
            Ingredient::create(['name' => 'ginger', 'display_name' => 'Ginger','category' => 'vegetable']),
            Ingredient::create(['name' => 'lemon', 'display_name' => 'Lemon', 'category' => 'fruit']),
            Ingredient::create(['name' => 'banana', 'display_name' => 'Banana', 'category' => 'fruit']),
            Ingredient::create(['name' => 'apple', 'display_name' => 'Apple', 'category' => 'fruit']),
            Ingredient::create(['name' => 'coconut', 'display_name' => 'Coconut', 'category' => 'fruit']),
            Ingredient::create(['name' => 'mango', 'display_name' => 'Mango', 'category' => 'fruit']),
            Ingredient::create(['name' => 'pineapple', 'display_name' => 'Pineapple', 'category' => 'fruit']),
            Ingredient::create(['name' => 'strawberry', 'display_name' => 'Strawberry', 'category' => 'fruit']),
            Ingredient::create(['name' => 'grape', 'display_name' => 'Grape', 'category' => 'fruit']),
            Ingredient::create(['name' => 'blueberry', 'display_name' => 'Blueberry', 'category' => 'fruit']),
            Ingredient::create(['name' => 'peach', 'display_name' => 'Peach', 'category' => 'fruit']),
            Ingredient::create(['name' => 'butter', 'display_name' => 'Butter', 'category' => 'dairy']),
            Ingredient::create(['name' => 'eggs', 'display_name' => 'Egg', 'category' => 'dairy']),
            Ingredient::create(['name' => 'milk', 'display_name' => 'Milk', 'category' => 'dairy']),
            Ingredient::create(['name' => 'cream', 'display_name' => 'Cream', 'category' => 'dairy']),
            Ingredient::create(['name' => 'sour cream', 'display_name' => 'Sour Cream', 'category' => 'dairy']),
            Ingredient::create(['name' => 'parmesan', 'display_name' => 'Parmesan', 'category' => 'dairy']),
            Ingredient::create(['name' => 'cream cheese', 'display_name' => 'Cream Cheese', 'category' => 'dairy']),
            Ingredient::create(['name' => 'mozzarella', 'display_name' => 'Mozzarella', 'category' => 'dairy']),
            Ingredient::create(['name' => 'yogurt', 'display_name' => 'Yogurt', 'category' => 'dairy']),
            Ingredient::create(['name' => 'sliced cheese', 'display_name' => 'Sliced Cheese', 'category' => 'dairy']),
            Ingredient::create(['name' => 'whipped cream', 'display_name' => 'Whipped Cream', 'category' => 'dairy']),
            Ingredient::create(['name' => 'cottage cheese', 'display_name' => 'Cottage Cheese', 'category' => 'dairy']),
            Ingredient::create(['name' => 'ricotta', 'display_name' => 'Ricotta', 'category' => 'dairy']),
            Ingredient::create(['name' => 'ice cream', 'display_name' => 'Ice Cream', 'category' => 'dairy']),
            Ingredient::create(['name' => 'swiss', 'display_name' => 'Swiss Chese', 'category' => 'dairy']),
            Ingredient::create(['name' => 'chicken breast', 'display_name' => 'Chicken Breast', 'category' => 'meats']),
            Ingredient::create(['name' => 'ground beef', 'display_name' => 'Ground Beef', 'category' => 'meats']),
            Ingredient::create(['name' => 'bacon', 'display_name' => 'Bacon', 'category' => 'meats']),
            Ingredient::create(['name' => 'chicken', 'display_name' => 'Chicken', 'category' => 'meats']),
            Ingredient::create(['name' => 'sausage', 'display_name' => 'Sausage', 'category' => 'meats']),
            Ingredient::create(['name' => 'ham', 'display_name' => 'Ham', 'category' => 'meats']),
            Ingredient::create(['name' => 'steak', 'display_name' => 'Beef Steak', 'category' => 'meats']),
            Ingredient::create(['name' => 'hot dog', 'display_name' => 'Hot Dog', 'category' => 'meats']),
            Ingredient::create(['name' => 'pork chops', 'display_name' => 'Pork Chops', 'category' => 'meats']),
            Ingredient::create(['name' => 'chicken leg', 'display_name' => 'Chicken Leg', 'category' => 'meats']),
            Ingredient::create(['name' => 'chicken wing', 'display_name' => 'Chicken Wing', 'category' => 'meats']),
            Ingredient::create(['name' => 'turkey', 'display_name' => 'Turkey', 'category' => 'meats']),
            Ingredient::create(['name' => 'pepperoni', 'display_name' => 'Pepperoni', 'category' => 'meats']),
            Ingredient::create(['name' => 'pork ribs', 'display_name' => 'Pork Ribs', 'category' => 'meats']),
            Ingredient::create(['name' => 'chorizo', 'display_name' => 'Chorizo', 'category' => 'meats']),
            Ingredient::create(['name' => 'duck', 'display_name' => 'Duck', 'category' => 'meats']),
            Ingredient::create(['name' => 'canned tuna', 'display_name' => 'Canned Tuna', 'category' => 'meats']),
            Ingredient::create(['name' => 'salmon', 'display_name' => 'Canned Tuna', 'category' => 'meats']),
            Ingredient::create(['name' => 'fish fillets', 'display_name' => 'Fish Fillets', 'category' => 'meats']),
            Ingredient::create(['name' => 'anchovies', 'display_name' => 'Anchovies', 'category' => 'meats']),
            Ingredient::create(['name' => 'crab', 'display_name' => 'Crab', 'category' => 'meats']),
            Ingredient::create(['name' => 'Lobster', 'display_name' => 'Lobster', 'category' => 'meats']),
            Ingredient::create(['name' => 'scallop', 'display_name' => 'Scallop', 'category' => 'meats']),
            Ingredient::create(['name' => 'halibut', 'display_name' => 'Halibut', 'category' => 'meats']),
            Ingredient::create(['name' => 'flounder', 'display_name' => 'Flounder', 'category' => 'meats']),
            Ingredient::create(['name' => 'tilapia', 'display_name' => 'Canned Tuna', 'category' => 'meats']),
            Ingredient::create(['name' => 'flour', 'display_name' => 'Flour', 'category' => 'grains']),
            Ingredient::create(['name' => 'rice', 'display_name' => 'Rice', 'category' => 'grains']),
            Ingredient::create(['name' => 'pasta', 'display_name' => 'Pasta', 'category' => 'grains']),
            Ingredient::create(['name' => 'baking powder', 'display_name' => 'baking powder', 'category' => 'grains']),
            Ingredient::create(['name' => 'baking soda', 'display_name' => 'Baking soda', 'category' => 'grains']),
            Ingredient::create(['name' => 'lasagna', 'display_name' => 'Lasagna Noodles', 'category' => 'grains']),
            Ingredient::create(['name' => 'bread crumbs', 'display_name' => 'Bread Crumbs', 'category' => 'grains']),
            Ingredient::create(['name' => 'cornstarch', 'display_name' => 'Cornstarch', 'category' => 'grains']),
            Ingredient::create(['name' => 'pizza dough', 'display_name' => 'Pizza Dough', 'category' => 'grains']),
            Ingredient::create(['name' => 'ramen', 'display_name' => 'Ramen', 'category' => 'grains']),
            Ingredient::create(['name' => 'bagel', 'display_name' => 'Bagel', 'category' => 'grains']),
            Ingredient::create(['name' => 'hot dog bun', 'display_name' => 'Hot Dog Bun', 'category' => 'grains']),
            Ingredient::create(['name' => 'tortillas', 'display_name' => 'Tortillas', 'category' => 'grains']),
            Ingredient::create(['name' => 'croutons', 'display_name' => 'Croutons', 'category' => 'grains']),
            Ingredient::create(['name' => 'pancake mix', 'display_name' => 'Pancake Mix', 'category' => 'grains']),
            Ingredient::create(['name' => 'olive oil', 'display_name' => 'Olive Oil', 'category' => 'oils']),
            Ingredient::create(['name' => 'vegetable oil', 'display_name' => 'Olive Oil', 'category' => 'oils']),
            Ingredient::create(['name' => 'peanut oil', 'display_name' => 'Peanut Oil', 'category' => 'oils']),
            Ingredient::create(['name' => 'sesame oil', 'display_name' => 'Sesame Oil', 'category' => 'oils']),
            Ingredient::create(['name' => 'cooking spray', 'display_name' => 'Cooking Spray', 'category' => 'oils']),
            Ingredient::create(['name' => 'oil', 'display_name' => 'Other Oils', 'category' => 'oils']),
            Ingredient::create(['name' => 'honey', 'display_name' => 'Honey', 'category' => 'sweeteners']),
            Ingredient::create(['name' => 'maple', 'display_name' => 'Maple Syrup', 'category' => 'sweeteners']),
            Ingredient::create(['name' => 'brown sugar', 'display_name' => 'Brown Sugar', 'category' => 'sweeteners']),
            Ingredient::create(['name' => 'splenda', 'display_name' => 'Splenda', 'category' => 'sweeteners']),
            Ingredient::create(['name' => 'sugar', 'display_name' => 'Sugar', 'category' => 'sweeteners']),
            Ingredient::create(['name' => 'salt', 'display_name' => 'Salt', 'category' => 'seasonings']),
            Ingredient::create(['name' => 'pepper', 'display_name' => 'Black Pepper', 'category' => 'seasonings']),
            Ingredient::create(['name' => 'peanut butter', 'display_name' => 'Peanut Butter', 'category' => 'nuts']),
            Ingredient::create(['name' => 'peanuts', 'display_name' => 'Peanuts', 'category' => 'nuts']),
            Ingredient::create(['name' => 'almonds', 'display_name' => 'Almonds', 'category' => 'nuts']),
            Ingredient::create(['name' => 'cashews', 'display_name' => 'Cashews', 'category' => 'nuts']),
            Ingredient::create(['name' => 'pecan', 'display_name' => 'Pecan', 'category' => 'nuts']),
            Ingredient::create(['name' => 'ketchup', 'display_name' => 'Ketchup', 'category' => 'condiments']),
            Ingredient::create(['name' => 'jelly', 'display_name' => 'Jelly', 'category' => 'condiments']),
            Ingredient::create(['name' => 'mayonnaise', 'display_name' => 'Mayonnaise', 'category' => 'condiments']),
            Ingredient::create(['name' => 'sriracha', 'display_name' => 'Sriracha', 'category' => 'condiments']),
            Ingredient::create(['name' => 'soy', 'display_name' => 'Soy Sauce', 'category' => 'condiments']),
            Ingredient::create(['name' => 'mustard', 'display_name' => 'Mustard', 'category' => 'condiments']),
            Ingredient::create(['name' => 'vineagar', 'display_name' => 'Ketchup', 'category' => 'condiments']),
            Ingredient::create(['name' => 'chocolate', 'display_name' => 'Chocolate', 'category' => 'snacks']),
            Ingredient::create(['name' => 'marshmellow', 'display_name' => 'Marshmellow', 'category' => 'snacks']),
            Ingredient::create(['name' => 'potato chips', 'display_name' => 'Potato Chips', 'category' => 'snacks']),
            Ingredient::create(['name' => 'chocolate syrup', 'display_name' => 'Chocolate Syrup', 'category' => 'snacks']),
            Ingredient::create(['name' => 'apple juice', 'display_name' => 'Apple Juice', 'category' => 'beverages']),
            Ingredient::create(['name' => 'tea', 'display_name' => 'Tea', 'category' => 'beverages']),
            Ingredient::create(['name' => 'orange juice', 'display_name' => 'Orange Juice', 'category' => 'beverages']),
            Ingredient::create(['name' => 'wine', 'display_name' => 'Wine', 'category' => 'beverages']),
            Ingredient::create(['name' => 'coffee', 'display_name' => 'Coffee', 'category' => 'beverages']),
            Ingredient::create(['name' => 'chicken broth', 'display_name' => 'Chicken Broth', 'category' => 'beverages']),
            Ingredient::create(['name' => 'oregano', 'display_name' => 'Oregano', 'category' => 'seasonings']),
            Ingredient::create(['name' => 'italian seasoning', 'display_name' => 'Italian Seasoning', 'category' => 'seasonings']),
            Ingredient::create(['name' => 'paprika', 'display_name' => 'Paprika', 'category' => 'seasonings'])
            Ingredient::create(['name' => 'chili', 'display_name' => 'Chili Powder', 'category' => 'seasonings']),
            Ingredient::create(['name' => 'taco seasoning', 'display_name' => 'Taco Seasoning', 'category' => 'seasonings']),
            Ingredient::create(['name' => 'vanilla', 'display_name' => 'Vanilla', 'category' => 'seasonings'])




        ];

        foreach ($ingredients as $ingredient) {
            $ingredient->save();
        }
    }
}
