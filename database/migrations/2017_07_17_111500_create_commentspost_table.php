<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentspostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentspost', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('comments');
            $table->string('name'); 
            $table->string('status')->default('Hidden');         
            $table->unsignedInteger('news_id');
            $table->foreign('news_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentspost');
    }
}
