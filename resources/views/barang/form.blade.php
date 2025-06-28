<div class="box box-info padding-1">
<div class="box-body">
<div class="form-group">
    {{ Form::label('Kode Barang') }}
    {{ Form::text('id',$barang->id, ['class'=>'form-control' .
        ($errors->has('id') ? ' is-invalid' : ''),'placeholder' => 'kode']) }}
    {!! $errors->first('id','<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('jenis Barang') }}
    {{ Form::select('jenis_id',$jenis, $barang->jenis_id ,
        ['class' => 'form-control' .
    ($errors->has('jenis_id') ? ' is-invalid' : ''),
        'placeholder'=>'--- pilih ---']) }}
    {!! $errors->first('jenis_id', '<div class="invalidfeedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('nama_barang') }}
    {{ Form::text('nama_barang',$barang->nama_barang,['class'=>'form-control'.
        ($errors->has('nama_barang') ? ' is-invalid' : ''),
            'placeholder' => 'Nama Barang']) }}
    {!! $errors->first('nama_barang','<div class="invalid-feedback">
        :message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('satuan') }}
    {{ Form::text('satuan', $barang->satuan, ['class' => 'form-control'.
    ($errors->has('satuan') ? ' is-invalid' : ''),'placeholder'=>'Satuan']) }}
    {!! $errors->first('satuan','<div class="invalid-feedback">:message</div>')
    !!}
</div>
<div class="form-group">
    {{ Form::label('harga') }}
    {{ Form::text('harga', $barang->harga, ['class' => 'form-control'.
    ($errors->has('harga') ? ' is-invalid' : ''), 'placeholder' => 'Harga']) }}
    {!! $errors->first('harga', '<div class="invalid-feedback">:message</div>')
    !!}
</div>
<div class="form-group">
    {{ Form::label('stok') }}
    {{ Form::text('stok', $barang->stok, ['class' => 'form-control'.
    ($errors->has('stok') ? ' is-invalid' : ''), 'placeholder'=>'Stok'])}}
    {!! $errors->first('stok', '<div class="invalid-feedback">:message</div>')
    !!}
</div>
    {{ Form::hidden('user_id',auth()->user()->id) }}
</div>
<div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">Sinpan</button>
</div>
</div>
