@extends('app')
@section('content')
    <h4>Menajemen Tabel Kota</h4>
    <a href="{{ route('kota.create') }}"
    class="btn btn-info btn-sm">Kota Baru</a>
    @if ($message = Session::get('message'))
    <div class="alert alert-success martop-sm">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-responsive martop-sm">
    <thead>
        <th>ID</th>
        <th>Propinsi</th>
        <th>Kota</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($kota as $k)
        <tr>
            <td>{{ $k->id }}</td>
            <td>{{ $k->getPropinsi->nama_propinsi}}</td>
            <td><a href="{{ route('kota.show',$k->id) }}">
                {{ $k->nama_kota }}</a>
            </td>
            <td>
                <form action="{{ route('kota.destroy', $k->id) }}"method="post">
                    {{csrf_field()}}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('kota.edit', $k->id) }}"class="btn btn-warning btn-sm">Ubah</a>
                    <button type="submit"class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>   
        @endforeach
    </tbody>
</table>
{!! $kota->render() !!}
@endsection