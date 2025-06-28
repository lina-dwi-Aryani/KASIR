@extends('app')
@section('content')
    <h4>Ubah Kota</h4>
    <form action="{{ route('kota.update', $kota->id) }}" method="post">
        {{csrf_field()}}
        {{ method_field('PUT') }}
        <div class="form-group {{ $errors->has('kota') ? 'has-error' : '' }}">
            <label for="kota" class="control-label">Kota</label>
            <input type="text" class="form-control" name="nama_kota"placeholder="Kota" value="{{ $kota->nama_kota }}">
    
            @if ($errors->has('kota'))
                <span class="help-block">{{ $errors->first('kota') }}</span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info">Simpan</button>
            <a href="{{ route('kota.index') }}"class="btn btn-default">Kembali</a>
        </div>
    </form>
@endsection