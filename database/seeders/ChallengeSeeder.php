<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('challenges')->insert([
            'name ' => 'Week 1 Challenge',
            'points' => 5,
        ]);
        DB::table('challenges')->insert([
            'name ' => 'Week 2 Challenge',
            'points' => 6,
        ]);
        DB::table('challenges')->insert([
            'name ' => 'Week 3 Challenge',
            'points' => 8,
        ]);
        DB::table('challenges')->insert([
            'name ' => 'Week 4 Challenge',
            'points' => 10,
        ]);
    }
}
