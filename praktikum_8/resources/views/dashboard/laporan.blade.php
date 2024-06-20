<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>Tahun: {{ $tahun }}</p>

    <table border="1">
        <thead>
            <tr>
                <th>Program Studi</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_mhs as $mhs)
                <tr>
                    <td>{{ $mhs['prodi'] }}</td>
                    <td>{{ $mhs['jumlah'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>