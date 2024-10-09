<?php
require ("koneksi.php");

if (isset($_POST["update"])) {
    $id = $_POST["txt_id"];
    $email = $_POST["txt_email"];
    $pass = $_POST["txt_pass"];
    $name = $_POST["txt_nama"];

    // Query untuk update
    $query = "UPDATE user_detail SET user_password='$pass', user_fullname='$name' WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: home.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
