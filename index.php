<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="scss/index.css">
    <title>Login</title>
    <style type="text/css">
        body {
            background-image: url("img/kopi2.jpg");
            background-repeat: no-repeat;
            background-size: 1520px 1080px;
            background-position: center;
            /*background-color: #00000f;*/
        }
    </style>
</head>
<body>
    <?php 
	    if(isset($_GET['pesan'])){
	    	if($_GET['pesan'] == "gagal"){
		    	echo "
                <script>
                    alert('Username Atau Password Salah');
                    document.location.href = 'index.php';
                </script>
            ";
		    }else if($_GET['pesan'] == "logout"){
		    	echo "
                <script>
                    alert('Telah Berhasil logout');
                    document.location.href = 'index.php';
                </script>
            ";
		    }
	}
	?>
    <div class="container-sm">
        <!-- scss/index.css -->
        <form action="cek_login.php" method="POST">
            <h1 style="color: white;">L O G I N</h1>
            <!-- css/bootstrap.css -->
            <div class="mb-3">
                <!-- css/bootstrap.css -->
                <label style="color: white;">Username</label>
                <!-- css/bootstrap.css -->
                <input type="username" class="form-control" name="username">
                <!-- css/bootstrap.css -->
            </div>
            <div class="mb-3">
                <label style="color: white;">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-secondary">Login</button>
            <!-- secondary warna abu, primary warna biru -->
        </form>
    </div>
    


    <script src="js/bootstrap.min.js"></script>
</body>
</html>