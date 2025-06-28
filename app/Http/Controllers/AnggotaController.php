<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Models\models\Anggota;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::orderBy('id', 'DESC')
            ->paginate(5);
        return view('anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi
        $this->validate($request, [
            'id' => 'required|max:5',
            'nama'=> 'required ',
            'jenis_kel' => 'required ',
            'e_mail' => 'required|email',
            'telepon' => 'required',
            'foto'=>'required',
            ]);
        $foto = $request->file('foto');
       
        //membaca extensi file gambar
        $ext = $request->file('foto')->getClientOriginalExtension();
       
        //memberi file menggunakan no anggota
        $namaFile = Input::get('id').'.'.$ext;
       
        //menyimpan ke folder public/foto/...
        $request->file('foto')->move('foto', $namaFile);
        $anggota = new Anggota($request->all());
        $anggota->foto = $namaFile;
        $anggota->save();
        return redirect()->route('anggota.index')
            ->with('success',
            'Menambah Anggota telah berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.edit',compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'id'           => 'required',
            'nama'          => 'required',
            'jenis_kel'        => 'required',
            'e_mail' => 'required',
            'telepon'         => 'required',
            'alamat' => 'required',
            'tanggal_lhr'         => 'required',
            'foto'    => 'required',
            ]);
            $anggota = Anggota::find($id);
            $anggota->nama          = $request->nama;
            $anggota->jenis_kel        = $request->jenis_kel;
            $anggota->e_mail = $request->e_mail;
            $anggota->telepon        = $request->telepon;
            $anggota->alamat = $request->alamat;
            $anggota->tanggal_lhr        = $request->tanggal_lhr;
            $anggota->foto = $request->foto;
            $anggota->save();
            
            return redirect()->route('anggota.index')
                    ->with('message','Anggota berhasil diubah!');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
