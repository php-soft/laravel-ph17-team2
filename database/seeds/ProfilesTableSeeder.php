<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            ['date_of_birth' => '2017-01-01', 'phone' => '123456789', 'address' => 'aaaa', 'image' => '12', 'gender' => 1, 'user_id' => 1],
            ['date_of_birth' => '2017-02-02', 'phone' => '123456780', 'address' => 'bbbb', 'image' => '23', 'gender' => 2, 'user_id' => 2],
            ['date_of_birth' => '2017-03-03', 'phone' => '123456781', 'address' => 'cccc', 'image' => '34', 'gender' => 1, 'user_id' => 3]
        ]);
    }
}
