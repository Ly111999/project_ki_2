<?php

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Váy công chúa',
                'image' => 'https://ae01.alicdn.com/kf/HTB1MD65RXXXXXXlaXXXq6xXFXXXe/New-Girl-Dresses-2017-Summer-Kids-Fashion-Dress-Shawls-Lace-Clothes-Floral-Design-Formal-Dress-For.jpg_640x640.jpg',
                'description' => 'Chất liệu: ren.<br> Kiểu dáng: bồng bềnh.<br> Màu sắc: hông nhẹ.<br> Kích thước: size S, M, L, XL, XXL.<br> Thích hợp: dự tiệc, dạo phố,....<br> Dễ dàng kết hợp với nhiều loại phụ kiện.',
                'price' => 230000,
                'discount' => 20,
                'categoryId' => 1
            ],
            [
                'id' => 2,
                'name' => 'Đầm dạ hội',
                'image' => 'https://2.bp.blogspot.com/--3R1mu5HAwk/WIHszgom8eI/AAAAAAAAEJs/QCW53FCl2iEND4tMygjg3Hp6Ug3jz8NUQCLcB/s1600/rainkids-1025aqua_7jpg-8868923.jpg',
                'description' => 'Chất vải: Mềm.<br> Chiều dài váy: Mắt cá chân.<br> Dáng váy: Xòe tròn.<br> Họa tiết: Đính đá.<br> Kiểu cổ áo: Cổ tròn.<br> Phong cách: Lịch sự.',
                'price' => 210000,
                 'discount' => 25,
                'categoryId' => 1
            ],
            [
                'id' => 3,
                'name' => 'Đầm nơ xinh',
                'image' => 'https://4.bp.blogspot.com/-mgpRu_x7gsI/Vz8ZHEpMFOI/AAAAAAAACj4/5vVSlZJQa4gwNJEUI3QQjJ2GLClJa_RLgCLcB/s1600/HOT-Retail-2016-font-b-baby-b-font-girls-summer-font-b-dress-b-font-fashion.jpg',
                'description' => 'Thiết kế dáng xoè đặc biệt phù hợp với mọi vóc dáng.<br> Họa tiết kẻ dọc cổ áo và chân váy.<br> Chất liệu mềm nhẹ.<br> 2 màu:Xanh lục, Trắng.<br> Size: S, M, L, XL, 2XL.',
                'price' => 169000,
                 'discount' => 10,
                'categoryId' => 1
            ],
            [
                'id' => 4,
                'name' => 'Váy yếm DT11',
                'image' => 'https://ae01.alicdn.com/kf/HTB1M8ulMVXXXXXwXpXXq6xXFXXXf/3-4-5-6-7-8-9-10-11-12-13-Years-Girls-Sleeveless-Dress-Autumn.jpg_640x640.jpg',
                'description' => 'Chất liệu: Cotton.<br> Kiểu: Solid.<br> Đủ size: XL, 2XL, 3XL, 4XL.<br>Chất liệu cao cấp vải lớp mềm mại, tạo cảm giác bay bổng.',
                'price' => 199000,
                'discount' => 10,
                'categoryId' => 1
            ],
            [
                'id' => 5,
                'name' => 'Đầm suông',
                'image' => 'http://www.cowgu.com/wp-content/uploads/2016/07/Kids-fashion-trends-2016-girls-sundresses-1.jpg',
                'description' => 'Chất liệu cao cấp vải lớp mềm mại, tạo cảm giác bay bổng.<br>  Không bám bụi, dễ giặt, nhanh khô.<br> Chất vải voan cũng ít bị phai màu, ít bị nhăn nên trông luôn mới và mới rất lâu.<br> Thích hợp đi chơi, dự tiệc.',
                'price' => 190000,
                'discount' => 10,
                'categoryId' => 1
            ],
            [
                'id' => 6,
                'name' => 'Váy hoa J31',
                'image' => 'https://ae01.alicdn.com/kf/HTB1ATdxLVXXXXavXXXXq6xXFXXX5/2016-New-Big-Girls-Children-Dresses-Lovely-Princess-Floral-Dress-Cute-Kids-Beach-Dress-Vintage-Chinese.jpg',
                'description' => 'Thiết kế với ưu điểm tôn dáng, giúp bạn khéo léo khoe đôi chân dài thon gọn.<br> Chất vải: Mỏng nhẹ.<br> Kiểu dáng: Cổ tròn ôm, khoe vai.',
                'price' => 140000,
                'discount' => 15,
                'categoryId' => 1
            ],
            [
                'id' => 7,
                'name' => 'Yếm bò',
                'image' => 'https://dress-trends.com/wp-content/uploads/2016/11/Girls-fashion-girls-clothes-2017-girls-dresses-2017-childrens-clothing-2017-girls-denim-overalls-4.jpg',
                'description' => 'Chất liệu: vải bò cao cấp tạo cảm giác thoải mái khi mặc.<br> Kiểu dáng: Đáng yêu mà vẫn giữ đc vẻ cá tính của trẻ.',
                'price' => 140000,
                'discount' => 10,
                'categoryId' => 1
            ],
            [
                'id' => 8,
                'name' => 'Set bộ đẹp',
                'image' => 'https://www.dhresource.com/0x0s/f2-albu-g4-M01-01-19-rBVaEVc1ehyALVQrAAEHafWVHEg873.jpg/blue-jeans-menina-babados-folha-de-l-tus.jpg',
                'description' => 'Chất vải: Vải bò.<br> Phong cách: Dễ thương.<br> Kiểu cổ áo: Cổ tròn.<br> Họa tiết: Trơn.<br> 2 màu: Xanh đậm và Xanh nhạt',
                'price' => 135000,
                'discount' => 20,
                'categoryId' => 1
            ],
            [
                'id' => 9,
                'name' => 'Váy baby ',
                'image' => 'https://ae01.alicdn.com/kf/HTB1GigjLXXXXXcZXXXXq6xXFXXXP/New-2018-Baby-Girls-Dress-Cotton-Knit-Crochet-Baby-Girl-Romper-Kids-Seven-Sleeve-Jumpsuit-Infant.jpg_640x640.jpg',
                'description' => 'Chất vải: Thun.<br> Phong cách: Dễ thương.<br> Kiểu cổ áo: Cổ tròn.<br> Độ dài tay: Tay dài.',
                'price' => 100000,
                'discount' => 10,
                'categoryId' => 1
            ],
            [
                'id' => 10,
                'name' => 'Quần jean D167',
                'image' => 'https://ae01.alicdn.com/kf/HTB1rf0vHVXXXXcLXVXXq6xXFXXXX/Trend-Europe-style-Special-design-girls-clothing-sets-fashion-letters-white-T-shirt-hole-trousers-2PCS.jpg',
                'description' => 'Chất liệu : jeans có độ co giãn.<br> Phù hợp vs lứa tuổi từ 3 đến 6 tuổi.<br>Phong cách: Dễ thương.',
                'price' => 210000,
                'discount' => 20,
                'categoryId' => 1
            ],
            [
                'id' => 11,
                'name' => 'Váy bò thêu AKN4175',
                'image' => 'https://ae01.alicdn.com/kf/HTB1OJHwRFXXXXalapXXq6xXFXXX0/Fashion-Trends-Girls-Set-Summer-2017-Casual-Stylish-Kids-Girl-Clothing-Suits-Children-s-Roses-Cowboy.jpg_640x640.jpg',
                'description' => 'Kích Thước: S, M.<br> Chất vải: Vải bò.<br> Phong cách: Dễ thương.<br> Kiểu cổ áo: Cổ tròn.<br> Họa tiết: Trơn.<br> 2 màu: Xanh đậm và Xanh nhạt',
                'price' => 199000,
                'discount' => 10,
                'categoryId' => 1
            ],
            [
                'id' => 12,
                'name' => 'Sơ mi ',
                'image' => 'https://www.dhresource.com/0x0s/f2-albu-g3-M00-5C-E1-rBVaHVbtH7CACeblAAHuakRiefY251.jpg/new-fashion-girls-sets-crian-as-lace-oriente.jpg',
                'description' => 'Kích Thước: S, M.<br> Chất vải: mền, mỏng, nhẹ tạo sự thoải mái.',
                'price' => 125000,
                'discount' => 10,
                'categoryId' => 1
            ],
            [
                'id' => 13,
                'name' => 'Summer Short ',
                'image' => 'https://ae01.alicdn.com/kf/HTB1YmweQpXXXXaIapXXq6xXFXXXf/4-15-Years-Girls-Summer-Shorts-Set-Shirt-Pants-Denim-Jeans-Cowboy-Clothes-Girls-Clothing-Sets.jpg',
                'description' => 'Kích Thước: S, M.<br> Chất vải: mền, mỏng, nhẹ tạo sự thoải mái.<br> Kiểu dáng: Dễ thương',
                'price' => 190000,
                'discount' => 15,
                'categoryId' => 1
            ],
            [
                'id' => 14,
                'name' => 'Váy len cao cấp',
                'image' => 'https://ae01.alicdn.com/kf/HTB1e8grHVXXXXaPXFXXq6xXFXXXg/2014-m-i-tr-em-qu-n-o-tr-em-m-a-thu-v-m-a.jpg_640x640.jpg',
                'description' => 'Chất liệu : len cao cấp.<br> Váy: kiểu dáng bồng bềnh, xòe.<br> Tay áo : Dài.<br> Độ dài váy: Ngang gối',
                'price' => 120000,
                'discount' => 10,
                'categoryId' => 1
            ],
            [
                'id' => 15,
                'name' => 'Váy kẻ caro',
                'image' => 'https://s-media-cache-ak0.pinimg.com/736x/56/df/8d/56df8d063226d534286ac4f8fff51d70--girls-party-dresses-baby-girl-dresses.jpg',
                'description' => 'Váy xòe, 2 màu: Đỏ, Trắng.<br> Chất liệu: Vải trơn.<br> Chất vải: nhẹ.<br> Phong cách: Dễ thương.<br> Kiểu cổ áo: Cổ tròn.',
                'price' => 110000,
                'discount' => 15,
                'categoryId' => 1
            ],
            [
                'id' => 16,
                'name' => 'Váy kẻ thêu ngực',
                'image' => 'http://shopmebau.vn/wp-content/uploads/13-14.jpg',
                'description' => 'Chất vải: nhẹ.<br> Phong cách: Dễ thương.<br> Kiểu cổ áo: Cổ tròn.<br> Độ dài váy: ngang đùi.',
                'price' => 156700,
                'discount' => 20,
                'categoryId' => 2
            ],
            [
                'id' => 17,
                'name' => 'Yếm bò trơn YBT01',
                'image' => 'http://www.kenhshare.com/image/cache/catalog/san-pham/dam-thun/yem-bo-tron-400x400.jpg',
                'description' => 'Chất liệu : jeans có độ co giãn.<br> Freesize : <55kg.<br> Thông tin sản phẩm :  eo 80cm, mông 90cm, dài 89cm.',
                'price' => 190000,
                'discount' => 10,
                'categoryId' => 2
            ],
            [
                'id' => 18,
                'name' => 'Áo khoác nữ AKN4175',
                'image' => 'http://www.kenhshare.com/image/cache/catalog/san-pham/ao-khoac-nu/ao-khoac-nu-AKN4175-12-400x400.jpg',
                'description' => 'Kích Thước: S, M.<br> Áo khoác nữ , áo khoác nữ, áo kiểu nữ, áo nữ.<br> Bảo hành sản phẩm.',
                'price' => 199000,
                'discount' => 10,
                'categoryId' => 2
            ],
            [
                'id' => 19,
                'name' => 'Yếm jean váy D751',
                'image' => 'http://aloshoping.com/wp-content/uploads/2017/10/dlh.jpg',
                'description' => 'Chất liệu : jeans có độ co giãn.<br> Freesize : <55kg.<br> Thông tin sản phẩm :  eo 80cm, mông 90cm, dài 89cm.',
                'price' => 210000,
                'discount' => 20,
                'categoryId' => 2
            ],
            [
                'id' => 20,
                'name' => 'Set bộ đẹp',
                'image' => 'https://media3.scdn.vn/img2/2017/11_14/set-bo-thoi-trang-nu-kieu-sa-1m4G3-6SsNdT_simg_d0daf0_800x1200_max.jpg',
                'description' => 'Chất vải: Cát.<br> Phong cách: Dễ thương.<br> Kiểu cổ áo: Cổ tròn.<br> Họa tiết: Trơn.<br> Chiều dài tay áo: Tay ngắn.<br> Chiều dài áo: Qua rốn.',
                'price' => 135000,
                'discount' => 18,
                'categoryId' => 2
            ],
            [
                'id' => 21,
                'name' => 'Váy HAYDEN',
                'image' => 'https://ae01.alicdn.com/kf/HTB1NFCCRVXXXXcKapXXq6xXFXXXr/HAYDEN-G-i-i-M-Tr-m-u-o-V-y-M-u-X-m-H.jpg_640x640.jpg',
                'description' => 'Chất vải: Cát.<br> Phong cách: Dễ thương.<br> Kiểu cổ áo: Cổ tròn.<br> Họa tiết: Thêu tay thủ công.<br> 2 màu: Trắng, đỏ.',
                'price' => 124000,
                'discount' => 20,
                'categoryId' => 2
            ],
            [
                'id' => 22,
                'name' => 'Đầm kẻ caro Hàn Quốc',
                'image' => 'https://media3.scdn.vn/img2/2018/4_24/8SPyOc_simg_ab1f47_350x350_maxb.jpg',
                'description' => 'Chát vải: Cotton.<br> Kiểu dáng: Dây áo nhỏ, cổ tim; Độ dài váy: Ngang gối.<br> Thích hợp khi phối đồ với các phụ kiện.',
                'price' => 110000,
                'discount' => 10,
                'categoryId' => 2
            ],
            [
                'id' => 23,
                'name' => 'Váy suông',
                'image' => 'https://scdn.thitruongsi.com/image/cached/size/w800-h0/img/product/2018/01/10/15761680-f5d1-11e7-940f-bdc8ee3a6981.jpg',
                'description' => 'Chát vải: Cotton.<br> Kiểu dáng: suông, trơn.<br> Độ dài váy: Ngang gối.<br> Thích hợp khi phối đồ với các phụ kiện.',
                'price' => 150000,
                'discount' => 10,
                'categoryId' => 2
            ],
            [
                'id' => 24,
                'name' => 'Váy thể thao',
                'image' => 'https://tea-4.lozi.vn/v1/images/resized/dam-soc-1461079721-276835-1464972590?w=480&type=o',
                'description' => 'Chất liệu: mong nhẹ.<br> Kiểu dáng: Dễ thương, tạo sự khỏe khoắn cho người mặc.<br> Size: S,SL,M,L. ',
                'price' => 156000,
                'discount' => 18,
                'categoryId' => 2
            ],
            [
                'id' => 25,
                'name' => 'Yếm bò',
                'image' => 'http://img1.baza.vn/upload/products-var-p6j1LhjZ/jeNa7VX6.jpg?v=635750783613152730',
                'description' => 'Chất liệu : jeans có độ co giãn.<br> Freesize : <55kg.<br> Thông tin sản phẩm :  eo 80cm, mông 90cm, dài 89cm',
                'price' => 210000,
                'discount' => 15,
                'categoryId' => 2
            ],
            [
                'id' => 26,
                'name' => 'Áo len ',
                'image' => 'https://media3.scdn.vn/img2/2017/10_11/ao-len-nu-tre-trung-1m4G3-WyoW9Y_simg_fd6fef_697-697-0-0_cropf_simg_ab1f47_350x350_maxb.png',
                'description' => 'Chất liệu : Vải len.<br> 2 màu: Nâu, Xám.<br> Kiểu dáng: Trẻ trung phù hợp với nhiều bạn trẻ.',
                'price' => 170000,
                'discount' => 16,
                'categoryId' => 2
            ],
            [
                'id' => 27,
                'name' => 'Yếm quần vải',
                'image' => 'https://sc02.alicdn.com/kf/HTB17_5jQVXXXXXEXFXX760XFXXXZ/Thailand-Clothes-Modern-Fashion-Kids-Wear-Summer.png_350x350.png',
                'description' => 'Nơi xuất xứ: Zhejiang, China (Mainland).<br> Vải Loại: Lanh.<br> kích thước: 100-110-120-130-140.<br> tay áo: không tay.',
                'price' => 199000,
                'discount' => 20,
                'categoryId' => 2
            ],
            [
                'id' => 28,
                'name' => 'Áo tay xòe',
                'image' => 'https://ae01.alicdn.com/kf/HTB10w0TnZnI8KJjSsziq6z8QpXaM/2018-Spring-Summer-Fashion-Child-Clothing-Toddler-Teen-Girl-Blouse-White-Kids-Ruffles-Girls-Blouses-Shirts.jpg_640x640.jpg',
                'description' => 'Kích Thước: S, M.<br> Chất vải: mền, mỏng, nhẹ tạo sự thoải mái.',
                'price' => 123000,
                'discount' => 10,
                'categoryId' => 2
            ],
            [
                'id' => 29,
                'name' => 'Váy suông AHY',
                'image' => 'http://media3.scdn.vn/img2/2017/8_24/hBZzJP_simg_d0daf0_800x1200_max.jpg',
                'description' => 'Chất liệu: vải cái len.<br> Kiểu dáng: đầm suông.<br> Màu sắc: xanh đen.<br> Kích thước: size S, M, L, XL, XXL.<br> Thích hợp: đi làm, dự tiệc, dạo phố,..',
                'price' => 135000,
                'discount' => 10,
                'categoryId' => 2
            ],
            [
                'id' => 30,
                'name' => ' Áo khoác Hoodie ',
                'image' => 'http://www.gaugaushop.com/plugins/responsive_filemanager/source/san%20pham/AoKhoacNu/GAK482/ao-hoodie-taigau-dep.jpg',
                'description' => 'Chất liệu: Thun.<br> Kiểu dáng: Dáng rộng.<br>Thích hợp: đi làm, dự tiệc, dạo phố,....<br> Dễ dàng kết hợp với nhiều loại phụ kiện',
                'price' => 149000,
                'discount' => 15,
                'categoryId' => 2
            ],
            [
                'id' => 31,
                'name' => 'Đầm suông công sở',
                'image' => 'https://vn-test-11.slatic.net/p/7/dam-suong-cong-so-nu-hot-2830-02448693-77de500fde9f95a40519410e512d13e4-product.jpg',
                'description' => 'Chất liệu: vải cái len.<br> Kiểu dáng: đầm suông.<br> Màu sắc: xanh đen.<br> Kích thước: size S, M, L, XL, XXL.<br> Thích hợp: đi làm, dự tiệc, dạo phố,....<br> Dễ dàng kết hợp với nhiều loại phụ kiện.',
                'price' => 230000,
                'discount' => 15,
                'categoryId' => 3
            ],
            [
                'id' => 32,
                'name' => 'Sơ mi nữ',
                'image' => 'http://www.kenhshare.com/image/cache/catalog/san-pham/thoi-trang-nu/8TR4BC890Y-avt-400x400.jpg',
                'description' => 'Kích Thước: S, M.<br> Chất vải: mền, mỏng, nhẹ tạo sự thoải mái.',
                'price' => 125000,
                'discount' => 10,
                'categoryId' => 3
            ],
            [
                'id' => 33,
                'name' => 'Áo nữ thời trang',
                'image' => 'https://shopkhoinghiep.com/wp-content/uploads/2016/06/AO-NU-THOI-TRANG-QUAN-AO-NU-GIA-SI-BO-SI-QUAN-AO-NU-AO-THUN-NU-DEP97-5.jpg',
                'description' => 'Áo voan cổ V tay dài cô gái (hàng cực đẹp).<br> Chất liệu:Voan cao cấp, dày dặn, rất đẹp.<br> Kiểu dáng :giống hình 100%.',
                'price' => 140000,
                'discount' => 10,
                'categoryId' => 3
            ],
            [
                'id' => 34,
                'name' => 'Quần jean nữ',
                'image' => 'http://thoitrangchuyensi.com/uploads/shops/2015_11/quan-jean-nu-gia-si-f784-2.jpg',
                'description' => 'Thiết kế với ưu điểm tôn dáng, giúp bạn gái khéo léo khoe đôi chân dài thon gọn và đường cong hoàn hảo.<br> Quần được may từ chất liệu jean co giãn linh hoạt, tạo cảm giác dễ chịu khi di chuyển, vận động.',
                'price' => 340000,
                'discount' => 20,
                'categoryId' => 3
            ],
            [
                'id' => 35,
                'name' => 'Đầm voan ALISA 14',
                'image' => 'https://media3.scdn.vn/img2/2017/12_16/qUPk9L_simg_b5529c_250x250_maxb.jpg',
                'description' => 'Chất liệu voan cao cấp 2 lớp mềm mại, tạo cảm giác bay bổng cho quý bà.<br>  Không bám bụi, dễ giặt, nhanh khô. Chất vải voan cũng ít bị phai màu, ít bị nhăn nên trông luôn mới và mới rất lâu.)',
                'price' => 690000,
                'discount' => 20,
                'categoryId' => 3
            ],
            [
                'id' => 36,
                'name' => 'Đầm suông công sở',
                'image' => 'https://vn-test-11.slatic.net/p/7/dam-suong-cong-so-nu-hot-2830-02448693-77de500fde9f95a40519410e512d13e4-product.jpg',
                'description' => 'Chất liệu: vải cái len.<br> Kiểu dáng: đầm suông.<br> Màu sắc: xanh đen.<br> Kích thước: size S, M, L, XL, XXL.<br> Thích hợp: đi làm, dự tiệc, dạo phố,....<br> Dễ dàng kết hợp với nhiều loại phụ kiện',
                'price' => 230000,
                'discount' => 10,
                'categoryId' => 3
            ],
            [
                'id' => 37,
                'name' => 'Đầm xòa gấm thêu hoa',
                'image' => 'https://media3.scdn.vn/img2/2017/12_16/qUPk9L_simg_b5529c_250x250_maxb.jpg',
                'description' => 'Chất vải: Gấm.<br> Chiều dài tay áo: Không tay.<br> Chiều dài váy: Ngang gối.<br> Dáng váy: Xòe tròn.<br> Họa tiết: Hoa lá.<br> Kiểu cổ áo: Cổ tròn.<br> Phong cách: Lịch sự.',
                'price' => 210000,
                'discount' => 10,
                'categoryId' => 3
            ],
            [
                'id' => 38,
                'name' => 'Váy tay dài',
                'image' => 'http://damvaydep.net/image/dam-xoe-co-so-mi-tay-dai-cuc-cute-29024j.jpg',
                'description' => 'Điều kiện: 100% thương hiệu mới, chưa sử dụng, chưa dùng, hạng mục chất lượng cao.<br> Mô hình: Plain.<br> Hoàn hảo cho tất cả các dịp.<br> Loại cổ áo: Cao cổ tròn phong cách.<br> Tay áo: Dài tay áo.<br> Trang trí: Studs / tương phản dòng trên áo và tay áo.<br> Nút đóng lại;].<br> Vải voan dày.<br> Màu: Đỏ / Trắng / Hải Quân / hồng nude',
                'price' => 120000,
                'discount' => 10,
                'categoryId' => 3
            ],
            [
                'id' => 39,
                'name' => ' Office Uniform',
                'image' => 'https://www.dhresource.com/600x600/f2/albu/g5/M00/AA/09/rBVaI1iscH6AfDd1AAHNNcA4QcQ096.jpg',
                'description' => 'Phụ nữ xinh đẹp thời trang kinh doanh blazer pant thiết kế<br> thiết lập, một nút, dài tay áo, túi, thiết kế lớp eo, kích thước từ <br>S đến 3XL để lựa chọn, thời trang thanh lịch cho phụ nữ mặc văn phòng.',
                'price' => 160000,
                'discount' => 10,
                'categoryId' => 3
            ],
            [
                'id' => 40,
                'name' => 'Hem Dress',
                'image' => 'https://www.dhresource.com/0x0s/f2-albu-g5-M00-C2-60-rBVaI1j0lcqAMTkBAAGELzqmXF8896.jpg/sexy-charming-red-bateau-neck-vestidos-de.jpg',
                'description' => 'Tạo một bước ngoặt hiện đại với chiếc váy lilac bước hem không đối xứng này.<br> Sản xuất tại Anh, bởi Boutique. 100% Viscose. Máy giặt.',
                'price' => 350000,
                'discount' => 10,
                'categoryId' => 3
            ],
            [
                'id' => 41,
                'name' => 'Spot Plisse Slip Dress',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJHozwtHPNcC6d8WjASVX5EoHdVayJHfJ9rvGlEANxam9JSHN8',
                'description' => 'Đi cho một cái nhìn cực kỳ nữ tính,<br> slinky với váy ren chèn phong cách của chúng tôi. <br>Thiết kế plisse của chúng tôi với tất cả các điểm in hoạt động tốt <br>theo kiểu với dép cho một cái nhìn hiện đại. 100% Polyester. Máy giặt.',
                'price' => 320000,
                'discount' => 10,
                'categoryId' => 3
            ],
            [
                'id' => 42,
                'name' => 'Đầm suông kẻ',
                'image' => 'http://resources2.nhommua.com/Product/98000/cm_b98269.jpg',
                'description' => 'Với một cảm giác thoải mái thư giãn, chiếc áo sơ mi mini in hình chiếc áo pyjama này có một cái nhìn cực kỳ sang trọng. 100% Viscose.',
                'price' => 134000,
                'discount' => 10,
                'categoryId' => 3
            ],
            [
                'id' => 43,
                'name' => 'Sơ mi trắng Cloak dài tay',
                'image' => 'https://ae01.alicdn.com/kf/HTB1aYZicvjM8KJjSZFsq6xdZpXaF/New-2018-Women-Blouse-Elegant-Fashion-White-Cloak-Long-Sleeve-Turn-Down-Collar-Female-Office-Work.jpg',
                'description' => 'New 2018 Phụ Nữ Áo Thời Trang Thanh Lịch Trắng Cloak Dài Tay Áo Rẽ Xuống Cổ Áo Nữ Văn Phòng Làm Việc.',
                'price' => 220000,
                'discount' => 10,
                'categoryId' => 3
            ],
            [
                'id' => 44,
                'name' => 'Áo Sơ Mi Văn Phòng Femme',
                'image' => 'https://i1.wp.com/www.shopperbeam.com/wp-content/uploads/2018/01/2018-New-Arrival-Women-Blouse-Autumn-Work-Wear-Office-Shirts-Femme-V-neck-Long-Sleeve-Ladies-2.jpg?fit=800%2C800&ssl=1',
                'description' => 'Chiều dài tay áo (cm): Đầy đủ.<br> Phong cách: Casual.<br> Loại mô hình: Sọc.<br> Cổ áo: V-Neck; Nhãn hiệu; Tên: INWPLLR.<br> Loại vải: Broadcloth.<br> Chất liệu: Cotton, Polyester.<br> Trang trí: Không.<br> Chiều dài quần áo: Regular',
                'price' => 210000,
                'discount' => 10,
                'categoryId' => 3
            ],
            [
                'id' => 45,
                'name' => 'Đồng Phục Phong Cách CV',
                'image' => 'https://ae01.alicdn.com/kf/HTB1M0TYp3MPMeJjy1Xcq6xpppXaM/Formal-Ladies-Dark-Blue-Blazers-Women-Outerwear-Jackets-Coat-Elegant-Female-Office-Uniform-Style-OL.jpg_640x640.jpg',
                'description' => 'Phụ nữ xinh đẹp thời trang kinh doanh blazer pant thiết kế thiết lập, một nút, dài tay áo, túi, thiết kế lớp eo.',
                'price' => 345000,
                'discount' => 15,
                'categoryId' => 3
            ],
            [
                'id' => 46,
                'name' => 'Túi Embroidered Beach',
                'price' => 1798000,
                'discount' => 10,
                'image' => 'https://global.accessorize.com/medias/sys_master/9344747962398.jpg?buildNumber=9458',
                'description' => 'Dress up trang phục kỳ nghỉ của bạn với túi tote bãi biển Milos thêu của chúng tôi. Được trang trí bằng gương, hạt và thêu hoa mỹ thuật, chiếc carryall cỡ lớn này là sự lựa chọn tối thượng cho một ngày bên bờ biển. Nó có tính năng một từ buộc và bên trong túi zip',
                'categoryId' => 4
            ],
            [
                'id' => 47,
                'name' => 'Túi Bobbie Leather',
                'price' => 2750000,
                'discount' => 10,
                'image' => 'https://global.accessorize.com/medias/sys_master/9338840907806.jpg?buildNumber=9458',
                'description' => 'Tấm tương phản của da và da lộn cho một cái nhìn kết cấu, túi làm việc Bobbie của chúng tôi là sự lựa chọn cuối cùng cho sự sang trọng hàng ngày. Nó có hai dây đeo vai và một phần cứng kim loại màu vàng, và mở ra với một zip hàng đầu.',
                'categoryId' => 4
            ],
            [
                'id' => 48,
                'name' => 'Cặp Harvard Buckle',
                'price' => 1450000,
                 'discount' => 10,
                'image' => 'https://global.accessorize.com/medias/sys_master/9339932475422.jpg?buildNumber=9458',
                'description' => 'Cung cấp cho phong cách của bạn một số trường đại học mát mẻ với ba lô Harvard của chúng tôi. Bảng màu khối và túi trước khóa mang lại cảm giác mềm mại cho thiết kế rộng rãi này, có tay cầm trên cùng, dây đeo vai có thể điều chỉnh và túi zip.',
                'categoryId' => 4
            ],
            [
                'id' => 49,
                'name' => 'Cặp Lindsey Embroidered',
                'price' => 1275000,
                 'discount' => 10,
                'image' => 'https://global.accessorize.com/medias/sys_master/9359775203358.jpg?buildNumber=9458',
                'description' => 'Giới thiệu những bông hoa kỳ lạ vào bản chỉnh sửa hàng ngày của bạn với ba lô Lindsey của chúng tôi, được thiết kế với thêu sáng. Với nhiều túi bên ngoài và tay cầm trên cùng, chiếc túi vòm này sẽ hoạt động liên tục theo phong cách du lịch hoặc đi lại của bạn.',
                'categoryId' => 4
            ],
            [
                'id' => 50,
                'name' => 'Túi Satchel Cross',
                'price' => 119200,
                 'discount' => 20,
                'image' => 'https://global.accessorize.com/medias/sys_master/9359786344478.jpg?buildNumber=9458',
                'description' => 'Túi chéo cơ thể satchel của chúng tôi là sự hoàn hảo preppy-chic. Với tay cầm trên cùng, chi tiết dây buộc và khóa bằng dây kéo, thiết kế nhỏ gọn này là một anh hùng hàng ngày từ buổi sáng bình thường đến kế hoạch buổi tối của bạn. Nó có hai ngăn, một túi zip bên trong và dây đeo vai có thể tháo rời. Chiều cao mẫu là 175 cm / 5\'9',
                'categoryId' => 4
            ],
            [
                'id' => 51,
                'name' => 'Túi Blair Shoulder',
                'price' => 155500,
                 'discount' => 10,
                'image' => 'https://global.accessorize.com/medias/sys_master/9348334813214.jpg?buildNumber=9458',
                'description' => 'Phong cách làm việc đến cuối tuần là trong túi nhờ vào túi vai Blair của chúng tôi. Hai túi zip và khoang từ trung tâm làm cho phong cách sang trọng này trở nên thực tế hơn và được mang theo hai cán cán.',
                'categoryId' => 4
            ],
            [
                'id' => 52,
                'name' => 'Túi Lucca Flower',
                'price' => 148000,
                 'discount' => 10,
                'image' => 'https://global.accessorize.com/medias/sys_master/9350739558430.jpg?buildNumber=9458',
                'description' => 'Chất đống với hoa sequin tuyệt vời, túi ly hợp Lucca của chúng tôi sẽ nở vào cảnh bên trong mùa giải này. Hoàn thành với trang trí đá quý và dây đeo bằng dây chuyền, thiết kế này có mặt sau bằng vải kim loại và giải nén để lộ lớp lót satin và túi trượt',
                'categoryId' => 4
            ],
            [
                'id' => 53,
                'name' => 'Túi Dream Weaver',
                'price' => 1256000,
                 'discount' => 20,
                'image' => 'https://global.accessorize.com/medias/sys_master/9344749273118.jpg?buildNumber=9458',
                'description' => 'Được may trên một bản in hoa nhiệt đới vùng Amazon, túi được thiết kế để phù hợp cho du lịch bãi biển hoặc diện phố.',
                'categoryId' => 4
            ],
            [
                'id' => 54,
                'name' => 'Túi Kelly Double',
                'price' => 2596000,
                'discount' => 15,
                'image' => 'https://global.accessorize.com/medias/sys_master/9339945058334.jpg?buildNumber=9458',
                'description' => ' Thiết kế túi đôi này kết hợp da trơn và các tấm da lộn xa hoa, và có dây rút với khóa buộc bằng kim loại có khóa kiểu dáng đẹp, bắt mắt.',
                'categoryId' => 4
            ],
            [
                'id' => 55,
                'name' => 'Túi London Weekender',
                'price' => 1500000,
                 'discount' => 10,
                'image' => 'https://i.ebayimg.com/images/g/8qYAAOSwZQRYZrve/s-l300.jpg',
                'description' => 'Chiếc túi này được in bằng các chấm bi kim loại lá, hoa và trái tim, và có cảnh London tuyệt đẹp với các chi tiết thêu và hạt. Mang theo hai tay cầm của nó, hoặc đeo nó trên vai của bạn với dây đeo dài có thể điều chỉnh',
                'categoryId' => 4
            ],
            [
                'id' => 56,
                'name' => 'Túi Harrier Cross',
                'price' => 1700000,
                 'discount' => 20,
                'image' => 'https://global.accessorize.com/medias/sys_master/9356291375134.jpg?buildNumber=9458',
                'description' => 'Được thiết kế từ da giả sang trọng, chiếc túi này có kích thước hoàn hảo cho các vật dụng cần thiết hàng ngày, và đi kèm với một khoang nén bên trong cộng với một túi phía trước bổ sung. Hoàn thành với một dây đeo vai mạnh mẽ, có thể điều chỉnh.',
                'categoryId' => 4
            ],
            [
                'id' => 57,
                'name' => 'Túi Knot Detail',
                'price' => 1900000,
                'discount' => 20,
                'image' => 'https://global.accessorize.com/medias/sys_master/9344730267678.jpg?buildNumber=9458',
                'description' => 'Sang trọng, sang trọng và sang trọng chính xác là những gì mà chiếc túi ly hợp chi tiết của chúng tôi sẽ mang đến cho bạn những bộ trang phục đặc biệt. Tráng satin, bộ ly hợp cứng này được trang trí bằng một nút bấm kim loại được đánh bóng và được mang theo một dây đeo chuỗi quyến rũ',
                'categoryId' => 4
            ],
            [
                'id' => 58,
                'name' => 'Túi Vittoria Bridal',
                'price' => 1950000,
                 'discount' => 20,
                'image' => 'https://global.accessorize.com/medias/sys_master/9344737476638.jpg?buildNumber=9458',
                'description' => 'Bạn sẽ không muốn rời khỏi cửa hàng mà không có túi chéo của Houston trong mùa này. Kích thước nhỏ gọn của nó, và nó có một zip xung quanh ví ngăn với sáu khe cắm thẻ cũng như một túi zip trong phần chính của nó',
                'categoryId' => 4
            ],
            [
                'id' => 59,
                'name' => 'Túi Bird Printed',
                'price' => 200000,
                 'discount' => 20,
                'image' => 'https://global.accessorize.com/medias/sys_master/9354377592862.jpg?buildNumber=9458',
                'description' => 'Được chế tác từ vải, thiết kế này giới thiệu một bản in siêu đẹp của chim và hoa. Sản phẩm được lấy ý tưởng từ một tiệm ăn nổi tiếng của Ý.',
                'categoryId' => 4
            ],
            [
                'id' => 60,
                'name' => 'Túi Floral Packable',
                'price' => 365000,
                 'discount' => 30,
                'image' => 'https://global.accessorize.com/medias/sys_master/9315066839070.jpg?buildNumber=9458',
                'description' => 'Chiếc túi được thiết kế đơn giản, lấy ý tưởng từ vùng đất Hà Lan mộng mơ, túi được thiết kế tinh tế. Kích thước túi vô cùng tiện nghi với 3 khoang đẻ đồ rộng',
                'categoryId' => 4
            ],
        ]);
       DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
