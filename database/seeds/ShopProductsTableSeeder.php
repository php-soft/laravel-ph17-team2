<?php

use Illuminate\Database\Seeder;

class ShopProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_products')->insert([
            ['quantity' => '1', 'price' => '300000', 'discount' => '285000', 'user_id' => '1', 'product_id' => '1', 'buys' => '1', 'shop_id' => '1'],
            ['quantity' => '5', 'price' => '700000', 'discount' => '0', 'user_id' => '2', 'product_id' => '2', 'buys' => '5', 'shop_id' => '2'],
            ['quantity' => '5', 'price' => '200000', 'discount' => '189000', 'user_id' => '3', 'product_id' => '3', 'buys' => '5', 'shop_id' => '3'],
            ['quantity' => '13', 'price' => '100000', 'discount' => '0', 'user_id' => '4', 'product_id' => '4', 'buys' => '13', 'shop_id' => '2'],
            ['quantity' => '20', 'price' => '200000', 'discount' => '0', 'user_id' => '4', 'product_id' => '5', 'buys' => '30', 'shop_id' => '1'],
            ['quantity' => '20', 'price' => '210000', 'discount' => '0', 'user_id' => '2', 'product_id' => '6', 'buys' => '40', 'shop_id' => '1'],
            ['quantity' => '5', 'price' => '200000', 'discount' => '0', 'user_id' => '2', 'product_id' => '7', 'buys' => '10', 'shop_id' => '2'],
            ['quantity' => '20', 'price' => '220000', 'discount' => '0', 'user_id' => '2', 'product_id' => '8', 'buys' => '21', 'shop_id' => '3'],
            ['quantity' => '20', 'price' => '129000', 'discount' => '119000', 'user_id' => '1', 'product_id' => '9', 'buys' => '29', 'shop_id' => '1'],
            ['quantity' => '14', 'price' => '190000', 'discount' => '0', 'user_id' => '3', 'product_id' => '10', 'buys' => '14', 'shop_id' => '3'],
            ['quantity' => '25', 'price' => '215000', 'discount' => '0', 'user_id' => '4', 'product_id' => '11', 'buys' => '30', 'shop_id' => '2'],
            ['quantity' => '29', 'price' => '215000', 'discount' => '215000', 'user_id' => '3', 'product_id' => '12', 'buys' => '29', 'shop_id' => '2'],
            ['quantity' => '28', 'price' => '175000', 'discount' => '0', 'user_id' => '2', 'product_id' => '13', 'buys' => '28', 'shop_id' => '1'],
            ['quantity' => '20', 'price' => '285000', 'discount' => '0', 'user_id' => '3', 'product_id' => '14', 'buys' => '20', 'shop_id' => '3'],
            ['quantity' => '22', 'price' => '235000', 'discount' => '0', 'user_id' => '1', 'product_id' => '15', 'buys' => '22', 'shop_id' => '2'],
            ['quantity' => '26', 'price' => '255000', 'discount' => '0', 'user_id' => '1', 'product_id' => '16', 'buys' => '26', 'shop_id' => '2'],
            ['quantity' => '29', 'price' => '275000', 'discount' => '255000', 'user_id' => '1', 'product_id' => '17', 'buys' => '29', 'shop_id' => '3'],
            ['quantity' => '26', 'price' => '315000', 'discount' => '0', 'user_id' => '1', 'product_id' => '18', 'buys' => '26', 'shop_id' => '3'],
             ['quantity' => '26', 'price' => '295000', 'discount' => '0', 'user_id' => '1', 'product_id' => '19', 'buys' => '26', 'shop_id' => '3'],
             ['quantity' => '19', 'price' => '295000', 'discount' => '0', 'user_id' => '1', 'product_id' => '20', 'buys' => '19', 'shop_id' => '3'],
             ['quantity' => '29', 'price' => '265000', 'discount' => '0', 'user_id' => '1', 'product_id' => '21', 'buys' => '29', 'shop_id' => '1'],
            ['quantity' => '42', 'price' => '199000', 'discount' => '0', 'user_id' => '3', 'product_id' => '22', 'buys' => '42', 'shop_id' => '3'],
            ['quantity' => '32', 'price' => '455000', 'discount' => '400000', 'user_id' => '4', 'product_id' => '23', 'buys' => '32', 'shop_id' => '2'],
            ['quantity' => '37', 'price' => '169000', 'discount' => '0', 'user_id' => '2', 'product_id' => '24', 'buys' => '37', 'shop_id' => '1'],
            ['quantity' => '25', 'price' => '169000', 'discount' => '0', 'user_id' => '1', 'product_id' => '25', 'buys' => '25', 'shop_id' => '2'],
            ['quantity' => '20', 'price' => '179000', 'discount' => '0', 'user_id' => '3', 'product_id' => '26', 'buys' => '20', 'shop_id' => '3'],
            ['quantity' => '15', 'price' => '159000', 'discount' => '145000', 'user_id' => '1', 'product_id' => '27', 'buys' => '15', 'shop_id' => '1'],
            ['quantity' => '23', 'price' => '259000', 'discount' => '0', 'user_id' => '4', 'product_id' => '28', 'buys' => '23', 'shop_id' => '2'],
            ['quantity' => '34', 'price' => '199000', 'discount' => '185000', 'user_id' => '2', 'product_id' => '29', 'buys' => '34', 'shop_id' => '1'],
            ['quantity' => '13', 'price' => '279000', 'discount' => '270000', 'user_id' => '2', 'product_id' => '30', 'buys' => '13', 'shop_id' => '2'],
            ['quantity' => '14', 'price' => '329000', 'discount' => '0', 'user_id' => '3', 'product_id' => '31', 'buys' => '14', 'shop_id' => '3'],
            ['quantity' => '33', 'price' => '310000', 'discount' => '300000', 'user_id' => '4', 'product_id' => '32', 'buys' => '33', 'shop_id' => '2'],
            ['quantity' => '25', 'price' => '195000', 'discount' => '20', 'user_id' => '4', 'product_id' => '33', 'buys' => '25', 'shop_id' => '1'],
            ['quantity' => '21', 'price' => '350000', 'discount' => '0', 'user_id' => '2', 'product_id' => '34', 'buys' => '21', 'shop_id' => '3'],
             ['quantity' => '23', 'price' => '175000', 'discount' => '17000', 'user_id' => '3', 'product_id' => '35', 'buys' => '23', 'shop_id' => '2'],
             ['quantity' => '11', 'price' => '145000', 'discount' => '140000', 'user_id' => '1', 'product_id' => '36', 'buys' => '11', 'shop_id' => '3'],
             ['quantity' => '32', 'price' => '215000', 'discount' => '0', 'user_id' => '4', 'product_id' => '37', 'buys' => '32', 'shop_id' => '2'],
            ['quantity' => '31', 'price' => '115000', 'discount' => '0', 'user_id' => '3', 'product_id' => '38', 'buys' => '31', 'shop_id' => '3'],
            ['quantity' => '27', 'price' => '850000', 'discount' => '0', 'user_id' => '2', 'product_id' => '39', 'buys' => '27', 'shop_id' => '3'],
            ['quantity' => '7', 'price' => '260000', 'discount' => '0', 'user_id' => '3', 'product_id' => '40', 'buys' => '7', 'shop_id' => '2'],
            ['quantity' => '10', 'price' => '180000', 'discount' => '20', 'user_id' => '3', 'product_id' => '41', 'buys' => '10', 'shop_id' => '1'],
            ['quantity' => '7', 'price' => '220000', 'discount' => '0', 'user_id' => '4', 'product_id' => '42', 'buys' => '7', 'shop_id' => '1'],
             ['quantity' => '20', 'price' => '140000', 'discount' => '138000', 'user_id' => '3', 'product_id' => '43', 'buys' => '20', 'shop_id' => '3'],
             ['quantity' => '16', 'price' => '120000', 'discount' => '115000', 'user_id' => '2', 'product_id' => '44', 'buys' => '16', 'shop_id' => '1'],
             ['quantity' => '32', 'price' => '245000', 'discount' => '0', 'user_id' => '1', 'product_id' => '45', 'buys' => '32', 'shop_id' => '2'],
             ['quantity' => '32', 'price' => '350000', 'discount' => '325000', 'user_id' => '1', 'product_id' => '46', 'buys' => '32', 'shop_id' => '3'],

        ]);

    }
}
