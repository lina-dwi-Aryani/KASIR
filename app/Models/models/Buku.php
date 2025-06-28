<?php

namespace App\Models\models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
protected $primaryKey = 'id';
protected $fillable = ['id','buku'];
public function getPenerbit()
    {
        return $this->belongsTo('App\models\models\Penerbit','id_penerbit');
    }
}
