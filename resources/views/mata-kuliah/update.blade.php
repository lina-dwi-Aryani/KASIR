@extends('layouts.app')
@section('template_title')
Create Mata Kuliah
@endsection
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h2>Tambah Mata Kuliah</h2></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('matakuliahs.update',$mataKuliah->id ) }}" 
                            role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH')}}
                            @csrf
                            @include('mata-kuliah.form')
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection