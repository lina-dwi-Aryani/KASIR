<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balok extends Model
{
  //use HasFactory;
  public $tinggi;
    public function volume()
    {
      return $this->panjang * $this->lebar * $this->tinggi;
    }
}