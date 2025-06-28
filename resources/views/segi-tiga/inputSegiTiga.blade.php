@section('content')
<h4>Form Masukan Nilai SegiTiga</h4>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<form action="{{ route('segi-tiga.hasilSegiTiga') }}" method="get">
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
<div class="form-group {{ $errors->has('tinggi') ?'has-error' : ''}}">
    <label for="tinggi" class="control-label">Tinggi</label>
    <input type="text" class="form-control" name="tinggi">
</div>
<div class="form-group {{ $errors->has('alas') ? 'has-error' : ''}}">
    <label for="alas" class="control-label">Alas</label>
    <input type="text" class="form-control" name="alas">
</div>

<div class="form-group">
<button type="submit" class="btn btn-info">Proses</button>
</div>
</form>