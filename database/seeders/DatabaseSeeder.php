<?php

namespace Database\Seeders;

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
            LevelSeeder::class,
            AdminSeeder::class,
            UserSeeder::class,
            ChallengeSeeder::class,
            UserChallengeSeeder::class,
        ]);
    }
}
