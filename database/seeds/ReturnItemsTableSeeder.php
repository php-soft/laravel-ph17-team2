<?php

use Illuminate\Database\Seeder;

class ReturnItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('return_items')->insert([
            ['user_id' => 3, 'shop_product_id' => 1, 'content' =>'Trả hàng'],
            ['user_id' => 2, 'shop_product_id' => 3, 'content' =>'Trả hàng'],
            ['user_id' => 1, 'shop_product_id' => 2, 'content' =>'Trả hàng']
        ]);
    }
}
