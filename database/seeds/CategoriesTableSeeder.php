<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Điện Thoại - Máy Tính', 'slug' => 'dien-thoai-may-tinh', 'parent_id' => 0, 'description' => ''],
            ['id' => 2, 'name' => 'Điện thoại di động', 'slug' => 'dien-thoai-di-dong', 'parent_id' => 1, 'description' => ''],
            ['id' => 3, 'name' => 'Máy tính bảng', 'slug' => 'may-tinh-bang', 'parent_id' => 1, 'description' => ''],
            ['id' => 4, 'name' => 'Laptop', 'slug' => 'laptop', 'parent_id' => 1, 'description' => ''],
            ['id' => 5, 'name' => 'Nokia', 'slug' => 'nokia', 'parent_id' => 2, 'description' => ''],
            ['id' => 6, 'name' => 'iPhone', 'slug' => 'iphone', 'parent_id' => 2, 'description' => ''],
            ['id' => 7, 'name' => 'Samsung', 'slug' => 'samsung', 'parent_id' => 2, 'description' => ''],
            ['id' => 8, 'name' => 'FPT', 'slug' => 'fpt', 'parent_id' => 2, 'description' => ''],
            ['id' => 9, 'name' => 'OPPO', 'slug' => 'oppo', 'parent_id' => 2, 'description' => ''],
            ['id' => 10, 'name' => 'iPad', 'slug' => 'ipad', 'parent_id' => 3, 'description' => ''],
            ['id' => 11, 'name' => 'Máy tính bảng Android', 'slug' => 'may-tinh-bang-android', 'parent_id' => 3, 'description' => ''],
            ['id' => 12, 'name' => 'Máy tính bảng Windows', 'slug' => 'may-tinh-bang-windows', 'parent_id' => 3, 'description' => ''],
            ['id' => 13, 'name' => 'Dell', 'slug' => 'dell', 'parent_id' => 4, 'description' => ''],
            ['id' => 14, 'name' => 'Asus', 'slug' => 'asus', 'parent_id' => 4, 'description' => ''],
            ['id' => 15, 'name' => 'HP', 'slug' => 'hp', 'parent_id' => 4, 'description' => ''],
            ['id' => 16, 'name' => 'Acer', 'slug' => 'acer', 'parent_id' => 4, 'description' => ''],
            ['id' => 17, 'name' => 'Phụ kiện công nghệ', 'slug' => 'phu-kien-cong-nghe', 'parent_id' => 1, 'description' => ''],
            ['id' => 18, 'name' => 'Phụ kiện điện thoại - Tablet', 'slug' => 'phu-kien-dien-thoai-tablet', 'parent_id' => 17, 'description' => ''],
            ['id' => 19, 'name' => 'Phụ kiện máy tính - Laptop', 'slug' => 'phu-kien-may-tinh-laptop', 'parent_id' => 17, 'description' => ''],
            ['id' => 20, 'name' => 'Thiết bị âm thanh', 'slug' => 'thiet-bi-am-thanh', 'parent_id' => 17, 'description' => ''],
            ['id' => 21, 'name' => 'Thời Trang Nam', 'slug' => 'thoi-trang-nam', 'parent_id' => 0, 'description' => ''],
            ['id' => 22, 'name' => 'Áo khoác nam', 'slug' => 'ao-khoac-nam', 'parent_id' => 21, 'description' => ''],
            ['id' => 23, 'name' => 'Áo sơ mi nam', 'slug' => 'ao-so-mi-nam', 'parent_id' => 21, 'description' => ''],
            ['id' => 24, 'name' => 'Áo thun nam', 'slug' => 'ao-thun-nam', 'parent_id' => 21, 'description' => ''],
            ['id' => 25, 'name' => 'Quần jeans nam', 'slug' => 'quan-jeans-nam', 'parent_id' => 21, 'description' => ''],
            ['id' => 26, 'name' => 'Quần kaki - Quần tây nam', 'slug' => 'quan-kaki-quan-tay-nam', 'parent_id' => 21, 'description' => ''],
            ['id' => 27, 'name' => 'Quần shorts nam', 'slug' => 'quan-shorts-nam', 'parent_id' => 21, 'description' => ''],
            ['id' => 28, 'name' => 'Áo khoác thể thao', 'slug' => 'ao-khoac-the-thao', 'parent_id' => 22, 'description' => ''],
            ['id' => 29, 'name' => 'Áo khoác kaki', 'slug' => 'ao-khoac-kaki', 'parent_id' => 22, 'description' => ''],
            ['id' => 30, 'name' => 'Áo khoác jeans', 'slug' => 'ao-khoac-jeans', 'parent_id' => 22, 'description' => ''],
            ['id' => 31, 'name' => 'Áo sơ mi tay dài', 'slug' => 'ao-so-mi-tay-dai', 'parent_id' => 23, 'description' => ''],
            ['id' => 32, 'name' => 'Áo sơ mi tay ngắn', 'slug' => 'ao-so-mi-tay-ngan', 'parent_id' => 23, 'description' => ''],
            ['id' => 33, 'name' => 'Áo thun tay dài', 'slug' => 'ao-thun-tay-dai', 'parent_id' => 24, 'description' => ''],
            ['id' => 34, 'name' => 'Áo thun tay ngắn', 'slug' => 'ao-thun-tay-ngan', 'parent_id' => 24, 'description' => ''],
            ['id' => 35, 'name' => 'Áo thun 3 lỗ', 'slug' => 'ao-thun-3-lo', 'parent_id' => 24, 'description' => ''],
            ['id' => 36, 'name' => 'Quần jeans ống suông', 'slug' => 'quan-jeans-ong-suong', 'parent_id' => 25, 'description' => ''],
            ['id' => 37, 'name' => 'Quần jeans ống côn skinny', 'slug' => 'quan-jeans-ong-con-skinny', 'parent_id' => 25, 'description' => ''],
            ['id' => 38, 'name' => 'Quần tây', 'slug' => 'quan-tay-nam', 'parent_id' => 26, 'description' => ''],
            ['id' => 39, 'name' => 'Quần kaki', 'slug' => 'quan-kaki-nam', 'parent_id' => 26, 'description' => ''],
            ['id' => 40, 'name' => 'Quần shorts kaki', 'slug' => 'quan-shorts-kaki', 'parent_id' => 27, 'description' => ''],
            ['id' => 41, 'name' => 'Quần shorts thun', 'slug' => 'quan-shorts-thun', 'parent_id' => 27, 'description' => ''],
            ['id' => 42, 'name' => 'Quần shorts jeans', 'slug' => 'quan-shorts-jeans', 'parent_id' => 27, 'description' => ''],
            ['id' => 43, 'name' => 'Thời trang nữ', 'slug' => 'thoi-trang-nu', 'parent_id' => 0, 'description' => ''],
            ['id' => 44, 'name' => 'Đầm - Váy', 'slug' => 'dam-vay', 'parent_id' => 43, 'description' => ''],
            ['id' => 45, 'name' => 'Áo khoác', 'slug' => 'ao-khoac', 'parent_id' => 43, 'description' => ''],
            ['id' => 46, 'name' => 'Áo nữ', 'slug' => 'ao-nu', 'parent_id' => 43, 'description' => ''],
            ['id' => 47, 'name' => 'Quần nữ', 'slug' => 'quan-nu', 'parent_id' => 43, 'description' => ''],
            ['id' => 48, 'name' => 'Đầm xòe', 'slug' => 'dam-xoe', 'parent_id' => 44, 'description' => ''],
            ['id' => 49, 'name' => 'Đầm xuông', 'slug' => 'dam-xuong', 'parent_id' => 44, 'description' => ''],
            ['id' => 50, 'name' => 'Đầm ôm', 'slug' => 'dam-om', 'parent_id' => 44, 'description' => ''],
            ['id' => 51, 'name' => 'Áo khoác vest', 'slug' => 'ao-khoac-vest', 'parent_id' => 45, 'description' => ''],
            ['id' => 52, 'name' => 'Áo khoác cách điệu', 'slug' => 'ao-khoac-cach-dieu', 'parent_id' => 45, 'description' => ''],
            ['id' => 53, 'name' => 'Áo khoác len', 'slug' => 'ao-khoac-len', 'parent_id' => 45, 'description' => ''],
            ['id' => 54, 'name' => 'Áo sơ mi nữ', 'slug' => 'ao-so-mi-nu', 'parent_id' => 46, 'description' => ''],
            ['id' => 55, 'name' => 'Áo kiểu', 'slug' => 'ao-kieu', 'parent_id' => 46, 'description' => ''],
            ['id' => 56, 'name' => 'Áo dài', 'slug' => 'ao-dai', 'parent_id' => 46, 'description' => ''],
            ['id' => 57, 'name' => 'Quần jeans', 'slug' => 'quan-jeans-nu', 'parent_id' => 47, 'description' => ''],
            ['id' => 58, 'name' => 'Quần tây', 'slug' => 'quan-tay-nu', 'parent_id' => 47, 'description' => ''],
            ['id' => 59, 'name' => 'Quần shorts', 'slug' => 'quan-shorts-nu', 'parent_id' => 47, 'description' => ''],
            ['id' => 60, 'name' => 'Quần legging', 'slug' => 'quan-legging', 'parent_id' => 47, 'description' => ''],
            ['id' => 61, 'name' => 'Giày dép', 'slug' => 'giay-dep', 'parent_id' => 0, 'description' => ''],
            ['id' => 62, 'name' => 'Giày cao gót nữ', 'slug' => 'giay-cao-got-nu', 'parent_id' => 61, 'description' => ''],
            ['id' => 63, 'name' => 'Giày nam', 'slug' => 'giay-nam', 'parent_id' => 61, 'description' => ''],
            ['id' => 64, 'name' => 'Giày nữ khác', 'slug' => 'giay-nu-khac', 'parent_id' => 61, 'description' => ''],
            ['id' => 65, 'name' => 'Giày thể thao', 'slug' => 'giay-the-thao', 'parent_id' => 61, 'description' => ''],
            ['id' => 66, 'name' => 'Giày cao gót bít mũi', 'slug' => 'giay-cao-got-bit-mui', 'parent_id' => 62, 'description' => ''],
            ['id' => 67, 'name' => 'Giày cao gót hở mũi', 'slug' => 'giay-cao-got-ho-mui', 'parent_id' => 62, 'description' => ''],
            ['id' => 68, 'name' => 'Giày sandal cao gót', 'slug' => 'giay-sandal-cao-got', 'parent_id' => 62, 'description' => ''],
            ['id' => 69, 'name' => 'Giày tây', 'slug' => 'giay-tay', 'parent_id' => 63, 'description' => ''],
            ['id' => 70, 'name' => 'Giày lười - Giày mọi', 'slug' => 'giay-luoi-giay-moi', 'parent_id' => 63, 'description' => ''],
            ['id' => 71, 'name' => 'Giày sneaker nam', 'slug' => 'giay-sneaker-nam', 'parent_id' => 63, 'description' => ''],
            ['id' => 72, 'name' => 'Giày sandal nam', 'slug' => 'giay-sandal-nam', 'parent_id' => 63, 'description' => ''],
            ['id' => 73, 'name' => 'Giày búp bê', 'slug' => 'giay-bup-be', 'parent_id' => 64, 'description' => ''],
            ['id' => 74, 'name' => 'Giày mọi - Slip on nữ', 'slug' => 'giay-moi-slip-on-nu', 'parent_id' => 64, 'description' => ''],
            ['id' => 75, 'name' => 'Giày sneaker nữ', 'slug' => 'giay-sneaker-nu', 'parent_id' => 64, 'description' => ''],
            ['id' => 76, 'name' => 'Giày chạy bộ tập gym', 'slug' => 'giay-chay-bo-tap-gym', 'parent_id' => 65, 'description' => ''],
            ['id' => 77, 'name' => 'Giày thể thao khác', 'slug' => 'giay-the-thao-khac', 'parent_id' => 65, 'description' => '']
        ]);
    }
}
