# Tugas 7 - Aplikasi CRUD Mahasiswa dengan PHP MVC

## Deskripsi
Aplikasi CRUD sederhana ini digunakan untuk mengelola data "mahasiswa" dengan menggunakan PHP native dan struktur MVC dasar. Aplikasi ini memungkinkan pengguna untuk menampilkan, menambah, mengedit, dan menghapus data mahasiswa.

## Setup Database

Langkah pertama adalah membuat database dan tabel yang digunakan oleh aplikasi. Jalankan perintah SQL berikut di MySQL:

```sql
CREATE SCHEMA dbmahasiswa1;
USE dbmahasiswa1;

CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    nim VARCHAR(15)
);

INSERT INTO mahasiswa (nama, nim) VALUES
('isham', '2351900111038');
