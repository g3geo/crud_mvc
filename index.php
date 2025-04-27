<?php
// Autoload controller dan model
require_once 'controller/ProductController.php';

$productController = new ProductController();

// Proses input produk
$productController->store();

// Jika ada permintaan untuk menghapus
if (isset($_GET['delete'])) {
    $productController->delete($_GET['delete']);  // Hapus produk berdasarkan ID
}

// Menampilkan semua produk
$productController->index();
?>
