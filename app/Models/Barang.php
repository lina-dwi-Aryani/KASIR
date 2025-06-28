<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Jenis;
/*****************************
* class Barang
* @package App
*******************************/
class Barang extends Model
{
    protected $table="barang";
    protected $primaryKey="id";
    protected $fillable = ['id','jenis_id','nama_barang',
                        'satuan','harga','stok','user_id'
    ];
    
    public $incrementing = false;
    protected $perPage = 20;
    //menvalidasi
    static $rules = [
        'id' => 'required|unique:barang',
        'jenis_id' => 'required',
        'nama_barang' => 'required',
        'satuan' => 'required',
        'harga' => 'required',
        'stok' => 'required',
    ];
    // menggunakan ORM
    // relasi ke Objek Jenis
    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }
}
