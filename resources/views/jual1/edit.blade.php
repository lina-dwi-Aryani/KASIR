@extends('adminlte::page')
@section('title', 'Tambah Pelanggan')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Pelanggan</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('pelanggan.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
