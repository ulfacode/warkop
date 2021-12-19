<?php 
include '../config/f_user.php';

if ( isset($_POST["submit"])){
    if (tambah($_POST) > 0){
        echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }
    else {
        echo "
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'registrasi.php';
            </script>
        ";
    }
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
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div>
                <label class="form-label">Level User</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="level">
                    <option selected>Open this select menu</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </form>
    </div>
    


    <script src="../js/bootstrap.min.js"></script>
</body>
</html>