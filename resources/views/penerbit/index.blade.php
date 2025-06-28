@extends('layouts.app')

@section('content')
    <h4>Menajemen Tabel Penerbit</h4>
    <a href="{{ route('penerbit.create') }}"class="btn btn-info btn-sm">Propinsi Baru</a>
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Penerbit</th>
<th>Alamat</th>
<th>Telepon</th>
<th>E_mail</th>
            <th>Action</th>
    </thead>
    <tbody>
    @foreach ($penerbit as $p)
        <tr>
        <td>{{ $p->id }}</td>
<td><a href="{{ route('penerbit.show',
$p->id) }}">
{{ $p->id_penerbit }}</a></td>
<td>
<form action="{{ route('penerbit.destroy', $p->id) }}"method="post">
{{csrf_field()}}
{{ method_field('DELETE') }}
<a href="{{ route('penerbit.edit', $p->id) }}"
class="btn btn-warning btn-sm">Ubah</a>
<button type="submit"
class="btn btn-danger btn-sm">Hapus</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
{!! $penerbit->render() !!}
@endsection