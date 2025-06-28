@extends('layouts.app')

@section('content')
    <h3>TABEL BARANG</h3>
    <table class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>NAMA BARANG</th>
            <th>SATUAN</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th>HARGA * STOK</th>
        </tr>
        @php
            $total = 0; // Variable untuk menyimpan jumlah total stok dikali harga
        @endphp
        @foreach($barang as $b)
            <tr>
                <td>{{ $b->id }}</td>
                <td>{{ $b->nama_barang }}</td>
                <td>{{ $b->satuan }}</td>
                <td>{{ $b->harga }}</td>
                <td>{{ $b->stok }}</td>
                <td>{{ $b->harga * $b->stok }}</td>
            </tr>
            @php
                $total += $b->harga * $b->stok; // Menambahkan nilai harga * stok ke total
            @endphp
        @endforeach
        <tr>
            <td colspan="5" style="text-align: right;"><strong>Total:</strong></td>
            <td>{{ $total }}</td>
        </tr>
    </table>
@endsection
