<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "user";
$koneksi = mysqli_connect($server, $username, $password, $db);
// Pastikan urutan pemanggilan variabel nya sama.

// Untuk cek jika koneksi gagal ke database
if (mysqli_connect_errno()) {
    echo "Koneksi gagal : ".mysqli_connect_error();
}