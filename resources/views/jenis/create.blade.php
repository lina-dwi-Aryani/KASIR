@extends('adminlte::page')
@section('title', 'Formulir Menambah Janis Barang')
@section('content')
<section class="content container-fluid">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/jenis">
                Jenis Barang</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                Tambah</li>
        </ol>
    </nav>
<div class="row">
    <div class="col-md-12">
        @includeif('partials.errors')
        <div class="card card-default">
            <div class="card-header">
                <span class="card-title">
                    <h2>Menambah Rekaman Jenis Barang</h2>
                </span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('jenis.store') }}"
                    role="form" enctype="multipart/form-data">
                    @csrf
                    @include('jenis.form')
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection