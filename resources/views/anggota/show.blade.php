<!-- show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Detail Anggota</h1>
                <table class="table">
                    <tr>
                        <th>Nomor Anggota</th>
                        <td>{{ $anggota->id }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $anggota->nama }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>{{ $anggota->jenis_kel }}</td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <td>{{ $anggota->telepon }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $anggota->alamat }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td>{{ $anggota->tanggal_lhr }}</td>
                    </tr>
                    <tr>
                        <th>E-Mail</th>
                        <td>{{ $anggota->e_mail }}</td>
                    </tr>
                    <!-- tambahkan kolom lainnya sesuai kebutuhan -->
                </table>
                <div class="btn-group">
                    <a href="{{ route('anggota.edit', $anggota->id) }}" class="btn btn-primary">Edit</a>
                    
                        <button type="submit" class="btn btn-danger">kembali</button>
                </div>
            </div>
        </div>
    </div>
@endsection
