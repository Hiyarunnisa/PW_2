@extends('layouts.admin_layout')

@section('title')
    Data Kelurahan
@endsection

@section('card_title')
    Daftar Kelurahan Aktif
@endsection

@section('content')
    <table class="table table-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Kecamatan ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_kelurahan as $kelurahan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kelurahan->nama}}</td>
                    <td>{{ $kelurahan->kec_id}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection