<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Pelanggan') }}
            {{ Form::text('nama_pelanggan', $pelanggan->nama_pelanggan,
                ['class' => 'form-control' .
                ($errors->has('nama_pelanggan') ? ' is-invalid' : ''),
                'placeholder' => 'Nama']) }}

            {{ Form::text('jenis_kelamin', $pelanggan->jenis_kelamin,
                ['class' => 'form-control' .
                ($errors->has('jenis_kelamin') ? ' is-invalid' : ''),
                'placeholder' => 'Jenis Kelamin']) }}
                
            
            {{ Form::text('alamat', $pelanggan->alamat,
                ['class' => 'form-control' .
                ($errors->has('alamat') ? ' is-invalid' : ''),
                'placeholder' => 'Alamat']) }}
                
            {{ Form::text('telp_hp', $pelanggan->telp_hp,
                ['class' => 'form-control' .
                ($errors->has('telp_hp') ? ' is-invalid' : ''),
                'placeholder' => 'No Telepon']) }}
                
            
            {{ Form::text('email', $pelanggan->email,
                ['class' => 'form-control' .
                ($errors->has('email') ? ' is-invalid' : ''),
                'placeholder' => 'E-Mail']) }}

                
                {!! $errors->first('nama_pelanggan','jenis_kelamin','alamat','telp_hp','email',
                ' <div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>