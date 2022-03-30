<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10),
            'password' => "demo123"
        ]);
        

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10),
            'password' => "1234"
        ]);
    }
}