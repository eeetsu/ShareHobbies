<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Reserve_settingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reserve_settings')->insert([
            'setting_reserve' => '2025-03-20',
            'setting_part' => '1',
            'limit_users' => '20',
        ]);
    }
}
