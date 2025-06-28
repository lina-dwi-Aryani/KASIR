<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResponsiController extends Controller
{
    public function bacaR1()
    {
        $barang = DB::table('barang')
                ->select('id', 'nama_barang', 'satuan', 'harga', 'stok')
                ->where('harga', '>', 10000)
                ->get();
        return view('responsi.bacaR1', ['barang' => $barang]);
    }
    public function bacaR2()
    {
        $barang = DB::table('barang')
                ->select('id', 'nama_barang', 'satuan', 'harga', 'stok')
                ->where('stok', '<', 10)
                ->get();
        return view('responsi.bacaR1', ['barang' => $barang]);
    }
    public function bacaR3()
    {
        $barang = DB::table('barang')
                ->select('id', 'nama_barang', 'satuan', 'harga', 'stok', DB::raw('harga * stok as total'))
                ->get();
        return view('responsi.bacaR3', ['barang' => $barang]);
    }
}
