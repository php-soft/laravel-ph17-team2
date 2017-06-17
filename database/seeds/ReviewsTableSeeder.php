<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            ['user_id' => 1, 'shop_product_id' => 3, 'status' => '1', 'content' => 'aaaaa'],
            ['user_id' => 2, 'shop_product_id' => 1, 'status' => '2', 'content' => 'nnnn'],
            ['user_id' => 3, 'shop_product_id' => 2, 'status' => '3', 'content' => 'vvvv']
        ]);
    }
}
