@extends('layouts.app')
<h3>TABEL BARANG</h3>
<table class="table table-striped table-bordered">
<tr><td>ID</td><td>NAMA BARANG</td><td>SATUAN</td><td>HARGA</td><td>STOK</td></tr>
@foreach($barang as $b)
    <tr>
        <td>{{ $b->id }}</td>
        <td>{{ $b->nama_barang }}</td>
        <td>{{ $b->satuan }}</td>
        <td>{{ $b->harga }}</td>
        <td>{{ $b->stok }}</td>
    </tr>
@endforeach
</table>