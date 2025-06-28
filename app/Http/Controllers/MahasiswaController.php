<?php

namespace App\Http\Controllers;
use App\models\Jurusan;
use Illuminate\Http\Request;
use App\models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mhs = Mahasiswa::all();
        return view('mahasiswa.index', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jur=Jurusan::all();
        return view('mahasiswa.create',compact('jur'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nim'            => 'required',
            'nama'           => 'required',
            'alamat'         => 'required',
            'tanggal_lahir'  => 'required',
            'agama'          => 'required',
            'jurusan_id'     => 'required',
            'jenis_kelamin'  => 'required',
            ]);
            $mhs                 = new Mahasiswa;
            $mhs->nim            = $request->nim;
            $mhs->nama           = $request->nama;
            $mhs->alamat         = $request->alamat;
            $mhs->tanggal_lahir  = $request->tanggal_lahir;
            $mhs->agama          = $request->agama;
            $mhs->jenis_kelamin  = $request->jenis_kelamin;
            $mhs->jurusan_id     = $request->jurusan_id;
            $mhs->save();

            return redirect()->route('mahasiswa.index')
                    ->with('message','Mahasiswa baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mhs = Mahasiswa::find($id);
        $jur = Jurusan::all();
        return view('mahasiswa.edit',compact('mhs','jur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nim'           => 'required',
            'nama'          => 'required',
            'alamat'        => 'required',
            'tanggal_lahir' => 'required',
            'agama'         => 'required',
            'jurusan_id'    => 'required',
            'jenis_kelamin' => 'required',
            ]);
            $mhs = Mahasiswa::find($id);
            $mhs->nama          = $request->nama;
            $mhs->alamat        = $request->alamat;
            $mhs->tanggal_lahir = $request->tanggal_lahir;
            $mhs->agama         = $request->agama;
            $mhs->jenis_kelamin = $request->jenis_kelamin;
            $mhs->jurusan_id    = $request->jurusan_id;
            $mhs->save();
            
            return redirect()->route('mahasiswa.index')
                    ->with('message','Mahasiswa berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
