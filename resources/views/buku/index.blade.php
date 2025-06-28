@extends('layouts.app')
@section('content')
 <h4>Menajemen Tabel Buku</h4>
 <a href="{{ route('buku.create') }}" class="btn btn-info btn-sm">Tambah Buku</a>

 @if ($message = Session::get('message'))
 <div class="alert alert-success martop-sm">
     <p>{{ $message }}</p>
 </div>
 @endif
 <table class="table">
 <thead>
 <th>ID</th>
 <th>Judul</th>
 <th>Pengarang</th>
 <th>Tahun</th>
 <th>Sampul</th>
 
 <th>Action</th>
 </thead>
 <tbody>
 @foreach ($buku  as $b) 
    <tr>
    <td>{{ $b->id }}</td>
    <td>{{ $b->judul }}</td>
    <td>{{ $b->pengarang}}</td>
    <td>{{ $b->tahun}}</td>
    <td><img src="{{ url('gambar') }}/{{ $b->sampul }}" class="img-responsive"  width="50" height="70"></td>
    <td>
    <a class="btn btn-sm btn-primary " href="{{ route('buku.show',$b->id) }}"><i class="fa fa-fw fa-eye"></i> Lihat</a>
    <form action="{{ route('buku.destroy', $b->id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('DELETE') }}
    <a href="{{ route('buku.edit', $b->id) }}"  class="btn btn-warning btn-sm">Ubah</a>
    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
    </form>
    </td>
    </tr>
 @endforeach
 
 </tbody>
 </table>
 {{ $buku->links() }}
@endsection