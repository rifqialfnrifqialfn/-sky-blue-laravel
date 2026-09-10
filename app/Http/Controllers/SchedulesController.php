<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SchedulesController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel 'jadwal' dan dikelompokkan berdasarkan kolom 'day' (hari)
        $jadwals = DB::table('jadwal')->get()->groupBy('day');
        
        // Mengirim data ke file view 'jadwal.blade.php'
        return view('jadwal', compact('jadwals'));
    }
}