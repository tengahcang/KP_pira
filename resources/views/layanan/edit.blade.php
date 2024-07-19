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
    <form action="{{ route('adminlayanan.update', [$layanans->id]) }}" method="POST">
        @csrf
        @method('put')
        <h3>Edit Layanan</h3>
        <div>
            <label>Nama Layanan</label>
            <input class="@error('nama_layanan') is-invalid @enderror" type="text" name="nama_layanan"
                id="nama_layanan"placeholder="Masukkan Nama Layanan"
                value="{{ $errors->any() ? old('nama_layanan') : $layanans->nama_layanan }}">
            @error('nama_layanan')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label>Detail</label>
            <input class="@error('detail') is-invalid @enderror" type="text" name="detail"
                id="detail"placeholder="Masukkan Nama Layanan"
                value="{{ $errors->any() ? old('detail') : $layanans->detail }}">
            @error('detail')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label>Nama Kategori</label>
            <select name="nama_kategori" id="nama_kategori">
                @php
                    $selected = '';
                    if ($errors->any()) {
                        $selected = old('kategori');
                    } else {
                        $selected = $layanans->id_kategori;
                    }
                @endphp
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}" {{ $selected == $kategori->id ? 'selected' : '' }}>
                        {{ $kategori->kode .
                            ' -
                                                                                                                                                                                                                                                                                                                        ' .
                            $kategori->nama_kategori }}
                    </option>
                @endforeach
            </select>
            @error('kategori')
                <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>
        <div>
            <button type=submit>Edit</button>
        </div>
        @vite('resources/js/app.js')

</body>

</html>
