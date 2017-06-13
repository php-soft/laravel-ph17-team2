<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_image', function (Blueprint $table) {
            $table->increments('id');
            $table->string('images', 255);
            $table->string('thumpnail', 255);
            $table->integer('news_id')->unsigned()->nullable();
            $table->foreign('news_id')->references('id')->on('shop');
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
        Schema::dropIfExists('news_image');
    }
}
