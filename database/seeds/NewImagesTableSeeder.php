<?php

use Illuminate\Database\Seeder;

class NewImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('new_images')->insert([
            ['image' => '123a', 'thumb' => '123at', 'new_id' => 1],
            ['image' => '124a', 'thumb' => '124at', 'new_id' => 2],
            ['image' => '125a', 'thumb' => '125at', 'new_id' => 3]
        ]);
    }
}
