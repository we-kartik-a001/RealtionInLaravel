<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstaUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         if (DB::table('insta_users')->count() === 0) {

            $users = collect([
                ['name' => 'rohan'],
                ['name' => 'mohit'],
                ['name' => 'aman'],
                ['name' => 'king']
            ]);

         
            $users->each(function ($user) {
                DB::table('insta_users')->insert($user);
            });
        }
       
    }
}
