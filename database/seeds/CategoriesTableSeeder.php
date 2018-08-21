<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Kids Fashion',
                'image' => 'http://www.hlskc.com/img1/mstrtntllryzojbbklsg.jpg',
                'description' => 'Trang phục đa dạng về mẫu mã, chủng loại theo xu hướng thời trang mới nhất',
            ],
            [
                'id' => 2,
                'name' => 'Teen Fashion',
                'image' => 'http://2.bp.blogspot.com/-mvkmeqz6e6Q/U-QX1cNQ37I/AAAAAAAACmM/9F3aqglB0zg/s1600/Teen+Girl+Style+and+Trendy+Clothing+Dress+Women+2014-2015+Photos.jpg',
                'description' => 'Trang phục đa dạng về mẫu mã, chủng loại theo xu hướng thời trang mới nhất',
            ],
            [
                'id' => 3,
                'name' => 'Office Fashion',
                'image' => 'https://gd.image-gmkt.com/2018-KOREA-STYLE-SERIES-FASHION-DRESS-BANQUET-COCKTAIL-DRESS/li/682/263/1113263682.g_400-w_g.jpg',
                'description' => 'Trang phục đa dạng về mẫu mã, chủng loại theo xu hướng thời trang mới nhất',
            ],
            [
                'id' => 4,
                'name' => 'Accessories',
                'image' => 'http://www.cbc.ca/stevenandchris/content/images/awesome_accessories_necklaces.jpg',
                'description' => 'Trang phục đa dạng về mẫu mã, chủng loại theo xu hướng thời trang mới nhất',
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
