<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixProductAttributesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_attribute_values', function (Blueprint $table) 
        {
            $table->dropForeign(['attribute_value_id']);
            $table->dropColumn('attribute_value_id');
            $table->integer('category_attribute_value_id')->unsigned()->nullable();
            $table->foreign('category_attribute_value_id')->references('id')->on('category_attribute_values');
            $table->string('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_attribute_values', function (Blueprint $table) 
        {
            $table->dropForeign(['category_attribute_value_id']);
            $table->dropColumn('category_attribute_value_id');
            $table->unsignedInteger('attribute_value_id')->nullable();
            $table->foreign('attribute_value_id')->references('id')->on('attribute_values');
            $table->dropColumn('value');
        });
    }
}
