<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('nama', 'Nama') }}
            {{ Form::text('nama', $user->nama, ['class' => 'form-control' . ($errors->has('nama') ? ' is-invalid' : ''), 'placeholder' => 'User']) }}
            {!! $errors->first('nama', '<div class="invalid-feedback">:message</div>') !!}
                                            
            {{ Form::label('email', 'Alamat E-Mail') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'User']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}

            {{ Form::label('jabatan', 'Jabatan') }}
            {{ Form::text('jabatan', $user->jabatan, ['class' => 'form-control' . ($errors->has('jabatan') ? ' is-invalid' : ''), 'placeholder' => 'User']) }}
            {!! $errors->first('jabatan', '<div class="invalid-feedback">:message</div>') !!}

            {{ Form::label('password', 'Password') }}
            {{ Form::text('password', $user->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'User']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}

            <label for="password_confirmation">Konfirmasi Password</label>
    <input type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password">
    @if ($errors->has('password_confirmation'))
        <div class="invalid-feedback">
            {{ $errors->first('password_confirmation') }}
        </div>
    @endif

            {{ Form::label('foto', 'Foto') }}
            <div class="custom-file">
                {{ Form::file('foto', ['class' => 'custom-file-input' . ($errors->has('foto') ? ' is-invalid' : ''), 'id' => 'customFile']) }}
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            {!! $errors->first('foto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
