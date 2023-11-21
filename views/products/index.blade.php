<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<style>
/* Reset beberapa default styling */
body,
html {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif; /* Ganti font default jika diperlukan */
  background-color: #f5f5f5; /* Warna latar belakang */
}

/* Menata judul h1 */
h1 {
  text-align: center;
  margin-top: 20px;
  color: #333; /* Ubah warna teks judul */
}

/* Menata link buat produk */
a {
  display: block;
  width: fit-content;
  margin: 20px auto;
  padding: 10px 20px;
  text-decoration: none;
  background-color: #007bff;
  color: white;
  border-radius: 5px;
  text-align: center;
  transition: background-color 0.3s ease;
}

a:hover {
  background-color: #0056b3; /* Ubah warna saat hover */
}

/* Menata tabel */
table {
  width: 80%;
  margin: 0 auto;
  border-collapse: collapse;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  background-color: #fff;
}

thead {
  background-color: #007bff;
  color: white;
}

th, td {
  padding: 12px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

/* Menata tombol Edit dan Hapus */
td a, td form {
  display: inline-block;
  margin-right: 5px;
  text-decoration: none;
}

td form button {
  padding: 8px 12px;
  border: none;
  border-radius: 3px;
  background-color: #dc3545;
  color: white;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

td form button:hover {
  background-color: #c82333; /* Ubah warna saat hover */
}

</style>
<body>
    <h1>Daftar Produk</h1>

    <a href="{{ route('admin.products.create') }}">Buat Produk</a>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->nama }}</td>
                <td>{{ $product->deskripsi }}</td>
                <td>{{ $product->harga }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
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
