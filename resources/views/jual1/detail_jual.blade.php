<!DOCTYPE html>
<html lang="en">
@extends('adminlte::page')
@section('title', 'Detail Jual Daftar Belanja')
<script src="/js_css/jquery-3.1.1.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token()}}"/>
<style>
table {
border-collapse: collapse;
}
table, td, th {
border: 1px solid black;
}
</style>
@section('content')
<section class="content container-fluid">
<nav class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item"><a href="/jual/create">
Form Pelanggan</a></li>
<li class="breadcrumb-item active" aria-current="page">
Masukan Daftar Belanja</li>
</ol>
</nav>
<div class="container">
<h1>Daftar Belanja</h1>
<div class="row">
<div class="col-sm-2">Kasa</div>
<div class="col-sm-4">: {{auth()->user()->name}}</div>
</div>
<div class="row">
<div class="col-sm-2">Tanggal Transaksi</div>
<div class="col-sm-4">: {{ date('d-m-Y') }}</div>
</div>
<div class="row">
<div class="col-sm-2">No Transaksi</div>
<div class="col-sm-4">: <b>{{$id}}</b></div>
</div>
<table class="table-primary">
<tr>
<th>Kode</th><th>Nama Barang</th><th>Qty</th>
<th>Satuan</th> <th>Harga (Rp)</th>
<th>Total (Rp)</th>
<th></th>
</tr>
<tr>
<tr>
<form>
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
<input type="hidden" name="jual_id" value={{ $id }}>
<td><input type="text" class="barang_id" size="6" name="barang_id"
title="Setelah diisi tekan enter"></td>
<td> <input size="35" id="nama_barang" type="text"
name="nama_barang" disabled ></td>
<td> <input size="5" type="text" id="qty" name="qty"></td>
<td> <input size="20" id="satuan" type="text" name="satuan" disabled></td>
<td> <input size="10" id="harga" type="number" name="harga_sekarang"
style="text-align:right" disabled></td>
<td> <input size="10" id="total" type="number" name="total"
style="text-align:right"></td>
<td> <input type="button" class="add-row" value="+"></td>
</form>
</tr>
</table>
<br>
<h5>Daftar Belanja</h5>
<table id="table1">
<thead>
<tr style="background-color:#c7d1c7;">
<th width="3%">Pilih</th>
<th>Kode</th>
<th>Nama Barang</th>
<th>Qty</th>
<th>Satuan</th>
<th>Harga (Rp)</th>
<th>Total (Rp)</th>
</tr>
</thead>
<tbody>
</tbody>
<tfoot>
<tr>
<th colspan="6" style="text-align:right">Total :</th>
<td style="text-align:right">
<output id="jtotal" style="text-align:right"></output>
</td>
</tr>
</tfoot>
</table>
<button type="button" class="delete-row">Hapus</button>
<button type="button" class="simpan">Simpan/Cetak</button>
</div>
@endsection
</html>
<script>
$(document).ready(function()
{
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
var jTotal=0;
// kode barang di tekan enter atau tab
$(".barang_id").keypress(function(e){
var keycode = (e.keyCode ? e.keyCode : e.which);
var idx = e.target.value;
if(keycode == '13'){
if ($('.barang_id').val()=="") {
confirm("Kode barang tidak boleh kosong");
return false;
}
$.ajax({ // cari
url: '/bacaBarang',
type: 'POST',
data: {_token: CSRF_TOKEN, id:$(".barang_id").val()},
dataType: 'JSON',
success: function (data) {
if(data.nama_barang === undefined || data.nama_barang === null ){
//console.log("TEST OK");
confirm("Barang Tidak Ada");
$(".barang_id").focus();
system.exit;
}
//console.log(data.nama_barang);
$("#nama_barang").val(data.nama_barang);
$("#harga").val(data.harga);
$("#satuan").val(data.satuan);
$("#qty").val(1);
$("#qty").focus();
}
});
}
});
//jumlah barang ditekan enter
$("#qty").keypress(function(e){
var keycode = (e.keyCode ? e.keyCode : e.which);
var qty = e.target.value;
var total;
var harga;
if(keycode == '13'){//enter
//hitung qty kali harga
harga= parseInt($("#harga").val());
total = parseInt(qty) * harga;
$("#total").val(total);
$(".add-row").focus();
}
}); //akhir qty*harga
//menambahkan ke kranjang belanja
$(".add-row").click(function(){
var barang_id = $(".barang_id").val();
var qty = $("#qty").val();
var nama_barang=$("#nama_barang").val();
var satuan = $("#satuan").val();
var harga = $("#harga").val();
var total = $("#total").val();
jTotal+=parseInt(total);
var html ="<tr><td style=\"text-align:center\">"+
"<input type='checkbox' name='record'></td><td>"+
barang_id+"</td><td>" +
nama_barang+"</td><td style=\"text-align:right\">"+
qty+"</td><td>" +
satuan+"</td><td style=\"text-align:right\">"+
harga+"</td><td style=\"text-align:right\">"+
total+"</td></tr>";
//"<tr><td>"+ jTotal +"</td></tr>";
$("#table1").find('tbody').append(html);
$("#jtotal").val(jTotal);
//kosongkan isian
$(".barang_id").val('');
$(".barang_id").focus();
$("#nama_barang").prop( "disabled", true);
$("#nama_barang").val('');
$("#qty").val(0);
$("#satuan").val('');
$("#harga").val(0);
$("#total").val(0);
}); //akhir menambah kranjang belanja
// Menghapus jika isian salah
$(".delete-row").click(function(){
var jtotal=$("#jtotal").val();
$("table tbody").find('input[name="record"]').
each(function(){
if($(this).is(":checked")){
//kurangi total kalau dihapus
var currow = $(this).closest('tr');
var isicol6=currow.find('td:eq(6)').text();
jtotal-=parseInt(isicol6);
$(this).parents("tr").remove();
$("#jtotal").val(jtotal);
}
});
}); //akhir menghapus jika isian salah
//kirim ke server, simpan rekamanan
$(".simpan").click(function(){
let dataBarang = [];
$("table tbody").find('input[name="record"]').
each(function(){
var currow = $(this).closest('tr');
// isikan ke array dataBarang
dataBarang.push({
'barang_id': currow.find('td:eq(1)').text(),
'qty': currow.find('td:eq(3)').text(),
'harga_sekarang': currow.find('td:eq(5)').text(),
'jual_id': "{{$id}}",
});
});
// kirim ke server untuk disimpan
$.ajax({
url: '/jual/simpan',
type: 'POST',
data: {
_token: CSRF_TOKEN,
idJual: "{{ $id }}",
dataBarang: dataBarang
}
})
.done(function (response) { // jika berhasil
if (response.berhasil) {
window.location.href = response.urlCetak;
}
})
.fail(function (error) { // jika gagal
});
}); //akhir kirim ke server
});
</script>