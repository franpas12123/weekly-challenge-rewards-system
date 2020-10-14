<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'I Am Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('123'),
            'level' => 'Kindness Hero Training'
        ]);
    }
}
