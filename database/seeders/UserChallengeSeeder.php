<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'user_id' => 2,
            'challenge_id' => 1,
            'status' => 'Ran 5 miles',
            'completed' => 1
        ]);
    }
}
