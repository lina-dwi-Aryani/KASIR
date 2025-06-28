<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nama','jenis_kel',
        'email','telepon','alamat','tanggal_lhr','foto'];
}
