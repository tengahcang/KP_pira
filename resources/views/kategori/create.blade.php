<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/sass/app.scss')

</head>

<body>
    <form action="{{ route('adminkategori.store') }}" method="POST">
        @csrf
        <h3>Tambah Kategori</h3>
        <div>
            <label>Kode</label>
            <input class="@error('kode') is-invalid @enderror" type="text" name="kode"
                id="kode"placeholder="Masukkan kode">
            @error('kode')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <label>Nama Kategori</label>
        <input class="@error('nama_kategori') is-invalid @enderror" type="text" name="nama_kategori"
            id="nama_kategori" value="{{ old('nama_kategori') }}" placeholder="Masukkan Nama Kategori">
        @error('nama_kategori')
            <small>{{ $message }}</small>
        @enderror
        </div>
        <div>
            <button type=submit>Tambah</button>
        </div>
        @vite('resources/js/app.js')

</body>

</html>
