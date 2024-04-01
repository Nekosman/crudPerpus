<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($buku) ? 'Edit Buku' : 'Tambah Buku Baru' }}</title>
</head>
<body>
    <h1>{{ isset($buku) ? 'Edit Buku' : 'Tambah Buku Baru' }}</h1>
    <form action="{{ isset($buku) ? route('buku.update', $buku->id_buku) : route('buku.store') }}" method="POST">
        @csrf
        @if (isset($buku))
            @method('PUT')
        @endif
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" value="{{ isset($buku) ? $buku->judul : old('judul') }}">
        <br>
        <label for="pengarang">Pengarang:</label>
        <input type="text" id="pengarang" name="pengarang" value="{{ isset($buku) ? $buku->pengarang : old('pengarang') }}">
        <br>
        <label for="penerbit">Penerbit:</label>
        <input type="text" id="penerbit" name="penerbit" value="{{ isset($buku) ? $buku->penerbit : old('penerbit') }}">
        <br>
        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="text" id="tahun_terbit" name="tahun_terbit" value="{{ isset($buku) ? $buku->tahun_terbit : old('tahun_terbit') }}">
        <br>
        <label for="id_kategori">Kategori:</label>
        <select id="id_kategori" name="id_kategori">
            @foreach ($kategoris as $kategori)
                <option value="{{ $kategori->id_kategori }}" {{ isset($buku) && $buku->id_kategori == $kategori->id_kategori ? 'selected' : '' }}>{{ $kategori->nama_kategori }}</option>
            @endforeach
        </select>
        <br>
        <label for="id_peminjaman">ID Peminjaman:</label>
        <input type="text" id="id_peminjaman" name="id_peminjaman" value="{{ isset($buku) ? $buku->id_peminjaman : old('id_peminjaman') }}">
        <br>
        <button type="submit">{{ isset($buku) ? 'Update' : 'Simpan' }}</button>
    </form>
</body>
</html>
