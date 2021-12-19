<?php 
$conn = mysqli_connect("localhost","root","","warkop");

function query($query) {
    global $conn;
    $result = mysqli_query($conn,"SELECT * FROM user");
    $rows =[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;

}

function tambah($data){
    global $conn;
    $nama = $data ["nama"];
    $username = $data ["username"];
    $password = $data ["password"];
    $level = $data ["level"];

    $query = "INSERT INTO user VALUES ('','$username','$password','$nama','$level')";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function update($data){
    global $conn;
    $id = $data["id"];
    $nama = $data ["nama"];
    $username = $data ["username"];
    $password = $data ["password"];
    $level = $data ["level"];

    $query = "UPDATE user SET
            username = '$username',
            password = '$password',
            nama = '$nama',
            level = '$level'
            WHERE id = '$id'
            ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

?>