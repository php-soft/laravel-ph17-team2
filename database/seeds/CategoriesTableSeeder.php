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
            ['id' => 1, 'name' => 'Điện Thoại - Máy Tính', 'alias' => 'dien-thoai-may-tinh', 'parent_id' => 0, 'description' => ''],
            ['id' => 2, 'name' => 'Điện thoại di động', 'alias' => 'dien-thoai-di-dong', 'parent_id' => 1, 'description' => ''],
            ['id' => 3, 'name' => 'Máy tính bảng', 'alias' => 'may-tinh-bang', 'parent_id' => 1, 'description' => ''],
            ['id' => 4, 'name' => 'Laptop', 'alias' => 'laptop', 'parent_id' => 1, 'description' => ''],
            ['id' => 5, 'name' => 'Nokia', 'alias' => 'nokia', 'parent_id' => 2, 'description' => ''],
            ['id' => 6, 'name' => 'iPhone', 'alias' => 'iphone', 'parent_id' => 2, 'description' => ''],
            ['id' => 7, 'name' => 'Samsung', 'alias' => 'samsung', 'parent_id' => 2, 'description' => ''],
            ['id' => 8, 'name' => 'FPT', 'alias' => 'fpt', 'parent_id' => 2, 'description' => ''],
            ['id' => 9, 'name' => 'OPPO', 'alias' => 'oppo', 'parent_id' => 2, 'description' => ''],
            ['id' => 10, 'name' => 'iPad', 'alias' => 'ipad', 'parent_id' => 3, 'description' => ''],
            ['id' => 11, 'name' => 'Máy tính bảng Android', 'alias' => 'may-tinh-bang-android', 'parent_id' => 3, 'description' => ''],
            ['id' => 12, 'name' => 'Máy tính bảng Windows', 'alias' => 'may-tinh-bang-windows', 'parent_id' => 3, 'description' => ''],
            ['id' => 13, 'name' => 'Dell', 'alias' => 'dell', 'parent_id' => 4, 'description' => ''],
            ['id' => 14, 'name' => 'Asus', 'alias' => 'asus', 'parent_id' => 4, 'description' => ''],
            ['id' => 15, 'name' => 'HP', 'alias' => 'hp', 'parent_id' => 4, 'description' => ''],
            ['id' => 16, 'name' => 'Acer', 'alias' => 'acer', 'parent_id' => 4, 'description' => ''],
            ['id' => 17, 'name' => 'Phụ kiện công nghệ', 'alias' => 'phu-kien-cong-nghe', 'parent_id' => 1, 'description' => ''],
            ['id' => 18, 'name' => 'Phụ kiện điện thoại - Tablet', 'alias' => 'phu-kien-dien-thoai-tablet', 'parent_id' => 17, 'description' => ''],
            ['id' => 19, 'name' => 'Phụ kiện máy tính - Laptop', 'alias' => 'phu-kien-may-tinh-laptop', 'parent_id' => 17, 'description' => ''],
            ['id' => 20, 'name' => 'Thiết bị âm thanh', 'alias' => 'thiet-bi-am-thanh', 'parent_id' => 17, 'description' => ''],
            ['id' => 21, 'name' => 'Thời Trang Nam', 'alias' => 'thoi-trang-nam', 'parent_id' => 0, 'description' => ''],
            ['id' => 22, 'name' => 'Áo khoác nam', 'alias' => 'ao-khoac-nam', 'parent_id' => 21, 'description' => ''],
            ['id' => 23, 'name' => 'Áo sơ mi nam', 'alias' => 'ao-so-mi-nam', 'parent_id' => 21, 'description' => ''],
            ['id' => 24, 'name' => 'Áo thun nam', 'alias' => 'ao-thun-nam', 'parent_id' => 21, 'description' => ''],
            ['id' => 25, 'name' => 'Quần jeans nam', 'alias' => 'quan-jeans-nam', 'parent_id' => 21, 'description' => ''],
            ['id' => 26, 'name' => 'Quần kaki - Quần tây nam', 'alias' => 'quan-kaki-quan-tay-nam', 'parent_id' => 21, 'description' => ''],
            ['id' => 27, 'name' => 'Quần shorts nam', 'alias' => 'quan-shorts-nam', 'parent_id' => 21, 'description' => ''],
            ['id' => 28, 'name' => 'Áo khoác thể thao', 'alias' => 'ao-khoac-the-thao', 'parent_id' => 22, 'description' => ''],
            ['id' => 29, 'name' => 'Áo khoác kaki', 'alias' => 'ao-khoac-kaki', 'parent_id' => 22, 'description' => ''],
            ['id' => 30, 'name' => 'Áo khoác jeans', 'alias' => 'ao-khoac-jeans', 'parent_id' => 22, 'description' => ''],
            ['id' => 31, 'name' => 'Áo sơ mi tay dài', 'alias' => 'ao-so-mi-tay-dai', 'parent_id' => 23, 'description' => ''],
            ['id' => 32, 'name' => 'Áo sơ mi tay ngắn', 'alias' => 'ao-so-mi-tay-ngan', 'parent_id' => 23, 'description' => ''],
            ['id' => 33, 'name' => 'Áo thun tay dài', 'alias' => 'ao-thun-tay-dai', 'parent_id' => 24, 'description' => ''],
            ['id' => 34, 'name' => 'Áo thun tay ngắn', 'alias' => 'ao-thun-tay-ngan', 'parent_id' => 24, 'description' => ''],
            ['id' => 35, 'name' => 'Áo thun 3 lỗ', 'alias' => 'ao-thun-3-lo', 'parent_id' => 24, 'description' => ''],
            ['id' => 36, 'name' => 'Quần jeans ống suông', 'alias' => 'quan-jeans-ong-suong', 'parent_id' => 25, 'description' => ''],
            ['id' => 37, 'name' => 'Quần jeans ống côn skinny', 'alias' => 'quan-jeans-ong-con-skinny', 'parent_id' => 25, 'description' => ''],
            ['id' => 38, 'name' => 'Quần tây', 'alias' => 'quan-tay-nam', 'parent_id' => 26, 'description' => ''],
            ['id' => 39, 'name' => 'Quần kaki', 'alias' => 'quan-kaki-nam', 'parent_id' => 26, 'description' => ''],
            ['id' => 40, 'name' => 'Quần shorts kaki', 'alias' => 'quan-shorts-kaki', 'parent_id' => 27, 'description' => ''],
            ['id' => 41, 'name' => 'Quần shorts thun', 'alias' => 'quan-shorts-thun', 'parent_id' => 27, 'description' => ''],
            ['id' => 42, 'name' => 'Quần shorts jeans', 'alias' => 'quan-shorts-jeans', 'parent_id' => 27, 'description' => ''],
            ['id' => 43, 'name' => 'Thời trang nữ', 'alias' => 'thoi-trang-nu', 'parent_id' => 0, 'description' => ''],
            ['id' => 44, 'name' => 'Đầm - Váy', 'alias' => 'dam-vay', 'parent_id' => 43, 'description' => ''],
            ['id' => 45, 'name' => 'Áo khoác', 'alias' => 'ao-khoac', 'parent_id' => 43, 'description' => ''],
            ['id' => 46, 'name' => 'Áo nữ', 'alias' => 'ao-nu', 'parent_id' => 43, 'description' => ''],
            ['id' => 47, 'name' => 'Quần nữ', 'alias' => 'quan-nu', 'parent_id' => 43, 'description' => ''],
            ['id' => 48, 'name' => 'Đầm xòe', 'alias' => 'dam-xoe', 'parent_id' => 44, 'description' => ''],
            ['id' => 49, 'name' => 'Đầm xuông', 'alias' => 'dam-xuong', 'parent_id' => 44, 'description' => ''],
            ['id' => 50, 'name' => 'Đầm ôm', 'alias' => 'dam-om', 'parent_id' => 44, 'description' => ''],
            ['id' => 51, 'name' => 'Áo khoác vest', 'alias' => 'ao-khoac-vest', 'parent_id' => 45, 'description' => ''],
            ['id' => 52, 'name' => 'Áo khoác cách điệu', 'alias' => 'ao-khoac-cach-dieu', 'parent_id' => 45, 'description' => ''],
            ['id' => 53, 'name' => 'Áo khoác len', 'alias' => 'ao-khoac-len', 'parent_id' => 45, 'description' => ''],
            ['id' => 54, 'name' => 'Áo sơ mi nữ', 'alias' => 'ao-so-mi-nu', 'parent_id' => 46, 'description' => ''],
            ['id' => 55, 'name' => 'Áo kiểu', 'alias' => 'ao-kieu', 'parent_id' => 46, 'description' => ''],
            ['id' => 56, 'name' => 'Áo dài', 'alias' => 'ao-dai', 'parent_id' => 46, 'description' => ''],
            ['id' => 57, 'name' => 'Quần jeans', 'alias' => 'quan-jeans-nu', 'parent_id' => 47, 'description' => ''],
            ['id' => 58, 'name' => 'Quần tây', 'alias' => 'quan-tay-nu', 'parent_id' => 47, 'description' => ''],
            ['id' => 59, 'name' => 'Quần shorts', 'alias' => 'quan-shorts-nu', 'parent_id' => 47, 'description' => ''],
            ['id' => 60, 'name' => 'Quần legging', 'alias' => 'quan-legging', 'parent_id' => 47, 'description' => ''],
            ['id' => 61, 'name' => 'Giày dép', 'alias' => 'giay-dep', 'parent_id' => 0, 'description' => ''],
            ['id' => 62, 'name' => 'Giày cao gót nữ', 'alias' => 'giay-cao-got-nu', 'parent_id' => 61, 'description' => ''],
            ['id' => 63, 'name' => 'Giày nam', 'alias' => 'giay-nam', 'parent_id' => 61, 'description' => ''],
            ['id' => 64, 'name' => 'Giày nữ khác', 'alias' => 'giay-nu-khac', 'parent_id' => 61, 'description' => ''],
            ['id' => 65, 'name' => 'Giày thể thao', 'alias' => 'giay-the-thao', 'parent_id' => 61, 'description' => ''],
            ['id' => 66, 'name' => 'Giày cao gót bít mũi', 'alias' => 'giay-cao-got-bit-mui', 'parent_id' => 62, 'description' => ''],
            ['id' => 67, 'name' => 'Giày cao gót hở mũi', 'alias' => 'giay-cao-got-ho-mui', 'parent_id' => 62, 'description' => ''],
            ['id' => 68, 'name' => 'Giày sandal cao gót', 'alias' => 'giay-sandal-cao-got', 'parent_id' => 62, 'description' => ''],
            ['id' => 69, 'name' => 'Giày tây', 'alias' => 'giay-tay', 'parent_id' => 63, 'description' => ''],
            ['id' => 70, 'name' => 'Giày lười - Giày mọi', 'alias' => 'giay-luoi-giay-moi', 'parent_id' => 63, 'description' => ''],
            ['id' => 71, 'name' => 'Giày sneaker nam', 'alias' => 'giay-sneaker-nam', 'parent_id' => 63, 'description' => ''],
            ['id' => 72, 'name' => 'Giày sandal nam', 'alias' => 'giay-sandal-nam', 'parent_id' => 63, 'description' => ''],
            ['id' => 73, 'name' => 'Giày búp bê', 'alias' => 'giay-bup-be', 'parent_id' => 64, 'description' => ''],
            ['id' => 74, 'name' => 'Giày mọi - Slip on nữ', 'alias' => 'giay-moi-slip-on-nu', 'parent_id' => 64, 'description' => ''],
            ['id' => 75, 'name' => 'Giày sneaker nữ', 'alias' => 'giay-sneaker-nu', 'parent_id' => 64, 'description' => ''],
            ['id' => 76, 'name' => 'Giày chạy bộ tập gym', 'alias' => 'giay-chay-bo-tap-gym', 'parent_id' => 65, 'description' => ''],
            ['id' => 77, 'name' => 'Giày thể thao khác', 'alias' => 'giay-the-thao-khac', 'parent_id' => 65, 'description' => '']
        ]);
    }
}
