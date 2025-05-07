<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>

    <form action="/produk/{{ $produk->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nama" value="{{ $produk->nama }}" required>
        <input type="number" name="harga" value="{{ $produk->harga }}" required>
        <input type="number" name="stok" value="{{ $produk->stok }}" required>
        <textarea name="deskripsi">{{ $produk->deskripsi }}</textarea>
        <select name="status" required>
            <option value="1" {{ $produk->status ? 'selected' : '' }}>Aktif</option>
            <option value="0" {{ !$produk->status ? 'selected' : '' }}>Tidak Aktif</option>
        </select>
        <select name="kategori" required>
            <option value="Elektronik" {{ $produk->kategori == 'Elektronik' ? 'selected' : '' }}>Elektronik</option>
            <option value="Gadget" {{ $produk->kategori == 'Gadget' ? 'selected' : '' }}>Gadget</option>
            <option value="Aksesoris" {{ $produk->kategori == 'Aksesoris' ? 'selected' : '' }}>Aksesoris</option>
        </select>
        <button type="submit">Update</button>
    </form>

    <a href="/">Kembali</a>
</body>
</html>
