<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    public function bacaDb1()
    {
        $kota = DB::table('kota')->get();
        return view('db.bacaDb1', ['kota' => $kota]);
    }
    public function bacaDb2()
    {
        $kota = DB::table('kota')
        ->join('propinsi','kota.propinsi_id','=','propinsi.id')
        ->select('kota.id','kota.nama_kota','propinsi.nama_propinsi')
        ->where('kota.propinsi_id',1)
        ->get();
        return view('db.bacaDb2', compact('kota'));
    }
    public function fungsiAgregat()
    {
        $hargaMaks = DB::table('barang')->max('harga');
        echo "Harga maksimal=".$hargaMaks;
        echo "<br>";
        
        //harga rata2 fungsi aggregat avg(), dengan jenis_id=1
        $hargaRata2 = DB::table('barang')
            ->where('jenis_id','1')
            ->avg('harga');
        echo "Harga rata-rata alat tulis = ".$hargaRata2;
        echo "<br>";

        //harga minimal/fungsi aggregate min(), dengan jenis_id=1
        $hargaMin = DB::table('barang')
            ->where('jenis_id','1')
            ->min('harga');
        echo "Harga minimal = ".$hargaMin;
        echo "<br>";

        //harga maksimal/fungsi aggregate max(), dengan jenis_id=1
        $hargaMax = DB::table('barang')
            ->where('jenis_id','1')
            ->max('harga');
        echo "Harga maksimal dengan jenis_id 1 = ".$hargaMix;
        echo "<br>";

        // harga x stok
        $jumHarga = DB::table('barang')
            ->where('jenis_id','1')
            ->sum(DB::raw('stok*harga'));
        echo "Harga akhir jika dikalikan dengan stok = ".$jumHarga;
        echo "<br>";

        //membaca rekaman memilih kolon memilih id, nama_barang,
        //satuan, stok//
        $barang = DB::table('barang')
                ->select('id','nama_barang','satuan','stok')
                ->get();
        echo "Harga satuan = ".$barang;
        echo "<br>";

        //membaca semua rekaman semua kolom
        $barang = DB::table('barang')->select('*')->get();
        echo "Semua kolom Barang = ".$barang;
        echo "<br>";
        
        //membaca rekaman menggunakan DISTINCT
        $barang = DB::table('barang')
                ->select('jenis_id')
                ->distinct('jenis_id')
                ->get();
        echo "Menampilkan rekaman = ".$barang;
        echo "<br>";
        
        //menjumlahkan per kelompk jenis barang
        $barang = DB::table('barang')
                ->select('jenis_id',DB::raw('count(*) as jumlah'))
                ->groupBy('jenis_id')
                ->get();
        echo "jenis barang  = ".$barang;
        echo "<br>";
        
        //membaca jenis_id, dan harga * stok
        $jumHarga=DB::table('barang')
                ->where('jenis_id','1')
                ->sum(DB::raw('stok*harga'));
        echo " = ".$jumHarga;
        echo "<br>";
        
        //membaca rekaman memilih kolon memilih id, nama_barang,
        //satuan, stok//
        //dan harga * stok jenis barang=1
        $barang = DB::table('barang')
                ->select('id','nama_barang','stok','satuan','harga')
                ->selectRaw('stok * harga as total')
                ->where('jenis_id',1)
                ->get();
        echo "Harga = ".$barang;
        echo "<br>";
    }

    public function insertData()
    {
        $br= DB::table('barang')->insert(
            ['id'=>10021,
            'jenis_id'=>2,
            'nama_barang'=>'Tepung Trigu',
            'satuan'=>'Kg',
            'harga'=>5000,
            'stok'=>10,
            'user_id'=>1]);
        echo "Berhasil menyimpan ". $br." rekaman";
    }

    public function updateData()
    {
        $stok=100;
        $br=DB::table('barang')->where('id',10021)
            ->update(['stok'=>$stok]);
        echo "Berhasil mengubah ". $br." rekaman";
    }
    
    public function deleteData()
    {
        $br=DB::table('barang')->where('id',10021)->delete();
        echo "Berhasil menghapus ". $br." rekaman";
    }

}
