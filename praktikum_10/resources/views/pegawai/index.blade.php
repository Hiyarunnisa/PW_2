<!-- @extends('layouts.admin_layout')

@section('title')
    Halaman Pasien
@endsection

@section('card_title')
    Daftar Pasien
@endsection

@section('content')

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>ririn</td>
            <td>jalan mawar</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>caca</td>
            <td>jalanin aja</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>ahda</td>
            <td>jalanan</td>
        </tr>
    </tbody>
</table>
@endsection
 -->

 <x-layout>
    <x-slot name="card_title">Halaman Pegawai</x-slot>
    <table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Pegawai</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>ririn</td>
            <td>jalan mawar</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>caca</td>
            <td>jalanin aja</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>ahda</td>
            <td>jalanan</td>
        </tr>
    </tbody>
</table>
</x-layout>