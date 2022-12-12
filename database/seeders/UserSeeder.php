<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            [
                'name' => 'user',
                'email' => 'user@uiuh.com',
                'password' => Hash::make('user'),
                'role_id' => 1,
            ],
            [
                'name' => 'editor',
                'email' => 'editor@uiuh.com',
                'password' => Hash::make('editor'),
                'role_id' => 2,
            ],
            [
                'name' => 'admin',
                'email' => 'admin@uiuh.com',
                'password' => Hash::make('admin'),
                'role_id' => 3,
            ],
        ]);
    }
}
