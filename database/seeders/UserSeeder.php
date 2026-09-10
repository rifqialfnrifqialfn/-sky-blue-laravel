<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id_user' => 1,
                'name' => 'Kelompok 2 - XII RPL 2',
                'email' => 'kelompok2@gmail.com',
                'password' => Hash::make('Kelompok2-XIIRPL2'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}