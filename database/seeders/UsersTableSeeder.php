<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Atlas一郎',
            'name_kana' => 'アトラスイチロウ',
            'mail_address' => 'kin12345@gmail.com',
            'sex' => 2,
            'birth_day' => '1980-12-12',
            'role' => 1,
            'password' => bcrypt('kin12345'),
            'bio' => 'クリエイターです！よろしく！',
            'images' => 'icon1.png'
        ]);
        }
}
