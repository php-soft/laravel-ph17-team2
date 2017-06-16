<?php

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->insert([
            ['id' => 1, 'name' => 'Màu', 'description' => 'Màu sắc'],
            ['id' => 2, 'name' => 'Size Áo', 'description' => 'Kích thước áo'],
            ['id' => 3, 'name' => 'Size Quần', 'description' => 'Kích thước quần']
        ]);
    }
}
