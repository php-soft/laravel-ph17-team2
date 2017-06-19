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
            ['id' => 1, 'category_id' => 1, 'name' => 'Màu'],
            ['id' => 2, 'category_id' => 22, 'name' => 'Size Áo'],
            ['id' => 3, 'category_id' => 22, 'name' => 'Màu'],
            ['id' => 4, 'category_id' => 38, 'name' => 'Màu'],
            ['id' => 5, 'category_id' => 38, 'name' => 'Size Quần']
        ]);
    }
}
