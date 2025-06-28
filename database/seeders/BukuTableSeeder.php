<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buku')->insert([
            ['judul'=>'Menjadi Jempolan Programer Web PHP','tahun_terbit' =>'2018', 'id_penerbit' => 1,
            'pengarang' => 'Badiyanto','jumlah_hal' => 400,'sampul'=> '10'],
            ['judul'=>'Simulasi Arduino','tahun_terbit' =>'2017', 'id_penerbit' => 2,
            'pengarang' => 'Abdul Kadir','jumlah_hal' => 200,'sampul'=>'10'],
            ['judul'=>'Algoritma dan Pemograman','tahun_terbit' =>'2017', 'id_penerbit' => 1,
            'pengarang' => 'Andi Kristanto','jumlah_hal' => 200,'sampul'=>'10'],
           ['judul'=>'Buku Pintar Framework','tahun_terbit' =>'2014', 'id_penerbit' => 3,
            'pengarang' => 'Badiyanto','jumlah_hal' => 300,'sampul'=>'10'],
            ['judul'=>'Anggaran Belanja teknologi Informasi','tahun_terbit' =>'2017', 'id_penerbit' => 2,
            'pengarang' => 'Erwan Isa','jumlah_hal' => 250,'sampul'=>'10'],
            ['judul'=>'mastering Yii','tahun_terbit' =>'2017', 'id_penerbit' => 3,
            'pengarang' => 'Badiyanto','jumlah_hal' => 400,'sampul'=>'10'],
            ['judul'=>'From Zero To A Pro: Pemograman Aplikasi','tahun_terbit' =>'2017', 'id_penerbit' => 1,
            'pengarang' => 'Abdul kadir','jumlah_hal' => 350,'sampul'=>'10'],
            ['judul'=>'Penatalaksanaan Diet Pada Pasien','tahun_terbit' =>'2017', 'id_penerbit' => 1,
            'pengarang' => 'Retno Wahyuningsih S.Gz','jumlah_hal' => 300,'sampul'=>S'10']
         
        ]);
    }
}
