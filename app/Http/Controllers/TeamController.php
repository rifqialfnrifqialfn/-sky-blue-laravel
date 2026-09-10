<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function index()
    {
        $teams = DB::table('team')->get();
        return view('ourteam', compact('teams'));
    }
}