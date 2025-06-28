<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EloController extends Controller
{
	public function bacaAll()
	{
		$brs = \App\Models\models\Kota::all();
		echo "<table border='1'><tr><th>Id</th>
		<th>Nama Kota</th></tr>";
		foreach ($brs as $abrs)
		{
			echo "<tr><td>$abrs->id</td><td>
			$abrs->nama_kota</td></tr>";
		}
		echo "</table>";
	}
	public function bacaAllRelasi()
	{
		$brs = \App\Models\models\Kota::all();
		$brs = $brs->sortBy('nama_kota', SORT_ASC, false);
		echo "<table border='1'><tr><th>Id</th><th>Nama
								Kota</th><th>Propinsi</th></tr>";
		foreach ($brs as $abrs)
			{
				echo "<tr><td>".$abrs->id."</td>";
				echo "<td>".$abrs->nama_kota."</td>";
				echo "<td>".$abrs->getPropinsi->nama_propinsi."</td>";
				echo "</tr>";
			}
		echo "</table>";
	} 
	 
	public function bacaSatu()
	{
		$kota=\App\Models\models\Kota::find(5);
		echo $kota->nama_kota;
		echo "<br>";
		echo $kota->getPropinsi->nama_propinsi;
	}
	public function bacaPilih()
	{
		$kota=\App\Models\models\Kota::where('propinsi_id',3)->get();
		foreach($kota as $k){
			echo $k->nama_kota.":".$k->getPropinsi->nama_propinsi;
			echo "<br>";
		}
	}
	public function tambahKota()
	{
		$kota=new \App\Models\models\Kota;
		$kota->propinsi_id = 2;
		$kota->nama_kota = "Pati";
		$kota->save();
		echo "Proses menambah rekaman tabel kota selesai...";
	}
	public function bacaPilihan()
	{
		$kota=\App\Models\models\Kota::find([1,3,5,4]);
			echo "<table border='1'><tr><th>Id</th><th>Nama Kota</th><th>Propinsi</th></tr>";
				foreach($kota as $k){
					echo "<tr><td>".$k->id."</td>";
					echo "<td>".$k->nama_kota."</td>";
					echo "<td>".$k->getPropinsi->nama_propinsi."</td>";
		
				}
	}
	public function hasilAllRelasi()
	{
		$brs = \App\Models\models\Kota::all()
		->orderBy('nama_kota','desc')
		->take(10)
		->get();
		echo "<table border='1'><tr><th>Id</th><th>Nama
								Kota</th><th>Propinsi</th></tr>";
		foreach ($brs as $abrs)
			{
				echo "<tr><td>".$abrs->id."</td>";
				echo "<td>".$abrs->nama_kota."</td>";
				echo "<td>".$abrs->getPropinsi->nama_propinsi."</td>";
				echo "</tr>";
			}
		echo "</table>";
	} 
	
	public function bacaAllBuku()
	{
		$brs = \App\Models\models\Buku::all();
		echo "<table border='1'>
		<tr><th>Id</th>
		<th>Judul</th>
		<th>tahun_terbit</th>
		<th>id_penerbit</th>
		<th>Pengarang</th>
		<th>Jumlah_hal</th>
		<th>Sampul</th></tr>";
		foreach ($brs as $abrs)
		{
			echo "<tr><td>$abrs->id</td>
			<td>$abrs->judul</td>
			<td>$abrs->tahun_terbit</td>
			<td>$abrs->id_penerbit</td>
			<td>$abrs->pengarang</td>
			<td>$abrs->jumlah_hal</td>
			<td>$abrs->sampul</td></tr>";
		}
		echo "</table>";
	}
	public function tambahBuku()
	{
		$buku=new \App\Models\models\Buku;
		$buku->id = 4;
		$buku->judul = "Raja Kancil";
		$buku->tahun_terbit = "2020";
		$buku->id_penerbit = 2;
		$buku->pengarang = "Khalil Gibran";
		$buku->jumlah_hal = 165;
		$buku->sampul = "Keluh Kesah";
		
		$buku->save();
		echo "Proses menambah rekaman tabel buku selesai...";
	}
	public function hasilAll()
	{
		$buku=\App\Models\models\Buku::all();
		$brs = $brs->sortBy('penerbit', SORT_ASC, false);
		echo "<table border='1'><tr><th>Id</th>
		<tr><th>Id</th>
		<th>Judul</th>
		<th>tahun_terbit</th>
		<th>id_penerbit</th>
		<th>Pengarang</th>
		<th>Jumlah_hal</th>
		<th>Sampul</th></tr>";
		foreach ($brs as $abrs)
			{
				echo "<td>".$abrs->id."</td>";
				echo "<td>".$abrs->judul."</td>";
				echo "<td>".$abrs->tahun_terbit."</td>";
				echo "<td>".$abrs->id_penerbit."</td>";
				echo "<td>".$abrs->getPenerbit->id_penerbit."</td>";
				echo "<td>".$abrs->jumlah_hal."</td>";
				echo "<td>".$abrs->sampul."</td>";
			}
		echo "</table>";
	}
	public function bacaPilihanBuku()
	{
		$kota=\App\Models\models\Buku::find(["Graha Ilmu saja"]);
			echo "<table border='1'><tr><th>Id</th><th>Nama Kota</th><th>Propinsi</th></tr>";
				foreach($buku as $abrs){
					echo "<td>".$abrs->id."</td>";
					echo "<td>".$abrs->judul."</td>";
					echo "<td>".$abrs->tahun_terbit."</td>";
					echo "<td>".$abrs->id_penerbit."</td>";
					echo "<td>".$abrs->getPenerbit->id_penerbit."</td>";
					echo "<td>".$abrs->jumlah_hal."</td>";
					echo "<td>".$abrs->sampul."</td>";
			}
	}
	public function eloSave()
	{
		$prop = new \App\models\Propinsi;
		$prop->id=4;
		$prop->propinsi="Jawa Barat";
		try{
			$prop->save();
		} catch (\Illuminate\Database\QueryException $e) {
			//menampilkan kesalahan
			echo $e->getMessage();
		}
		echo "Proses Menyimpan Berhasil";
	}
	public function eloUpdate()
	{
		$prop =\App\models\Propinsi::find(4);
		$prop->propinsi="Banten";
		try{
			$prop->save();
		} catch (\Illuminate\Database\QueryException $e) {
			//menampilkan kesalahan
			echo $e->getMessage();
		}
		echo "Proses Mengubah Berhasil";
	}
	public function eloDelete()
	{
		$prop =\App\models\Propinsi::find(4);
		try{
			$prop->delete();
		} catch (\Illuminate\Database\QueryException $e) {
			//menampilkan kesalahan
			echo $e->getMessage();
		}
		echo "Proses Menghapus Berhasil";
	}
	public function create()
	{
		return view('buku.create');
	}
	//dan untuk menyimpan
	public function store(Request $request)
	{
		// lengkapi untuk menyimapan rekaman but
	}

	// Fungsi untuk menambahkan rekaman ke tabel penerbit
	public function tambahRekaman($id,$penerbit, $alamat, $telepon,$email)
	{
		$penerbit=new \App\Models\models\Penerbit;
		$penerbit->id = $id;
		$penerbit->penerbit = $penerbit;
		$penerbit->alamat = $alamat;
		$penerbit->telepon = $telepon;
		$penerbit->email = $email;
		$penerbit->save();
	

	// Menambahkan 5 rekaman ke tabel penerbit
	tambahRekaman(2,"Penerbit A", "Alamat A", "123456789","a@gmail.com");
	tambahRekaman(5,"Penerbit B", "Alamat B", "987654321","b@gmail.com");
	tambahRekaman(8,"Penerbit C", "Alamat C", "111222333","c@gmail.com");
	tambahRekaman(10,"Penerbit D", "Alamat D", "444555666","d@gmail.com");
	tambahRekaman(11,"Penerbit E", "Alamat E", "777888999","e@gmail.com");

	echo "Rekaman berhasil ditambahkan.";
	}

}
