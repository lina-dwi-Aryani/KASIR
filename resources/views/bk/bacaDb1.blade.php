@extends('layouts.app')
<h3>TABEL BUKU</h3>
<table class="table table-striped table-bordered">
<tr><td>ID</td><td>JUDUL</td><td>THN TERBIT</td><td>ID PENERBIT</td>
<td>PENGARANG</td><td>JML HALAMAN</td><td>SAMPUL</td><td>CREATED_AT</td>
<td>UPDATED_AT</td><td>ID_USER</td></tr>
@foreach($kota as $k)
    <tr>
        <td>{{ $k->id }}</td>
        <td>{{ $k->judul }}</td>
        <td>{{ $k->tahun_terbit }}</td>
        <td>{{ $k->id_penerbit }}</td>
        <td>{{ $k->pengarang }}</td>
        <td>{{ $k->jumlah_hal }}</td>
        <td>{{ $k->sampul }}</td>
        <td>{{ $k->created_at }}</td>
        <td>{{ $k->updated_at }}</td>
        <td>{{ $k->id_user }}</td>
    </tr>
@endforeach
</table>