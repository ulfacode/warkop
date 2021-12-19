<?php 
session_start();
include 'config/koneksi.php';

$menu = $_POST["menu"];
$jumlah = $_POST["jumlah"];
$harga = $_POST["harga"];
$total = $_POST["jumlah"] * $_POST["harga"];

$tambah = mysqli_query($conn,"INSERT INTO kasir VALUES ('','$menu','$harga','$jumlah','$total')");
$p = mysqli_num_rows($tambah);

if ($p > 0) {
    $data = mysqli_fetch_assoc($tambah);
    $_SESSION["menu"]=$menu;
    $_SESSION["jumlah"]=$jumlah;
    $_SESSION["harga"]=$harga;
    $_SESSION["total"]=$total;

    header("location:cetak.php");

}

else {
    echo "
    <script>
    alert('Gagal untuk cetak!')
    </script>
    ";
    header("location:index.php");
}

?>