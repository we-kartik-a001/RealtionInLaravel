<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstaPost extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('insta_posts')->count() === 0) {

            $users = collect([
                ['detail' => 'india','Insta_user_id'=>1],
                ['detail' => 'isreal', 'Insta_user_id'=>3],
                ['detail' => 'yamen','Insta_user_id'=>2],
                ['detail' => 'indonesia','Insta_user_id'=>4]
            ]);
            
            $users->each(function ($user) {
                DB::table('insta_posts')->insert($user);
            });
        }
    }
}
