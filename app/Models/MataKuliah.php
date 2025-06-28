<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliah';
    protected $primaryKey = 'id';
    public $incrementing = false;
        static $rules = [
        'mata_kuliah' => 'required',
        'sks' => 'required',
        'jurusan_id' => 'required',
        'semester' => 'required',
        'kurikulum' => 'required',
        'active' => 'required',
        'user_id' => 'required',
        ];
    protected $perPage = 10;
   
    protected $fillable = ['mata_kuliah','sks','jurusan_id','semester','kurikulum','active','user_id'];
}