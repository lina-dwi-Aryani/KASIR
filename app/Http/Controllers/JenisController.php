<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis = Jenis::paginate();
        return view('jenis.index', compact('jenis'))
        ->with('i', (request()->input('page', 1) - 1) *
        $jenis->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis = new Jenis();
        return view('jenis.create', compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Jenis::$rules);
        $jenis = Jenis::create($request->all());
        return redirect()->route('jenis.index')
        ->with('success', 'Jenis berhasil ditambahkan....');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jenis = Jenis::find($id);
        return view('jenis.show', compact('jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jenis = Jenis::find($id);
        return view('jenis.edit', compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //cek validasi
        request()->validate(Jenis::$rules);
        //simpan
        Jenis::findOrFail($id)->update($request->all());
        //tampilan index
        return redirect()->route('jenis.index')
        ->with('success', 'Jenis barang berhasil diubah...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenis = Jenis::find($id)->delete();
        return redirect()->route('jenis.index')
        ->with('success', '1 rekaman Jenis barang berhasil dihapus');
    }
}
