<?php
// Memulai sesi
session_start();

// Memanggil file koneksi database
require('koneksi.php');

// Mengecek apakah form sudah disubmit
if (isset($_POST['submit'])) {
    // Mengambil input dari form dan membersihkan spasi ekstra
    $userMail = trim($_POST['txt_email']);
    $userPass = trim($_POST['txt_pass']);

    // Memastikan email dan password tidak kosong
    if (!empty(trim($userMail)) && !empty(trim($userPass))) {

        // Menggunakan prepared statement untuk mencegah SQL Injection
        $query = "SELECT * FROM user_detail WHERE user_email = ?";
        $stmt = mysqli_prepare($koneksi, $query);
        mysqli_stmt_bind_param($stmt, "s", $userMail);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $num = mysqli_num_rows($result);

        // Jika data ditemukan
        if ($num > 0) {
            $row = mysqli_fetch_array($result);
            $userVal = $row["user_email"];
            $passVal = $row["user_password"]; // Password disimpan dalam bentuk teks biasa di database
            $userFullname = $row["user_fullname"]; // Mengambil user_fullname dari database

            // Verifikasi apakah email dan password yang dimasukkan sesuai
            if ($userVal == $userMail && $passVal == $userPass) {
                // Set session untuk user_email dan user_fullname
                $_SESSION['user'] = $userVal;
                $_SESSION['user_fullname'] = $userFullname; // Menyimpan user_fullname dalam session

                // Redirect ke halaman home
                header("Location: home.php");
                exit(); // Menghentikan script setelah redirection
            } else {
                // Jika password salah
                $error = "Email atau password salah!";
                header("Location: login.php?error=" . urlencode($error));
                exit();
            }
        } else {
            // Jika user tidak ditemukan
            $error = "User tidak ditemukan!";
            header("Location: login.php?error=" . urlencode($error));
            exit();
        }
    } else {
        // Jika data input kosong
        $error = "Data tidak boleh kosong!";
        header("Location: login.php?error=" . urlencode($error));
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet"> 
    
    <!-- Internal CSS -->
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Import Google font */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(120deg, #2980b9, #8e44ad); /* Gradient background */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Container for the login box */
        .container {
            width: 100%;
            max-width: 400px;
            padding: 0 15px;
        }

        /* Login box styling */
        .login-box {
            background-color: rgba(255, 255, 255, 0.1); /* Transparent box */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(10px);
            text-align: center;
        }

        /* Heading inside login box */
        .login-box h2 {
            margin-bottom: 20px;
            font-size: 2em;
            color: #fff;
        }

        /* User input fields styling */
        .user-box {
            position: relative;
            margin-bottom: 30px;
        }

        .user-box input {
            width: 100%;
            padding: 10px 0;
            background: none;
            border: none;
            border-bottom: 2px solid #fff;
            outline: none;
            color: #fff;
            font-size: 1em;
        }

        .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 1em;
            color: #fff;
            pointer-events: none;
            transition: 0.5s;
        }

        /* Animation for input label */
        .user-box input:focus ~ label,
        .user-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 0.75em;
        }

        /* Error message style */
        .error-message {
            color: #ff4d4d;
            margin-bottom: 15px;
            font-size: 0.9em;
        }

        /* Button styling */
        .btn {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            color: #03e9f4;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-decoration: none;
            overflow: hidden;
            transition: 0.5s;
            border-radius: 5px;
            border: 1px solid #03e9f4;
            background-color: transparent;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #03e9f4;
            color: #fff;
        }

        /* Hover effect with animation */
        .btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 300%;
            height: 300%;
            background: radial-gradient(circle, transparent 20%, rgba(3, 233, 244, 0.3) 20%, rgba(3, 233, 244, 0.3) 80%, transparent 80%);
            transition: left 0.5s;
        }

        .btn:hover:before {
            left: 100%;
        }

        /* Button for register */
        .btn-register {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            font-size: 14px;
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            
            <!-- Menampilkan pesan error jika ada -->
            <?php
            if (isset($_GET['error'])) {
                echo "<div class='error-message'>" . htmlspecialchars($_GET['error']) . "</div>";
            }
            ?>

            <!-- Form login -->
            <form action="login.php" method="POST">
                <div class="user-box">
                    <input type="text" id="txt_email" name="txt_email" required>
                    <label for="txt_email">Email</label>
                </div>
                <div class="user-box">
                    <input type="password" id="txt_pass" name="txt_pass" required>
                    <label for="txt_pass">Password</label>
                </div>
                <button type="submit" name="submit" class="btn">Sign In</button>
            </form>
            
            <!-- Link ke halaman register -->
            <p class="btn-register">Don't have an account? <a href="register.php">Sign up here</a></p>
        </div>
    </div>

</body>
</html>
