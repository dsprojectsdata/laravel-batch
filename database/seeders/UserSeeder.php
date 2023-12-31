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
     */
    public function run(): void
    {
        $data = DB::table('users')->insert(
           [ 
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'john',
                'email' => 'john@gmail.com',
                'password' => Hash::make('1234567'),
            ],
            [
                'name' => 'jack',
                'email' => 'jack@gmail.com',
                'password' => Hash::make('1234567'),
            ]
        ]
        );
    }
}
