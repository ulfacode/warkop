<?php 
session_start();

include 'config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password= '$password'");
$cek = mysqli_num_rows($login);

if($cek>0){
    $data = mysqli_fetch_assoc($login);

    if ($data['level']=='admin') {
        $_SESSION['username']=$username;
        $_SESSION['level']=="admin";
        header("location:admin/index.php");
    }
    else if ($data['level']=='user'){
        $_SESSION['username']=$username;
        $_SESSION['level']=="user";
        header("location:kasir/index.php");
    }

    else{
        header("location:index.php?pesan=gagal");
    }
}

else {
    header("location:index.php?pesan=gagal");
}
