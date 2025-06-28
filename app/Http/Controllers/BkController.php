<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\BK;

class BkController extends Controller
{
    public function bacaDb1()
 {
 $buku = BK::table('buku')->get();
 return view('bk.bacaDb1', ['buku' => $buku]);
 }

}
