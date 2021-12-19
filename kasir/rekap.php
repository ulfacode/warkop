<?php 
include '../config/f_kasir.php';

$kasir = query($conn,"SELECT * FROM kasir");

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
        <p class="fs-2">Rekap Penjualan!</p>
        <acronym title ="Klik untuk kembali ke login" style="text-decoration: none;"><a href="../index.php" class="link-primary">Logout</a></acronym>
        <acronym title ="Klik untuk kembali ke kasir" style="text-decoration: none;"><a href="index.php" class="link-primary">Kasir</a></acronym>
        <acronym title ="Klik untuk lihat data programmer" style="text-decoration: none;"><a href="about.php" class="link-primary">About US</a></acronym>
    </div>
    <div class="main">
        <div class="table-responsive">
            <table class="table" id="tableinfo">
                <thead class="table">
                    <tr>
                        <th>No</th>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php $i=1; ?>
                <?php foreach ($kasir as $row) : ?>
                <tbody>
                    <tr>
                        <th><?php echo $i ?></th>
                        <td><?= $row["menu"] ?></td>
                        <td>Rp. <?= $row["harga"] ?></td>
                        <td><?= $row["jumlah"] ?></td>
                        <td><?= $row["total"] ?></td>
                        <td>
                            <a href="hapus.php?id=<?=  $row["id"]; ?>" class="link-primary">Hapus</a>
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