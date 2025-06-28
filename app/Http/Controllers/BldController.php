<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BldController extends Controller
{
    public function haloAkakom()
    {
        return View::make('bld.haloAkakom')
            ->with('nama','STMIK AKAKOM Yogyakarta');
    }
    
    public function loopFor()
    {
        return View::make('bld.loopFor');
    }

    public function bacaTabel()
    {
        $kota=\App\models\models\Kota::all();
        return View::make('bld.bacaTabel')->with('kota',$kota);
    }
    public function cetakNota()
    {
        return view('bld.CetakNota');
    }
    public function proses(Request $request)
    {
        $djual =\DB::table('detail_jual as d')
                    -> join('barang as b', 'd.barang_id', '=', 'd.harga')
                    ->select('d.barang_id', 'b.nama_barang', 'b.satuan', 'd.jumlah', 'd.harga')
                    ->selectRow('d.Jumlah * d.harga as total')
                    ->where('jual_id', $request->jual_id)
                    ->get();
        //print_r($djual);
        return View::make('bld.bacatabel1')->with(['djual'=>$djual, 'no_nota'=>$request->jual_id]);
    }
}
