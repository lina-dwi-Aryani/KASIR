<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\ResponsiController;
Route::get('responsi/bacaR1',[ResponsiController::class,'bacaR1']);
Route::get('responsi/bacaR2',[ResponsiController::class,'bacaR2']);
Route::get('responsi/bacaR3',[ResponsiController::class,'bacaR3']);
//oute::get('db/fungsiAgregat',[DbController::class,'fungsiAgregat']);
/*Route::get('db/insertData',[DbController::class,'insertData']);

/*
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelangganController;
Auth::routes();
Route::group(['middleware' => ['auth']], function(){
    Route::get('/', function(){
        return view('home');
    });
    Route::resource('jenis',App\Http\Controllers\JenisController::class);
    Route::resource('user',App\Http\Controllers\UserController::class);
    
    Route::resource('barang',App\Http\Controllers\BarangController::class);
    Route::resource('pelanggan',App\Http\Controllers\PelangganController::class);
   
});
*/

//Route::get('/', function () {
  //  return view('welcome');
//});
//Route::resource('propinsi',App\Http\Controllers\PropinsiController::class);

//Route::get('/kota/gate',App\Http\Controllers\KotaController::class);
//Route::resource('buku',App\Http\Controllers\BukuController::class);
//Route::resource('penerbit',App\Http\Controllers\PenerbitController::class);

//Route::resource('/mahasiswa',App\Http\Controllers\MahasiswaController::class);

//use App\Http\Controllers\EloController;
//Route::get('elo/eloSave',[EloController::class,'eloSave']);
//Route::get('elo/eloUpdate',[EloController::class,'eloUpdate']);
//Route::get('elo/eloDelete',[EloController::class,'eloDelete']);
//Route::get('elo/bacaAll',[EloController::class,'bacaAll']);
//Route::get('elo/bacaAllRelasi',[EloController::class,'bacaAllRelasi']);
//Route::get('elo/bacaSatu',[EloController::class,'bacaSatu']);
//Route::get('elo/bacaPilih',[EloController::class,'bacaPilih']);
//Route::get('elo/tambahKota',[EloController::class,'tambahKota']);
//Route::get('elo/bacaPilihan',[EloController::class,'bacaPilihan']);
//Route::get('elo/hasilAllRelasi',[EloController::class,'hasilAllRelasi']);
//Route::get('elo/bacaAllBuku',[EloController::class,'bacaAllBuku']);
//Route::get('elo/tambahPenerbit',[EloController::class,'tambahPenerbit']);
//Route::get('elo/tambahBuku',[EloController::class,'tambahBuku']);
//Route::get('elo/hasilAll',[EloController::class,'hasilAll']);

//use App\Http\Controllers\DbController;
//Route::get('db/bacaDb1',[DbController::class,'bacaDb1']);
//Route::get('db/bacaDb2',[DbController::class,'bacaDb2']);
//oute::get('db/fungsiAgregat',[DbController::class,'fungsiAgregat']);
/*Route::get('db/insertData',[DbController::class,'insertData']);

Route::get('db/updateData',[DbController::class,'updateData']);

Route::get('db/deleteData',[DbController::class,'deleteData']);

use App\Http\Controllers\BkController;
Route::get('bk/bacaDb1',[BkController::class,'bacaDb1']);

use App\Http\Controllers\BldController;
Route::get('bld/cetakNota',[BldController::class,'cetakNota']);
Route::get('bld/proses',[BldController::class,'proses']);
Route::get('bld/loopFor',[BldController::class,'loopFor']);
Route::get('bld/bacaTabel',[BldController::class,'bacaTabel']);
Route::get('bld/haloAkakom',[BldController::class,'haloAkakom']);

Route::resource('mata-kuliahs',App\Http\Controllers\MataKuliahController::class);
Route::delete('/mata-kuliahs/{id}', [MataKuliahController::class, 'destroy'])->name('mata-kuliahs.destroy');
Route::put('/mata-kuliahs/{id}', [MataKuliahController::class, 'update'])->name('mata-kuliahs.update');
Route::get('/mata-kuliahs/{id}/edit', [MataKuliahController::class, 'edit'])->name('mata-kuliahs.edit');

Route::resource('anggota',App\Http\Controllers\AnggotaController::class);
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');


use App\Http\Controllers\JualController;


// Pengimporan model lain yang mungkin diperlukan
use App\Models\DetailJual;
use App\Models\Pelanggan;
use App\Models\Jual;
use App\Models\Barang;

// Definisi rute untuk JualController
Route::get('/jual/create', [JualController::class, 'create']);
Route::post('/jual/store', [JualController::class, 'store']);
Route::get('/jual/detail/{id}', [JualController::class, 'detailJual']);
Route::post('/jual/getPelanggan', [JualController::class, 'getPelanggan']);
Route::post('/bacaBarang', [JualController::class, 'getBarang']);
Route::get('/jual/cetak/{id}', [JualController::class, 'cetak']);
Route::post('/jual/simpan', [JualController::class, 'simpan']);
Route::get('/detailJual/{id}',[JualController::class,'detailJual']);
Route::resource('jenis',App\Http\Controllers\JenisController::class);
Route::resource('barang',App\Http\Controllers\Controller::class);

 use App\Http\Controllers\BarangController;
Route::resource('barang',BarangController::class);

use App\Http\Controllers\PelangganController;
Route::resource('pelanggan',PelangganController::class);

use App\Http\Controllers\UserController;
Auth::routes();
Route::group(['middleware' => ['auth']], function(){
    Route::get('/', function(){
        return view('home');
    });

    Route::resource('user',App\Http\Controllers\UserController::class);
});



