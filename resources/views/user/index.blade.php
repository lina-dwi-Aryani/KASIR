@extends('adminlte::page')
@section('title', 'Data User')
@section('content')
<div class="container-fluid">
<nav class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">
User</li>
</ol>
</nav>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<div style="display: flex; justify-content: space-between;
align-items: center;">
<span id="card_title">
<h2>{{ __('Data User') }}</h2>
</span>
<div class="float-right">
<a href="{{ route('user.create') }}"
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
<th>ID</th>
<th>Foto</th>
<th>Nama</th>
<th>E-mail</th>
<th>Jabatan</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach ($user as $use)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $use->foto }}</td>
<td>{{ $use->Nama }}</td>
<td>{{ $use->email }}</td>
<td>{{ $use->foto }}</td>
<td>{{ $use->jabatan }}</td>
<td>
<form action="{{ route('user.destroy',$use->id) }}"
method="POST">
<a class="btn btn-sm btn-primary "
href="{{ route('user.show',$use->id) }}">
<i class="fa fa-fw fa-eye"></i> Show</a>
<a class="btn btn-sm btn-success"
href="{{ route('user.edit',$use->id) }}">
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
{!! $user->links('pagination::bootstrap-4') !!}
</div>
</div>
</div>
@endsection