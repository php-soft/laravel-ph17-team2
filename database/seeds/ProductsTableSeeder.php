<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['id' => 1, 'buys' => '1', 'name' => 'Áo thun nam', 'description' => 'Áo', 'image' => '123', 'view' => '1', 'price' => '300', 'category_id' => '24', 'alias' => 'ao-thun-nam-gia-re'],
            ['id' => 2, 'buys' => '2', 'name' => 'Váy nữ', 'description' => 'Váy', 'image' => '234', 'view' => '2', 'price' => '400', 'category_id' => '48', 'alias' => 'aaaaa'],
            ['id' => 3, 'buys' => '3', 'name' => 'Điện thoại iPhone 7', 'description' => 'Điện thoại', 'image' => '345', 'view' => '3', 'price' => '1000', 'category_id' => '6', 'alias' => 'iphone-7']
        ]);
    }
}
