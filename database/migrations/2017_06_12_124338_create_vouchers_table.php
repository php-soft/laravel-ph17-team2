<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->float('discount');
            $table->string('code');
            $table->integer('quantily');
            $table->datetime('start_time');
            $table->datetime('end_time');
            $table->integer('shop_id')
                ->unsigned()->nullable();
            $table->foreign('shop_id')->references('id')
                ->on('shops'); 
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
        Schema::dropIfExists('vouchers');
    }
}
