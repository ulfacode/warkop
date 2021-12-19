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
        margin-right: 50px;
    }

</style>
<body>
    <div class="atas">
        <p class="fs-2">ABOUT US!!</p>
        <a href="../index.php" class="link-primary"><acronym title="Klik untuk kembali ke login" style="text-decoration: none;">Logout</acronym></a>

        <a href="registrasi.php" class="link-primary"><acronym title ="Klik untuk menambah data user" style="text-decoration: none;">Tambah Data</acronym></a>

        <a href="index.php" class="link-primary"><acronym title ="Klik untuk melihat data user" style="text-decoration: none;">Data User</acronym></a>
    </div>
    <div class="main">
        <hr style="width: 78.5rem;">
        <div class="row">
            <div class="col-sm-6" style="width: 20rem;">
                <div class="card">
                    <div class="card-body">
                        <img src="../img/ableh.jpeg" class="card-img-top">
                        <h5 class="card-title"><strong>Radifan Nur Aflah</strong></h5>
                        <p class="card-text" style="text-align: justify;">
                            Saya Radifan Nur Aflah dari kelas TI 2C dengan NIM 190202065 saya mempunyai hobi yaitu <i>mempelajari hal baru</i> Terima Kasih!
                        </p>
                        <!-- justify kanan kiri, left kiri -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="width: 20rem;">
                <div class="card">
                    <div class="card-body">
                        <img src="../img/ulfa2.jpg" class="card-img-top">
                        <h5 class="card-title"><strong>Ulfatun Nasikhah</strong></h5>
                        <p class="card-text" style="text-align: justify;">
                        Saya Ulfatun Nasikhah dari kelas TI 2C dengan NIM 190102031 saya mempunyai hobi yaitu <em> <del>jajan</del> membaca hal menarik</em> Terima Kasih!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="width: 20rem;">
                <div class="card">
                    <div class="card-body">
                        <img src="../img/ummu.jpeg" class="card-img-top">
                        <h5 class="card-title"><strong>Ummu Habibah Nur'Aini</strong></h5>
                        <p class="card-text" style="text-align: justify;">
                        Saya Ummu Habibah Nur'Aini dari kelas TI 2C dengan NIM 190302098 saya mempunyai hobi yaitu <i>Ngemil</i>
                        Terima Kasih!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="width: 20rem;">
                <div class="card">
                    <div class="card-body">
                        <img src="../img/tri.jpeg" class="card-img-top">
                        <h5 class="card-title"><strong>Tri Mujilestari</strong></h5>
                        <p class="card-text" style="text-align: justify;">
                        Saya Tri Mujilestari dari kelas TI 2C dengan NIM 190102030 saya mempunyai hobi yaitu <i>Traveling</i>
                        Terima Kasih!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 78.5rem;">
        <br>
        <p style="text-align: left;">Kami adalah mahasiswa <b>Politeknik Negeri Cilacap</b> jurusan Teknik Informatika. Warkop ini merupakan usaha yang kami dirikan bersama dalam program <ins>PKMV</ins> <i>(Program Kreativitas Mahasiswa).</i> Visi dari warkop kami adalah menjadi warung kopi yang menawarkan :

        <?php 
            $visi = array("suasana yang <i>menyenangkan</i>","tempat nyaman dengan <em>desain milenial</em>","menu yang <i>bervariatif</i> dengan cita rasa dan kualitas kopi yang baik dan memenuhi selera pelanggan","<i>Harga</i> bersahabat dengan kantong mahasiswa")
        ?>

            <ul type="square">
                <li> <?php echo $visi[0]; ?> </li>
                <li> <?php echo $visi[1]; ?> </li>
                <li> <?php echo $visi[2]; ?> </li>
                <li> <?php echo $visi[3]; ?> </li>
            </ul></p>

        <p>Misi dari warkop kami adalah :</p>
        <ol type="1">
            <li>Mempertahankan cita rasa kopi yang sudah melegenda secara turun-temurun</li>
            <li>Meningkatkan kreativitas untuk menciptakan menu-menu baru yang lebih bervariatif untuk dapat ditawarkan dan dinikmati oleh pelanggan</li>
            <li>Menawarkan kenyamanan di dalam menikmati kopi kepada pelanggan.</li>
            <li>Menjalin hubungan yang baik kepada para pelayan untuk memberikan pelayanan yang terbaik kepada konsumen.</li>
        </ol>
        <p style="float: right;">&copy; <small>Kelompok-6</small></p>
    </div>

    <script src="../js/bootstrap.js"></script>
</body>
</html>