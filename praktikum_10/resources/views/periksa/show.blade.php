@extends('layouts.admin_layout')

@section('title')
    Data Periksa
@endsection

@section('card_title')
    Daftar Periksa Aktif
@endsection

@section('content')
    <table class="table table-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Berat</th>
                <th>Tinggi</th>
                <th>Tensi</th>
                <th>Keterangan</th>
                <th>Pasien ID</th>
                <th>Dokter ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_periksa as $periksa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $periksa->tanggal}}</td>
                    <td>{{ $periksa->berat}}</td>
                    <td>{{ $periksa->tinggi}}</td>
                    <td>{{ $periksa->tensi}}</td>
                    <td>{{ $periksa->keterangan}}</td>
                    <td>{{ $periksa->pasien_id}}</td>
                    <td>{{ $periksa->dokter_id}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection