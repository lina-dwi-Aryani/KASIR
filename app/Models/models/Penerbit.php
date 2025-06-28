<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $table = 'buku';
protected $primaryKey = 'id';
protected $fillable = ['id','id_penerbit'];
}
