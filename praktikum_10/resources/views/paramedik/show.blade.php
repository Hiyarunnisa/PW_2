@extends('layouts.admin_layout')

@section('title')
    Data Paramedik
@endsection

@section('card_title')
    Daftar Paramedik Aktif
@endsection

@section('content')
    <table class="table table-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kategori</th>
                <th>Telpon</th>
                <th>Alamat</th>
                <th>Unit Kerja ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_paramedik as $paramedik)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $paramedik->nama}}</td>
                    <td>{{ $paramedik->gender}}</td>
                    <td>{{ $paramedik->tmp_lahir}}</td>
                    <td>{{ $paramedik->tgl_lahir}}</td>
                    <td>{{ $paramedik->kategori}}</td>
                    <td>{{ $paramedik->telpon}}</td>
                    <td>{{ $paramedik->alamat}}</td>
                    <td>{{ $paramedik->unit_kerja}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection