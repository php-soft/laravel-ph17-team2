<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['id' => 1, 'buys' => '1', 'name' => 'Nokia 2700', 'description' => 'Điện thoại', 'image'=>'nokia2700.jpg', 'view' => '1', 'price' => '300000', 'category_id' => '5', 'alias' => 'nokia-2700'],
            
            ['id' => 2, 'buys' => '5', 'name' => 'iphone 6s', 'description' => 'Điện thoại', 'image'=>'iphone6s.jpg', 'view' => '8', 'price' => '7000000', 'category_id' => '6', 'alias' => 'iphone6s'],            
            ['id' => 3, 'buys' => '23', 'name' => 'Áo Khoác dù nam mặc được 2 mặt', 'description' => 'Áo khoác', 'image'=>'aokhoacdunam.jpg', 'view' => '6', 'price' => '200000', 'category_id' => '28', 'alias' => 'ao-khoac-du'],
            ['id' => 4, 'buys' => '15', 'name' => 'áo khoác kaki 2 túi', 'description' => 'Áo khoác', 'image'=>'aokhoackaki2tui.jpg', 'view' => '7', 'price' => '190000', 'category_id' => '29', 'alias' => 'ao-khoac-kaki'],
            
            ['id' => 5, 'buys' => '30', 'name' => 'Áo sơ mi nam tay dài', 'description' => 'Áo sơ mi', 'image'=>'aosomitaydai.jpg', 'view' => '19', 'price' => '200000', 'category_id' => '31', 'alias' => 'ao-so-mi-tay-dai'],
            ['id' => 6, 'buys' => '40', 'name' => 'Áo sơ mi nam tay ngắn trơn', 'description' => 'Áo sơ mi', 'image'=>'aosomitayngan.jpg', 'view' => '10', 'price' => '210000', 'category_id' => '32', 'alias' => 'ao-so-mi-tay-ngan'],
            ['id' => 7, 'buys' => '10', 'name' => 'Áo sơ mi phối sọc', 'description' => 'Áo sơ mi', 'image'=>'aosomiphoisoc.jpg', 'view' => '1', 'price' => '200000', 'category_id' => '32', 'alias' => 'ao-so-mi-tay-ngan'],

            ['id' => 8, 'buys' => '21', 'name' => ' Áo thun tay dài kiểu hàn quốc', 'description' => 'Áo thun tay dài', 'image'=>'aothuntaydaikieuhan.jpg', 'view' => '4', 'price' => '220000', 'category_id' => '33', 'alias' => 'ao-thun-tay-dai-kieu-han-quoc'],
            
            ['id' => 9, 'buys' => '29', 'name' => ' Áo thun tay ngắn cổ trụ', 'description' => 'Áo thun tay ngắn', 'image'=>'aothuncotru.jpg', 'view' => '8', 'price' => '129000', 'category_id' => '34', 'alias' => 'ao-thun-tay-ngan-co-tru'],
            ['id' => 10, 'buys' => '14', 'name' => ' Áo thun cổ chữ V', 'description' => 'Áo thun tay ngắn', 'image'=>'aothuncochuv.jpg', 'view' => '0', 'price' => '190000', 'category_id' => '34', 'alias' => 'ao-thun-co-chu-v'],
            
            ['id' => 11, 'buys' => '30', 'name' => 'Quần jean nam suông xám', 'description' => 'quần jean', 'image'=>'jeansuongxam.jpg', 'view' => '3', 'price' => '215000', 'category_id' => '36', 'alias' => 'quan-jean-nam-suong-xam'],
            ['id' => 12, 'buys' => '29', 'name' => 'Quần jean nam cao cấp', 'description' => 'quần jean', 'image'=>'jeannam.jpg', 'view' => '6', 'price' => '345000', 'category_id' => '36', 'alias' => 'quan-jean-nam-cao-cap'],
            
            ['id' => 13, 'buys' => '28', 'name' => 'Quần kaki ống côn', 'description' => 'quần kaki', 'image'=>'kakiongcon.jpg', 'view' => '7', 'price' => '175000', 'category_id' => '39', 'alias' => 'quan-kaki-ong-con'],
            
            ['id' => 14, 'buys' => '20', 'name' => 'Quần tây công sở', 'description' => 'quần tây', 'image'=>'quantaynam.jpg', 'view' => '8', 'price' => '285000', 'category_id' => '38', 'alias' => 'quan-tay-cong-so'],
            
            ['id' => 15, 'buys' => '22', 'name' => 'Đầm phối ren', 'description' => 'đầm ', 'image'=>'damphoiren.jpg', 'view' => '21', 'price' => '235000', 'category_id' => '48', 'alias' => 'dam-phoi-ren'],            
            
            ['id' => 16, 'buys' => '26', 'name' => 'Đầm suông thun lụa', 'description' => 'đầm ', 'image'=>'damsuongthunlua.jpg', 'view' => '2', 'price' => '255000', 'category_id' => '49', 'alias' => 'dam-suong-thun-lua'],
            ['id' => 17, 'buys' => '29', 'name' => 'Đầm ôm sọc ngang', 'description' => 'đầm ', 'image'=>'damsoc.jpg', 'view' => '4', 'price' => '275000', 'category_id' => '50', 'alias' => 'dam-om-soc-ngang'],
            ['id' => 18, 'buys' => '26', 'name' => 'Đầm ôm đuôi cá', 'description' => 'đầm ', 'image'=>'damduoica.jpg', 'view' => '7', 'price' => '315000', 'category_id' => '50', 'alias' => 'dam-som-duoi-ca'],
           
            ['id' => 19, 'buys' => '26', 'name' => 'Vest công sở', 'description' => 'Áo khoác ', 'image'=>'vestcongso.jpg', 'view' => '2', 'price' => '295000', 'category_id' => '51', 'alias' => 'vest-cong-so'],
            ['id' => 20, 'buys' => '19', 'name' => ' Áo khoác kiểu có mũ', 'description' => ' áo khoác ', 'image'=>'aokhoacnuhan.jpg', 'view' => '9', 'price' => '215000', 'category_id' => '52', 'alias' => 'ao-khoac-kieu-co-mu'],
            ['id' => 21, 'buys' => '29', 'name' => ' Áo khoác Boober Jacket ', 'description' => ' Áo khoác', 'image'=>'bomberjacket.jpg', 'view' => '6', 'price' => '265000', 'category_id' => '52', 'alias' => 'ao-khoac-boober-jacket'],
            ['id' => 22, 'buys' => '42', 'name' => ' Áo khoác len chùm ', 'description' => ' Áo khoác ', 'image'=>'aokhoaclen.jpg', 'view' => '9', 'price' => '199000', 'category_id' => '53', 'alias' => 'ao-khoac-len-chum'],
            ['id' => 23, 'buys' => '32', 'name' => ' Áo khoác len Form dài ', 'description' => ' Áo khoác ', 'image'=>'lenformdai.jpg', 'view' => '9', 'price' => '455000', 'category_id' => '53', 'alias' => 'ao-khoac-len-form-dai'],
            ['id' => 24, 'buys' => '37', 'name' => ' Áo sơ mi cổ trụ ', 'description' => ' Áo nữ', 'image'=>'aosomicotru.jpg', 'view' => '7', 'price' => '169000', 'category_id' => '54', 'alias' => 'ao-so-mi-co-tru'],
            ['id' => 25, 'buys' => '25', 'name' => ' Áo sơ mi công sở ', 'description' => ' Áo  nữ', 'image'=>'somicongso.jpg', 'view' => '5', 'price' => '169000', 'category_id' => '54', 'alias' => 'ao-so-mi-cong-so'],
            ['id' => 26, 'buys' => '20', 'name' => ' Áo nữ', 'description' => ' Áo kiểu', 'image'=>'aokieuthacno.jpg', 'view' => '9', 'price' => '179000', 'category_id' => '55', 'alias' => 'ao-kieu-thac-no'],
            ['id' => 27, 'buys' => '15', 'name' => ' Áo kiểu hở vai ', 'description' => ' Áo nữ', 'image'=>'kieuhovai.jpg', 'view' => '2', 'price' => '159000', 'category_id' => '55', 'alias' => 'ao-kieu-ho-vai'],
            ['id' => 28, 'buys' => '23', 'name' => 'Áo dài cách tân ren thêu ', 'description' => ' Áo nữ', 'image'=>'aodaicachtan.jpg', 'view' => '4', 'price' => '259000', 'category_id' => '56', 'alias' => 'ao-dai-cach-tan-ren-theu'],
            
            ['id' => 29, 'buys' => '34', 'name' => ' Quần jean nữ rách ', 'description' => 'quần nữ', 'image'=>'jeanrachnu.jpg', 'view' => '5', 'price' => '199000', 'category_id' => '57', 'alias' => 'quan-jean-rach-nu'],
            ['id' => 30, 'buys' => '13', 'name' => ' Quần tây nữ ', 'description' => ' Quần nữ', 'image'=>'quantaynu.jpg', 'view' => '5', 'price' => '279000', 'category_id' => '58', 'alias' => 'quan-tay-nu'],
            
            ['id' => 31, 'buys' => '14', 'name' => ' Giày da mũi kim loại cao cấp ', 'description' => ' giày cao gót nữ', 'image'=>'giaydamuikimloai.jpg', 'view' => '4', 'price' => '329000', 'category_id' => '66', 'alias' => 'giay-da-mui-kim-loai'],
           
            ['id' => 32, 'buys' => '33', 'name' => ' Giày cao gót mũi hở ánh vàng ', 'description' => ' giày cao gót nữ', 'image'=>'muihoanhvang.jpg', 'view' => '3', 'price' => '310000', 'category_id' => '67', 'alias' => 'giay-cao-got-mui-ho-anh-vang'],

            ['id' => 33, 'buys' => '25', 'name' => 'Đầm suông nữ', 'description' => 'đầm ', 'image'=>'damsuongnu.jpg', 'view' => '2', 'price' => '195000', 'category_id' => '49', 'alias' => 'dam-suong-nu'],

            ['id' => 34, 'buys' => '21', 'name' => ' Giày da cao cấp ', 'description' => ' giày nam', 'image'=>'giaydacaocap.jpg', 'view' => '0', 'price' => '350000', 'category_id' => '69', 'alias' => 'giay-da-cao-cap'],
        
            ['id' => 35, 'buys' => '23', 'name' => ' iPad Pro 9.7 ', 'description' => ' máy tính bảng', 'image'=>'ipadpro.jpg', 'view' => '7', 'price' => '17500000', 'category_id' => '10', 'alias' => 'ipad-pro-9.7'],
            ['id' => 36, 'buys' => '11', 'name' => ' Samsung Galaxy tab S3 ', 'description' => ' máy tính bảng', 'image'=>'galaxytabs3.jpg', 'view' => '7', 'price' => '14500000', 'category_id' => '11', 'alias' => 'galaxy-tab-s3'],
            ['id' => 37, 'buys' => '32', 'name' => ' Dell Vostro V5468A ', 'description' => ' Laptop', 'image'=>'dellvostro.jpg', 'view' => '3', 'price' => '21500000', 'category_id' => '13', 'alias' => 'dell-vostro-v5468A'],
            ['id' => 38, 'buys' => '31', 'name' => ' Asus UX310UA-FC054T ', 'description' => ' Laptop', 'image'=>'asusux310ua.jpg', 'view' => '3', 'price' => '11500000', 'category_id' => '14', 'alias' => 'asus-ux310ua'],
            ['id' => 39, 'buys' => '27', 'name' => ' Asus X455LA-WX443D ', 'description' => ' Laptop', 'image'=>'asusx455la.jpg', 'view' => '3', 'price' => '8500000', 'category_id' => '14', 'alias' => 'asus-x455la'],

            ['id' => 40, 'buys' => '7', 'name' => 'Iphone 7plush ', 'description' => 'Điện thoại', 'image'=>'iphone7plush.jpg', 'view' => '4', 'price' => '26000000', 'category_id' => '6', 'alias' => 'iphone7plush'],

            ['id' => 41, 'buys' => '10', 'name' => 'Samsung Galaxy S8', 'description' => 'Điện thoại', 'image'=>'samsungs8.jpg', 'view' => '3', 'price' => '18000000', 'category_id' => '7', 'alias' => 'samsung-galaxy-s8'],
             ['id' => 42, 'buys' => '7', 'name' => 'Iphone 7', 'description' => 'Điện thoại', 'image'=>'iphone7.jpg', 'view' => '3', 'price' => '22000000', 'category_id' => '6', 'alias' => 'iphone7'],
             ['id' => 43, 'buys' => '20', 'name' => 'Samsung A9', 'description' => 'Điện thoại', 'image'=>'samsunga9.jpg', 'view' => '7', 'price' => '14000000', 'category_id' => '7', 'alias' => 'samsung-a9'],
             ['id' => 44, 'buys' => '16', 'name' => 'Áo Khoác Nam phối màu sành điệu', 'description' => 'Áo khoác', 'image'=>'aokhoacnam.jpg', 'view' => '4', 'price' => '120000', 'category_id' => '29', 'alias' => 'ao-khoac-nam'],
             ['id' => 45, 'buys' => '32', 'name' => 'Quần jean rách cao cấp', 'description' => 'quần jean', 'image'=>'quanjeanrach.jpg', 'view' => '17', 'price' => '245000', 'category_id' => '25', 'alias' => 'quan-jean-rach-cao-cap'],

             ['id' => 46, 'buys' => '32', 'name' => ' Giày cao gót mũi hở kim tuyến ', 'description' => ' giày cao gót nữ', 'image'=>'kimtuyencaocap.jpg', 'view' => '3', 'price' => '350000', 'category_id' => '67', 'alias' => 'giay-cao-got-mui-ho-kim-tuyen']
            
        ]);
    }
}
