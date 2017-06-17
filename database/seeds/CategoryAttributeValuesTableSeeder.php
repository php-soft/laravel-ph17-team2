<?php

use Illuminate\Database\Seeder;

class CategoryAttributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_attribute_values')->insert([
            ['category_id' => 1, 'attribute_value_id' => 1],
            ['category_id' => 22, 'attribute_value_id' => 2],
            ['category_id' => 38, 'attribute_value_id' => 3]
        ]);
    }
}
