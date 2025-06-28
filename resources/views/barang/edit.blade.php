@extends('adminlte::page')
@section('title', 'Mengubah Reakanam Barang')
@section('content')
<section class="content container-fluid">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/barang">Barang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ubah</li>
        </ol>
    </nav>
    <div class="rows">
        <div class="col-md-12">
            @includeif('partials.errors')
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Mengubah Rekaman Barang</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('barang.update', $barang->id)}}"
                        role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf
                        @include('barang.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection