<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('comments')->insert([
                'title' => Str::random(10),
                'description' => Str::random(10),
                'user_id' => rand(1,10),
                'post_id' => rand(1,10)
            ]);
        }
    }
}
