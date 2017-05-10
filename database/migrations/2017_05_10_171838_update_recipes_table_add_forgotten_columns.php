<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRecipesTableAddForgottenColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recipes', function($table) {
            $table->integer('prep_time');
            $table->integer('cook_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipes', function($table) {
            $table->dropColumn('prep_time');
            $table->dropColumn('cook_time');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
