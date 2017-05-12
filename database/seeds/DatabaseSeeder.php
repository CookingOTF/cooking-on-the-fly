<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // DB::table('users')->truncate();

        // DB::table('ingredients')->truncate();

        DB::table('recipes')->truncate();
        DB::table('directions')->truncate();

        // $this->call(UserTableSeeder::class);

        // $this->call(IngredientTableSeeder::class);

        $this->call(RecipesTableSeeder::class);

        // $this->call(TestSeeder::class);

        Model::reguard();
    }
}
