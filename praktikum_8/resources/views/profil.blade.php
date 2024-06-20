@php
    $username = 'riani';
    $role = 'admin';
@endphp

@if ($role == 'admin')
        <h3>Selamat datang {{ $username }} Anda adalah seorang {{ $role }}</h3>
@else
        <h3>Selamat datag {{ $username }} Anda adalah seorang User</h3>
@endif