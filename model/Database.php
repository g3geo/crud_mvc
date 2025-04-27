<?php
class Database {
    private static $host = 'localhost';
    private static $dbname = 'crud_mvc';  // Nama database
    private static $username = 'root';     // Username default XAMPP
    private static $password = '';         // Password kosong untuk XAMPP

    public static function connect() {
        try {
            $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$username, self::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
?>