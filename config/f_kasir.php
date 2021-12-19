<?php 
$conn = mysqli_connect("localhost","root","","warkop");

function query($query) {
    global $conn;
    $result = mysqli_query($conn,"SELECT * FROM kasir");
    $rows =[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;

}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM kasir WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>