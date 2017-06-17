<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            ['title' => 'Làn da khỏe mạnh - tiêu chuẩn nét đẹp hiện đại của hot beauty blogger', 'description' => 'Sau trào lưu da trắng sứ, cằm V-line..., giới beauty blogger Việt đang hướng tới những tiêu chuẩn mới về vẻ đẹp hiện đại, tôn vinh nét đẹp tự nhiên, khỏe khoắn.', 'content' => 'Theo hai hot beauty blogger Óng Ánh và Hannah Nguyễn, những chuẩn mực trước đây của làn da như ngăm đen khỏe khoắn hay trắng sứ mỏng manh đã không còn phù hợp. Thay vào đó, một làn da khỏe đẹp từ bên trong, đều màu và căng mịn rạng ngời mới là tiêu chuẩn của nét đẹp hiện đại.', 'image' => '1', 'user_id' => 1, 'news_category_id' => 2, 'alias' => 'lan-da-khoe-manh-tieu-chuan-net-dep-hien-dai-cua-hot-beauty-blogger'],
            ['title' => 'Thị trường bitcoin bốc hơi 12 tỷ USD, người chơi điêu đứng', 'description' => 'Chỉ sau 3 ngày, giá trị vốn hóa thị trường đồng bitcoin giảm 12,16 tỷ USD. Đây được xem là mức giảm kỷ lục của đồng tiền ảo này kể từ khi đạt giá trị 3.000 USD.', 'content' => 'Vào ngày 12/6, giá trị đồng bitcoin đạt mức cao nhất mọi thời đại là 3.017 USD. Tuy nhiên, sau khi các nhà đầu tư bán ròng mạnh mẽ, giá bitcoin đã giảm 14% trong 24 giờ, xuống còn khoảng 2.590 USD, sau đó tăng lại ngày tiếp theo lên mức 2.750 USD.', 'image' => '2', 'user_id' => 2, 'news_category_id' => 1, 'alias' => 'thi-truong-bitcoin-boc-hoi-12-ty-usd-nguoi-choi-dieu-dung'],
            ['title' => 'Nam diễn viên Hàn Quốc được miễn nghĩa vụ quân sự', 'description' => 'Sau khi nhập ngũ vào tháng 3, Seo In Guk đã bị trả về nhà sau bốn tuần huấn luyện cơ bản và mới đây đã được miễn nghĩa vụ quân sự vì sức khỏe không đạt yêu cầu.', 'content' => 'Thông tin được đưa ra từ công ty chủ quản của nam diễn viên cho biết Seo In Guk đã nhập ngũ với tư cách một người lính tại ngũ từ tháng 3. Tuy nhiên, Seo In Guk đã bị gửi về nhà sau khoá huấn luyện cơ bản kéo dài 4 tuần do tổn thương mắt cá chân trái.', 'image' => '3', 'user_id' => 3, 'news_category_id' => 3, 'alias' => 'nam-dien-vien-han-quoc-duoc-mien-nghia-vu-quan-su']
        ]);
    }
}
