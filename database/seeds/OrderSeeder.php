<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \Illuminate\Support\Facades\DB::table('orders')->truncate();
        \Illuminate\Support\Facades\DB::table('orders')->insert([
            [
                'customer_id'=>1,
                'total_price'=>385000,
                'ship_name'=>'Phạm Quốc Anh',
                'ship_address'=>'Nội Bài',
                'ship_phone'=>'01687535626',
                'created_at'=>\Carbon\Carbon::create(2018, 5, 20, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 5, 20, 12, 20, 20),
            ],
            [
                'customer_id'=>2,
                'total_price'=>320000,
                'ship_name'=>'Trần Hương Ly',
                'ship_address'=>'Mỹ Đình',
                'ship_phone'=>'0123456789',
                'created_at'=>\Carbon\Carbon::create(2018, 5, 22, 3, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 5, 22, 12, 20, 20),
            ],
            [
                'customer_id'=>3,
                'total_price'=>340000,
                'ship_name'=>'Lê Thu Hiền',
                'ship_address'=>'Mê Linh',
                'ship_phone'=>'0989004203',
                'created_at'=>\Carbon\Carbon::create(2018, 5, 24, 3, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 5, 24, 12, 20, 20),
            ],
            [
                'customer_id'=>4,
                'total_price'=>400000,
                'ship_name'=>'Nguyễn Thành Đạt',
                'ship_address'=>'Xã Đàn',
                'ship_phone'=>'0113011201',
                'created_at'=>\Carbon\Carbon::create(2018, 6, 21, 2, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 6, 21, 12, 20, 20),
            ],
            [
                'customer_id'=>5,
                'total_price'=>360000,
                'ship_name'=>'Nguyễn Văn Nam',
                'ship_address'=>'Thanh Hóa',
                'ship_phone'=>'0168763562',
                'created_at'=>\Carbon\Carbon::create(2018, 6, 22, 1, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 6, 22, 12, 20, 20),
            ],
            [
                'customer_id'=>6,
                'total_price'=>345000,
                'ship_name'=>'Đỗ Nhật Long',
                'ship_address'=>'Hải Phòng',
                'ship_phone'=>'0165363989',
                'created_at'=>\Carbon\Carbon::create(2018, 6, 23, 9, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 6, 23, 12, 20, 20),
            ],
            [
                'customer_id'=>7,
                'total_price'=>312500,
                'ship_name'=>'Hoàng Văn Thiền',
                'ship_address'=>'Hạ Long',
                'ship_phone'=>'098756245',
                'created_at'=>\Carbon\Carbon::create(2018, 7, 10, 10, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 7, 10, 12, 20, 20),
            ],
            [
                'customer_id'=>8,
                'total_price'=>375000,
                'ship_name'=>'Đào Xuân Hùng',
                'ship_address'=>'Mỹ Đình',
                'ship_phone'=>'01698546245',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 20, 10, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 20, 12, 20, 20),
            ],
            [
                'customer_id'=>9,
                'total_price'=>320000,
                'ship_name'=>'Vũ Triển Triêu',
                'ship_address'=>'Tiền Châu',
                'ship_phone'=>'0199999999',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 21, 11, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 21, 11, 20, 20),
            ],
            [
                'customer_id'=>10,
                'total_price'=>312000,
                'ship_name'=>'Dương Văn Quá',
                'ship_address'=>'Cổ Mộ',
                'ship_phone'=>'01268756982',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 22, 12, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 22, 12, 20, 20),
            ]
        ]);
    }
}
