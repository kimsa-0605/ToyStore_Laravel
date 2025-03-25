<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users') ->insert([
            [
                'email' => 'kimsa@gmail.com',
                'password' => '1234',
                'fullname' => 'Ho Ly Kim Sa',
                'phone' => '0987654321',
                'avatar_link' => 'avatar1.jpg',
                'province' => 'Đà Nẵng',
                'district' => 'Sơn Trà',
                'detailed_address' => 'Mỹ Khê 3',
            ],
            [
                'email' => 'chang@gmail.com',
                'password' => '5678',
                'fullname' => 'Coor Chang',
                'phone' => '0912345678',
                'avatar_link' => 'avatar2.jpg',
                'province' => 'Đà Nẵng',
                'district' => 'Sơn Trà',
                'detailed_address' => 'Mỹ Khê 3',
            ],
        ]);
    }
}
