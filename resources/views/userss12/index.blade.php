@extends('adminlte::page')
@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
    <p>{{ $message }}</p>
    </div>
@endif
<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left">
    <h2 class="fa fa-check-square-o" style="font-size:28px;">
        Tabel Rekaman User</h2>
    </div>
</div>
<a href="{{ url('users/create') }}"
    class="btn btn-primary btn-sm">
<span class="glyphicon glyphicon-plus"></span> Tambah User</a>
<table class="table table-striped table-bordered">
    <thead>
        <tr style="color: #fff"; bgcolor="#4CAF50">
            <th>Nama</th>
            <th>Email</th>
            <th>Jabatan</th>
            <th>foto</th>
            <th width="240px">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @php $i=0; @endphp
    @foreach($users as $key => $value)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->nama}}</td>
        <td>{{ $value->emai; }}</td>
        <td>{{ $value->jabatan }}</td>
        <td>{{ $value->foto }}</td>
        <td align="center">
        <a class="btn btn-info " href="{{
        route('users.show',$value->id) }}">Lihat</a>
        <a class="btn btn-primary" href="{{
        route('users.edit',$value->id) }}">Ubah</a>
        {!! Form::open(['method' => 'DELETE','route' =>
        ['users.destroy', $value->id],
        'style'=>'display:inline']) !!}
        {!! Form::submit('Hapus', ['class' =>
        'btn btn-danger confirm','data-confirm' =>
        'Are you sure you want to delete?'])!!}
        {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
{!! $users->render() !!}
@endsection
