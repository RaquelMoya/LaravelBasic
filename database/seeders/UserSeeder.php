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
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10),
                'password' => Str::random(10)
            ]);
        }
    }
}
