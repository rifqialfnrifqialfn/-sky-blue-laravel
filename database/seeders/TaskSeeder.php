<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tasks')->delete();

        DB::table('tasks')->insert([
            [
                'id_tugas' => 1,
                'id_user' => 1,
                'title' => 'Membuat database sesuai dengan format di pdf',
                'description' => 'KBD - Senin',
                'status' => 'Sudah Selesai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tugas' => 2,
                'id_user' => 1,
                'title' => 'Membuat CV Kreatif',
                'description' => 'Psikotes - Selasa',
                'status' => 'Sudah Selesai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tugas' => 3,
                'id_user' => 1,
                'title' => 'Brand Guidelines',
                'description' => 'KIK - Rabu',
                'status' => 'Belum Selesai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tugas' => 4,
                'id_user' => 1,
                'title' => 'UI/UX Aplikasi PKL',
                'description' => 'KPB - Rabu',
                'status' => 'Belum Selesai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tugas' => 5,
                'id_user' => 1,
                'title' => 'Analisis Sistem aplikasi pkl, flowmap + penjelasan',
                'description' => 'KPM - Kamis',
                'status' => 'Belum Selesai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tugas' => 6,
                'id_user' => 1,
                'title' => 'Project Web Laravel',
                'description' => "PWB - Jum'at",
                'status' => 'Belum Selesai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}