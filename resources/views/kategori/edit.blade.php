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
    <form action="{{ route('adminkategori.update', [$kategori->id]) }}" method="POST">
        @csrf
        @method('put')
        <h3>Edit Kategori</h3>
        <div>
            <label>Kode</label>
            <input class="@error('kode') is-invalid @enderror" type="text" name="kode"
                id="kode"placeholder="Masukkan kode" value="{{ $errors->any() ? old('kode') : $kategori->kode }}">
            @error('kode')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <label>Nama Kategori</label>
        <input class="@error('nama_kategori') is-invalid @enderror" type="text" name="nama_kategori"
            id="nama_kategori" value="{{ $errors->any() ? old('nama_kategori') : $kategori->nama_kategori }}"
            placeholder="Masukkan Nama Kategori">
        @error('nama_kategori')
            <small>{{ $message }}</small>
        @enderror
        </div>
        <div>
            <button type=submit>Edit</button>
        </div>
        @vite('resources/js/app.js')

</body>

</html>
