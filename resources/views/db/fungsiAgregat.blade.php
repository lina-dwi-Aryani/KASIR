@extends('layouts.app')
<h3>TABEL BARANG</h3>
<table class="table table-striped table-bordered">
<tr><td>ID</td><td>JENIS ID</td><td>NAMA BARANG</td><td>SATUAN</td><td>HARGA</td><td>STOK</td><td>USER ID</td></tr>
@foreach($barang as $k)
    <tr>
        <td>{{ $k->id }}</td>
        <td>{{ $k->jenis_id }}</td>
        <td>{{ $k->nama_barang }}</td>
        <td>{{ $k->satuan }}</td>
        <td>{{ $k->harga }}</td>
        <td>{{ $k->stok }}</td>
        <td>{{ $k->user_id }}</td>
    </tr>
@endforeach
</table>