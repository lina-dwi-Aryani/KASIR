@extends('adminlte::page')
@section('title','Detail Jenis Barang')
@section('content')
<section class="content container-fluid">
<nav class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item"><a href="/jenis">
Jenis Barang</a></li>
<li class="breadcrumb-item active" aria-current="page">
Detail</li>
</ol>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<div class="float-left">
<span class="card-title">
<h2>Detail Jenis Barang</h2></span>
</div >
</div>
<table class="table table-condensed">
<tr>
<th style="width:20%">ID </th>
<td>: {{ $jenis->id }}</td>
<tr>
</tr>
<th>Jenis Barang </th>
<td>: {{ $jenis->jenis_barang }}</td>
</tr>
</table>
</div>
</div>
</div>
</section>
@endsection