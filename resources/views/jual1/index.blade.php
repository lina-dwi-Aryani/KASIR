@extends('adminlte::page')
@section('title', 'Daftar Pelanggan')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Pelanggan</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('jual.create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pelanggan as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->email }}</td>
                            <td>
                                <a href="{{ route('pelanggan.show', $p->id) }}" class="btn btn-info">Detail</a>
                                <a href="{{ route('pelanggan.edit', $p->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('pelanggan.destroy', $p->id) }}" method="POST" style="display: inline-block;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pelanggan ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
