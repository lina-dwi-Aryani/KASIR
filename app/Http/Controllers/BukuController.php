<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function insertData()
    {
        $br= DB::table('buku')->insert(
            ['id'=>00003,
            'judul'=>'helo',
            'tahun_terbit'=>2023,
            'id_penerbit'=>3,
            'pengarang'=>OYY,
            'jumlah_hal'=>50,
            'sampul'=>'Helo',
            'created_at'=>2022-12-21,
            'upadate_at'=>2022-12-29,
            'user_id'=>1]);
        echo "Berhasil menyimpan ". $br." rekaman buku";
    }

    public function updateData()
    {
        $stok=100;
        $br=DB::table('buku')->where('id',00003)
            ->update(['halaman'=>$jumlah_hal]);
        echo "Berhasil mengubah ". $br." rekaman";
    }
    
    public function deleteData()
    {
        $br=DB::table('buku')->where('id',00003)->delete();
        echo "Berhasil menghapus ". $br." rekaman";
    }
}
