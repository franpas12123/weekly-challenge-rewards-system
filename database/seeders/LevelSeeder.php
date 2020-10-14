<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            'name' => 'Kindness Hero in Training',
            'points' => 5,
        ]);
        
        DB::table('levels')->insert([
            'name' => 'Certified Kindess Hero',
            'points' => 12,
        ]);
        
        DB::table('levels')->insert([
            'name' => 'Tubman Clone',
            'points' => 19,
        ]);
        
        DB::table('levels')->insert([
            'name' => 'Kindness Community Leader',
            'points' => 40,
        ]);
        
        DB::table('levels')->insert([
            'name' => 'Distant Cousin of Moses',
            'points' => 52,
        ]);
    }
}
