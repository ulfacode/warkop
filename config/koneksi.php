<?php 
$conn = mysqli_connect("localhost","root","","warkop");

if (mysqli_connect_error()){
    echo "Koneksi Database Gagal" .  mysqli_connect_error();
}
?>