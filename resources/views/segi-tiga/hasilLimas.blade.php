@section('content')
<h1>Hasil Perhitungan Limas</h1>
<table class="table table-striped table-bordered">
<tr><td>Alas</td><td>{{$limas->alas}}</td></tr>
<tr><td>Tinggi </td><td>{{$limas->tinggi}}</td></tr>
<tr><td>Luas </td><td>{{$limas->volume()}}</td></tr>
</table>
@endsection