<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table ='mahasiswa'; //utk menghubungkan ke tabel mahasiswa
    protected $primaryKey='nim';
    protected $fillable = ['nim','nama','alamat','tanggal_lahir',
                            'agama','jenis_kelamin','jurusan_id'];
    //method kode ke agama
    public function ag($kode)
    {
        if ($kode==1) return "Islam";
        else if ($kode==2) return "Protestan";
        else if ($kode==3) return "Katholik";
        else if ($kode==4) return "Hindu";
        else if ($kode==5) return "Budha";
        else return "Lainnya";
    }
    //relasi obyek
    public function getJurusan()
    {
        return $this->belongsTo('App\models\Jurusan','jurusan');
    }
}
