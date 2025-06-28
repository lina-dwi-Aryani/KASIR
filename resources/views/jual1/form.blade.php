@extends('adminlte::page')
@section('title', 'Form Pelanggan')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ $action }}" method="POST">
                {{ csrf_field() }}

                @if ($method === 'PUT')
                    {{ method_field('PUT') }}
                @endif

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $pelanggan->nama) }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $pelanggan->email) }}" required>
                </div>

                <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
            </form>
        </div>
    </div>
@endsection
