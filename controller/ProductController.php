<?php
require_once 'model/Product.php';

class ProductController {
    // Menyimpan produk
    public function store() {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            Product::create($name, $price);  // Menyimpan produk ke database
        }
    }

    // Menampilkan produk
    public function index() {
        $products = Product::all();  // Mengambil semua produk dari database
        include 'view/index.php';     // Menampilkan produk di view
    }

    // Menghapus produk berdasarkan ID
    public function delete($id) {
        Product::delete($id);  // Menghapus produk berdasarkan ID
        header('Location: index.php');  // Redirect setelah menghapus
    }
}
?>
