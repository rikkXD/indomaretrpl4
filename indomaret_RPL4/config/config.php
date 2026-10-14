<?php
// Konfigurasi database aplikasi.

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'indomaret_rpl4';

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}
