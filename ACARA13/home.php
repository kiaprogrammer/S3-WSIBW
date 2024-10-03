<?php
// Menghubungkan ke file koneksi database
require("koneksi.php");
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['user'])) {
    header("Location: login.php"); // Jika belum login, redirect ke halaman login
    exit();
}

// Mengambil nilai 'user_fullname' dari session yang sudah diset di login.php
$user_fullname = $_SESSION['user_fullname']; // Mengambil nama lengkap dari session

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <!-- Menyertakan CSS Bootstrap 5 dari CDN untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
        }
        .welcome-message {
            background-color: #007bff;
            color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table-container {
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .logout-button {
            margin-top: 20px;
            display: flex;
            justify-content: flex-end;
        }
        .btn-custom {
            background-color: #17a2b8;
            color: #fff;
            border-radius: 50px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #138496;
        }
        .btn-danger {
            border-radius: 50px;
        }
        .table tr:hover {
            background-color: #f1f1f1;
            transition: background-color 0.3s ease;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Menampilkan pesan selamat datang dengan nama pengguna -->
        <div class="welcome-message text-center">
            <h1>Welcome, <?php echo htmlspecialchars($user_fullname); ?>!</h1>
        </div>

        <!-- Tabel pengguna -->
        <div class="table-container mt-4">
            <table class="table table-bordered table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Mengambil data dari tabel user_detail
                    $query = "SELECT * FROM user_detail";
                    $result = mysqli_query($koneksi, $query);
                    $no = 1;

                    // Menampilkan data setiap baris
                    while ($row = mysqli_fetch_assoc($result)) {
                        $userMail = $row["user_email"] ?? "Email tidak tersedia";
                        $userName = $row["user_fullname"] ?? "Nama tidak tersedia";
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo htmlspecialchars($userMail); ?></td>
                        <td><?php echo htmlspecialchars($userName); ?></td>
                        <td>
                            <!-- Tombol edit -->
                            <button class="btn btn-warning btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#editModal"
                                    data-id="<?php echo $row['id']; ?>"
                                    data-email="<?php echo $userMail; ?>"
                                    data-nama="<?php echo $userName; ?>"
                                    data-password="<?php echo $row['user_password']; ?>">
                                Edit
                            </button>
                            <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm rounded-pill">Hapus</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>
            </table>
        </div>

        <!-- Tombol logout -->
        <div class="logout-button">
            <a href="logout.php" class="btn btn-danger rounded-pill">Logout</a>
        </div>
    </div>

    <!-- Modal Edit User -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form untuk edit data -->
                    <form action="edit.php" method="post">
                        <input type="hidden" id="txt_id" name="txt_id" value="">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="txt_email" name="txt_email" value="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="txt_pass" name="txt_pass" value="">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="txt_nama" name="txt_nama" value="">
                        </div>
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Menyertakan JavaScript jQuery dan Bootstrap dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        // Script untuk mengisi data ke dalam modal ketika tombol "Edit" ditekan
        var editModal = document.getElementById('editModal');
        editModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; // Tombol yang men-trigger modal
            var id = button.getAttribute('data-id');
            var email = button.getAttribute('data-email');
            var nama = button.getAttribute('data-nama');
            var password = button.getAttribute('data-password');

            // Isi field dalam modal dengan data yang diperoleh
            var modalId = editModal.querySelector('#txt_id');
            var modalEmail = editModal.querySelector('#txt_email');
            var modalNama = editModal.querySelector('#txt_nama');
            var modalPassword = editModal.querySelector('#txt_pass');

            modalId.value = id;
            modalEmail.value = email;
            modalNama.value = nama;
            modalPassword.value = password;
        });
    </script>
</body>
</html>

