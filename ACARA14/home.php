<?php
require('koneksi.php');
require('query.php');

if (isset($_GET['user_email'])) {
    $email = $_GET['user_email'];
} else {
    // Penanganan default jika 'user_email' tidak ada di query string
    $email = '';
}

$obj = new crud;

// Ambil nama pengguna berdasarkan email dari database
$user_fullname = '';
if (!empty($email)) {
    $query = $obj->lihatData($email); // Asumsikan Anda memiliki fungsi ini di dalam kelas `crud`
    if ($query->rowCount() > 0) {
        $row = $query->fetch(PDO::FETCH_ASSOC);
        $user_fullname = $row['user_fullname'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 50px;
        }
        .table {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Selamat Datang <?php echo htmlspecialchars($user_fullname); ?></h1>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>NO</th>
                    <th>EMAIL</th>
                    <th>NAMA</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
<?php
$data = $obj->lihatData();
$no = 1;
if ($data->rowCount() > 0) {
    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo htmlspecialchars($row['user_email']); ?></td>
                    <td><?php echo htmlspecialchars($row['user_fullname']); ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
<?php
        $no++;
    }
}
?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
