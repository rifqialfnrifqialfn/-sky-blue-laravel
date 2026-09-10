<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,      // Dijalankan pertama agar data user tersedia (untuk foreign key)
            SchedulesSeeder::class, // Dijalankan untuk mengisi data jadwal pelajaran
            TaskSeeder::class,      // Dijalankan untuk mengisi daftar tugas proyek
        ]);
    }
}