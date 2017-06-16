<?php

use Illuminate\Database\Seeder;

class OrderProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_products')->insert([
            ['quantity' => '2', 'price' => '200', 'order_id' => 1, 'product_id' => 1],
            ['quantity' => '3', 'price' => '300', 'order_id' => 1, 'product_id' => 2],
            ['quantity' => '4', 'price' => '400', 'order_id' => 2, 'product_id' => 1]
        ]);
    }
}
