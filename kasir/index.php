<?php 
include '../config/koneksi.php';

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
        width: 500px;
    }

    .hasil {
        margin-top: -500px;
    }
</style>
<body>
    <div class="atas">
        <p class="fs-2">KASIR!</p>
        <acronym title ="Klik untuk kembali ke login" style="text-decoration: none;"><a href="../index.php" class="link-primary">Logout</a></acronym>
        <acronym title ="Klik untuk lihat menu terjual" style="text-decoration: none;"><a href="rekap.php" class="link-primary">Rekap Penjualan</a></acronym>
        <acronym title ="Klik untuk lihat data programmer" style="text-decoration: none;"><a href="about.php" class="link-primary">About US</a></acronym>
    </div>
    <div class="main">
        <form action="cetak.php" method="post">
            <div class="mb-3">
                <label class="form-label">Jumlah</label>
                <input type="text" class="form-control" name="jumlah">
            </div>
            <div>
                <label class="form-label">Menu</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="menu">
                    <option selected>Open this select menu</option>
                    <option value="Latte">Latte</option>
                    <option value="Caramel Machiato">Caramel Machiato</option>
                    <option value="V60">V60</option>
                    <option value="Kopi Susu">Kopi Susu</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">harga</label>
                <input type="text" class="form-control" name="harga">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Enter</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </form>
    </div>



    <script src="../js/bootstrap.js"></script>
</body>
</html>