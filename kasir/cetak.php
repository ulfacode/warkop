<?php 
include '../config/koneksi.php';

$menu = $_POST["menu"];
$jumlah = $_POST["jumlah"];
$harga = $_POST["harga"];
$total = $jumlah * $harga;

$query = "INSERT INTO kasir VALUES ('','$menu','$harga','$jumlah','$total') ";

mysqli_query($conn, $query);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>CETAK</title>
</head>
<style>
    .main p {
        margin: 50px;
    }
</style>
<body>
    <div class="main">
        <p class="fs-2">Struk Belanja</p>
        <div class="card position-absolute top-50 start-50 translate-middle" style="width: 50rem;">
            <div class="card-body">
                <h5 class="card-title">STRUK BELANJA!</h5>
                <h6 class="card-subtitle mb-2 text-muted">Warung Kopi</h6>
                <p class="card-text">Menu : <?php echo $menu ?>
                    <br> Harga : <?php echo $harga ?> <br>
                    Jumlah : <?php echo $jumlah ?>
                    <br> ----------------------------- + <br>
                    Total : <?php echo $total ?>
                </p>
                <a href="index.php" class="card-link">OK    </a>
                <a href="#" class="card-link" onclick="window.print()">Print</a>
            </div>
        </div>
    </div>


    <script src="../js/bootstrap.js"></script>
</body>
</html>