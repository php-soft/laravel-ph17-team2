<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveForeignProductAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_attribute_values', function (Blueprint $table) 
        {
            $table->dropForeign(['attribute_value_id']);
            $table->dropColumn('attribute_value_id');
        });

        Schema::table('category_attribute_values', function (Blueprint $table) 
        {
            $table->string('name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_attribute_values', function (Blueprint $table) 
        {
            $table->unsignedInteger('attribute_value_id')->nullable();
            $table->foreign('attribute_value_id')->references('id')->on('attribute_values');
        });

        Schema::table('category_attribute_values', function (Blueprint $table) 
        {
            $table->dropColumn('name');
        });
    }
}
