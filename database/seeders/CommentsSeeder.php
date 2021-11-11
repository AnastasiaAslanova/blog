<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            ['post_id' => 1,'user_id' => null, 'content' => 'I totally agree with you', 'created_at' => date('Y-m-d H:i:s')],
            ['post_id' => 1,'user_id' => null, 'content' => 'You\'re wrong', 'created_at' => date('Y-m-d H:i:s')],
            ['post_id' => 1,'user_id' => null, 'content' => 'Excellent post', 'created_at' => date('Y-m-d H:i:s')],

        ]);
    }
}

