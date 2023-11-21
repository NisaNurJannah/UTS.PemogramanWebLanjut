<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk Baru - Admin</title>
</head>
<style>
       /* Reset beberapa default styling */
       body,
    html {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif; /* Ganti font default jika diperlukan */
      background-color: #6495ED; /* Warna latar belakang */
    }

    /* Menata judul h1 */
    h1 {
      text-align: center;
      margin-top: 20px;
      color: #333; /* Ubah warna teks judul */
    }

    /* Menata label dan input */
    form {
      width: 50%;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #F0FFFF; /* Tambahkan latar belakang */
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      color: #555; /* Ubah warna teks label */
    }

    input[type="text"],
    input[type="number"],
    textarea {
      width: calc(100% - 16px);
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box; /* Tambahkan untuk memperbaiki ukuran input */
      font-size: 16px; /* Ubah ukuran font input */
    }

    textarea {
      height: 100px;
    }

    /* Menata tombol */
    button {
      padding: 12px 24px;
      border: none;
      border-radius: 3px;
      background-color: #007bff;
      color: white;
      cursor: pointer;
      transition: background-color 0.3s ease;
      font-size: 16px; /* Ubah ukuran font tombol */
    }

    button:hover {
      background-color: #0056b3; /* Ubah warna saat hover */
      opacity: 0.8;
    }

    /* Style untuk placeholder pada input */
    input[type="text"]::placeholder,
    input[type="number"]::placeholder,
    textarea::placeholder {
      color: #999; /* Warna placeholder */
    }
    </style>
<body>
    <h1>Tambah Produk Baru</h1>

    <form action="{{ route('admin.products.store') }}" method="post">
        @csrf

        <label for="nama">Nama Produk:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi" required></textarea><br><br>

        <label for="harga">Harga:</label><br>
        <input type="number" id="harga" name="harga" required><br><br>

        <button type="submit">Simpan Produk</button>
    </form>
</body>
</html>
