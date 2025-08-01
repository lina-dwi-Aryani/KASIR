@extends('adminlte::page')
@section('title', 'Data Pelanggan')
@section('content')
<div class="container-fluid">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pelanggan</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between;align-items: center;">
                        <span id="card_title">
                            <h2>{{ __('Data Pelanggan') }}</h2>
                        </span>
                    <div class="float-right">
                    <a href="{{ route('pelanggan.create') }}"class="btn btn-primary btn-sm float-right"
                            data-placement="left" title="Tambah rekaman Baru">
                        <i class="fa fa-fw fa-plus"></i>
                        {{ __('Tambah') }}</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="thead">
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($pelanggan as $pel)
                                <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $pel->nama_pelanggan }}</td>
                                <td>{{ $pel->email }}</td>
                                <td>
                                    <form action="{{ route('pelanggan.destroy',$pel->id) }}"method="POST">
                                        <a class="btn btn-sm btn-primary "href="{{ route('pelanggan.show',$pel->id) }}">
                                            <i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success"href="{{ route('pelanggan.edit',$pel->id) }}">
                                            <i class="fa fa-fw fa-edit"></i> Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-fw fa-trash">
                                                </i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $pelanggan->links('pagination::bootstrap-4') !!}
        </div>
    </div>
</div>
@endsection