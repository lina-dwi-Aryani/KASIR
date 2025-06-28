<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propinsi extends Model
{
    protected $table ='kota'; //utk menghubungkan ke tabel mahasiswa
    protected $primaryKey='id';
    protected $fillable = ['id','propinsi_id','nama_kota'];
    //method kode ke agama
    //relasi obyek
    public function getPropinsi()
    {
        return $this->belongsTo('App\models\Propinsi','propinsi');
    } 
}
