<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
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
                'customer_id' => 1,
                'total_price' => 385000,
                'ship_name' => 'Phạm Quốc Anh',
                'ship_address' => 'Nội Bài',
                'ship_phone' => '01687535626',
                'created_at' => \Carbon\Carbon::create(2018, 7, 20, 6, 20, 20),
                'updated_at' => \Carbon\Carbon::create(2018, 7, 20, 12, 20, 20),
            ],
            [
                'customer_id' => 2,
                'total_price' => 320000,
                'ship_name' => 'Trần Hương Ly',
                'ship_address' => 'Mỹ Đình',
                'ship_phone' => '0123456789',
                'created_at' => \Carbon\Carbon::create(2018, 7, 22, 3, 20, 20),
                'updated_at' => \Carbon\Carbon::create(2018, 7, 22, 12, 20, 20),
            ],
            [
                'customer_id' => 3,
                'total_price' => 340000,
                'ship_name' => 'Lê Thu Hiền',
                'ship_address' => 'Mê Linh',
                'ship_phone' => '0989004203',
                'created_at' => \Carbon\Carbon::create(2018, 7, 24, 3, 20, 20),
                'updated_at' => \Carbon\Carbon::create(2018, 7, 24, 12, 20, 20),
            ],
            [
                'customer_id' => 4,
                'total_price' => 400000,
                'ship_name' => 'Nguyễn Thành Đạt',
                'ship_address' => 'Xã Đàn',
                'ship_phone' => '0113011201',
                'created_at' => \Carbon\Carbon::create(2018, 8, 11, 2, 20, 20),
                'updated_at' => \Carbon\Carbon::create(2018, 8, 11, 12, 20, 20),
            ],
            [
                'customer_id' => 5,
                'total_price' => 360000,
                'ship_name' => 'Nguyễn Văn Nam',
                'ship_address' => 'Quảng Ninh',
                'ship_phone' => '0168763562',
                'created_at' => \Carbon\Carbon::create(2018, 8, 15, 1, 20, 20),
                'updated_at' => \Carbon\Carbon::create(2018, 8, 15, 12, 20, 20),
            ],
            [
                'customer_id' => 6,
                'total_price' => 345000,
                'ship_name' => 'Đỗ Nhật Long',
                'ship_address' => 'Hải Phòng',
                'ship_phone' => '0165363989',
                'created_at' => \Carbon\Carbon::create(2018, 8, 22, 9, 20, 20),
                'updated_at' => \Carbon\Carbon::create(2018, 8, 22, 12, 20, 20),
            ],
            [
                'customer_id' => 7,
                'total_price' => 312500,
                'ship_name' => 'Hoàng Văn Thiền',
                'ship_address' => 'Hạ Long',
                'ship_phone' => '098756245',
                'created_at' => \Carbon\Carbon::create(2018, 8, 25, 10, 20, 20),
                'updated_at' => \Carbon\Carbon::create(2018, 8, 25, 12, 20, 20),
            ],
            [
                'customer_id' => 8,
                'total_price' => 375000,
                'ship_name' => 'Đào Xuân Hùng',
                'ship_address' => 'Mỹ Đình',
                'ship_phone' => '01698546245',
                'created_at' => \Carbon\Carbon::create(2018, 8, 26, 10, 20, 20),
                'updated_at' => \Carbon\Carbon::create(2018, 8, 26, 12, 20, 20),
            ],
            [
                'customer_id' => 9,
                'total_price' => 320000,
                'ship_name' => 'Vũ Triển Triêu',
                'ship_address' => 'Tiền Châu',
                'ship_phone' => '0199999999',
                'created_at' => \Carbon\Carbon::create(2018, 8, 29, 11, 20, 20),
                'updated_at' => \Carbon\Carbon::create(2018, 8, 29, 11, 20, 20),
            ],
            [
                'customer_id' => 10,
                'total_price' => 372000,
                'ship_name' => 'Dương Văn Quá',
                'ship_address' => 'Cổ Mộ',
                'ship_phone' => '01268756982',
                'created_at' => \Carbon\Carbon::create(2018, 9, 01, 12, 20, 20),
                'updated_at' => \Carbon\Carbon::create(2018, 9, 01, 12, 20, 20),
            ],
            ['customer_id' => 11,
                'total_price' => 366000,
                'ship_name' => 'Dương Qúa Cố',
                'ship_address' => 'Cổ Mộ',
                'ship_phone' => '01268354984',
                'created_at' => \Carbon\Carbon::create(2018, 9, 03, 12, 20, 20),
                'updated_at' => \Carbon\Carbon::create(2018, 9, 03, 12, 20, 20),
            ],
            [
                'customer_id' => 12,
                'total_price' => 352000,
                'ship_name' => 'Tiểu Long Nữ',
                'ship_address' => 'Cổ Mộ',
                'ship_phone' => '01268726985',
                'created_at' => \Carbon\Carbon::create(2018, 9, 06, 12, 20, 20),
                'updated_at' => \Carbon\Carbon::create(2018, 9, 06, 12, 20, 20),

            ],

        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
