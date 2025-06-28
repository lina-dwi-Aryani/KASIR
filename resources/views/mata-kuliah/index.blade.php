@extends('layouts.app')
@section('template_title')
    Mata Kuliah
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            
                            <span id="card_title">
                            <h2>{{ __('Mata Kuliah') }} </h2>
                            </span>
                           
                            <div class="float-right">
                                <a href="{{ route('mata-kuliahs.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                            {{ __('Tambah') }}
                                </a>
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
                                    <th>Kode</th>
                                    <th>Mata Kuliah</th>
                                    <th>Sks</th>
                                    <th>Jurusan</th>
                                    <th>Semester</th>
                                    <th>Kurikulum</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mataKuliahs as $mataKuliah)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $mataKuliah->id }}</td>
                                        <td>{{ $mataKuliah->mata_kuliah }}</td>
                                        <td>{{ $mataKuliah->sks }}</td>
                                        <td>{{ $mataKuliah->jurusan_id }}</td>
                                        <td>{{ $mataKuliah->semester }}</td>
                                        <td>{{ $mataKuliah->kurikulum }}</td>
                                        <td>
                                            <form action="{{ route('mata-kuliahs.destroy',$mataKuliah->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('mata-kuliahs.show',$mataKuliah->id) }}"><i class="fa fa-
                                                    fw fa-eye"></i> Show</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('mata-kuliahs.edit',$mataKuliah->id) }}"><i class="fa fa-
                                                    fw fa-edit"></i> Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $mataKuliahs->links() !!}
        </div>
    </div>
</div>
@endsection