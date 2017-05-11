<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateIngredientsTableChangePrimaryKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ingredients', function($table) {
            $table->dropColumn('id');
            $table->primary('name');
            $table->string('display_name')->nullable();
            $table->string('category');
        });
        Schema::table('recipe_ingredients', function($table) {
            $table->dropColumn('ingredient_id');
            $table->string('ingredient_name')->references('name')->on('ingredients');
            $table->renameColumn('display_name', 'display_in_recipe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ingredients', function($table) {
            $table->dropPrimary(['name']);
            $table->dropColumn('display_name');
            $table->dropColumn('category');

        });
        Schema::table('ingredients', function($table) {
            $table->increments('id');
        });
    }
}
