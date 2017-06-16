<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            ['name' => 'Facebook', 'logo' => 'facebook', 'address' => '123-abc', 'description' => 'Miễn phí và sẽ luôn như vậy.', 'user_id' => 1],
            ['name' => 'Twitter', 'logo' => 'twitter', 'address' => '234-bcd', 'description' => 'Miễn phí và sẽ luôn như vậy.', 'user_id' => 2],
            ['name' => 'Instagram', 'logo' => 'instagram', 'address' => '345-cde', 'description' => 'Miễn phí và sẽ luôn như vậy.', 'user_id' => 3]
        ]);
    }
}
