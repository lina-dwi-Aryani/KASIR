@extends('layouts.app')
@section('content')
<h4>Tambah Masiswa Baru</h4>
<form action="{{ route('mahasiswa.store') }}" method="post">
{{csrf_field()}}
@if (count($errors) > 0)
<div class="alert alert-danger">
Terdapat beberapa kasalahan pada saat mengisi yang harus diperbiki.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif