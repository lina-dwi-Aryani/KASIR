<div class="box box-info padding-1">
<div class="box-body">
<div class="form-group">
{{ Form::label('jenis_barang') }}
{{ Form::text('jenis_barang', $jenis->jenis_barang,
['class' => 'form-control' .
($errors->has('jenis_barang') ? ' is-invalid' : ''),
'placeholder' => 'Jenis Barang']) }}
{!! $errors->first('jenis_barang',
' <div class="invalid-feedback">:message</div>') !!}
</div>
</div>
<div class="box-footer mt20">
<button type="submit" class="btn btn-
primary">Simpan</button>
</div>
</div>