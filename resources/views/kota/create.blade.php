@extends('app')
@section('content')
<h4>Kota Baru</h4>
    <form action="{{ route('kota.store') }}" method="post">
        {{csrf_field()}}
        <div class="form-group {{ $errors->has('kota') ?'has-error' : '' }}">
            <label for="kota" class="control-label">Kota</label>
            <input type="text" class="form-control" name="nama_kota"placeholder="Kota">
            @if ($errors->has('kota'))
                <span class="help-block">{{ $errors->first('kota') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('propinsi') ?'has-error' : '' }}">
            <label for="propinsi" class="control-label">Propinsi</label>
            <input type="text" class="form-control" name="id_propinsi"placeholder="Propinsi">
            @if ($errors->has('propinsi'))
                <span class="help-block">{{ $errors->first('propinsi') }}</span>
            @endif
            
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info">Simpan</button>
            <a href="{{ route('propinsi.index') }}"class="btn btn-default">Kembali</a>
        </div>
    </form>
@endsection