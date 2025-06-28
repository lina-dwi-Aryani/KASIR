<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    // Menampilkan daftar pelanggan
    public function index()
    {
        $pelanggan = Pelanggan::paginate();
        return view('pelanggan.index', compact('pelanggan'))
        ->with('i', (request()->input('page', 1) - 1) *
            $pelanggan->perPage());
    }

    // Menampilkan formulir pembuatan pelanggan
    public function create()
    {
        $pelanggan = new Pelanggan();
        return view('pelanggan.create', compact('pelanggan'));
    }

    // Menyimpan data pelanggan yang baru
    public function store(Request $request)
    {
        request()->validate(Pelanggan::$rules);
        $pelanggan = Pelanggan::create($request->all());
        
        return redirect()->route('pelanggan.index')
        ->with('success', 'Pelanggan berhasil ditambahkan....');
    }

    // Menampilkan detail pelanggan berdasarkan ID
    public function show($id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.show', compact('pelanggan'));
    }

    // Menampilkan formulir edit pelanggan
    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    // Memperbarui data pelanggan
    public function update(Request $request, $id)
    {
        request()->validate(Pelanggan::$rules);
        Pelanggan::findOrFail($id)->update($request->all());
        return redirect()->route('pelanggan.index')
            ->with('success', 'Data Pelanggan berhasil diubah...');
    }

    // Menghapus data pelanggan
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil dihapus');
    }
}
