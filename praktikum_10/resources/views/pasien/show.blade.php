@extends('layouts.admin_layout')

@section('title')
    Data Pasien
@endsection

@section('card_title')
    Daftar Pasien Aktif
@endsection

@section('content')
    <table class="table table-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Pasien</th>
                <th>Nama Pasien</th>
                <th>Tanggal Lahir</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_pasien as $pasien)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pasien->kode}}</td>
                    <td>{{ $pasien->nama}}</td>
                    <td>{{ $pasien->tgl_lahir}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection