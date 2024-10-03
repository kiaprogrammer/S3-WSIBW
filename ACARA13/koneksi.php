<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "user";

// Membuat koneksi ke database
$koneksi = mysqli_connect($server, $username, $password, $db);

// Cek jika koneksi gagal
if (mysqli_connect_errno()) {
    echo "Koneksi gagal: " . mysqli_connect_error();
    exit();
}
?>
