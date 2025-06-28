 <div class="box box-info padding-1">

 <div class="form-group row"> 
    <div class="col-sm-2">
     {{ Form::label('Judul') }}
    </div>
    <div class="col-sm-10"> 
    {{ Form::text('judul', $buku->judul, ['class' => 'form-control' . ($errors->has('judul') ? ' is-invalid' : ''),
       'placeholder' => 'judul']) }}
    {!! $errors->first('judul', '<div class="invalid-feedback">:message</p>') !!}
    </div> 
</div>    

<div class="form-group row"> 
    <div class="col-sm-2">
     {{ Form::label('Pengarang') }}
    </div>
    <div class="col-sm-10"> 
    {{ Form::text('pengarang', $buku->pengarang, ['class' => 'form-control' . ($errors->has('pengarang') ? ' is-invalid' : ''),
       'placeholder' => 'pengarang']) }}
    {!! $errors->first('pengarang', '<div class="invalid-feedback">:message</p>') !!}
    </div> 
</div>    

 
 <div class="form-group row">
 <div class="col-sm-2">
 {{ Form::label('Pernerbit') }}
 </div>
    <div class="col-sm-10"> 
    {!! Form::select('id_penerbit',$penerbit, $buku->id_penerbit, ['class' => 'form-control'.
    ($errors->has('id_penerbit') ? ' isinvalid' : ''),'placeholder' => '....pilihan...'])!!}
    {!! $errors->first('id_penerbit', '<div class="invalidfeedback">:message</p>') !!}
    </div>
 </div>

 <div class="form-group row"> 
    <div class="col-sm-2">
     {{ Form::label('Tahun') }}
    </div>
    <div class="col-sm-10"> 
    {{ Form::text('tahun', $buku->tahun, ['class' => 'form-control' . ($errors->has('tahun') ? ' is-invalid' : ''),
       'placeholder' => 'tahun']) }}
    {!! $errors->first('tahun', '<div class="invalid-feedback">:message</p>') !!}
    </div> 
</div>    

<div class="form-group row"> 
    <div class="col-sm-2">
     {{ Form::label('Jumlah Halaman') }}
    </div>
    <div class="col-sm-10"> 
    {{ Form::text('jumlah_hal', $buku->jumlah_hal, ['class' => 'form-control' . ($errors->has('jumlah_hal') ? ' is-invalid' : ''),
       'placeholder' => 'jumlah_hal']) }}
    {!! $errors->first('jumlah_hal', '<div class="invalid-feedback">:message</p>') !!}
    </div> 
</div>    

<div class="form-group row"> 
    <div class="col-sm-2">
     {{ Form::label('Sampul') }}
    </div>
    <div class="col-sm-10"> 
    {{ Form::file('sampul', $buku->sampul, ['class' => 'form-control' . ($errors->has('sampul') ? ' is-invalid' : ''),
       'placeholder' => 'sampul']) }}
    {!! $errors->first('sampul', '<div class="invalid-feedback">:message</p>') !!}
    </div> 
</div>    
 <div class="box-footer mt20">
 <button type="submit" class="btn btn-primary">Simpan</button>
 </div>
</div>