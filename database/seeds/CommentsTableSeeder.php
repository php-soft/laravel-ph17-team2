<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
        	['id' => 1, 'comments' => 'This is comment of Hoang', 'name' => 'Hoang', 'news_id' => 2, 'status' => 'Show'],
        	['id' => 2, 'comments' => 'This is comment of Vinh',  'name' => 'Vinh', 'news_id' => 2, 'status' => 'Show'],  
        	['id' => 3, 'comments' => 'This is comment of Toan',  'name' => 'Toan', 'news_id' => 1, 'status' => 'Show'],
        	['id' => 4, 'comments' => 'This is comment of Thuan', 'name' => 'Thuan', 'news_id' => 1, 'status' => 'Show'],
        	['id' => 5, 'comments' => 'This is comment of Quy',  'name' => 'Quy', 'news_id' => 1, 'status' => 'Show'],
        ]);
    }
}
