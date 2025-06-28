<!-- edit.blade.php -->

@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Edit Anggota</h1>
                <form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="NomorAnggota">Nomor Anggota</label>
                        <input type="text" name="nomor_Anggota" id="id" class="form-control" value="{{ $anggota->id }}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ $anggota->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kel">Jenis Kelamin</label>
                        <input type="text" name="jenis_kel" id="jenis_kel" class="form-control" value="{{ $anggota->jenis_kel }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $anggota->telepon }}">
                    </div>
                    <div class="form-group">
                        <label for="e_mail">E-Mail</label>
                        <input type="text" name="e_mail" id="e_mail" class="form-control" value="{{ $anggota->e_mail }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $anggota->alamat }}">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lhr">Tanggal_Lahir</label>
                        <input type="text" name="tanggal_lhr" id="tanggal_lhr" class="form-control" value="{{ $anggota->tanggal_lhr }}">
                    </div>
                    <!-- tambahkan input lainnya sesuai kebutuhan -->
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
