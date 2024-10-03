<?php
require ("koneksi.php");

if (isset($_POST["update"])) {
    $userId = $_POST["txt_id"];
    $userMail = $_POST["txt_email"];
    $userPass = $_POST["txt_pass"];
    $userName = $_POST["txt_nama"];

    // Query untuk update
    $query = "UPDATE user_detail SET user_password='$userPass', user_fullname='$userName' WHERE id='$userId'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: home.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
