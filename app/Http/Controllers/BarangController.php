<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Jenis;
/**
* Class BarangController
*/
class BarangController extends Controller
{
/******************************************/
public function index()
{
$barang = Barang::paginate();
return view('barang.index', compact('barang'))
->with('i', (request()->input('page', 1) - 1) * $barang->perPage());
}
/*********************************************/
public function create()
{
$barang = new Barang();
// untuk isian pilihan jenis barang
$jenis = Jenis::pluck('jenis_barang','id');
return view('barang.create', compact('barang','jenis'));
}
/******************************************/
public function store(Request $request)
{
request()->validate(Barang::$rules);
$barang = Barang::create($request->all());
return redirect()->route('barang.index')
->with('success', 'Penambahan barang berhasil disimpan....');
}
/*****************************************/
public function show($id)
{
$barang = Barang::find($id);
return view('barang.show', compact('barang'));
}
/*************************************/
public function edit($id)
{
$barang = Barang::find($id);
$jenis = Jenis::pluck('jenis_barang','id');
return view('barang.edit', compact('barang','jenis'));
}
/***********************************************/
public function update(Request $request, Barang $barang)
{
request()->validate(Barang::$rules);
$barang->update($request->all());
return redirect()->route('barang.index')
->with('success', 'Rekaman barang berhasil diubah');
}
/**********************************************/
public function destroy($id)
{
$barang = Barang::find($id)->delete();
return redirect()->route('barang.index')
->with('success', 'Barang berhasil dihapus');
}
}