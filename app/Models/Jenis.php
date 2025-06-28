<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = "jenis";
    protected $primaryKey = "id";
    static $rules = [
        'jenis_barang' => 'required',
    ];
    protected $perPage = 20;
    protected $fillable = ['id','jenis_barang'];
}
