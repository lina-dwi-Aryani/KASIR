@extends('layouts.app')
@section('content')
<h4>Tambah Mata Kuliah Baru</h4>
<form action="{{ route('mata-kuliahs.store') }}" method="post">
{{csrf_field()}}
@if (count($errors) > 0)
<div class="alert alert-danger">
Terdapat beberapa kasalahan pada saat mengisi yang harus diperbiki.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('mata_kuliah') }}
            {{ Form::text('mata_kuliah', $mataKuliah->mata_kuliah, ['class' => 'form-control' . ($errors->has('mata_kuliah') ? ' is-invalid' : ''), 'placeholder' => 'Mata Kuliah']) }}
            {!! $errors->first('mata_kuliah', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sks') }}
            {{ Form::text('sks', $mataKuliah->sks, ['class' => 'form-control' . ($errors->has('sks') ? ' is-invalid' : ''), 'placeholder' => 'Sks']) }}
            {!! $errors->first('sks', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('jurusan') }}
            {!! Form::select('jurusan_id',$jur, $mataKuliah->jurusan_id, ['class' => 'form-control'. ($errors->has('jurusan_id') ? ' is-invalid' : ''),'placeholder' => '....pilihan...'])!!}
            {!! $errors->first('jurusan_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('semester') }}
            {{ Form::text('semester', $mataKuliah->semester, ['class' => 'form-control' . ($errors->has('semester') ? ' is-invalid' : ''), 'placeholder' => 'Semester']) }}
            {!! $errors->first('semester', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kurikulum') }}
            {{ Form::text('kurikulum', $mataKuliah->kurikulum, ['class' => 'form-control' . ($errors->has('kurikulum') ? ' is-invalid' : ''), 'placeholder' => 'Kurikulum']) }}
            {!! $errors->first('kurikulum', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('mata-kuliahs.index') }}" class="btn btn-default">Kembali</a>
    </div>
</div>
</form>
@endsection