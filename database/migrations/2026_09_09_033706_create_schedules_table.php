<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id('id_jadwal'); // Primary Key spesifik
            $table->string('day');
            $table->string('subject');
            $table->string('jp');
            $table->string('teacher');
            $table->timestamps();
            
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};