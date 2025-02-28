<?php

// namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
      [
          'username' => 'Atlas一郎',
          'name_kana' => 'アトラスイチロウ',
          'mail' => 'atlas_ichi@com',
          'sex' => 2,
          'birth_day' => '1980-12-12',
          'role' => 1,
          'password' => bcrypt('12345678'),
          'bio' => 'クリエイターです！よろしく！',
          'images' => 'icon1.png'
      ],
      [
          'username' => 'Atlas二郎',
          'name_kana' => 'アトラスジロウ',
          'mail' => 'atlas_ni@com',
          'sex' => 2,
          'birth_day' => '1980-02-02',
          'role' => 1,
          'password' => bcrypt('12121212'),
          'bio' => '会社員です！よろしく！',
          'images' => 'icon2.png'
      ],
      [
          'username' => 'Atlas三子',
          'name_kana' => 'アトラスサブコ',
          'mail' => 'atlas_san@com',
          'sex' => 2,
          'birth_day' => '1980-03-03',
          'role' => 2,
          'password' => bcrypt('13131313'),
          'bio' => '主婦です！よろしく！',
          'images' => 'icon3.png'
      ],
      ]);
    }
}
