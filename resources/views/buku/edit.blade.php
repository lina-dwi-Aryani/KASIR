@extends('layouts.app')
@section('title', 'Buku')

@section('content_header')
    <h2>Buku</h2>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h3> Mengubah Data Buku </h3></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('buku.update', $buku->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('buku.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
