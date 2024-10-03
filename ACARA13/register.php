<?php
require("koneksi.php");

if (isset($_POST["register"])) {
    $userMail = $_POST["txt_email"];
    $userPass = $_POST["txt_pass"];
    $userName = $_POST["txt_nama"];

    // Query untuk menambahkan data pengguna baru ke dalam database
    $query = "INSERT INTO user_detail VALUES ('', '$userMail', '$userPass', '$userName', 2)";
    $result = mysqli_query($koneksi, $query);

    // Setelah berhasil register, redirect ke halaman login
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Menghubungkan file CSS eksternal -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="register-box shadow-lg">
            <h2 class="text-center mb-4">Register</h2>
            <!-- Form register -->
            <form action="register.php" method="POST">
                <div class="user-box">
                    <input type="email" name="txt_email" id="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="user-box">
                    <input type="password" name="txt_pass" id="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="user-box">
                    <input type="text" name="txt_nama" id="name" required>
                    <label for="name">Nama</label>
                </div>
                <button type="submit" name="register" class="btn">Register</button>
            </form>
            <p class="text-center mt-3">Sudah punya akun? <a href="login.php">Login di sini</a></p>

            <!-- Tombol untuk kembali ke halaman sebelumnya -->
            <a href="javascript:void(0)" onclick="history.back()" class="btn btn-back">Kembali</a>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


