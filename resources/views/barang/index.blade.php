@extends('adminlte::page')
@section('title', 'Data Barang')
@section('content')
<div class="container-fluid">
<nav class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Barang</li>
</ol>
</nav>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<div style="display: flex; justify-content: space-between;
align-items: center;">
<span id="card_title"><h2>{{ __('Data Barang') }}</h2>
</span>
<div class="float-right">
<a href="{{ route('barang.create') }}"
class="btn btn-primary btn-sm float-right" data-placement="left"
title="Tambah rekaman Baru">
<i class="fa fa-fw fa-plus"></i>
{{ __('Tambah') }}
</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<div class="card-body">
<div class="table-responsive">
<table class="table table-striped table-hover">
<thead class="thead">
<tr>
<th>No</th>
<th>Kode</th>
<th>Jenis</th>
<th>Nama Barang</th>
<th>Satuan</th>
<th>Harga</th>
<th>Stok</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach ($barang as $brg)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $brg->id }}</td>
<td>{{ $brg->jenis->jenis_barang }}</td>
<td>{{ $brg->nama_barang }}</td>
<td>{{ $brg->satuan }}</td>
<td>{{ $brg->harga }}</td>
<td>{{ $brg->stok }}</td>
<td>
<form action="{{ route('barang.destroy',$brg->id) }}"
method="POST">
<a class="btn btn-sm btn-primary "
href="{{route('barang.show',$brg->id)}}">
<i class="fa fa-fw fa-eye"></i> Lihat</a>
<a class="btn btn-sm btn-success"
href="{{route('barang.edit',$brg->id)}}">
<i class="fa fa-fw fa-edit"></i> Ubah</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger btn-sm">
<i class="fa fa-fw fa-trash">
</i> Hapus</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
{!! $barang->links('pagination::bootstrap-4') !!}
</div>
</div>
@endsection
</div>