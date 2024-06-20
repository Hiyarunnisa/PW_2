<!-- <x-layout>
  <x-slot name="card_title">Dashboard Admin</x-slot>

  <h3>Selamat Datang Admin, {{ $username ?? ''}} !</h3>
  <p>Ini Adalah Halaman Admin.</p>
</x-layout> -->

@extends('layouts.admin_layout')

@section('title')
    Dashboard
@endsection

@section('card_title')
    Dashboard Admin
@endsection

@section('content')
    <h3>Selamat Datang Admin {{ $username ?? '' }}</h3>
    <p>Ini Adalah Halaman Admin.</p>
@endsection
