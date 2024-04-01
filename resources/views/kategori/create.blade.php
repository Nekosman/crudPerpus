<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($kategori) ? 'Edit Kategori' : 'Tambah Kategori Baru' }}</title>
</head>
<body>
    <h1>{{ isset($kategori) ? 'Edit Kategori' : 'Tambah Kategori Baru' }}</h1>
    <form action="{{ isset($kategori) ? route('kategori.update', $kategori->id_kategori) : route('kategori.store') }}" method="POST">
        @csrf
        @if (isset($kategori))
            @method('PUT')
        @endif
        <label for="nama_kategori">Nama Kategori:</label>
        <input type="text" id="nama_kategori" name="nama_kategori" value="{{ isset($kategori) ? $kategori->nama_kategori : old('nama_kategori') }}">
        <br>
        <label for="deskripsi">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi">{{ isset($kategori) ? $kategori->deskripsi : old('deskripsi') }}</textarea>
        <br>
        <button type="submit">{{ isset($kategori) ? 'Update' : 'Simpan' }}</button>
    </form>
</body>
</html>