<?php 

include '../config/f_kasir.php';

$id = $_GET["id"];

if (hapus($id) > 0 ) {
    echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'rekap.php';
            </script>
        ";
}
else {
    echo "
            <script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'rekap.php';
            </script>
        ";
}

?>