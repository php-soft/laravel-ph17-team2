<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Thuan', 'email' => 'thuan59@gmail.com', 'password' => '1'],
            ['name' => 'Quy', 'email' => 'phuquydn94@gmail.com', 'password' => '1'],
            ['name' => 'Toan', 'email' => 'nmtoan188@gmail.com', 'password' => '1'],
            ['name' => 'Vinh', 'email' => 'khoivinhphan@gmail.com', 'password' => '1']
        ]);
    }
}
