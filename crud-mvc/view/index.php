<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD MVC - Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>
    <form action="index.php" method="POST">
        <input type="text" name="name" required placeholder="Nama Produk">
        <input type="number" name="price" required placeholder="Harga Produk" step="0.01">
        <button type="submit" name="submit">Simpan</button>
    </form>

    <h2>Daftar Produk</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['price'] ?></td>
                <td>
                    <!-- Tombol hapus -->
                    <a href="index.php?delete=<?= $product['id'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
