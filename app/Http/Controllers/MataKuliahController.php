<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliah = MataKuliah::all();

        return view('list_mk', compact('mataKuliah'));
    }

    public function create()
    {
        return view('create_mk');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer',
        ]);

        MataKuliah::create([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        return redirect()->route('matakuliah.index');
    }

    public function edit($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);

        return view('edit_mk', compact('mataKuliah'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer',
        ]);

        $mataKuliah = MataKuliah::findOrFail($id);

        $mataKuliah->update([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        return redirect()->route('matakuliah.index');
    }

    public function destroy($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);

        $mataKuliah->delete();

        return redirect()->route('matakuliah.index');
    }
}