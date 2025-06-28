@extends('adminlte::page')
@section('title','Detail Data Pelanggan')
@section('content')
<section class="content container-fluid">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/pelanggan">Pelanggan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">
                            <h2>Detail Data Pelanggan</h2></span>
                    </div >
                </div>
                <table class="table table-condensed">
                <tr>
                    <th style="width:20%">ID </th>
                    <td>: {{ $pelanggan->id }}</td>
                <tr>
                </tr>
                    <th>Nama Pelanggan </th>
                    <td>: {{ $pelanggan->nama_pelanggan }}</td>
                </tr>
                </tr>
                    <th>Jenis Kelamin </th>
                    <td>: {{ $pelanggan->jenis_kelamin }}</td>
                </tr>
                </tr>
                    <th>Alamat </th>
                    <td>: {{ $pelanggan->alamat }}</td>
                </tr>
                </tr>
                    <th>No Telp </th>
                    <td>: {{ $pelanggan->telp_hp }}</td>
                </tr>
                </tr>
                    <th>Alamat Email </th>
                    <td>: {{ $pelanggan->email }}</td>
                </tr>
                
                </table>
            </div>
        </div>
    </div>
</section>
@endsection