<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('team')->insert([
            [
                'id_team' => 1,
                'name' => '☆. Rifqi Alfian Maulana',
                'role' => '⭐ Fullstack Developer',
                'photo' => 'rifqi.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_team' => 2,
                'name' => '𐙚. Gavrila Putri Polean',
                'role' => '☁️ UI/UX Designer',
                'photo' => 'gavrila.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_team' => 3,
                'name' => '☆. Muhammad Dafa Gilang Ramadhan',
                'role' => '☁️ Database Admin',
                'photo' => 'dafa.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'id_team' => 4,
                'name' => '𐙚. Siti Nur Aulia',
                'role' => '☁️ Controller & Routing',
                'photo' => 'aulia.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'id_team' => 5,
                'name' => '☆. Dimas Abdul Rohman',
                'role' => '☁️ QA, Documentation, and Testing Area',
                'photo' => 'dimas.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}