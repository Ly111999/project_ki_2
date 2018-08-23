<?php

use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('sellers')->truncate();
        DB::table('sellers')->insert([
            [
                'id' => 1,
                'name' => 'Đầm nữ 2 dây',
                'image' => 'http://khuyenmaideal.com/images/15411/dam-ren-o-vuong-tre-vai-xinh-xan%20(2).jpg',
                'description' => 'Thương hiệu: LAMER.<br>Màu sắc: Đen.<br>Size: M/L/XL.<br>Đầm Nữ 2 dây Cung Cấp Bởi Lamer Fashion:<br>Chất liệu cotton mềm mại mang đến sự thoải mái.<br>Thiết kế 2 dây, dáng suông cho bạn sự tự tin.<br>Màu trơn đem đến sự da dạng để kết hợp mặc bên trong những chiếc váy mỏng.<br>Dễ dàng phối hợp cùng nhiều phụ kiện khác mang đến phong cách thời trang riêng cho bạn nữ, khéo léo lựa chọn trang phục cùng phụ kiện phù hợp, bạn sẽ có set đồ đẹp mắt...<br> Bạn có thể sử dụng như trang phục mặc nhà hoặc khoác ngoài một chiếc sơ mi dán dài mỏng.',
                'price' => 230000,
                'categoryId' => 1
            ],
            [
                'id' => 2,
                'name' => 'Đầm maxi',
                'image' => 'https://media3.scdn.vn/img2/2017/2_25/Isjasx_simg_d0daf0_800x1200_max.jpg',
                'description' => 'Đầm Maxi, Chun Eo, Tay Bèo Cung Cấp Bởi Lamer Fashion.<br>Chất liệu voan Hàn đem đến cho bạn sự thoải mái, tự tin.Đầm 1 lớp.<br>Thiết kế cổ tim, tay lỡ bèo, đính nơ điệu đà.<br>Dáng maxi xòe nhẹ, gấu bèo xinh xắn.<br>Chun eo tạo điểm nhấn cho dáng váy.<br>Màu sắc họa tiết bắt mắt cho sự mới mẻ mà vẫn trẻ trung.<br>Lột mặt trái sản phẩm khi giặt, phơiKhông sử dụng thuốc tẩy.<br>Là ở nhiệt độ thấp.',
                'price' => 230000,
                'categoryId' => 1
            ],
            [
                'id' => 3,
                'name' => 'Đầm dáng xòe',
                'image' => 'https://thoitrangeva.biz/wp-content/uploads/2018/03/vay-dam-cong-so-dang-xoe-1.jpg',
                'description' => 'Đầm Nữ Dáng Xòe Cung Cấp Bởi Lamer Fashion.<br>Chất liệu mango, lên phom chuẩn.<br>Thiết kế cổ V dáng xòe rộng, dài, không tay.<br>Thêu vai tinh tế tạo điểm nhấn.<br> Màu sắc trung tính mang đến sự thanh lịch, quyến rũ.<br>Kết hợp áo vest bộ đem đến 1 set đồ thời thượng.',
                'price' => 230000,
                'categoryId' => 1
            ],
            [
                'id' => 4,
                'name' => 'Aó cách tân',
                'image' => '',
                'description' => 'Quần Cách Tân Cung Cấp Bởi Lamer Fashion:Chất liệu Kaki Chun cao cấp chun giãn nhẹ mang đến sự thoải mái.<br>Thiết kế ống côn lửng, 2 túi chép tiện ích.<br>Màu sắc: Màu sắc mang đến nhiều sự lựa chọn phối đồ.<br>Gợi ý phối đồ: Dễ dàng phối hợp cùng nhiều phụ kiện khác mang đến phong cách thời trang riêng cho bạn nữ, khéo léo lựa chọn trang phục cùng phụ kiện phù hợp, bạn sẽ có set đồ đẹp mắt...<br> Bạn có thể kết hợp cùng áo kiểu, áo sơ mi tùy phong cách bạn chọn. ',
                'price' => 230000,
                'categoryId' => 1
            ],
            [
                'id' => 5,
                'name' => 'Aó thun nữ',
                'image' => 'https://www.thoitrangtichtac.com/productimgs/B/B7X/B76/B7653/Ao_thun_nu_tay_ngan_in_chu_see_look_at_b7653.jpg',
                'description' => 'Áo nữ Thun Xẻ Tà, Ốp Túi Cung Cấp Bởi Lamer Fashion:<br>Chất liệu cotton thoải mái thoáng mát. <br>Thiết kế cổ tròn, 2 túi chéo tiện ích, tạo điểm nhấn. <br>Màu sắc hay ho mang đến sự trẻ trung thanh lịch.',
                'price' => 230000,
                'categoryId' => 1
            ],
            [
                'id' => 6,
                'name' => 'Quần ống rộng',
                'image' => 'https://media3.scdn.vn/img2/2018/3_20/Y0qgBN.jpg',
                'description' => 'Quần Quần Ống Rộng Cung Cấp Bởi Lamer Fashion.<br>Chất liệu lanh thái đem đến sự thoải mái, mềm mại cho người mặc.<br>Quần có thiết kế suông đơn giản, ống rộng thoải mái.<br>Màu sắc trung tính dễ phối đồ, kết hợp cùng áo ghép bộ cho sự trẻ trung, thời thượng.',
                'price' => 230000,
                'categoryId' => 1
            ],
            [
                'id' => 7,
                'name' => 'Quần sooc',
                'image' => 'https://media.tinybook.net/images/l4c/quan-short-nu-vat-xeo-giai-nhiet-cho-ngay-nang-nong-4054-5.jpg',
                'description' => '<br>Chất liệu lanh thái đem đến sự thoải mái, mềm mại cho người mặc.<br>Quần có thiết kế suông đơn giản, ống rộng thoải mái.<br>Màu sắc trung tính dễ phối đồ, kết hợp cùng áo ghép bộ cho sự trẻ trung, thời thượng.',
                'price' => 230000,
                'categoryId' => 1
            ],
            [
                'id' => 8,
                'name' => 'Quần gấu Lơ Vê',
                'image' => 'https://file.yes24.vn/Upload/ProductImage/dunghanh2017/1807591_L.jpg',
                'description' => 'Quần Gấu Lơ Vê Cung Cấp Bởi Lamer Fashion:<br>Chất liệu Mango mang đến sự thoải mái, lên dáng chuẩn.<br>Thiết kế ống côn, ly trước, gấu lơ vê mang đến sự năng động, trẻ trung.<br>2 túi chéo tiện ích.<br>Màu sắc: Màu sắc kẻ mang đến nhiều sự lựa chọn phối đồ.<br>Gợi ý phối đồ: Dễ dàng phối hợp cùng nhiều phụ kiện khác mang đến phong cách thời trang riêng cho bạn nữ, khéo léo lựa chọn trang phục cùng phụ kiện phù hợp, bạn sẽ có set đồ đẹp mắt... <br>Bạn có thể kết hợp cùng áo kiểu, áo sơ mi tùy phong cách bạn chọn. ',
                'price' => 230000,
                'categoryId' => 1
            ],
            [
                'id' => 9,
                'name' => 'Chân váy ôm',
                'image' => 'http://nhanhmua.vn/media/Images/2017/thang11/11318/chan-vay-om-duoi-ca-Cindy-3.jpg',
                'description' => 'Chân Váy Ôm Buộc Nơ Eo Cung Cấp Bởi Lamer Fashion.<br>Chất liệu mango đem đến sự thoải mái.<br>Thiết kế dáng ôm, buộc eo trẻ trung, thanh lịch.<br>Màu sắc trung tính đem đến cho bạn nhiều sự lựa chọn phối đồ. ',
                'price' => 230000,
                'categoryId' => 1
            ],
            [
                'id' => 10,
                'name' => 'Aó len nữ',
                'image' => 'https://media3.scdn.vn/img2/2017/10_11/ao-len-nu-tre-trung-1m4G3-WyoW9Y_simg_fd6fef_697-697-0-0_cropf_simg_ab1f47_350x350_maxb.png',
                'description' => 'Áo Len Chui Đầu Cổ Lọ Cung Cấp Bởi Lamer Fashion.<br>Chất liệu len gân co giãn 4 chiều mang đến sự thoải mái.<br>Thiết kế dáng ôm, cổ lọ, tay lỡ.<br>Màu sắc mang đến sự trẻ trung, thanh lịch.',
                'price' => 230000,
                'categoryId' => 1
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
