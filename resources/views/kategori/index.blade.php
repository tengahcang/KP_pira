<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div>
        <a href="{{ route('adminkategori.create') }}">+tambah
        </a>
    </div>
    <table>
        <th>
            <tr>no</tr>
            <tr>code</tr>
            <tr>nama kategori</tr>
            <tr>aksi</tr>
        </th>
        <tbody>
            @foreach ($kategoris as $index => $kategori)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $kategori->kode }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td>
                        <a href="{{ route('adminkategori.edit', [$kategori->id]) }}">Edit</a>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('adminkategori.destroy', [$kategori->id]) }}" method="POST">
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
