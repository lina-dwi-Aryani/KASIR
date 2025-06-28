@extends('adminlte::page')
@section('title','Detail Barang')
@section('content')
<section class="content container-fluid">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/barang">Barang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">
                            <h2>Detail Barang</h2>
                        </span>
                    </div>
                </div>
                <table class="table table-condensed">
                <tr>
                    <th style="width:20%">ID(Kode)</th>
                    <td>: {{ $barang->id }}</td>
                </tr>
                <tr>
                    <th>Jenis</th>
                    <td>: {{ $barang->jenis->jenis_barang}}</td>
                </tr>
                <tr>
                    <th>Nama Barang</th>
                    <td>: {{ $barang->nama_barang }}</td>
                </tr>
                <tr>
                    <th>Satuan:</th>
                    <td>: {{ $barang->satuan }}</td>
                </tr>
                <tr>
                    <th>Harga:</th>
                    <td>: {{ $barang->harga }}</td>
                </tr>
                <tr>
                    <th>Stok</th>
                    <td>: {{ $barang->stok }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
</section>
@endsection