@section('content')
<h4>Form Masukan Nilai Balok</h4>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<form action="{{ route('segi-empat.hasilBalok') }}" method="get">
{{csrf_field()}}
@if ($errors->any())
<div class="alert alert-danger">
<strong>Ada kesalahan</strong> Harap diperbaiki.<br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>

@endif
<div class="form-group {{ $errors->has('panjang') ?'has-error' : ''}}">
<label for="panjang" class="control-label">Panjang</label>
<input type="text" class="form-control" name="panjang">
</div>
<div class="form-group {{ $errors->has('lebar') ? 'has-error' : ''}}">
<label for="lebar" class="control-label">Lebar</label>
<input type="text" class="form-control" name="lebar">
</div>
<div class="form-group {{ $errors->has('tebal') ? 'has-error' : ''}}">
<label for="tinggi" class="control-label">Tebal</label>
<input type="text" class="form-control" name="tebal">
</div>
<div class="form-group">
<button type="submit" class="btn btn-info">Proses</button>
</div>
</form>