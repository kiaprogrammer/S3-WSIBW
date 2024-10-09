<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <title>DTS-VSGA 2021 (JWD)</title>
    </head>
    <body>

        <?php include("header.php"); ?>

        <br></br>
        <div class="container">
            <div class="col-lg-8">
                <h2><b>Tabel DTS-VSGA 2021</b></h2>
                <p>Tampil Data dari Data Base</p>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nomor</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("koneksi.php");
                                $sql = "SELECT * FROM diri";
                                $hasil = mysqli_query($conn, $sql);
                                $nomer = 1;
                                while ($row = mysqli_fetch_array($hasil, MYSQLI_ASSOC)) {
                            ?>
                            <tr>
                                <td><?php echo $nomer++; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['lahir']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['telpon']; ?></td>
                                <td><?php echo $row['alamat']; ?></td>
                                <td><?php echo $row['kelamin']; ?></td>
                                <td>
                                    <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </br></br>
    </body>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</html>
