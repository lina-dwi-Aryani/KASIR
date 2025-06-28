@extends('layouts.app')
@section('content')
<h2>TOKO</h2>
<table class="table table-responsive martop-sm">
    <thead>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Satuan</th>
        <th>Harga</th>
        <th>Total</th>
    </thead>
    <tbody>
        @php 
        $jumlah=0;
        @endphp

        @foreach ($djual as $d)
            <tr>
                <td>{{ $d->barang_id }}</td>
                <td>{{ $d->nama_barang }}</td>
                <td>{{ $d->jumlah }}</td>
                <td>{{ $d->satuan }}</td>
                <td style="text=align:right;">{{ number_format($d->harga)}} </td>
                <td style="text=align:right;">{{ number_format($d->total)}} </td>
            </tr>
            @php
                $jumlah += $d->jumlah*$d->harga;
            @endphp
        @endforeach
        <tr>
            <td></td> <td></td> <td></td> <td></td> <td>Jumlah</td><td style="text-align:right;">
</tr>
    </tbody>

 </table>
@endsection