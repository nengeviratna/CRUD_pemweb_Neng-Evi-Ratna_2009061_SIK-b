<?php
    include("koneksi.php");

    $id_identity = $_POST['id_identity'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $id_user = $_POST['id_user'];


    $query = "insert into identity values ('$id_identity', '$nama', '$tgl_lahir', '$alamat', '$no_telepon', '$email', $id_user) ";

    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    } else{
        header("Location: edit.php?id_identity=$id_identity");
    }
?>