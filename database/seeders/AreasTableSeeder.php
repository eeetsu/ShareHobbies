<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            [
                'area' => '北海道',
            ],
            [
                'area' => '青森',
            ],
            [
                'area' => '岩手',
            ],
            [
                'area' => '宮城',
            ],
            [
                'area' => '秋田',
            ],
            [
                'area' => '山形',
            ],
            [
                'area' => '福島',
            ],
            [
                'area' => '茨城',
            ],
            [
                'area' => '栃木',
            ],
            [
                'area' => '群馬',
            ],
            [
                'area' => '埼玉',
            ],
            [
                'area' => '千葉',
            ],
            [
                'area' => '東京',
            ],
            [
                'area' => '神奈川',
            ],
            [
                'area' => '山梨',
            ],
            [
                'area' => '長野',
            ],
            [
                'area' => '新潟'
            ],
            [
                'area' => '富山',
            ],
            [
                'area' => '石川',
            ],
            [
                'area' => '福井',
            ],
            [
                'area' => '岐阜',
            ],
            [
                'area' => '静岡',
            ],
            [
                'area' => '愛知',
            ],
            [
                'area' => '三重',
            ],
            [
                'area' => '滋賀',
            ],
            [
                'area' => '京都',
            ],
            [
                'area' => '大阪',
            ],
            [
                'area' => '兵庫',
            ],
            [
                'area' => '奈良',
            ],
            [
                'area' => '和歌山',
            ],
            [
                'area' => '鳥取',
            ],
            [
                'area' => '島根',
            ],
            [
                'area' => '岡山',
            ],
            [
                'area' => '広島',
            ],
            [
                'area' => '山口',
            ],
            [
                'area' => '徳島',
            ],
            [
                'area' => '香川',
            ],
            [
                'area' => '愛媛',
            ],
            [
                'area' => '高知',
            ],
            [
                'area' => '福岡',
            ],
            [
                'area' => '佐賀',
            ],
            [
                'area' => '長崎',
            ],
            [
                'area' => '熊本',
            ],
            [
                'area' => '大分',
            ],
            [
                'area' => '宮崎',
            ],
            [
                'area' => '鹿児島',
            ],
            [
                'area' => '沖縄',
            ],
        ]);
    }
}
