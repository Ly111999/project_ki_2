<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \Illuminate\Support\Facades\DB::table('users')->truncate();
        \Illuminate\Support\Facades\DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Quốc Anh',
                'email' => 'quocanh@gmail.com',
                'password' => '1234554321',
                'adminLevel' => 1
            ],
            [
                'id' => 2,
                'name' => 'Hương Ly',
                'email' => 'huongly@gmail.com',
                'password' => '456789123',
                'adminLevel' => 1
            ],
            [
                'id' => 3,
                'name' => 'Nam Ngọc',
                'email' => 'namngoc@gmail.com',
                'password' => '987654321',
                'adminLevel' => 0
            ],
            [
                'id' => 4,
                'name' => 'Ngọc Nam',
                'email' => 'ngocnam@gmail.com',
                'password' => '12345678',
                'adminLevel' => 0
            ],
            ['id' => 5,
                'name' => 'Tư Nam',
                'email' => 'tunam@gmail.com',
                'password' => '87654321',
                'adminLevel' => 0
            ],
            ['id' => 6,
                'name' => 'Thành Đạt',
                'email' => 'thanhdat@gmail.com',
                'password' => '43215678',
                'adminLevel' => 0
            ],
            [
                'id' => 7,
                'name' => 'Hải Long',
                'email' => 'Hải Long@gmail.com',
                'password' => '654321987',
                'adminLevel' => 0
            ],
            ['id' => 8,
                'name' => 'Long Hải',
                'email' => 'longhai@gmail.com',
                'password' => '456789123',
                'adminLevel' => 0
            ],
            [
                'id' => 9,
                'name' => 'Thiên Bình',
                'email' => 'thienbinh@gmail.com',
                'password' => '55555555',
                'adminLevel' => 0
            ],
            ['id' => 10,
                'name' => 'Lê Thu Hiền',
                'email' => 'hienthule@gmail.com',
                'password' => '5252525252',
                'adminLevel' => 0
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
