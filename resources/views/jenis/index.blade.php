
@extends('adminlte::page')

@section('title', 'Data Janis Barang')
@section('content')
<div class="container-fluid">
<nav class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">
Jenis Barang</li>
</ol>
</nav>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<div style="display: flex; justify-content: space-between;
align-items: center;">
<span id="card_title">
<h2>{{ __('Data Jenis Barang') }}</h2>
</span>
<div class="float-right">
<a href="{{ route('jenis.create') }}"
class="btn btn-primary btn-sm float-right"
data-placement="left"
title="Tambah rekaman Baru">
<i class="fa fa-fw fa-plus"></i>
{{ __('Tambah') }}</a>
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
<th>Jenis Barang</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach ($jenis as $jen)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $jen->jenis_barang }}</td>
<td>
<form action="{{ route('jenis.destroy',$jen->id) }}"
method="POST">
<a class="btn btn-sm btn-primary "
href="{{ route('jenis.show',$jen->id) }}">
<i class="fa fa-fw fa-eye"></i> Show</a>
<a class="btn btn-sm btn-success"
href="{{ route('jenis.edit',$jen->id) }}">
<i class="fa fa-fw fa-edit"></i> Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger btn-sm">
<i class="fa fa-fw fa-trash">
</i> Delete</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
{!! $jenis->links('pagination::bootstrap-4') !!}
</div>
</div>
</div>
@endsection