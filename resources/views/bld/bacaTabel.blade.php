@extends('layouts.app')
@section('content')
<h2>DAFTAR KOTA</h2>
<table class="table table-responsive martop-sm">
    <thead>
        <th>ID</th>
        <th>Propinsi</th>
        <th>Kota</th>
        
    </thead>
    <tbody>
        @foreach ($kota as $k)
            <tr>
                <td>{{ $k->id }}</td>
                <td>{{ $k->getPropinsi->nama_propinsi }}</a></td>
                <td>{{ $k->nama_kota }}</a></td>
            </tr>
        @endforeach
    </tbody>
 </table>
@endsection