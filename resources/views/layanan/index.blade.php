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
    <div>
        <a href="{{ route('adminlayanan.create') }}">+tambah
        </a>
    </div>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama Layanan</th>
            <th>Detail</th>
            <th>Kategori</th>
            <th>aksi</th>
        </tr>
        <tbody>
            @foreach ($layanans as $index => $layanan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $layanan->nama_layanan }}</td>
                    <td>{{ $layanan->detail }}</td>
                    <td>{{ $layanan->id_kategori }}</td>
                    <td>
                        <a href="{{ route('adminlayanan.edit', [$layanan->id]) }}">Edit</a>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('adminlayanan.destroy', [$layanan->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
