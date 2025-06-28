@extends('adminlte::page')
@section('title', 'Tansaksi Penjualan')
@section('content')
<h3>TOKO SERBA ADA</h3>
<p>Alamat Jl. Wonosari KM.7 Bantul</p>
<hr>
<div class="row">
<div class="col-sm-2">No Transaksi </div>
<div class="col-sm-4">: <b>{{$id}}</b></div>
</div>
<div class="row">
<div class="col-sm-2">Tanggal </div>
<div class="col-sm-4">: <b>{{$tgl}}</b></div>
</div>
<div class="row">
<div class="col-sm-2">Pelanggan </div>
<div class="col-sm-4">: <b>{{ $pelanggan->nama_pelanggan}}</b></div>
</div>
<table border="1">
<thead>
<tr style="background-color:#c7d1c7;">
<th width="3%">No</th>
<th>Kode</th>
<th>Nama Barang</th>
<th>Qty</th>
<th>Satuan</th>
<th>Harga (Rp)</th>
<th>Total (Rp)</th>
</tr>
</thead>
@php
$i=1;
$total=0;
@endphp
@foreach($djual as $j)
<tr>
<td>{{$i++}}</td>
<td>{{$j->barang_id}}</td>
<td>{{$j->barang->nama_barang}}</td>
<td>{{$j->qty}}</td>
<td>{{ $j->barang->satuan}}</td>
<td style="text-align:right">{{number_format($j->harga_sekarang)}}</td>
<td style="text-align:right">{{number_format($j->qty*$j->harga_sekarang)}}</td>
@php
$total += $j->qty*$j->harga_sekarang;
@endphp
</tr>
@endforeach
<th colspan="6" style="text-align:right">Total</th>
<th style="text-align:right">{{number_format($total)}}</th>
</table>
@endsection