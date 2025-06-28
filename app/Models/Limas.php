<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Limas extends \App\Models\SegiTiga
{
public $alas;
public $tinggi;

public function luas()
{
    return 1/2 * ($this->alas *  $this->tinggi);
}

public function volume()
{
    return 1/3 * ($this->luas *  $this->tinggi);
}

}
