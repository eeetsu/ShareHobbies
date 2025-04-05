<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
        ]);
        $this->call([
            PostsTableSeeder::class,
        ]);
        $this->call([
            FollowsTableSeeder::class,
        ]);
        $this->call([
            LikesTableSeeder::class,
        ]);
        $this->call([
            Reserve_settingsTableSeeder::class,
        ]);
        $this->call([
            Reserve_setting_usersTableSeeder::class,
        ]);
        $this->call([
            SubjectsTableSeeder::class,
        ]);
        $this->call([
            Subject_usersTableSeeder::class,
        ]);
        $this->call([
            AreasTableSeeder::class,
        ]);
        $this->call([
            Area_usersTableSeeder::class,
        ]);
        $this->call([
            Post_commentsTableSeeder::class,
        ]);
    }
}
