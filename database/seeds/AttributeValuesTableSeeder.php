<?php

use Illuminate\Database\Seeder;

class AttributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attribute_values')->insert([
            ['name' => 'Đỏ', 'description' => 'red', 'attribute_id' => 1],
            ['name' => 'Xanh', 'description' => 'blue', 'attribute_id' => 1],
            ['name' => 'Vàng', 'description' => 'yellow', 'attribute_id' => 1],
            ['name' => 'M', 'description' => 'medium', 'attribute_id' => 2],
            ['name' => 'L', 'description' => 'large', 'attribute_id' => 2],
            ['name' => 'XL', 'description' => 'super-large', 'attribute_id' => 2],
            ['name' => '30', 'description' => '30', 'attribute_id' => 3],
            ['name' => '31', 'description' => '31', 'attribute_id' => 3],
            ['name' => '32', 'description' => '32', 'attribute_id' => 3]
        ]);
    }
}
