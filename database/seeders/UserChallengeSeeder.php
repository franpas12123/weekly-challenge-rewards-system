<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_challenges')->insert([
            'user_id' => 'Franz',
            'challenge_id' => 'franz@mail.com',
            'status' => 'Ran 5 miles',
            'completed' => 1
        ]);
    }
}
