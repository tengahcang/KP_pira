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
    <form action="{{ route('adminlaporan.update', [$laporans->id]) }}" method="POST">
        @csrf
        @method('put')
        <h3>Jawab Laporan</h3>
        <div>
            <label>No. Pelanggan</label>
            <input class="@error('no_pelanggan') is-invalid @enderror" type="text" name="no_pelanggan"
                id="no_pelanggan" value="{{ $errors->any() ? old('no_pelanggan') : $laporans->no_pelanggan }}" disabled>
            @error('no_pelanggan')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label>Masalah</label>
            <input class="@error('masalah') is-invalid @enderror" type="text" name="masalah" id="masalah"
                value="{{ $errors->any() ? old('masalah') : $laporans->masalah }}" disabled>
            @error('masalah')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label>Solusi</label>
            <input class="@error('solusi') is-invalid @enderror" type="text" name="solusi" id="solusi"
                value="{{ $errors->any() ? old('solusi') : $laporans->solusi }}">
            @error('solusi')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label>Status</label>
            <select name="nama_status" id="nama_status">
                @php
                    $selected = '';
                    if ($errors->any()) {
                        $selected = old('status');
                    } else {
                        $selected = $laporans->id_status;
                    }
                @endphp
                @foreach ($statuses as $status)
                    <option value="{{ $status->id }}" {{ $selected == $status->id ? 'selected' : '' }}>
                        {{ $status->nama_status }}
                    </option>
                @endforeach
            </select>
            @error('$status')
                <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>
        <div>
            <button type=submit>Jawab</button>
        </div>
        @vite('resources/js/app.js')

</body>

</html>
