@extends('layouts.app')
@section('template_title')
@endsection
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h2>Tambah Anggota</h2></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('anggota.update',$anggota->id ) }}" 
                            role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH')}}
                            @csrf
                            @include('anggota.form')
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection