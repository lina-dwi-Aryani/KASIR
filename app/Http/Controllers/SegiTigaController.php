<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SegiTiga;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

class SegiTigaController extends Controller
{
public function inputSegiTiga()
    {
        return View::make('segi-tiga.inputSegiTiga');
    }
public function hasil(Request $request)
{
    $segiTiga = new SegiTiga;
    //aturan validasi
    $rules=[
        'tinggi'=>'required|numeric',
        'alas'=>'required|numeric'];
    $validator = Validator::make( $request->all(), $rules);
    //cek validasi
    if ($validator->fails())
    {
        //jika salah kembalikan ke form untuk diperbaiki
        return View::make('segi-tiga.inputSegiTiga',
        compact('segiTiga'))->withErrors($validator);
    }else{
        //lanjutkan ke menampilkan hasil/
        $segiTiga->tinggi=$request->tinggi;
        $segiTiga->alas = $request->alas;
        return View::make('segi-tiga.hasilSegiTiga',compact('segiTiga'));
    }
}

//method memanggil form masukkan
public function inputLimas()
{
return View::make('segi-tiga.inputLimas');
}
//method menghitung hasil
public function hasilLimas(Request $request)
{
$limas = new \App\Models\Limas;
//aturan validasi
$rules=[
'alas'=>'required|numeric',
'tinggi'=>'required|numeric'];
$validator = Validator::make( $request->all(), $rules);
//cek validasi
if ($validator->fails())
{
//jika salah kembalikan ke form untuk diperbaiki
return View::make('segi-tiga.inputLimas',
compact('limas'))->withErrors($validator);
}else{
//lanjutkan ke menampilkan hasil/
$limas->alas=$request->alas;
$limas->tinggi = $request->tinggi;

return View::make('segi-tiga.hasilLimas',compact('limas'));
}
}
}