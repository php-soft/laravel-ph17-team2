<?php

use Illuminate\Database\Seeder;

class NewsCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_categories')->insert([
            ['name' => 'Công Nghệ', 'alias' => 'cong-nghe'],
            ['name' => 'Thời Trang', 'alias' => 'thoi-trang'],
            ['name' => 'Giải Trí', 'alias' => 'giai-tri']
        ]);
    }
}
