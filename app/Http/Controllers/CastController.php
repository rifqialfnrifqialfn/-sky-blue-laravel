<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request; // Menggunakan Request standar biar aman

class CastController extends Controller
{
    public function index()
    {
        $casts = Cast::all();
        return view('cast_index', compact('casts')); // Nanti kita buat file ini
    }

    public function create()
    {
        return view('create'); // Membaca file create.blade.php yang sudah ada di views/
    }

    public function store(Request $request)
    {
        // Validasi sederhana data yang dikirim dari form
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'bio' => 'required',
        ]);

        // Simpan ke database
        Cast::create($request->all());

        return redirect('/cast')->with('success', 'Data berhasil disimpan!');
    }

    public function show(Cast $cast)
    {
        //
    }

    public function edit(Cast $cast)
    {
        return view('edit', compact('cast')); // Membaca file edit.blade.php yang sudah ada di views/
    }

    public function update(Request $request, Cast $cast)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'bio' => 'required',
        ]);

        $cast->update($request->all());

        return redirect('/cast')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(Cast $cast)
    {
        $cast->delete();
        return redirect('/cast')->with('success', 'Data berhasil dihapus!');
    }
}