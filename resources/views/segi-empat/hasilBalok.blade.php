@section('content')
<h1>Hasil Perhitungan Balok</h1>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<table class="table table-striped table-bordered">
<tr><td>Panjang</td><td>{{$balok->panjang}}</td></tr>
<tr><td>Lebar</td><td>{{$balok->lebar}}</td></tr>
<tr><td>Tinggi</td><td>{{$balok->tinggi}}</td></tr>
<tr><td>Volume</td><td>{{$balok->volume()}}</td></tr>
</table>