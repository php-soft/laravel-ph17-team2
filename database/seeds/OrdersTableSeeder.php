<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            ['status' => 1, 'total_price' => '200', 'phone' => '12345', 'address' => 'aaaaaa', 'name' => 'Thuan', 'user_id' => 1, 'voucher_code' => ''],
            ['status' => 2, 'total_price' => '300', 'phone' => '123456', 'address' => 'bbbbb', 'name' => 'Quy', 'user_id' => 2, 'voucher_code' => ''],
            ['status' => 1, 'total_price' => '400', 'phone' => '1234567', 'address' => 'ccccc', 'name' => 'Toan', 'user_id' => 3, 'voucher_code' => '']
        ]);
    }
}
