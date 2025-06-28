@extends('layouts.app')
@section('content')
<h4>Penerbit Baru</h4>
<form action="{{ route('penerbit.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('penerbit') ?'has-error' : '' }}">
        <label for="penerbit" class="control-label">Penerbit</label>
        <input type="text" class="form-control" name="penerbit"
        placeholder="Penerbit">
        @if ($errors->has('penerbit'))
        <span class="help-block">{{ $errors->first('penerbit') }}
        </span>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('penerbit.index') }}"class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection