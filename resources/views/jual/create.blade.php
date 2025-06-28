@extends('adminlte::page')
@section('title', 'Pelanggan')
<link rel="stylesheet" href="/js_css/bootstrap.min.css">
<script src= "/js_css/jquery-1.12.4.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
@section('content')
<h2>Tambah Transaksi Penjualan</h2>
<div class="card">
<div class="card-body">
<table>
{{ csrf_field() }}
<input type = "hidden" name = "_token"
value = "<?php echo csrf_token() ?>">
<tr>
<td>Nomor Transaksi</td>
<td><input type="text" class="id" name="id"
value="{{ $jual->id}}" size=50></td>
</tr>
<tr>
<td>Tanggal</td>
<td><input type="text" class="tanggal" name="tanggal"
value="{{ $jual->tanggal}}" size=50></td>
</tr>
<tr>
<td>Kasir</td>
<td><input type="text" class="username" name="username"
value="{{auth()->user()->name}}" size=50></td>
</tr>
<tr>
<td>Nomor ID Anggota [tekan enter]</td>
<td><input type="text" class="pelanggan_id"
name="pelanggan_id" size=50></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" id="nama_pelanggan"
name="nama_pelanggan" size=50></td>
</tr>
</table>
<div class="form-group">
<button type="button" class="proses">Proses</button>
</div>
</div>
@endsection
<script>
$(document).ready(function(){
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(".pelanggan_id").keypress(function(e)
{
var keycode = (e.keyCode ? e.keyCode : e.which);
if(keycode == '13')
{
$.ajax({ // cari
url: '/bacaPelanggan',
type: 'POST',
data: {_token: CSRF_TOKEN, pelanggan_id:$(".pelanggan_id").val() },
dataType: 'JSON',
success: function (data)
{
$("#nama_pelanggan").val(data.nama_pelanggan);
},
error: function(xhr, status, error)
{
var errorMessage = xhr.status + ': ' + xhr.statusText;
alert('Error - ' + errorMessage);
}
});
}
});
/// lanjutan bisa tambahkan disini
 $(".proses").click(function(){
$.ajax({ // simpan
url: '/jual/store',
type: 'POST',
data: {_token: CSRF_TOKEN,
id:$(".id").val(),
pelanggan_id:$(".pelanggan_id").val(),
}
});
$(location).attr('href',"{{ url('/detailJual') }}/"+$(".id").val());
});
});

</script>