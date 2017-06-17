<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'Quản lý đơn hàng'],
            ['name' => 'Quản lý sản phẩm'],
            ['name' => 'Quản lý nhân viên']
        ]);
    }
}
