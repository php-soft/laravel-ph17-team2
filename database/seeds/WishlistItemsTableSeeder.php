<?php

use Illuminate\Database\Seeder;

class WishlistItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wishlist_items')->insert([
            ['user_id' => 3, 'product_id' => 1],
            ['user_id' => 2, 'product_id' => 3],
            ['user_id' => 1, 'product_id' => 2]
        ]);
    }
}
