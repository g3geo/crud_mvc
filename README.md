# Tugas 7 - Aplikasi CRUD Mahasiswa dengan PHP MVC

## Deskripsi
Aplikasi CRUD sederhana ini digunakan untuk mengelola data "mahasiswa" dengan menggunakan PHP native dan struktur MVC dasar. Aplikasi ini memungkinkan pengguna untuk menampilkan, menambah, mengedit, dan menghapus data mahasiswa.

## Setup Database

Langkah pertama adalah membuat database dan tabel yang digunakan oleh aplikasi. Jalankan perintah SQL berikut di MySQL:

```sql
CREATE DATABASE IF NOT EXISTS crud_mvc;
USE crud_mvc;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);
```

## Fitur

- **Create**: Menambahkan produk baru ke dalam database.
- **Read**: Menampilkan semua produk yang tersimpan dalam database.
- **Delete**: Menghapus produk berdasarkan ID.

## Teknologi yang Digunakan

- **PHP**: Bahasa pemrograman utama untuk aplikasi.
- **MySQL**: Sistem manajemen basis data untuk menyimpan data produk.
- **MVC**: Struktur aplikasi menggunakan pola arsitektur Model-View-Controller.
- **XAMPP**: Menggunakan Apache dan MySQL dari XAMPP untuk server lokal.
