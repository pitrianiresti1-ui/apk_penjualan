<?php
$host = 'localhost';
$user = "root";        // default LARAGON/XAMPP adalah root
$password = "";        // default Laragon/XAMPP adalah kosong
$database = "db_penjualan"; // sesuaikan dengan nama database Anda

// membuat koneksi menggunakan nama variabel $koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// mengecek koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>