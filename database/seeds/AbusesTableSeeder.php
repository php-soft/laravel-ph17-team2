<?php

use Illuminate\Database\Seeder;

class AbusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abuses')->insert([
            ['user_id' => 3, 'shop_product_id' => 1, 'content' =>'Hàng dỏm'],
            ['user_id' => 2, 'shop_product_id' => 3, 'content' =>'Hàng dỏm'],
            ['user_id' => 1, 'shop_product_id' => 2, 'content' =>'Hàng dỏm']
        ]);
    }
}
