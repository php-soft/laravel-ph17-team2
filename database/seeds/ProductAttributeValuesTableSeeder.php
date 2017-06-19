<?php

use Illuminate\Database\Seeder;

class ProductAttributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_attribute_values')->insert([
            ['product_id' => 3, 'category_attribute_value_id' => 1, 'value' => 'Đỏ'],
            ['product_id' => 1, 'category_attribute_value_id' => 2, 'value' => 'L'],
            ['product_id' => 1, 'category_attribute_value_id' => 3, 'value' => 'Trắng']
        ]);
    }
}
