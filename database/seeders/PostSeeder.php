<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title'=>'サンプル投稿',
            'body'=>'これはテスト用の投稿です。',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
