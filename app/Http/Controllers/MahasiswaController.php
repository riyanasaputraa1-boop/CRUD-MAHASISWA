<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'nim' => 'required|unique:mahasiswas,nim',
        'nama' => 'required',
        'kelas' => 'required',
        'matakuliah' => 'required'
    ]);

    Mahasiswa::create($request->all());

    return redirect()->route('mahasiswa.index')
        ->with('success', 'Data mahasiswa berhasil ditambahkan');


    }

    public function edit($nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index');
    }

    public function destroy($nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index');
    }
}