@section('content')
<h1>Hasil Perhitungan Segi Tiga</h1>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<table class="table table-striped table-bordered">
<tr><td>Alas </td><td>{{$segiTiga->alas}}</td></tr>
<tr><td>Tinggi </td><td>{{$segiTiga->tinggi}}</td></tr>
<tr><td>Luas </td><td>{{$segiTiga->luas()}}</td></tr>
<tr><td>Keliling </td><td>{{$segiTiga->keliling()}}</td></tr>
</table>
