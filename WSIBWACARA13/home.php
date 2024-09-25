<?php
// Pastikan session sudah dimulai
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
}

// Koneksi ke database
include 'koneksi.php';

// Ambil data user berdasarkan ID session
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM user WHERE user_id = '$user_id'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

// Tampilkan halaman home dengan data user
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Home</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $row['user_fullname']; ?>!</h1>
    <p>Anda berhasil login sebagai user dengan level: <?php echo $row['level']; ?></p>

    <p>Ini adalah halaman home yang hanya dapat diakses oleh user yang sudah login.</p>
    <p>Di sini Anda bisa melihat informasi profil Anda, mengedit profil, dan melakukan aktivitas lainnya.</p>

    <a href="logout.php">Logout</a>
</body>
</html>