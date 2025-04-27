<?php
require_once 'Database.php';

class Product {
    // Menampilkan semua produk
    public static function all() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Menyimpan produk ke database
    public static function create($name, $price) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO products (name, price) VALUES (?, ?)");
        $stmt->execute([$name, $price]);
    }

    // Menghapus produk berdasarkan ID
    public static function delete($id) {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM products WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>
