<?php
// Koneksi ke database (sesuaikan dengan konfigurasi Anda)
include 'koneksi.php';

// Mulai session
session_start();

// Cek apakah from login sudah di submit
if (isset($_POST['submit'])) {
    # Ambil nilai email dan password dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitasi input untuk mencegah injection
    $email = mysqli_real_escape_string($koneksi, $email);
    $password = mysqli_real_escape_string($koneksi, $password);

    // Query untuk mencari user berdasarkan email
    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($koneksi, $query);
    $num = mysqli_num_rows($result);

    // Cek apakah user ditemukan
    if ($num > 0) {
        $row = mysqli_fetch_array($result);
        $userVal = $row['user_email'];
        $passVal = $row['user_password'];
        $userName = $row['user_fullname'];
        $level = $row['level'];

        // Verifikasi password
        if ($userVal == $email || $passVal == $password) {
            # Jika login berhasil, simpan data user ke session
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_name'] = $userName;
            $_SESSION['level'] = $level;

            // Redirect ke halaman home
            header("Location: home.php");
        } else {
            $error = "Username atau password salah!";
            header('Location: login.php');
        }
    } else {
        $error = 'User tidak ditemukan!';
        header('Location: login.php');
    }
}
?>

<!DOCTYPE html>
<html>
    <head><title>Halaman Login</title>
</head>
<body>
<?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>
    <form action="login.php" method="POST">
        <p>Email: <input type="text" name="email"></p>
        <p>Password: <input type="password" name="password"></p>
        <button type="submit" name="submit">Sign In</button>
    </form>
</body>
</html>