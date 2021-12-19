<?php 
include '../config/f_user.php';

if (isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $username = $_POST["username"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../scss/index.css">
    <title>Registrasi</title>
</head>
<body>
    <div class="container-sm">
        <form action="" method="POST">
            <h1 class="fw-light">REGISTRASI USER</h1>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="username" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
            <button type="reset" class="btn btn-danger">Clear</button>
            <a href="index.php" class="btn btn-primary">Kembali</a>
        </form>
    </div>
    


    <script src="../js/bootstrap.min.js"></script>
</body>
</html>