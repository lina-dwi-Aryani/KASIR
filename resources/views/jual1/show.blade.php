@extends('adminlte::page')
@section('title', 'Detail Pelanggan')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detail Pelanggan</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $pelanggan->id }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $pelanggan->nama }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $pelanggan->email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </
