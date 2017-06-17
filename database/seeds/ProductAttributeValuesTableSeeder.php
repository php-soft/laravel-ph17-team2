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
            ['product_id' => 1, 'attribute_value_id' => 2],
            ['product_id' => 2, 'attribute_value_id' => 3],
            ['product_id' => 3, 'attribute_value_id' => 1]
        ]);
    }
}
