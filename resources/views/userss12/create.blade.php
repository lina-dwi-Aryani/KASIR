
@extends('adminlte::page')
@section('content')
<h3>Masukan Data User Baru</h3>
{!! Form::open(['route' => 'user.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}

<div class="form-group">
    {!! Form::label('nama', 'Nama User:',['class' => 'control-label']) !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:',['class' =>'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('jabatan', 'Jabatan:',['class' => 'control-label']) !!}
    {!! Form::text('jabatan', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('foto', 'Foto:',
    ['class' => 'control-label']) !!}
    {{ Form::file('foto', ['class' => 'form-control']) }}
</div>



{!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection