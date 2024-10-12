<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Root',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin2024'),
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ]);
    }
}
