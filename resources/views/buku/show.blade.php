@extends('layouts.app')
@section('title', 'Buku')

@section('content_header')
      <h2>  {{ $buku->judul ?? 'Show Buku' }}</h2>
@stop
@section('content')
<h1 class="fa fa-check-square-o" style="font-size:28px;">Tampilkan Kode Buku : {{ $buku->id}}</h1>
 <div class="pull-right">
  <a class="btn btn-primary" href="{{ route('buku.edit',$buku->id) }}">Ubah</a>
  <a class="btn btn-primary" href="{{ route('buku.index') }}"> Kembali</a>
</div>

<table class="table table-striped table-bordered">
<tr><td>Id</td><td>{{$buku->id}}</td></tr>
<tr><td>Judul </td><td>{{$buku->judul}}</td></tr>
<tr><td>Pengarang </td><td>{{$buku->pengarang}}</td></tr>
<tr><td>Penerbit </td><td>{{$buku->pen->penerbit}}</td></tr>
<tr><td>Tahun </td><td>{{$buku->tahun_terbit}}</td></tr>
<tr><td>Sampul </td><td><img src= "{{url('gambar')}}/{{$buku->sampul}}" ></td></tr>
</table> 
</section>
@endsection
