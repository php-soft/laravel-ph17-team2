<?php

use Illuminate\Database\Seeder;

class ShopProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_products')->insert([
            ['quantity' => '10', 'price' => '300', 'discount' => '10', 'user_id' => '1', 'product_id' => '1', 'buys' => '5', 'shop_id' => '1'],
            ['quantity' => '10', 'price' => '400', 'discount' => '10', 'user_id' => '2', 'product_id' => '2', 'buys' => '5', 'shop_id' => '2'],
            ['quantity' => '10', 'price' => '1000', 'discount' => '10', 'user_id' => '3', 'product_id' => '3', 'buys' => '5', 'shop_id' => '3']
        ]);
    }
}
