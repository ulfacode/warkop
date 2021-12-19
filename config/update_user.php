<?php 
include 'koneksi.php';

$id = $_POST["id"];
$nama = $_POST["nama"];
$username = $_POST["username"];
$password = $_POST["password"];
$level = $_POST["level"];

$sql = "UPDATE user SET username='$username',password='$password',level='$level',nama='$nama' WHERE username='$username'";


if (mysqli_query($conn,$sql) == true) {
    echo "
            <script>
                alert('Data Berhasil Diupdate!');
                document.location.href = '../admin/index.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Data Gagal Diupdate!');
                document.location.href = '../admin/index.php';
            </script>
        ";
}


?>