<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailJual;
use App\Models\Pelanggan;
use App\Models\Jual;
use App\Models\Barang;

class JualController extends Controller
{
    /*************
    masukan data pelanggan dan membuat 
    nomor transaksi/nota
    disimpan ke tabel jual (id)
     ************/
    public function create()
    {
        $tgJam = date('Y-m-d h:i:s');

        //menambah 1 rekaman utuk nomor transaksi
        $id = \DB::table('jual')
            ->insertGetId([
                'tanggal' => date('Y-m-d'),
                'created_at' => $tgJam,
                'updated_at' => $tgJam,
                'user_id' => auth()->user()->id
            ]);

        //membaca nomor (id) untuk ditampilkan ke formulir create 
        $jual = \DB::table('jual')->where('id', $id)->first();
            return view('jual.create', compact('jual'));
    }


    /***************
     * pembacaan data pelanggan menggunakan ajax
     * mengembalikan data format json
     ****************/
    public function getPelanggan(Request $request)
    {
        $pelanggan = \DB::table("pelanggan")
            ->select("nama_pelanggan", "alamat", "telp_hp")
            ->where("id", $request->pelanggan_id)
            ->first();
        return response()->json($pelanggan);
    }


    /************* 
    * menyimpan data pelanggan
    * dilanjutkan ke detail_jual
    ************/
    public function store(Request $request)
    {
        $tgJam = date('Y-m-d h:i:s');
        \DB::table('jual')->where('id', $request->id)
            ->update(['pelanggan_id' => $request->pelanggan_id]);
        $id = $request->id;
    }

    //dilanjukan ke detail jual
    public function detailJual($id)
    {
        return view('jual.detail_jual', compact('id'));
    }

    // Melanjutkan utk petemuan 13
    /**************
    * pembacaan data barang menggunakan ajax
    * mengembalikan data format json
    **************/
    public function getBarang(Request $request)
    { 
        $barang = \DB::table("barang")
                    ->select("nama_barang","harga","satuan")
                    ->where("id",$request->id)
                    ->first();
        return response()->json($barang); 
    }


    /********************
    * menyimpan rekaman
    * ubah jumlah_pembelian di tabel jual
    * menambah master detil tabel detail_bayar
    * ubah tabel barang(mengurangi stok setiap barang yg dijual)
    ********************/
    public function simpan(Request $request)
    {
        //menggunakan mode transaksi, ketika terjadi
        //salah satu kesalahan akan dibatalkan semua
        //**************
        \DB::beginTransaction();
        try{
            $total = 0;
            // looping $request->dataBarang
            foreach ($request->dataBarang as $key => $barang) 
            { 
                //simpan ke transaksi jual
                $tgJam=date('Y-m-d h:i:s'); 
                \DB::table('detail_jual')->insert(
                    [   'jual_id' => $request->idJual,
                        'barang_id' => $barang['barang_id'],
                        'qty' => $barang['qty'],
                        'harga_sekarang'=> $barang['harga_sekarang'],
                        'created_at' => $tgJam,
                        'updated_at' => $tgJam,
                        'user_id' => auth()->user()->id
                    ]
                );

               //kurangi stok di tabel barang
               $sql="UPDATE barang SET stok=stok - " . $barang['qty'] ." WHERE id = " . $barang['barang_id'];
               \DB::statement($sql);
               
               //menjumlah pertransaksi
               $total += $barang['qty'] * $barang['harga_sekarang'];
            }
            
            // merekam jumlah pembelian pertransaksi
            Jual::whereId($request->idJual)->update(['jumlah_pembelian' =>$total ]); 
            \DB::commit();

            //kembalikan response berupa json ke client
            //utuk mencetak strok pembayaran
            return response()->json([
                'berhasil' => true,
                'urlCetak' => url('/jual/cetak/' . $request->idJual)
            ]);
        } catch (\Throwable $e) {
            //jika terjadi kesalahan batalkan semua 
            \DB::rollback();
            throw new \Exception("Error: " . $e->getMessage(), 1);
        } 
    }
    
    public function cetak($id)
    {
        $djual=DetailJual::where('jual_id',$id)->get();
        $jual = Jual::find($id);
        $tgl = $jual->tanggal;
        $pelanggan = Pelanggan::find($jual->pelanggan_id);
        return view('jual.cetak',compact('djual','pelanggan','id','tgl'));
    }                             
}