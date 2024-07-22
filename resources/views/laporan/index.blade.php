<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>

    </style>
</head>

<body>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>No. Pelanggan</th>
            <th>Masalah</th>
            <th>Solusi</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <tbody>
            @foreach ($laporans as $index => $laporan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $laporan->no_pelanggan }}</td>
                    <td>{{ $laporan->masalah }}</td>
                    <td>{{ $laporan->solusi }}</td>
                    <td>{{ $laporan->status->nama_status }}</td>
                    <td>
                        <a href="{{ route('adminlaporan.edit', [$laporan->id]) }}">Jawab</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
