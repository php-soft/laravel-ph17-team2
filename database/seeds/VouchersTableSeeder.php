<?php

use Illuminate\Database\Seeder;

class VouchersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vouchers')->insert([
            ['discount' => '5', 'shop_id' => 1, 'code' => '123', 'quantity' => '10', 'start_date' => '2017-01-01', 'end_date' => '2017-02-02'],
            ['discount' => '10', 'shop_id' => 2, 'code' => '234', 'quantity' => '11', 'start_date' => '2017-01-01', 'end_date' => '2017-02-02'],
            ['discount' => '15', 'shop_id' => 3, 'code' => '345', 'quantity' => '12', 'start_date' => '2017-01-01', 'end_date' => '2017-02-02']
        ]);
    }
}
