<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(NewsCategoriesTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(NewImagesTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ShopProductsTableSeeder::class);
        $this->call(AbusesTableSeeder::class);
        $this->call(ReturnItemsTableSeeder::class);
        $this->call(WishlistItemsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(VouchersTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(AttributeValuesTableSeeder::class);
        $this->call(CategoryAttributeValuesTableSeeder::class);
        $this->call(ProductAttributeValuesTableSeeder::class);
        $this->call(ProductImagesTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
    }
}
