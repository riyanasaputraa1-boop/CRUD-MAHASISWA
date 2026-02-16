<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    
    public function index()
    {
        // load relasi matakuliah agar bisa langsung dipakai di view
        $mahasiswas = Mahasiswa::with('matakuliah')->get();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    
    public function create()
    {
        // kirim daftar mata kuliah ke view
        $data_mk = Matakuliah::all();
        return view('mahasiswa.create', compact('data_mk'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim',
            'nama' => 'required',
            'kelas' => 'required',
            'matakuliah_id' => 'required|exists:matakuliahs,id',
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success','Data mahasiswa berhasil ditambahkan');
    }

    public function edit($nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $data_mk = Matakuliah::all();
        return view('mahasiswa.edit', compact('mahasiswa','data_mk'));
    }

       public function update(Request $request, $nim)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'matakuliah_id' => 'required|exists:matakuliahs,id',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')->with('success','Data mahasiswa berhasil diperbarui');
    }

   
    public function destroy($nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success','Data mahasiswa berhasil dihapus');
    }
}