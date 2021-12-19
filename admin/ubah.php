<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../scss/index.css">
    <title>Update Data</title>
</head>
<body>
    <?php 
    include '../config/koneksi.php';

    $username = $_GET["username"];
    $data = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
    while($user = mysqli_fetch_array($data)){

    ?>
    <div class="container-sm">
        <form action="../config/update_user.php" method="POST">
            <h1 class="fw-light">UPDATE USER</h1>
            <input type="hidden" name="id" value="<?= $id["id"]?>">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $user["nama"] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username" value="<?= $user["username"] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="<?= $user["password"] ?>" >
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
            <a href="index.php" class="btn btn-primary">Kembali</a>
        </form>
    </div>
    <?php 
    }
    ?>
    


    <script src="../js/bootstrap.min.js"></script>
</body>
</html>