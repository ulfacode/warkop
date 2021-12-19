<?php 
include '../config/f_user.php';

$user = query($conn,"SELECT * FROM user");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>KASIR</title>
</head>
<style>
    .atas {
        margin: 50px;
    }
    .main {
        margin-left: 50px;
        width: 700px;
    }

    .hasil {
        margin-top: -500px;
    }
</style>
<body>
    <div class="atas">
        <p class="fs-2">ADMIN!</p>
        <acronym title ="Klik untuk kembali ke login" style="text-decoration: none;"><a href="../index.php" class="link-primary">Logout</a></acronym>
        <acronym title ="Klik untuk menambah data user" style="text-decoration: none;"><a href="registrasi.php" class="link-primary">Tambah Data</a></acronym>
        <acronym title ="Klik untuk lihat data programmer" style="text-decoration: none;"><a href="about.php" class="link-primary">About US</a></acronym>
    </div>
    <div class="main">
        <div class="table-responsive">
            <table class="table" id="tableinfo">
                <thead class="table">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php $i=1; ?>
                <?php foreach ($user as $row) : ?>
                <tbody>
                    <tr>
                        <th><?php echo $i ?></th>
                        <td><?= $row["nama"] ?></td>
                        <td><?= $row["username"] ?></td>
                        <td><?= $row["level"] ?></td>
                        <td>
                            <a href="ubah.php?username=<?=  $row["username"]; ?>">Ubah</a>
                            <a href="hapus.php?id=<?=  $row["id"]; ?>">Hapus</a>
                        </td>
                    </tr>
                </tbody>
                <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <script src="../js/bootstrap.js"></script>
</body>
</html>