<?php

use Illuminate\Database\Seeder;

use App\Ingredient;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $extraAttributes = new Ingredient;

        $extraAttributes->name = 'hi';
        $extraAttributes->display_name = 'no';
        $extraAttributes->iBetThisWillError = 'WOOOOOO';

        $extraAttributes->save();
    }
}
