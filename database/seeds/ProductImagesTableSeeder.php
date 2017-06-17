<?php

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->insert([
            ['image' => '123', 'product_id' => 1, 'thumb' => '123t'],
            ['image' => '234', 'product_id' => 2, 'thumb' => '234t'],
            ['image' => '345', 'product_id' => 3, 'thumb' => '345t']
        ]);
    }
}
