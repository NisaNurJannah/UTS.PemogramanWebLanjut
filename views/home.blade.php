<!DOCTYPE html>
<html>
<head>
<title>Flower Shop - Home</title>
    <style>
    header {
    background-color: #8A2BE2;
    color: #fff;
    text-align: center;
    padding: 60px 0;
}

header h1 {
    font-size: 3em;
    margin-bottom: 15px;
}

header p {
    font-size: 1.2em;
    margin-bottom: 30px;
}

header a {
    display: inline-block;
    padding: 12px 24px;
    text-decoration: none;
    color: #fff;
    background-color: #ea5f5f;
    border-radius: 25px;
    transition: background-color 0.3s ease;
}

header a:hover {
    background-color: #c53d3d;
}

/* Gaya produk */
.product img {
    max-width: 100%; /* agar gambar responsif */
    height: auto;
    margin-bottom: 20px;
    border-radius: 8px;
}

/* Gaya footer */
footer {
    text-align: center;
    background-color: #5eaaa8;
    color: #fff;
    padding: 20px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}
    </style>
<body>
    <header>
    <header>
    <h1>Selamat Datang di FLORISTS</h1>
    <p>Dapatkan keindahan alami dengan koleksi bunga segar kami untuk setiap momen istimewa dalam hidup Anda.</p>
    <a href="{{ route('products') }}">Jelajahi Koleksi Bunga Kami</a>
</header>

    </header>

    <main>
        <section class="featured-products">
            <h2>Produk Unggulan</h2>
            <!-- Tampilkan beberapa produk unggulan di sini -->
            <div class="product">
                <h3>Nama Produk</h3>
                <img src="https://th.bing.com/th/id/OIP.4CqB6FN9iUCW7zkZTulz6AHaFj?w=212&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7.jpg" alt="DAHLIA">
                <p>Deskripsi produk...</p>
                <p>Harga: $250.000</p>
                <a href="{{ route('products') }}">Lihat Detail</a>
            </div>
            <!-- Tambahkan produk lainnya jika diperlukan -->
        </section>

        <section class="about-us">
        <section class="about-us">
            <h2>Tentang Kami</h2>
            <p>Kami adalah HOME FLORISTS, komunitas pecinta bunga yang berdedikasi untuk memberikan keindahan alami ke dalam kehidupan Anda. Kami tidak hanya menyediakan bunga berkualitas tinggi, tetapi juga cerita dari setiap rangkaian bunga yang kami ciptakan.</p>
            <p>Dengan pengalaman kami yang kaya, kami mampu menyesuaikan setiap buket untuk memenuhi kebutuhan acara spesial Anda. Setiap bunga yang kami tawarkan tidak hanya sebagai hiasan, tetapi sebagai pengantar pesan cinta, kebahagiaan, dan keceriaan.</p>
        </section>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Flower Shop - Hak Cipta Dilindungi</p>
    </footer>
</body>
</html>
