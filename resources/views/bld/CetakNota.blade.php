@extends('layouts.app')
@section('content')
<h2>NO NOTA</h2>
<form action="{{ route('bld.proses') }}" method= "post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="NoNota" class="control-label"> No NOTA</label>
        <input type="text" class="form-control" name="jual_id" placeholder="nonota">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Proses</button>
    </div>
</form>
@endsection