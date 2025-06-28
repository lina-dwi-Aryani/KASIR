<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table ='jurusan'; //utk menghubungkan ke tabel
    protected $primaryKey='id';
    protected $fillable = ['id','jurusan'];
}
