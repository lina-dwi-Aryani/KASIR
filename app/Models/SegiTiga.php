<?php

namespace App\Models;
class SegiEmpat
{
    /* properti */
    public $alas;
    public $tinggi;
    /* membuat method/fungsi */
    public function luas()
    {
        return 0.5*($this->alas * $this->tinggi);
    }
    /* membuat method/keliling */
    public function keliling()
    {
        return 3*($this->alas);
    }
}
